<?php
class Matkul_model extends Model {

    function Matkul_model()
    {
        parent::Model();
    }

    function get_matkul_dosen($id_dosen)
    {
        $data = array();
        $this->db->where('dosen', $id_dosen);
        $q = $this->db->get('matkul_dosen');
        foreach ($q->result_array() as $row) {
            $matkul = $this->get_matkul($row['kode_matkul']);
            $row['nama_makul'] = $matkul['nama_makul'];
            $data[] = $row;
        }
        return $data;
    }

    function get_dosen($id)
    {
        $data = array();
        $this->db->where('id', $id);
        $q = $this->db->get('dosen');
        foreach ($q->result_array() as $row) {
            $data = $row;
        }
        return $data;
    }

    function get_matkul($id)
    {
        $data = array();
        $this->db->where('kode_makul', $id);
        $q = $this->db->get('matakuliah');
        foreach ($q->result_array() as $row) {
            $data = $row;
        }
        return $data;
    }

    function get_semua_matkul()
    {
        $data = array();
        $q = $this->db->get('matakuliah');
        foreach ($q->result_array() as $row) {
            $data[] = $row;
        }
        return $data;
    }

    function get_uploaded_matkul($kode_matkul)
    {
        $data = array();
        $this->db->where('kode_matkul', $kode_matkul);
        $q = $this->db->get('matkul_upload');
        foreach ($q->result_array() as $row) {
            $dosen = $this->get_dosen($row['dosen']);
            $row['pengupload'] = $dosen['nama'];
            $data[] = $row;
        }
        return $data;
    }

    function get_materi($id)
    {
        $data = array();
        $this->db->where('id', $id);
        $q = $this->db->get('matkul_upload');
        foreach ($q->result_array() as $row) {
            $data = $row;
        }
        return $data;
    }
	
	function get_dosen_pengampu(){
		
	}

}