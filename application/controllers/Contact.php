<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contact extends CI_Controller {

        public function __construct()
	{
            parent::__construct();
            //load model
            $this->load->model('Dashboard_Model');
            $this->load->model('Category_Model');
            $this->load->model('Subcategory_Model');
            $this->load->model('Product_Model',"product_model");
            $this->load->model('Wishlist_Model',"Wishlist_Model");
            $this->load->library('cart');
            $this->load->helper('url');
            $this->load->helper('form');
            $this->load->library('session');
            $this->load->database();
            $this->load->library('encrypt');

        }


        public function index()
        {
            if(!empty($_POST))
            {
                $name = $this->input->post('name');
                $email = $this->input->post('email');
                $message = $this->input->post('message');
                $this->Dashboard_Model->Insert_Contact($name,$email,$message);
                $this->session->set_flashdata('SUCCESSMSG','Your Message hase been Successfully Send!!');
                redirect('contact');
            }
            else
            {
                $data['category_list'] = $this->Category_Model->get_list();
                $data['subcate'] = $this->Subcategory_Model->viewSubCategoryList();
                $this->load->view('contact',$data);
            }
        }

        public function sendemail()
        {
          $config = Array(
            'protocol' => 'sendmail',
            'smtp_host' => 'mail.ingresos.in',
            'smtp_port' => 25,
            'smtp_user' => 'ravikanth@ingresos.in',
            'smtp_pass' => 'ravikanth@123',
            'smtp_timeout' => '4',
            'mailtype'  => 'html',
            'charset'   => 'iso-8859-1'
          );
          $name = $this->input->post('name');
          $userEmail = $this->input->post('email');
          $subject = $this->input->post('subject');
          $this->load->library('email', $config);
          $this->email->set_newline("\r\n");
          $this->email->from($userEmail, $name);
          $data = array(
          'userName'=> $name,
          'email'=> $userEmail,
          'subject'=> $subject,
          'message'=> $this->input->post('message')
          );
          $this->email->to($userEmail);  // replace it with receiver mail id
          $this->email->subject($subject); // replace it with relevant subject
          $body = $this->load->view('email_temp',$data,TRUE);
          $this->email->message($body);
          if ($this->email->send())
          {
              // mail sent
              $this->session->set_flashdata('msg','Your mail has been sent successfully!');
              redirect('contact');
          }
          else
          {
              //error
              $this->session->set_flashdata('msg','There is error in sending mail! Please try again later');
              redirect('contact');
          }
        }


}
