<?php

class Course extends Controller {

    function Course() {
        parent::Controller();
        $this->load->database();
        $this->load->model('basic_model', 'bmodel');
        $this->load->model('Artikel_model', 'artikel');
        $this->load->model('Menu', 'menu');
        $this->load->model('Menu_sidebar');
        $this->load->model('Matkul_model', 'matkul');
        $this->load->helper('url');
    }

    function index($offset= NULL) {
        $limit = 4;
        if (!is_null($offset)) {
            $offset = $this->uri->segment(3);
        }
        //paginasi
        $this->load->library('pagination');
        $config['uri_segment'] = 3;
        $config['base_url'] = site_url('course/index');
        $config['total_rows'] = $this->bmodel->count_table_rows('matakuliah');
        $config['per_page'] = $limit;
        $config['num_links'] = 2;
        $config['first_link'] = '<small>&lt;&lt;awal</small>';
        $config['last_link'] = '<small>akhir&gt;&gt;</small>';
        $this->pagination->initialize($config);


        $this->load->library('table');
        $query = $this->db->query('SELECT kode_makul, nama_makul, deskripsi FROM matakuliah');


        $data = array('query' => $this->bmodel->get_course($limit, $offset), 'kode_makul' => 'nama_makul', 'deskripsi', 'pagination' => $this->pagination->create_links());
        $this->artikel->plus_counter();
        $data['counter'] = $this->artikel->get_counter();
        $this->load->view('contentcourse', $data);
    }

    public function detail() {
        $str_id = '';
        $data = array('query' => $this->bmodel->get_course_detail($str_id), 'page_title' => $value->nama_makul);
        $data = new stdClass();
        $data->title = "Mata Kuliah";
        $data->matkul = $this->matkul->get_semua_matkul();
        $data->sidebar_menu = $this->Menu_sidebar;
        $data->top_menu = $this->menu;
        $this->artikel->plus_counter();
        $data->counter = $this->artikel->get_counter();
        $data->view_content = "list_matkul";
        $this->load->view('course_detail', $data);
    }

}
