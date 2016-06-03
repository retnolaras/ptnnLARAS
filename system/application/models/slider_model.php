<?php
class Slider_model extends Model {
    
    function Slider_model()
    {
        parent::Model();
    }
    
    function get_slider($id=NULL)
    {
        $data = array();
        if($id) $this->db->where('id', $id);

        $q = $this->db->get('slider');


        if ($q->num_rows() > 0)
        {
            foreach($q->result_array() as $row)
            {
                $data[] = $row;
            }
        }
        $q->free_result();
        return $data;
    }
    
}