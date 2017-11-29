<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Enquiry extends CI_Controller {

        public function __construct()
	{
            parent::__construct();

            $this->load->model('Category_Model');
            $this->load->model('Common_Modal');
            $this->load->model('Subcategory_Model');
            $this->load->model('Enquiry_Model');
            if($this->session->email == "")
            {
                redirect('account/login');
            }
	}

        public function index()
        {

            $data['eq_list'] = $this->Enquiry_Model->get_list();
            $this->load->view('admin/enquiry/list',$data);
        }

        public function deleteEnquiry($id)
        {
            $this->Enquiry_Model->deleteEnquiry($id);
            $this->session->set_flashdata('SUCCESSMSG','Enquiry Deleted Successfully!!');
            redirect('account/enquiry');
        }

}
