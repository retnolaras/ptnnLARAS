<?php
class Menu extends Model {

    function Menu()
    {
        parent::Model();
    }

    function get_semua_menu()
    {
        $menu = array();
        $q = $this->db->get('top_menu');

        if($q->num_rows() > 0)
        {
            foreach ($q->result_array() as $row)
            {
                $row['par'] = $this->get_menu($row['parent']);
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
        $q = $this->db->query("SELECT * FROM top_menu WHERE id=$id");

        if($q->num_rows() > 0)
        {
            $data = $q->row();            
        }
        $q->free_result();
        return $data;
    }

    function update_top_menu($id, $data)
    {
        $this->db->where('id', $id);
        return $this->db->update('top_menu', $data);
    }

    function get_top_menu()
    {
        $menu = array();
        $q = $this->db->where('parent', 0);
        $q = $this->db->get('top_menu');

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

    function get_sub_menu($id=1)
    {
        $menu = array();
        $q = $this->db->where('parent', $id);
        $q = $this->db->get('top_menu');

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

}