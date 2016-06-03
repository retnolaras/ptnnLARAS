<?php
class Menu_sidebar extends Model {

    function Menu_sidebar()
    {
        parent::Model();
    }

    function get_semua_menu()
    {
        $menu = array();
        $q = $this->db->get('sidebar_menu');

        if($q->num_rows() > 0)
        {
            foreach ($q->result_array() as $row)
            {
                $menu[] = $row;
            }
        }

        $q->free_result();
        return $menu;
    }

    function get_menu($id)
    {
        $data->indonesia    = "root";
        $data->english      = "root";
        $data->link         = "";
        $data->id           = 0;
        $q = $this->db->query("SELECT * FROM sidebar_menu WHERE id=$id");

        if($q->num_rows() > 0)
        {
            $data = $q->row();
        }
        $q->free_result();
        return $data;
    }

    function update_sidebar_menu($id, $data)
    {
        $this->db->where('id', $id);
        return $this->db->update('sidebar_menu', $data);
    }

    function get_sidebar_menu()
    {
        $menu = array();
        $q = $this->db->where('parent', 0);
        $q = $this->db->get('sidebar_menu');

        if($q->num_rows() > 0)
        {
            foreach ($q->result_array() as $row)
            {
                $data = $row;

                if($this->session->userdata('lang')=="indonesia")
                {
                    $data['nama'] = $data['english'];
                    $data['link'] = $data['link'];
                }
                else
                {
                    $data['nama'] = $data['indonesia'];
                    $data['link'] = $data['link'];

                }

                $menu[] = $data;
            }
        }

        $q->free_result();
        return $menu;
    }

    function get_sub_menu($id=1)
    {
        $menu = array();
        $q = $this->db->where('parent', $id);
        $q = $this->db->get('sidebar_menu');

        if($q->num_rows() > 0)
        {
            foreach ($q->result_array() as $row)
            {
                $data = $row;

                if($this->session->userdata('lang')=="indonesia")
                {
                    $data['nama'] = $data['indonesia'];
                    $data['link'] = $data['link'];
                }
                else
                {
                    $data['nama'] = $data['english'];
                    $data['link'] = $data['link'];

                }
                $menu[] = $data;
            }
        }

        $q->free_result();
        return $menu;
    }

	
    function get_mat_list()
    {
        $menu = array();
        $q = $this->db->query('SELECT * FROM matkul_upload ORDER BY id DESC');

        if($q->num_rows() > 0)
        {
            foreach ($q->result_array() as $row)
            {
                $menu[] = $row;
            }
        }

        $q->free_result();
        return $menu;
    }
}