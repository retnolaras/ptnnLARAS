<?php
class Comment extends Controller {

    function Comment()
    {
        parent::Controller();
        $this->load->model('forum_model' , 'forum');
    }

    function index()
    {
		if(!$this->session->userdata('username'))
            redirect('admin/login');
        $data = new stdClass();
        $data->forum = $this->forum->get_all_comment();
        $data->view_content = "admin_komen";
        $this->load->view('admin_base', $data);
    }

    
    function hapus($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('komen');
    }

    
 }

?>
