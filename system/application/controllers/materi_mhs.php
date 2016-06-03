<?php
class Materi_mhs extends Controller {

    function Materi_mhs()
    {
        parent::Controller();
        $this->load->model('Artikel_model', 'artikel');
        $this->load->model('Menu', 'menu');
        $this->load->model('Menu_sidebar');
        $this->load->model('Matkul_model', 'matkul');
    }

    function index()
    {
        $data = new stdClass();
        $data->title = "Mata Kuliah";
        $data->matkul = $this->matkul->get_semua_matkul();
        $data->sidebar_menu = $this->Menu_sidebar;
        $data->top_menu = $this->menu;
        $data->view_content = "list_matkul";
        $this->load->view('base', $data);
    }

      
    function login()
    {
        $data = new stdClass();
        if($this->session->userdata('id_mahasiswa'))
                redirect('materi');

        if($this->input->post('username'))
        {
            $username = $this->input->post('username');
            $password = md5($this->input->post('password'));
            $this->db->where('username', $username);
            $this->db->where('password', $password);
            $q = $this->db->get('mahasiswa');

            if($q->num_rows() > 0)
            {
                $mahasiswa = $q->result_array();
                $this->session->set_userdata('id_mahasiswa', $mahasiswa[0]['id']);
                redirect('materi/upload');
            }
            else
            {
                $data->error= "Kombinasi username dan password yang Anda masukkan salah";
            }
        }
        $data->title = "Login Mahasiswa";
        $data->sidebar_menu = $this->Menu_sidebar;
        $data->top_menu = $this->menu;
        $data->view_content = "login_mahasiswa";
        $this->load->view('base', $data);

    }
    function logout()
    {
        if(!$this->session->userdata('id_mahasiswa'))
            redirect('materi/upload');

        $this->session->unset_userdata('id_mahasiswa');

        $this->load->view('materi/login', array('logout' => true));
    }


}