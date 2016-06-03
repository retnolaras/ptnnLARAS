<?php
class Alumni extends Controller{
    function Alumni(){
        parent::Controller();
        $this->load->model('m_mahasiswa', 'mhs');
    }

    function index(){
        $data = new stdClass();
        $data->alumni = $this->mhs->get_semua_alumni();
        $data->view_content = "admin_list_alumni";
        $this->load->view('admin_base', $data);
    }

    function tambah_alumni(){
        if(isset($_POST['submit'])) $this->insert_alumni();
        $data                   = new stdClass();
        $data->alumni           = $this->mhs->get_semua_dosen();
        $data->view_content     = 'admin_tambah_alumni';
        $this->load->view('admin_base',$data);
    }

    function insert_alumni(){
        $data = array();
        $q = 0;
        if($this->input->post('submit')){
        $data_input   = array(
                "nama"      => $_POST['nama'],
                "nrp"    	=> $_POST['nrp'],
                "angkatan"  => $_POST['angkatan'],
                "thn_lulus" => $_POST['thn_lulus'],
                "email"     => $_POST['email'],
        );
            $q = $this->db->insert('alumni', $data_input);
        }
        if($q) redirect('admin/alumni/success');
        $data['view_content'] = 'admin_tambah_alumni';
        $this->load->vars($data);
        $this->load->view('admin_base');
    }

     function success()
    {
        $data = array();
        $data['view_content'] = 'admin_tambah_alumni_success';
        $this->load->vars($data);
        $this->load->view('admin_base');
    }

     function edit_alumni($id=1)
    {
        if(isset($_POST['submit'])) $this->update();
        $data                   = new stdClass();
        $data->alumni          	= $this->mhs->get_alumni($id);
        $data->view_content     = 'admin_edit_alumni';
        $this->load->view('admin_base',$data);
    }

    function update()
    {
        $data   = array(
            'nama' 		=> $_POST['nama'],
            'nrp' 		=> $_POST['nrp'],
            'angkatan'  => $_POST['angkatan'],
            'thn_lulus'	=> $_POST['thn_lulus'],
            'email'   	=> $_POST['email']
        );
        $this->mhs->update_alumni($_POST['id'],$data);
        redirect('admin/alumni');
    }



}
?>
