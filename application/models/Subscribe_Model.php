<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Subscribe_Model extends CI_Model {

        public function get_list()
        {
            $this->db->select(" * ");
            $this->db->from('tbl_subscribers');
            $this->db->order_by('id','desc');
            $query = $this->db->get();
            return $query->result();
        }
        function deleteSubscriber($id) {
            $this->db->where('id',$id);
            $this->db->delete('tbl_subscribers');
        }

}
