<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Search extends CI_Controller {

        public function __construct()
	{
            parent::__construct();
            //load model
            $this->load->model('Dashboard_Model');

        }

        public function index()
        {
            $data['category_list'] = $this->Category_Model->get_list();
            $data['slider'] = $this->Dashboard_Model->get_slider();
            $data['subcate'] = $this->Subcategory_Model->viewSubCategoryList();
            $data['latest_product'] = $this->Dashboard_Model->latest_product();
            $data['popular_product_powertool'] = $this->Dashboard_Model->popular_product(6);
            $data['popular_product_accessories'] = $this->Dashboard_Model->popular_product(7);
            $data['popular_product'] = $this->Dashboard_Model->popular_product();
            $data['feature_product'] = $this->Dashboard_Model->feature_product();
            $this->load->view('dash',$data);
        }

        public function get_products(){
          if (isset($_GET['term'])){
            //$q = strtolower($_GET['term']);
            $this->Dashboard_Model->get_search_products($_GET['term']);
          }
        }

        public function result()
        {
          $par = $this->input->post('product_id');
          redirect('ProductDetail/'.$par);
        }
}
