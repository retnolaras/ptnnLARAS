<?php
class Mahasiswa extends Controller {

    function Mahasiswa()
    {
        parent::Controller();
        $this->load->model('M_mahasiswa' , 'mahasiswa');
    }

    function index()
    {
		if(!$this->session->userdata('username'))
            redirect('admin/login');
        $data = new stdClass();
        $data->mahasiswa = $this->mahasiswa->get_semua_mahasiswa();
        $data->view_content = "admin_mahasiswa";
        $this->load->view('admin_base', $data);
    }

    function insert_mahasiswa()
    {
        if(isset($_POST['submit']))
        {
            $data   = array(
                "nama"      => $_POST['nama'],
                "nrp"       => $_POST['nrp'],
                "username"  => $_POST['username'],
                "password"  => md5($_POST['password'])
            );
            $this->db->insert('mahasiswa',$data);
        }
        redirect('admin/mahasiswa');
    }

    function hapus_mahasiswa($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('mahasiswa');
		redirect('admin/mahasiswa');
    }

    function edit_mahasiswa($id)
    {
        $data = array();
		

        if($this->input->post('nama'))
        {
            $data_update = array (
                'nama' => $this->input->post('nama'),
                'nrp' => $this->input->post('nrp'),
                'username' => $this->input->post('username'),
                'password' => $this->input->post('password'),
            );

            $this->db->where('id', $id);
            $this->db->update('mahasiswa', $data_update);

        }
//
//        $data['dosen'] = $this->dosen->get_dosen($id);
//        $this->load->vars($data);
//        $this->load->view('admin/admin_dosen');


    }

 /*   function load_mahasiswa($id, $nomor)
     {
         $list = $this->mahasiswa->get_mahasiswa($id);
         ?>
            <td><?php echo $nomor?></td>
            <td><?php echo $id?></td>
            <td><?php echo $list->nama?></td>
            <td><?php echo $list->nrp?></td>
            <td><?php echo $list->username?></td>
            <td><?php echo $list->password?></td>
            <td><input name="submit" type="button" value="Edit" onclick="edit(<?php echo $list->id?>)" /> <input type="button" value="Hapus" onclick="hapus(<?php echo $list->id?>)" /></td>
     <?php 
     }*/
     function tambah_mahasiswa()
    {
        if(isset($_POST['proses'])) $this->insert();
        $data                   = new stdClass();
        $data->mahasiswa         = $this->mahasiswa->get_semua_mahasiswa();
        $data->view_content     = 'admin_mahasiswa';
        $this->load->view('admin_base',$data);
    }

    



}

?>
