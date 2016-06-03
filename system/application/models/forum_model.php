<?php
Class Forum_model extends Model
{
    function Forum_model(){
        parent::Model();
        $this->load->library('table');
    }

    function get_all_topic()
    {
        $data = array();
        $q = $this->db->get('forum_question');
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
	
	function get_all_comment()
    {
        $data = array();
        $q = $this->db->get('komen');
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
	
	
    function get_topic($id=1)
    {
       $q = $this->db->query("SELECT * FROM forum_question WHERE id=$id");
       $data = $q->row();
       $q->free_result();
        return $data;
    }

    function get_answer($id=1)
    {
        $data = array();
        $q = $this->db->query("SELECT * FROM forum_answer WHERE a_id=$id");

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
       
    public function count_table_rows($table='')
    {
        return $this->db->count_all($table);
    }

    function get_question($id=1)
    {
         $data->view= "";
                     
    }

    function insert_question($data)
    {
        return $this->db->insert('forum_question', $data);
        
    }
     

                  
      function add_topic()
      {
          $datetime=date("d/m/y h:i:s");
          $data = array('name' => name,'topic'=>topic,'name'=>name, 'email' => email, $datetime);

          $this->db->insert('forum_question', $data);
      }
      function add_answer()
      {
          $datetime=date("d/m/y h:i:s");
          $data = array('name' => name, 'email' => email, 'answer'=> answer, $datetime);

          $this->db->insert('forum_question', $data);
      }

      function entry_insert(){

      $data = array(
	              'name'=>$this->input->post('name'),
	              'email'=>$this->input->post('email'),
	              'answer'=>$this->input->post('answer'),
	              
	            );
	    $this->db->insert('forum_answer',$data);}
}



?>
