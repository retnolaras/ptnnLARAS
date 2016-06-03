<?php
class Basic_model extends Model
{
    var $output_table= '';

    public function __construct()
    {
        parent::Model();
        $this->load->database();
        $this->load->library('table');
        $this->load->helper(array('text','url'));
    }

    private function make_query($fields='', $table='' ,$where= array(), $limit=NULL, $offset='' ,$order=array('field'=>NULL, 'sort'=>'ASC'))
    {
        $this->db->select($fields);
        if(! is_null($order['field']))
        {
            $this->db->order_by($order['field'],$order['sort']);
        }
        return $this->db->get_where($table, $where, $limit, $offset);
    }


    public function get_course($limit=NULL, $offset='', $order=array('field'=>'num','sort'=>'ASC'))
    {
        $query=$this->make_query('kode_makul, nama_makul, deskripsi','matakuliah',array(), $limit, $offset, $order);
        if($query->num_rows() >0)
        {
            foreach ($query->result() as $value)
            {
                $this->table->add_row('<h4>' . strtoupper($value->kode_makul).'</h4>');
                $this->table->add_row('<h4>'.$value->nama_makul. '</h4>');
                $this->table->add_row($value->deskripsi);
                $this->table->add_row('<small>'. anchor('course_detail/'.$value->kode_makul,'Lihat Rincian'.'</small>'));
                $this->output_table .=$this->table->generate();
                $this->output_table .='<br />';
                $this->table->clear();
            }
            return $this->output_table;
        }
        else {
            return FALSE;
                        }

    }


    public function get_course_detail($str_id='')
    {
        if($str_id == '')
        {
            return FALSE;
        }
        $query = $this->make_query('kode_makul, nama_makul, materi,tugas,deskripi','matakuliah',array('kode_makul'=>$str_id));
        if($query->num_rows() == 1)
        {
            $value = $query->row();
            $this->output_table .='<h2>'.strtoupper($value->nama_makul).'</h2>';
            $this->table->add_row($value->kode_makul);
            $this->table->add_row($value->materi);
            $this->table->add_row($value->tugas);
            $this->output_table .= $this->table->generate();
            $this->output_table .= '<br />';
            $this->table->clear();
            return $this->output_table;
        }
        else
        {
            return FALSE;
        }
     }


    public function count_table_rows($table='')
    {
        return $this->db->count_all($table);
    }

    public function save_comment()
    {
        $post['comvisitor']=$this->input->post('visitorname');
        $post['comemail']=$this->input->post('email');
        $post['comcomment']=$this->input->post('comment');
        $post['comdate_create']=date("Y-m-d H:i:s");
        $post['comapprove']=0;

        $this->db->insert('komen', $post);
        
    }
    public function show_comment()
    {
        $this->output_table ="";
        $query = $this->make_query('comment');
        if($query->num_rows() ==1 )
        {
            $row = $query->row();
        }
        else {
            return FALSE;
              }
        $query2 = $this->nmake_query('comvisitor, comcomment, comdate_create', 'comment',array('comapprove'>=0));
        if($query2->num_rows() >0)
        {
            $this->output_table .= heading('Komentar',3);
            foreach($query->result() as $value)
            {
                $create_date = "<small>" .strftime('%d/%b/%Y %H:%M:%S', strtotime($value->comdate_create))."</small>";
                $this->output_table .= '<div class="comment">';
                $this->table->add_row($value->comvisitor.' - '.$create_date);
                $this->table->add_row($value->comcomment);
                $this->output_table .=$this->table->generate();
                $this->output_table .= '</div>';
                $this->table->clear();
            }
            return $this->output_table;
        }
        else {
            return FALSE;
        }
    }

}
?>
