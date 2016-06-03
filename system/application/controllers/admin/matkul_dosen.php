<?php
class Matkul_dosen extends Controller{
    function Matkul_dosen(){
        parent::Controller();
        $this->load->model('M_dosen' , 'dosen');
        $this->load->model('Matkul_model', 'matkul');
    }

    function index(){
        if(!$this->session->userdata('username'))
            redirect('admin/login');
        $data = new stdClass();
        $data->dosen = $this->dosen->get_semua_dosen();
        
        $data->view_content = "admin_dosmat";
        $this->load->view('admin_base', $data);
    }

    function insert_matkul($id=1){
        if(isset($_POST['submit'])) $this->insert();
        else
            {
        $data = new stdClass();
        $dosen = $this->dosen->get_dosen($id);
        $data->matkul = $this->matkul->get_matkul_dosen($id);
        $data->dosen = $dosen;
        $data->view_content     = 'admin_mk_dosen';
        $this->load->view('admin_base',$data);

            }
    }

    function insert(){
        $data = array();
        $q = 0;
        if($this->input->post('submit')){
            $dosen=$_POST['dosen'];
            $kode_matkul=$_POST['kode_matkul'];
            $count = count($kode_matkul);

           for($i=0; $i<$count; $i++){
            $data_input   = array(
               'dosen' => $dosen,
               'kode_matkul' => $kode_matkul[$i],

            );
                $q = $this->db->insert('matkul_dosen', $data_input);
           }
        }
        if($q) redirect('admin/matkul_dosen/');
        $data['view_content'] = 'admin_mk_dosen';
        $this->load->vars($data);
        $this->load->view('admin_base');

    }
    
}
?>
