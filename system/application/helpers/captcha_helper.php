<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

function create_captcha($aCfg) {
    // check, whether we do have a config-array given
    if (!is_array($aCfg)) {
        // no config given!
        return FALSE;
    }

    if (!isset($aCfg['img_path']) OR $aCfg['img_path'] == '' OR !isset($aCfg['img_url']) OR $aCfg['img_url'] == '') {
        return FALSE;
    }

    if (!@is_dir($aCfg['img_path'])) {
        return FALSE;
    }

    if (!is_writable($aCfg['img_path'])) {
        return FALSE;
    }

    if (!extension_loaded('gd')) {
        return FALSE;
    }

    // the length of the word
    if (!isset($aCfg['length']) OR $aCfg['length'] == '')
        $aCfg['length'] = 5;

    // Do we have a "word" yet?
    if (!isset($aCfg['word']) OR $aCfg['word'] == '') {
        $pool = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $str = '';
        for ($i = 0; $i < $aCfg['length']; $i++) {
            $str .= substr($pool, mt_rand(0, strlen($pool) - 1), 1);
        }
        $aCfg['word'] = $str;
    }

    // where to find the fonts
    if (!isset($aCfg['font_path']) OR $aCfg['font_path'] == '')
        $aCfg['font_path'] = './system/fonts/';

    // what fonts to use in captcha image
    if (!isset($aCfg['fonts']) OR !is_array($aCfg['fonts']) OR $aCfg['fonts'] == '')
        $aCfg['fonts'] = array('texb.ttf');

    // fontsize in PT
    if (!isset($aCfg['font_size']) OR $aCfg['font_size'] == '')
        $aCfg['font_size'] = 18;

    // width if the image in PX
    if (!isset($aCfg['img_width']) OR $aCfg['img_width'] == '')
        $aCfg['img_width'] = 170;

    // height of the image in PX
    if (!isset($aCfg['img_heigtht']) OR $aCfg['img_height'] == '')
        $aCfg['img_height'] = 60;

    if (!isset($aCfg['expiration']) OR $aCfg['expiration'] == '')
        $aCfg['expiration'] = 7200;

    // Set the enviroment variable for GD
    putenv('GDFONTPATH=' . realpath('.'));


    // Remove old images
    list($usec, $sec) = explode(" ", microtime());
    $now = ((float) $usec + (float) $sec);
    $current_dir = @opendir($aCfg['img_path']);
    while ($filename = @readdir($current_dir)) {
        if ($filename != "." and $filename != ".." and $filename != "index.html") {
            $name = str_replace(".jpg", "", $filename);

            if (($name + $aCfg['expiration']) < $now) {
                @unlink($aCfg['img_path'] . $filename);
            }
        }
    }
    @closedir($current_dir);



    // create a empty image
    $img = imagecreatetruecolor($aCfg['img_width'], $aCfg['img_height']);

    // get a random color
    $col = imagecolorallocate($img, rand(200, 255), rand(200, 255), rand(200, 255));

    // fill this image with the random color
    imagefill($img, 0, 0, $col);


    //  Create the spiral pattern
    $x_axis = rand(6, (360 / $aCfg['length']) - 16);
    $y_axis = rand(6, $aCfg['img_height']);
    $grid_color = imagecolorallocate($img, 255, 182, 182);
    $theta = 1;
    $thetac = 7;
    $radius = 20;
    $circles = 17;
    $points = 20;
    for ($i = 0; $i < ($circles * $points) - 1; $i++) {
        $theta = $theta + $thetac;
        $rad = $radius * ($i / $points );
        $x = ($rad * cos($theta)) + $x_axis;
        $y = ($rad * sin($theta)) + $y_axis;
        $theta = $theta + $thetac;
        $rad1 = $radius * (($i + 1) / $points);
        $x1 = ($rad1 * cos($theta)) + $x_axis;
        $y1 = ($rad1 * sin($theta)) + $y_axis;
        imageline($img, $x, $y, $x1, $y1, $grid_color);
        $theta = $theta - $thetac;
    }


    // the x-coordinate of the first char
    $x = 10;

    // draw the chars
    for ($i = 0; $i < $aCfg['length']; $i++) {
        // get the current processed char from the word
        $chr = substr($aCfg['word'], $i, 1);

        // get a random color
        $col = imagecolorallocate($img, rand(0, 199), rand(0, 199), rand(0, 199));

        // get a random font from the list
        $font = $aCfg['fonts'][rand(0, count($aCfg['fonts']) - 1)];
        $font = $aCfg['font_path'] . $font;

        // set the y-coordinate plus a random-value
        $y = 25 + rand(0, 20);

        // get a random angle between 0 and 30 degrees
        $angle = rand(0, 30);

        // check whether to use the current font or not...
        $use_font = ($font != '' AND file_exists($font) AND function_exists('imagettftext')) ? TRUE : FALSE;

        if ($use_font == FALSE) {
            // draw a normal character to the image, not using TTF
            imagestring($img, $aCfg['font_size'], $x, $y, $chr, $col);

            $x += 20;
        } else {
            // draw the char with the color and angle into the image , using a font
            imagettftext($img, $aCfg['font_size'], $angle, $x, $y, $col, $font, $chr);

            // calculate the dimensions of the char
            $dim = @imagettfbbox($aCfg['font_size'], $angle, $font, $chr);

            // set the new x-coordinate to the calculated width of the chars + a value
            $x += $dim[4] + abs($dim[6]) + 10;
        }
    }

    //  Create the border
    $border_color = imagecolorallocate($img, 153, 102, 102);
    imagerectangle($img, 0, 0, $aCfg['img_width'] - 1, $aCfg['img_height'] - 1, $border_color);

    //  Generate the image
    $img_name = $now . '.jpg';
    ImageJPEG($img, $aCfg['img_path'] . $img_name);

    $imgHtml = "<img src=\"" . $aCfg['img_url'] . $img_name . "\" width=\"" . $aCfg['img_width'] . "\" height=\"" . $aCfg['img_height'] . "\" style=\"border:0;\" alt=\" \" />";

    ImageDestroy($img);

    return array('word' => $aCfg['word'], 'time' => $now, 'image' => $imgHtml);
}

?>
