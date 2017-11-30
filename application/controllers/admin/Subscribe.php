<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Subscribe extends CI_Controller {

        public function __construct()
	{
            parent::__construct();

            $this->load->model('Category_Model');
            $this->load->model('Common_Modal');
            $this->load->model('Subcategory_Model');
            $this->load->model('Subscribe_Model');
            if($this->session->email == "")
            {
                redirect('account/login');
            }
	}

        public function index()
        {

            $data['subs_list'] = $this->Subscribe_Model->get_list();
            $this->load->view('admin/subscribe/list',$data);
        }

        public function deleteSubscriber($id)
        {
            $this->Subscribe_Model->deleteSubscriber($id);
            $this->session->set_flashdata('SUCCESSMSG','Subscriber Deleted Successfully!!');
            redirect('account/subscribe');
        }

}
