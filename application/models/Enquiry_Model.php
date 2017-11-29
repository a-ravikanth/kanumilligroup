<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Enquiry_Model extends CI_Model {

        public function get_list()
        {
                $this->db->select(" * ");
                $this->db->from('tbl_enquiry');
//                $this->db->where('status','0');
                $this->db->order_by('eq_id','desc');
                $query = $this->db->get();
                return $query->result();
        }
        function deleteEnquiry($id) {
            $this->db->where('eq_id',$id);
            $this->db->delete('tbl_enquiry');
        }

}
