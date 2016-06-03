<?php
class artikel extends Controller {

    function artikel()
    {
        parent::Controller();
        $this->load->model('Artikel_model', 'artikel');
    }

    function index()
    {
		if(!$this->session->userdata('username'))
            redirect('admin/login');
        $data                   = new stdClass();
        $data->daftar_artikel   = $this->artikel->get_semua_artikel();
        $data->view_content     = 'admin_list_artikel';
        $this->load->view('admin_base',$data);
    }

    function tambah_artikel()
    {
		if(!$this->session->userdata('username'))
            redirect('admin/login');
        if(isset($_POST['proses'])) $this->insert();
        $data                   = new stdClass();
        $data->kategori         = $this->artikel->get_semua_kategori();
        $data->view_content     = 'admin_artikel';
        $this->load->view('admin_base',$data);
    }

    function edit_artikel($id=1)
    {
        if(isset($_POST['proses'])) $this->update();
        $data                   = new stdClass();
        $data->artikel          = $this->artikel->get_artikel($id);
        $data->kategori         = $this->artikel->get_semua_kategori();
        $data->view_content     = 'admin_edit_artikel';
        $this->load->view('admin_base',$data);
    }

    function insert()
    {
        $data   = array(
            'judul_ind' => $_POST['judul_ind'],
            'judul_eng' => $_POST['judul_eng'],
            'kategori'  => $_POST['kategori'],
            'isi_ind'   => $_POST['indonesia'],
            'isi_eng'   => $_POST['english']
        );
        $this->artikel->insert_artikel($data);
        redirect('admin/artikel');
    }

    function update()
    {
        $data   = array(
            'judul_ind' => $_POST['judul_ind'],
            'judul_eng' => $_POST['judul_eng'],
            'kategori'  => $_POST['kategori'],
            'isi_ind'   => $_POST['indonesia'],
            'isi_eng'   => $_POST['english']
        );
        $this->artikel->update_artikel($_POST['id'],$data);
        redirect('admin/artikel');
    }

    function hapus_artikel($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('artikel');
        $data['view_content'] = 'admin_hapus_artikel';
        $this->load->vars($data);
        $this->load->view('admin_base');

    }


}