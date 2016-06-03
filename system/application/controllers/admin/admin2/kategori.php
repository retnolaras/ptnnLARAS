<?php
class Kategori extends Controller {

    function Kategori()
    {
        parent::Controller();
        $this->load->model('Artikel_model' , 'artikel');
    }

    function index()
	
    {
		if(!$this->session->userdata('username'))
            redirect('admin/login');
        $data = new stdClass();
        $data->kategori = $this->artikel->get_semua_kategori();
        $data->view_content = "admin_list_kategori";
        $this->load->view('admin_base', $data);
    }

    function insert_kategori()
    {
        if(isset($_POST['submit']))
        {
            $data   = array(
                "indonesia" => $_POST['indonesia'],
                "english"   => $_POST['english']
            );
            $this->artikel->insert_kategori($data);
        }
        redirect('admin/kategori');
    }

     function hapus_kategori($id)
    {

        $this->db->where('id', $id);
        $this->db->delete('kategori');
        $data['view_content'] = 'admin_hapus_kategori';
        $this->load->vars($data);
        $this->load->view('admin_base');

    }

}
