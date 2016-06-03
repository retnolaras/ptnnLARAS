<?php
class Materi extends Controller {

    function Materi()
    {
        parent::Controller();
        $this->load->model('Artikel_model', 'artikel');
        $this->load->model('Menu', 'menu');
        $this->load->model('Menu_sidebar');
        $this->load->model('Matkul_model', 'matkul');
	$this->load->model('Forum_model');
	$this->session->set_userdata( array('activeTab'=>'home') );
    }

    function index()
    {
        $data = new stdClass();
		$bc = array(
               'title' => 'Mata Kuliah',
               'url' => 'materi',
               'isRoot' => true
        );
        $this->breadcrumb->setBreadCrumb($bc);
        $data->breadcrumbs = $this->breadcrumblist->display();
        $this->artikel->plus_counter();
        $data->counter = $this->artikel->get_counter();
        $data->title = "Mata Kuliah";
        $data->matkul = $this->matkul->get_semua_matkul();
        $data->sidebar_menu = $this->Menu_sidebar;
        $data->top_menu = $this->menu;
        $data->view_content = "list_matkul";
        $this->load->view('base', $data);
    }

    function download($kode)
    {
        if($this->session->userdata('s_makul')!=$kode) redirect ('materi/ek_input/' . $kode);
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

    function do_download($id)
    {
        $this->load->helper('download');
        $materi = $this->matkul->get_materi($id);
        if($this->session->userdata('s_makul')!=$materi['kode_matkul']) redirect ('materi/ek_input/' . $kode);
        else
        {
			
            $data = file_get_contents("./makul/" . md5("materiptn") . "/" . $materi['nama_file']); // Read the file's contents
            $name = $materi['nama_file'];
            force_download($name, $data);
        }


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

    function ek_p()
    {
        $kode = $_POST['kode_matkul'];
        $matkul = $this->matkul->get_matkul($kode);
        if($matkul['enrollmentkey']==$_POST['ek']){
            $this->session->set_userdata('s_makul', $kode);
            redirect('materi/download/' . $kode);
        }
        else redirect('materi/ek_input/' . $kode);
    }


    function login()
    {
        $data = new stdClass();
		$bc = array(
               'title' => 'Login',
               'url' => 'materi',
               'isRoot' => false
        );
		$this->breadcrumb->setBreadCrumb($bc);
		$data->breadcrumbs = $this->breadcrumblist->display();
		$this->artikel->plus_counter();
        $data->counter = $this->artikel->get_counter();
        if($this->session->userdata('id_dosen'))
                redirect('materi/upload');

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
                redirect('materi/upload');
            }
            else
            {
                $data->error= "Kombinasi username dan password yang Anda masukkan salah";
            }
        }
        $data->title = "Login Dosen";
        $data->sidebar_menu = $this->Menu_sidebar;
        $data->top_menu = $this->menu;
        $data->view_content = "login_dosen";
        $this->load->view('base', $data);
        
    }
    function logout()
    {
        if(!$this->session->userdata('id_dosen'))
            redirect('materi/upload');
		
        $data->counter = $this->artikel->get_counter();
        $this->session->unset_userdata('id_dosen');

        $this->load->view('materi/login', array('logout' => true));
    }

    function upload()
    {
        if(!$this->session->userdata('id_dosen')) redirect('materi/login');
        else
        {
		$bc = array(
               'title' => 'Upload Materi Kuliah',
               'url' => 'materi',
               'isRoot' => false
        );
		$this->breadcrumb->setBreadCrumb($bc);
		$data->breadcrumbs = $this->breadcrumblist->display();
		$this->artikel->plus_counter();
            $data->counter = $this->artikel->get_counter();
            $data->matkul = $this->matkul->get_matkul_dosen($this->session->userdata('id_dosen'));
            $data->title = "Upload Materi";
            $data->sidebar_menu = $this->Menu_sidebar;
            $data->top_menu = $this->menu;
            $data->view_content = "matkul_tuk_diupload";
            $this->load->view('base', $data);
        }
    }

    function matkul_uploaded($kode_matkul)
    {
        $data = new stdClass();
		$bc = array(
               'title' => 'Upload Materi Kuliah',
               'url' => 'materi',
               'isRoot' => false
        );
		$this->breadcrumb->setBreadCrumb($bc);
		$data->breadcrumbs = $this->breadcrumblist->display();
		$this->artikel->plus_counter();
        $data->counter = $this->artikel->get_counter();
        $data->title = "Matkul ". $kode_matkul;
        $data->matkul = $this->matkul->get_uploaded_matkul($kode_matkul);
        $data->sidebar_menu = $this->Menu_sidebar;
        $data->top_menu = $this->menu;
        $data->kode_matkul = $kode_matkul;
        $data->view_content = "matkul_uploaded";
        $this->load->view('base', $data);
    }

    function matkul_upload($kode_matkul)
    {
        if(!$this->session->userdata('id_dosen')) redirect('materi/login');
        $data = new stdClass();
        $data->title = "Upload Materi";
        $data->sidebar_menu = $this->Menu_sidebar;
        $data->top_menu = $this->menu;
        $data->kode_matkul = $kode_matkul;
        $data->view_content = "matkul_upload";
        $this->load->view('base', $data);

    }

    function do_upload($kode_matkul)
    {
        if(!$this->session->userdata('id_dosen')) redirect('materi/login');
        if($_POST['submit'])
        {
            $ext=preg_replace("/.*\.([^.]+)$/","\\1", $_FILES['materi']['name']);
            $fileType=$_FILES['materi']['type'];
            $config['allowed_types'] = $ext.'|'.$fileType;
            $config['upload_path'] = './makul/' . md5("materiptn");
            $error = "";
            $materi = "";

            $this->load->library('upload', $config);

            //if (!empty($_FILES['materi']['name']))
            //{
                if ( ! $this->upload->do_upload('materi'))
                {
                        $error .= "Materi tidak tersimpan.<br />";
                }
                else
                {
                        $materi = $this->upload->data();
                        $materi = $materi['file_name'];
                }
            //}
            $data = array(
                "kode_matkul"   => $kode_matkul,
                "judul"         => $_POST['judul'],
                "dosen"         => $this->session->userdata('id_dosen'),
                "nama_file"     => $materi
            );
            $this->db->insert('matkul_upload', $data);
        }
        redirect('materi/matkul_uploaded/' . $kode_matkul);
    }

}