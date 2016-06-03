<?php
class M_mahasiswa extends Model{

    function M_mahasiswa()
    {
        parent::Model();
    }

    function get_semua_mahasiswa()
    {
        $mahasiswa = array();
        $q = $this->db->get('mahasiswa');

        if($q->num_rows() > 0)
        {
            foreach ($q->result_array() as $row)
            {
                $mahasiswa[] = $row;
            }
        }

        $q->free_result();
        return $mahasiswa;
    }

    function get_mahasiswa($id=1)
    {

        $q = $this->db->query("SELECT * FROM mahasiswa WHERE id=$id");
        if($q->num_rows() > 0)
        {
            $data = $q->result_array();
        }
        $q->free_result();
        return $data;


    }

    function update_mahasiswa($id, $data)
    {
        $data = $this->db->where('id', $id);
        return $this->db->update('mahasiswa', $data);
    }

    function get_semua_alumni(){
        $alumni = array();
        $q = $this->db->get('alumni');

        if($q->num_rows() > 0)
        {
            foreach ($q->result_array() as $row)
            {
                $alumni[] = $row;
            }
        }

        $q->free_result();
        return $alumni;
    }

    function get_alumni($id=1){
        $q = $this->db->query("SELECT * FROM alumni WHERE id=$id");
        if($q->num_rows() > 0)
        {
            $data = $q->result_array();
        }
        return $data;
    }

    function update_alumni($id, $data){
        $data = $this->db->where('id', $id);
        return $this->db->update('alumni', $data);
    }

}
?>
