<?php

class Comment extends Controller {

    function Comment(){
        parent::Controller();
        $this->load->model('Artikel_model', 'artikel');
        $this->load->model('Menu', 'menu');
        //$this->load->model('captcha_model');
        $this->load->model('Menu_sidebar');
    }

    function index() {
		$data = new stdClass();
		$bc = array(
               'title' => 'Comment and Suggest',
               'url' => 'comment',
               'isRoot' => false
        );
		$this->breadcrumb->setBreadCrumb($bc);
		$data->breadcrumbs = $this->breadcrumblist->display();
		
        $data->title = "comment and suggest";
		$this->artikel->plus_counter();
        $data->counter = $this->artikel->get_counter();
		
        $data->top_menu = $this->menu;
        $data->sidebar_menu = $this->Menu_sidebar;
        $data->view_content = "comment";
        $this->load->view('base', $data);
		       
    }

    

    function insert() {
        $data = array(
            'nama' => $_POST['nama'],
            'email' => $_POST['email'],
            'komentar' => $_POST['komentar'],
        );
        $this->db->insert('komen', $data);
        redirect('comment');
    }

    

}

?>
