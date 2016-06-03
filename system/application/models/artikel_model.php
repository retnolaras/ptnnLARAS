<?php
class Artikel_model extends Model {

    function Artikel_model()
    {
        parent::Model();
    }

    function get_semua_artikel($kategori=NULL)
    {
        $data = array();
        if(isset($kategori))
        {
            $this->db->where('kategori', $kategori);
        }
        $q = $this->db->get('artikel');

        if($q->num_rows() > 0)
        {
            foreach ($q->result_array() as $row)
            {
                $data[] = $row;
            }
        }

        $q->free_result();
        return $data;
    }

    function get_artikel($id=1)
    {
        $data->title= "";
        $data->isi = "";
        $q = $this->db->query("SELECT * FROM artikel WHERE id=$id");

        if($q->num_rows() > 0)
        {
            $data = $q->row();
            if($this->session->userdata('lang')=="indonesia")
            {
                $data->title = $data->judul_ind;
                $data->isi = $data->isi_ind;
            }
            else
            {
                $data->title = $data->judul_eng;
                $data->isi = $data->isi_eng;
            }
        }
        
        

        $q->free_result();
        return $data;
    }
	
	 function get_berita()
    {
        $data->title= "";
        $data->isi = "";
        $q = $this->db->query("SELECT * FROM artikel WHERE kategori='1' ORDER BY id DESC");

        if($q->num_rows() > 0)
        {
            $data = $q->row();
            if($this->session->userdata('lang')=="indonesia")
            {
                $data->title = $data->judul_ind;
                $data->isi = $data->isi_ind;
            }
            else
            {
                $data->title = $data->judul_eng;
                $data->isi = $data->isi_eng;
            }
        }
        
        

        $q->free_result();
        return $data;
    }
	
	function get_judul()
	{
        $data = array();
        $q = $this->db->query("SELECT judul_ind, judul_eng,id FROM artikel WHERE kategori='1' ORDER BY id DESC");

         if($q->num_rows() > 0)
        {
            foreach ($q->result_array() as $row)
            {
                $data[] = $row;
            }
        }

        $q->free_result();
        return $data;
        
    }
	

    function insert_artikel($data)
    {
        return $this->db->insert('artikel', $data);
    }

    function update_artikel($id_artikel, $data)
    {
        $this->db->where('id', $id_artikel);
        return $this->db->update('artikel', $data);
    }

    function update_kategori($id, $data)
    {
        $this->db->where('id', $id);
        return $this->db->update('kategori', $data);
    }

    function hapus_artikel($id)
    {
        return $this->db->delete('artikel', array('id' => $id));
    }

    function get_semua_kategori()
    {
        $data = array();
        $q = $this->db->get('kategori');

        if($q->num_rows() > 0)
        {
            foreach ($q->result_array() as $row)
            {

                if($this->session->userdata('lang')=="indonesia")
                {
                    $row['nama'] = $row['indonesia'];
                }
                else
                {
                    $row['nama'] = $row['english'];
                }
                $data[] = $row;
            }
        }

        $q->free_result();
        return $data;
    }

    function get_kategori($id=1)
    {
        $data->nama= "";
        $q = $this->db->query("SELECT * FROM kategori WHERE id=$id");

        if($q->num_rows() > 0)
        {
            $data = $q->row();
            if($this->session->userdata('lang')=="indonesia")
            {
                $data->nama = $data->indonesia;
            }
            else
            {
                $data->nama = $data->english;
            }
        }
        $q->free_result();
        return $data;
    }

    function insert_kategori($data)
    {
        $this->db->insert('kategori', $data);
    }

    function get_counter()
    {
        $x = $this->db->get('counter');
        $counter = $x->result_array();
        $counter = $counter[0];
        return $counter['count'];
    }

    function plus_counter()
    {
        $count = $this->get_counter();
        $data = array(
            "count" => ++$count
        );
        $this->db->update('counter', $data);
    }
	
	function ambil_gambar(){
		$this->db->select('id, judul, isi, gambar');
		$this->db->from('galery');
		$query = $this->db->get();
		return $query;
	}

}