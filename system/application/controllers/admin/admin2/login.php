<?php

class Login extends Controller{

    public function index()
    {
	$this->load->library('form_validation');
		
        if($this->session->userdata('username'))
        {
            redirect('admin/page');
        }
        else
        {
            $data = new stdClass();
			$data->title = "Login Admin";
			$data->view_content = 'login_admin';
			$this->load->view('admin_base', $data);
        }
    }

    public function proses_login()
    {
		if($this->input->post('username'))
        {
            $userdata = array();
            $username = $this->input->post('username');
            $password = $this->input->post('password');

            $this->db->where('username', $username);
            $this->db->where('password', $password);
            $q = $this->db->get('admin');
			

            if($q->num_rows() > 0)
            {
                $userdata = $q->row_array();
				
                $this->session->set_userdata($userdata);
                redirect('admin/page');
            }
            else
            {
                $data->error = 'Username dan atau password Anda salah';
				redirect('admin/login');
            }
        }
        else
        {
	    $data->error = 'Username dan atau password Anda salah';
	    redirect('admin/login');
			
        }
    }
	

    public function logout()
    {
        $this->session->sess_destroy();
        redirect('admin/login', 'refresh');
    }
}
?>
