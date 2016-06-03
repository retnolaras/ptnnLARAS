<?php
 class Page extends Controller {

     function Page()
     {
         parent::Controller();
         $this->load->model('Menu', 'menu');
         $this->load->model('Artikel_model', 'artikel');
         $this->load->model('Menu_sidebar', 'sidebar');
     }

     function index()
     {
         $this->load->view('admin_base');
     }

     function top_menu()
     {         
         $data                  = new stdClass();
         $data->top_menu        = $this->menu->get_semua_menu();
         $data->view_content    = "top_menu";
         $this->load->view('admin_base', $data);
     }

     function sidebar_menu()
     {
         $data                  = new stdClass();
         $data->sidebar_menu    = $this->sidebar->get_semua_menu();
         $data->view_content    = "admin_sidebar_menu";
         $this->load->view('admin_base', $data);
     }

     function update_kategori($id)
     {
         if(isset($_POST['indonesia']))
         {
             $data = array(
                 'indonesia'    => $_POST['indonesia'],
                 'english'      => $_POST['english'],
             );
             $this->artikel->update_kategori($id,$data);
         }
     }

     function update_top_menu($id)
     {
         if(isset($_POST['indonesia']))
         {
             $data = array(
                 'indonesia'    => $_POST['indonesia'],
                 'english'      => $_POST['english'],
                 'link'         => $_POST['link'],
                 'parent'       => $_POST['parent']
             );
             $this->db->where('id', $id);
             $this->db->update('top_menu', $data);
         }
     }

     function update_sidebar_menu($id)
     {
         if(isset($_POST['indonesia']))
         {
             $data = array(
                 'indonesia'    => $_POST['indonesia'],
                 'english'      => $_POST['english'],
                 'link'         => $_POST['link'],
                 'parent'       => $_POST['parent']
             );
             $this->sidebar->update_sidebar_menu($id,$data);
         }
     }

     function insert_top_menu()
     {
         if(isset($_POST['indonesia']))
         {
             $data = array(
                 'indonesia'    => $_POST['indonesia'],
                 'english'      => $_POST['english'],
                 'link'         => $_POST['link'],
                 'parent'       => $_POST['parent']
             );
             $this->db->insert('top_menu', $data);
             redirect('admin/page/top_menu');
         }
     }
    
    function insert_sidebar_menu()
    {

         if(isset($_POST['indonesia']))
         {
             $data = array(
                 'indonesia'    => $_POST['indonesia'],
                 'english'      => $_POST['english'],
                 'link'         => $_POST['link'],
                 'parent'       => $_POST['parent']
             );
             $this->db->insert('sidebar_menu', $data);
             redirect('admin/page/sidebar_menu');
         }
     }

     function load_menu($id,$nomor)
     {
         
         $menu = $this->menu->get_menu($id);
         ?>
        <td><?php echo $nomor?></td>
        <td><?php echo $id?></td>
        <td><?php echo $menu->indonesia?></td>
        <td><?php echo $menu->english?></td>
        <td><?php echo $menu->link?></td>
        <td><?php echo $menu->parent?></td>
        <td><input name="submit" type="button" value="Edit" onclick="edit(<?php echo $menu->id?>)" /> <input type="button" value="Hapus" onclick="hapus(<?php echo $menu->id?>)" /></td>
     <?php
     }

     function load_sidebar_menu($id,$nomor)
     {

         $menu = $this->sidebar->get_menu($id);
         ?>
        <td><?php echo $nomor?></td>
        <td><?php echo $id?></td>
        <td><?php echo $menu->indonesia?></td>
        <td><?php echo $menu->english?></td>
        <td><?php echo $menu->link?></td>
        <td><?php echo $menu->parent?></td>
        <td><input name="submit" type="button" value="Edit" onclick="edit(<?php echo $menu->id?>)" /> <input type="button" value="Hapus" onclick="hapus(<?php echo $menu->id?>)" /></td>
     <?php
     }

     function load_kategori($id,$nomor)
     {

         $menu = $this->artikel->get_kategori($id);
         ?>
        <td><?php echo $nomor?></td>
        <td><?php echo $id?></td>
        <td><?php echo $menu->indonesia?></td>
        <td><?php echo $menu->english?></td>
        <td><input name="submit" type="button" value="Edit" onclick="edit(<?php echo $menu->id?>)" /> <input type="button" value="Hapus" onclick="hapus(<?php echo $menu->id?>)" /></td>
     <?php
     }

    function hapus_sidebar_menu($id)
    {

        $this->db->where('id', $id);
        $this->db->delete('sidebar_menu');
        $data['view_content'] = 'admin_hapus_sidebar';
        $this->load->vars($data);
        $this->load->view('admin_base');

    }

    function hapus_top_menu($id)
    {

        $this->db->where('id', $id);
        $this->db->delete('top_menu');
        $data['view_content'] = 'admin_hapus_topmenu';
        $this->load->vars($data);
        $this->load->view('admin_base');

    }

     

 }