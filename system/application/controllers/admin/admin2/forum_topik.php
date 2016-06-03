<?php
class Forum_topik extends Controller {

    function Forum_topik()
    {
        parent::Controller();
        $this->load->model('forum_model' , 'forum');
    }

    function index()
    {
		if(!$this->session->userdata('username'))
            redirect('admin/login');
        $data = new stdClass();
        $data->forum = $this->forum->get_all_topic();
        $data->view_content = "admin_forum";
        $this->load->view('admin_base', $data);
    }

    
    function hapus($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('forum_question');
    }

    
 }

?>
