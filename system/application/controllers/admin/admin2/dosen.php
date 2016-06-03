<?php
class Dosen extends Controller {

    function Dosen()
    {
        parent::Controller();
        $this->load->model('M_dosen' , 'dosen');
       
    }

    function index()
    {
		if(!$this->session->userdata('username'))
            redirect('admin/login');
        $data = new stdClass();
        $data->dosen = $this->dosen->get_semua_dosen();
        $data->view_content = "admin_list_dosen";
        $this->load->view('admin_base', $data);
    }


    function tambah_dosen()
    {
        if(isset($_POST['submit'])) $this->insert_dosen();
        $data                   = new stdClass();
        $data->dosen            = $this->dosen->get_semua_dosen();
        $data->view_content     = 'admin_form_dosen';
        $this->load->view('admin_base',$data);
    }

    function insert_dosen()
    {
        $data = array();
        $q = 0;
        if($this->input->post('submit')){
        $data_input   = array(
                "nama"      => $_POST['nama'],
                "divisi"    => $_POST['divisi'],
                "id_div"    => $_POST['id_div'],
                "id_lab"    => $_POST['id_lab'],
                "Lab"       => $_POST['Lab'],
                "kode"      => $_POST['kode'],
                "email"     => $_POST['email'],
                "pendidikan"    => $_POST['pendidikan'],
                "tgl_lahir" => $_POST['tgl_lahir'],
                "riset"     => $_POST['riset'],
                "publikasi" => $_POST['publikasi'],    
        );
            $q = $this->db->insert('dosen', $data_input);
        }
        if($q) redirect('admin/dosen/success');
        $data['view_content'] = 'admin_form_dosen';
        $this->load->vars($data);
        $this->load->view('admin_base');
        
    }

    function success()
    {
        $data = array();
        $data['view_content'] = 'admin_tambah_success';
        $this->load->vars($data);
        $this->load->view('admin_base');
    }

    function hapus_dosen($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('dosen');
        $data['view_content'] = 'admin_hapus_dosen';
        $this->load->vars($data);
        $this->load->view('admin_base');
        
    }

    function edit_dosen($id=1)
    {

        if(isset($_POST['submit'])) $this->update();
        else
            {
        $data = new stdClass();
        $dosen = $this->dosen->get_dosen($id);
        $data->dosen = $dosen;
        $data->view_content     = 'admin_dosen';
        $this->load->view('admin_base',$data);
        
            }
    }

    function update()
    {
       if(isset ($_POST['submit'])){
        $foto = "";

        if($_FILES['foto'])
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

                "nama"      => $_POST['nama'],
                "divisi"    => $_POST['divisi'],
                "Lab"       => $_POST['Lab'],
                "kode"      => $_POST['kode'],
                "email"     => $_POST['email'],
                "pendidikan"    => $_POST['pendidikan'],
                "tgl_lahir" => $_POST['tgl_lahir'],
                "riset"     => $_POST['riset'],
                "publikasi" => $_POST['publikasi'],   
                "foto"          => $foto
        );
        
        $this->db->where('id', $_POST['idnya']);
        $this->db->update('dosen', $data);
        redirect('admin/dosen');
        }
    }

    


}

    






?>
