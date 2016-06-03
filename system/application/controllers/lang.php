<?php
class Lang extends Controller {

    function  Lang()
    {
        parent::Controller();
    }

    function index()
    {
        redirect('lang/select/english');
    }

    function select($lang)
    {
        $this->session->set_userdata('lang', $lang);
        redirect('page');
    }

}