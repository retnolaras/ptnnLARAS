<?php
class Page extends Controller {

    function Page()
    {
        parent::Controller();
        $this->load->model('Artikel_model', 'artikel');
        $this->load->model('Menu', 'menu');
        $this->load->model('Menu_sidebar');
		$this->session->set_userdata( array('activeTab'=>'home') );
    }

    function index()
    {
        $id=1;
        $this->load->model('Slider_model');
        $data = new stdClass();
        $data->slider = $this->Slider_model->get_slider();
        
	$bc = array(
               'title' => 'Home',
               'url' => 'home',
               'isRoot' => true
        );
		$this->breadcrumb->setBreadCrumb($bc);		
        $this->artikel->plus_counter();
        $data->counter = $this->artikel->get_counter();
        $artikel = $this->artikel->get_artikel($id);
        $data->title = $artikel->title;
		$data->breadcrumbs = $this->breadcrumblist->display();
        $data->isi = $artikel->isi;
        $data->sidebar_menu = $this->Menu_sidebar;
        $data->top_menu = $this->menu;
        $this->load->view('depan2', $data);


    }

    function section($id)
    {
        
        $data = new stdClass();
		$bc = array(
               'title' => 'Home',
               'url' => 'home',
               'isRoot' => true
        );
		$this->breadcrumb->setBreadCrumb($bc);
		
        $this->artikel->plus_counter();
        $data->counter = $this->artikel->get_counter();
        $artikel = $this->artikel->get_artikel($id);
        $data->title = $artikel->title;
		$data->breadcrumbs = $this->breadcrumblist->display();
        $data->isi = $artikel->isi;
        $data->sidebar_menu = $this->Menu_sidebar;
        $data->top_menu = $this->menu;
        $this->load->view('depan2', $data);
    }

    function category()
    {
        $data = new stdClass();

        $this->artikel->plus_counter();
        $data->counter = $this->artikel->get_counter();

        $artikel = $this->artikel->get_semua_artikel();
        $data->title = "Laboratory";
        $data->isi = $artikel;
        $data->sidebar_menu = $this->Menu_sidebar;
        $data->top_menu = $this->menu;
        $data->view_content = "laboratory";
        $this->load->view('base', $data);
    }

}
