<?php
Class Gallery extends Controller {
	function Gallery(){
		parent::Controller();
		$this->load->model('Artikel_model', 'artikel');
        $this->load->model('Menu', 'menu');
        $this->load->model('Menu_sidebar');
	}

	function index(){
		$data = new stdClass();
		$bc = array(
               'title' => 'Gallery',
               'url' => 'gallery',
               'isRoot' => true
        );
		$this->breadcrumb->setBreadCrumb($bc);
		$data->breadcrumbs = $this->breadcrumblist->display();
		$this->load->model('artikel_model');
		$data->daftargambar = $this->artikel->ambil_gambar();
		$this->artikel->plus_counter();
        $data->counter = $this->artikel->get_counter();
        $data->title = "Gallery";
        $data->top_menu = $this->menu;
        $data->sidebar_menu = $this->Menu_sidebar;
        $data->view_content = "gallery";
        $this->load->view('base', $data);
	}
}
?>