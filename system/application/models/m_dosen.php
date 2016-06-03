<?php
class M_dosen extends Model{

    function M_dosen()
    {
        parent::Model();
    }

    function get_semua_dosen()
    {
        $dosen = array();
        $q = $this->db->get('dosen');

        if($q->num_rows() > 0)
        {
            foreach ($q->result_array() as $row)
            {
                $dosen[] = $row;
            }
        }

        $q->free_result();
        return $dosen;
    }

    function get_dosen($id=1)
    {
        
        $q = $this->db->query("SELECT * FROM dosen WHERE id=$id");
        if($q->num_rows() > 0)
        {
            $data = $q->result_array();
        }
        return $data;

        
    }

    function update_dosen($id, $data)
    {
        $data = $this->db->where('id', $id);
        return $this->db->update('dosen', $data);
    }

    
    function matkul_dosen(){
        $this->db->select('d.id, d.nama, mk.kode_makul, mk.nama_makul ')
                ->from('matakuliah mk')
                ->join('matkul_dosen mkd', 'mkd.kode_matkul=mk.kode_makul')
                ->join('dosen d', 'd.id=mkd.dosen');
        return $this->db->get()->result();
    }
    

}
?>
