<?php
class Captcha_model extends Model
{
  private $vals = array();

  private $baseUrl  = 'http://localhost/ptnn/';
  private $basePath = 'C:/xampp/htdocs/ptnn/';

  private $captchaImagePath = 'captcha/';
  private $captchaImageUrl  = 'captcha/';
  private $captchaFontPath  = 'c:/windows/fonts/verdana.ttf';

  public function __construct($configVal = array())
  {
    parent::Model();

    $this->load->plugin('captcha');

    if(!empty($config))
      $this->initialize($configVal);
    else
      $this->vals = array(
                 'word'          => '',
                 'word_length'   => 6,
                 'img_path'      => $this->basePath
                                 .  $this->captchaImagePath,
                 'img_url'       => $this->baseUrl
                                 .  $this->captchaImageUrl,
                 'font_path'     => $this->captchaFontPath,
                 'img_width'     => '150',
                 'img_height'    => 50,
                 'expiration'    => 3600
               );
  }

  /**
   * initializes the variables
   * @access    public
   * @param     array     config
   */
  public function initialize ($configVal = array())
  {
    $this->vals = $configVal;
  } //end function initialize

  //---------------------------------------------------------------

  /**
   * generate the captcha
   *
   * @return     array
   */
  public function generateCaptcha ()
  {
    $cap = create_captcha($this->vals);

    return $cap;
  } //end function generateCaptcha
}
?> 