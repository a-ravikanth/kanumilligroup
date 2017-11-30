<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Dashboard_Model extends CI_Model {

        public function latest_product()//id=1
        {
            $this->db->select(" * ");
            $this->db->from('tbl_products');
            $this->db->where('product_type', '1');
            $this->db->limit('4');
            $query = $this->db->get();
            return $query->result();
        }
        public function popular_product($catid=NULL)//id=2
        {
            $this->db->select(" * ");
            $this->db->from('tbl_products');
            $this->db->where('product_type', '2');
            if($catid){
              $this->db->where('category_id', $catid);
            }
            $this->db->limit('4');
            $query = $this->db->get();
            return $query->result();
        }
        public function feature_product()//id=3
        {
            $this->db->select(" * ");
            $this->db->from('tbl_products');
            $this->db->where('product_type', '3');
            $this->db->limit('4');
            $query = $this->db->get();
            return $query->result();
        }
        public function get_slider()
        {
            $this->db->select(" * ");
            $this->db->from('tbl_slider_images');
//            $this->db->order_by('rand()');
//            $this->db->limit('3');
            $query = $this->db->get();
            return $query->result();
        }

        public function detail_view_product($id){
        $this -> db -> select(' * ');
        $this -> db -> from('tbl_products');
        $this->db->where('id', $id);
        $query = $this -> db -> get();
        return $query->result();
        }

        public function products_detail($product){
        $this -> db -> select(' * ');
        $this -> db -> from('tbl_products');
        $this->db->where('id', $product);
        $query = $this -> db -> get();
        return $query->result();
        }
        public function Insert_Contact($name,$email,$message){
            $this->db->set('name', $name);
            $this->db->set('email',$email);
            $this->db->set('message',$message);
            $this->db->set('date',date("Y-m-d H:i:s"));
            $this->db->insert('tbl_contact');
        }
        public function subscribe_email(){
          $data=array('email'=>$this->input->post('email'));
          $this->db->insert('tbl_subscribers',$data);
          $response=$this->db->insert_id();
          return $response;
        }
        function get_search_products($q){
          $this->db->select('*');
          $this->db->like('product_name', $q);
          $query = $this->db->get('tbl_products');
          if($query->num_rows() > 0){
            foreach ($query->result_array() as $row){
              $new_row['label']=htmlentities(stripslashes($row['product_name']));
              $new_row['value']=htmlentities(stripslashes($row['id']));
              $row_set[] = $new_row; //build an array
            }
            echo json_encode($row_set); //format the array into json data
          }
        }

}
