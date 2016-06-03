<?php

class Forum extends Controller {

    function Forum() {
        parent::Controller();
        $this->load->model('Artikel_model', 'artikel');
        $this->load->model('Menu', 'menu');
        $this->load->model('Forum_model');
//        $this->load->model('captcha_model');
        $this->load->model('Menu_sidebar');
		$this->session->set_userdata( array('activeTab'=>'home') );
    }

    function index() {
        
    }

    function create_topic() {
        $data = new stdClass();
		$bc = array(
               'title' => 'Create Topic Forum',
               'url' => 'forum/create_topic',
               'isRoot' => false
        );
		$this->breadcrumb->setBreadCrumb($bc);
		$data->breadcrumbs = $this->breadcrumblist->display();
		$this->artikel->plus_counter();
        $data->counter = $this->artikel->get_counter();
        $data->top_menu = $this->menu;
        $data->title = "create topic forum";
        $data->sidebar_menu = $this->Menu_sidebar;
        $data->view_content = "create_topic";
        $this->load->view('forum', $data);
    }

    function main() {
        $data = new stdClass();
		$bc = array(
               'title' => 'Forum',
               'url' => 'forum/main',
               'isRoot' => true
        );
		$this->breadcrumb->setBreadCrumb($bc);
		$data->breadcrumbs = $this->breadcrumblist->display();
		
		$this->artikel->plus_counter();
        $data->counter = $this->artikel->get_counter();
        $data->title = "main forum";
        $data->top_menu = $this->menu;
        $data->sidebar_menu = $this->Menu_sidebar;
        $data->view_content = "main_forum";
        $data->forum_question = $this->Forum_model->get_all_topic();
        $this->load->view('forum', $data);
    }

    function view_topic($str_id=1) {
        $data = new stdClass();
//        if (empty($_POST)) {
//            $captcha = $this->captcha_model->generateCaptcha();
//
//            $_SESSION['captchaWord'] = $captcha['word'];
//
//           } else {
//            //check captcha matches
//            if (strcasecmp($_SESSION['captchaWord'],
//                            $_POST['confirmCaptcha']) == 0) {
//                $this->load->view('success_view');
//            } else {
//                $this->load->view('failure_view');
//            }
//        }
		$bc = array(
               'title' => 'View Topic',
               'url' => 'forum',
               'isRoot' => false
        );
		$this->breadcrumb->setBreadCrumb($bc);
		$data->breadcrumbs = $this->breadcrumblist->display();
		$this->artikel->plus_counter();
        $data->counter = $this->artikel->get_counter();
        $data->title = "view topic forum";
        $data->top_menu = $this->menu;
        $data->sidebar_menu = $this->Menu_sidebar;
        $data->view_content = "view_topic";
        $data->topic = $this->Forum_model->get_topic($str_id);
        $data->answer = $this->Forum_model->get_answer($str_id);
        $data->a_id = $str_id;
        $this->load->view('forum', $data);

        /* $data->topic = $this->Forum_model->get_topic('id'); */
    }

    function insert() {
        $data = array(
            'topic' => $_POST['topic'],
            'detail' => $_POST['detail'],
            'name' => $_POST['name'],
            'email' => $_POST['email']
        );
        print_r($_POST);
        $this->db->insert('forum_question', $data);
        redirect('forum/main');
    }

    function insert_answer() {
        $data = array(
            'a_id' => $_POST['a_id'],
            'a_name' => $_POST['name'],
            'a_email' => $_POST['email'],
            'a_answer' => $_POST['answer']
        );
        $this->db->insert('forum_answer', $data);
    }

    function add_topic() {
        if (isset($_POST['proses']))
            $this->insert();
        $data = new stdClass();
		$this->artikel->plus_counter();
        $data->counter = $this->artikel->get_counter();
        $data->top_menu = $this->menu;
        $data->title = "add topic forum";
        $data->sidebar_menu = $this->Menu_sidebar;
        $data->view_content = "add_topic";
        $this->load->view('forum', $data);
    }

    function add_answer() {
//        if (isset($_POST['submit']))
            $this->insert_answer();
        redirect('forum/view_topic/' . $_POST['a_id']);
    }

}

?>
