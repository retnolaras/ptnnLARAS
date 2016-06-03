<?php
class Dosen extends Controller{
    function Dosen()
    {
        parent::Controller();
        $this->load->model('M_dosen', 'dosen');
        $this->load->model('Menu', 'menu');
        $this->load->model('Menu_sidebar');
        $this->load->model('Matkul_model', 'matkul');
	$this->load->model('Artikel_model', 'artikel');
        $this->load->helper(array('form', 'url'));
		$this->session->set_userdata( array('activeTab'=>'home') );
    }

    function index()
    {
        
        $dosen = $this->dosen->get_semua_dosen();
		$this->artikel->plus_counter();
		$bc = array(
               'title' => 'Daftar Dosen',
               'url' => 'dosen',
               'isRoot' => true
        );
		$this->breadcrumb->setBreadCrumb($bc);
		
        $data->counter = $this->artikel->get_counter();
		$data->breadcrumbs = $this->breadcrumblist->display();
        $data->title = "Daftar Dosen";
        $data->daftar_dosen = $dosen;
        $data->sidebar_menu = $this->Menu_sidebar;
        $data->top_menu = $this->menu;
        $data->view_content = "dosen";
        $this->load->view('base', $data);
    }

    function detail_dosen($id=1){

        $data = new stdClass();
		$bc = array(
               'title' => 'Detail Dosen',
               'url' => 'dosen',
               'isRoot' => false
        );
		$this->breadcrumb->setBreadCrumb($bc);
		$data->breadcrumbs = $this->breadcrumblist->display();
		$this->artikel->plus_counter();
        $data->counter = $this->artikel->get_counter();
        $dosen = $this->dosen->get_dosen($id);
        $data->matkul = $this->matkul->get_matkul_dosen($id);
        $data->title = "Profil Dosen";
        $data->dosen = $dosen;
        $data->sidebar_menu = $this->Menu_sidebar;
        $data->top_menu = $this->menu;
        $data->view_content = "detail_dosen";
        $this->load->view('base', $data);

    }
    
    function login()
    {
        $data = new stdClass();
		$bc = array(
               'title' => 'Login',
               'url' => 'dosen',
               'isRoot' => false
        );
		$this->breadcrumb->setBreadCrumb($bc);
		$data->breadcrumbs = $this->breadcrumblist->display();
		
        if($this->session->userdata('id_dosen'))
                redirect('dosen/edit_dosen');

        if($this->input->post('username'))
        {
            $username = $this->input->post('username');
            $password = md5($this->input->post('password'));
            $this->db->where('username', $username);
            $this->db->where('password', $password);
            $q = $this->db->get('dosen');

            if($q->num_rows() > 0)
            {
                $dosen = $q->result_array();                
                $this->session->set_userdata('id_dosen', $dosen[0]['id']);
                redirect('dosen/edit_dosen');
            }
            else
            {
                $data->error= "Kombinasi username dan password yang Anda masukkan salah";
            }
        }
		$this->artikel->plus_counter();
        $data->counter = $this->artikel->get_counter();
        $data->title = "Login Dosen";
        $data->sidebar_menu = $this->Menu_sidebar;
        $data->top_menu = $this->menu;
        $data->view_content = "login_dosen";
        $this->load->view('base', $data);
        
    }

    function logout()
    {
		$bc = array(
               'title' => 'Logout',
               'url' => 'dosen',
               'isRoot' => false
        );
		$this->breadcrumb->setBreadCrumb($bc);
		$data->breadcrumbs = $this->breadcrumblist->display();
        $this->session->sess_destroy();
        $data->counter = $this->artikel->get_counter();
        $data->title = "Logout Dosen";
        $data->sidebar_menu = $this->Menu_sidebar;
        $data->top_menu = $this->menu;
        $data->view_content = "logout_dosen";
        $this->load->view('base', $data);
    }

    function edit_dosen($id=1)
    {
        if(!($this->session->userdata('id_dosen')==$id)) redirect('dosen/login');
        else{
        if(isset($_POST['submit'])) $this->update();
        else
            {
        $data = new stdClass();
		$bc = array(
               'title' => 'Edit Profil',
               'url' => 'dosen',
               'isRoot' => false
        );
		$this->breadcrumb->setBreadCrumb($bc);
		$data->breadcrumbs = $this->breadcrumblist->display();
		
		$this->artikel->plus_counter();
        $data->counter = $this->artikel->get_counter();
        $dosen = $this->dosen->get_dosen($id);
        $data->title = "Edit Dosen";
        $data->dosen = $dosen;
        $data->sidebar_menu = $this->Menu_sidebar;
        $data->top_menu = $this->menu;
        $data->view_content = "edit_dosen";
        $this->load->view('base', $data);
            }
        }
    }

    function update()
    {
        if(isset ($_POST['submit'])){
        $dosen = $this->dosen->get_dosen($_POST['idnya']);
        $dosen = $dosen[0];
            $foto = $dosen['foto'];
      
        if(isset($_FILES['foto']['name']))
        {
            $config['upload_path'] = './fotodosen/';
            $config['allowed_types'] = 'gif|jpg|png';
            $config['max_size']	= '200';
            $config['max_width']  = '2048';
            $config['max_height']  = '1024';

            $this->load->library('upload', $config);

            if ( ! $this->upload->do_upload('foto'))
            {
                    
            }
            else
            {
                    $dosen = $this->dosen->get_dosen($_POST['idnya']);
                    //unlink($config['upload_path'] . $dosen['foto']);
                    $data_upload = $this->upload->data();
                    $foto = $data_upload['file_name'];

            }
        }

        $data   = array(

                'kode'          => $_POST['kode'],
                'nama'          => $_POST['nama'],
                'divisi'        => $_POST['divisi'],
                'pendidikan'    => $_POST['pendidikan'],
                'Lab'           => $_POST['Lab'],
                'email'         => $_POST['email'],
                'tgl_lahir'     => $_POST['tgl_lahir'],
                'riset'         => $_POST['riset'],
                'publikasi'     => $_POST['publikasi'],
                'foto'          => $foto
        );
		$bc = array(
               'title' => 'Edit Profil',
               'url' => 'dosen',
               'isRoot' => false
        );
		$this->breadcrumb->setBreadCrumb($bc);
		$data->breadcrumbs = $this->breadcrumblist->display();
        //$this->db->insert('dosen', $data);
        $this->db->where('id', $_POST['idnya']);
        $this->db->update('dosen', $data);
        redirect('dosen/detail_dosen/' . $_POST['idnya']);
        }
    }

    function download($kode)
    {
        if($this->session->userdata('s_makul')!=$kode) redirect ('dosen/ek_input/' . $kode);
        $data = new stdClass();
		$bc = array(
               'title' => 'Download Materi',
               'url' => 'materi',
               'isRoot' => false
        );
		$this->breadcrumb->setBreadCrumb($bc);
		$data->breadcrumbs = $this->breadcrumblist->display();
		$this->artikel->plus_counter();
        $data->counter = $this->artikel->get_counter();
        $data->title = "Materi Matkul ". $kode;
        $data->matkul = $this->matkul->get_uploaded_matkul($kode);
        $data->sidebar_menu = $this->Menu_sidebar;
        $data->top_menu = $this->menu;
        $data->kode_matkul = $kode;
        $data->view_content = "list_download";
        $this->load->view('base', $data);
    }

    function ek_input($kode)
    {
        $data = new stdClass();
		$bc = array(
               'title' => 'Materi Mata kuliah',
               'url' => 'materi',
               'isRoot' => false
        );
		$this->breadcrumb->setBreadCrumb($bc);
		$data->breadcrumbs = $this->breadcrumblist->display();
		$this->artikel->plus_counter();
        $data->counter = $this->artikel->get_counter();
        $data->title = "Enrolment Key ". $kode;
        $data->matkul = $this->matkul->get_matkul($kode);
        $data->sidebar_menu = $this->Menu_sidebar;
        $data->top_menu = $this->menu;
        $data->kode_matkul = $kode;
        $data->view_content = "input_ek";
        $this->load->view('base', $data);
    }



}