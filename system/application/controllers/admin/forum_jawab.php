<?php
class Forum_jawab extends Controller {

    function Forum_jawab()
    {
        parent::Controller();
        $this->load->model('forum_model' , 'forum');
    }

    function index()
    {
		if(!$this->session->userdata('username'))
            redirect('admin/login');
        $data = new stdClass();
        $data->forum = $this->forum->get_all_jawab();
        $data->view_content = "admin_forum_jawab";
        $this->load->view('admin_base', $data);
    }

    
    function hapus($id)
    {
        $this->db->where('a_id', $id);
        $this->db->delete('forum_answer');
		redirect('admin/forum_jawab');
    }

    
 }

?>
