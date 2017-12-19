<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cart extends CI_Controller {

        public function __construct()
	{
            parent::__construct();
            //load model
            $this->load->model('Dashboard_Model');
            $this->load->model('Category_Model');
            $this->load->model('Subcategory_Model');
            $this->load->model('Product_Model',"product_model");
            $this->load->library('cart');
            $this->load->helper('url');
            $this->load->helper('form');
            $this->load->library('session');
            $this->load->database();
            $this->load->library('encrypt');
            $this->cart->product_name_rules = '[:print:]';
        }


        public function index()
        {

        }

            function add()
            {
                $image =  $this->input->post('image');
                $insert_data = array(
                        'id' => $this->input->post('id'),
                        'name' => $this->input->post('name'),
                        'price' => $this->input->post('price'),
                        'image' => $this->input->post('image'),
                        'color' => $this->input->post('color'),
                        'size' => $this->input->post('size'),
                        'qty' => $this->input->post('qty')
                );
                $this->cart->insert($insert_data);
                redirect('cart');
            }
            function remove($rowid) {

		if ($rowid==="all"){
                   	$this->cart->destroy();
		}else{
                   	$data = array(
				'rowid'   => $rowid,
				'qty'     => 0
			);
                   	$this->cart->update($data);
		}
            	redirect('cart');
	}


        function update_cart(){
            // Recieve post values,calcute them and update
            $cart_info =  $_POST['cart'] ;
            foreach( $cart_info as $id => $cart)
            {
                $rowid = $cart['rowid'];
                $price = $cart['price'];
                $amount = $price * $cart['qty'];
                $qty = $cart['qty'];

                    $data = array(
                            'rowid'   => $rowid,
                            'price'   => $price,
                            'amount' =>  $amount,
                            'qty'     => $qty
                    );

                    $this->cart->update($data);
            }
            redirect('cart');
	}

  public function submitEqform()
  {
    //print_r($this->cart->contents());exit;
    if($this->input->post()){
      if($cart = $this->cart->contents()){
        $eqdata = array(
          'eq_fname'        => $this->input->post('fname'),
          'eq_lname'        => $this->input->post('lname'),
          'eq_email'        => $this->input->post('email'),
          'eq_phone'        => $this->input->post('phone'),
          'eq_address1'     => $this->input->post('add1'),
          'eq_address2'     => $this->input->post('add2')
        );
        foreach ($cart as $item)
        {
            $eqdata['pro_id'] = $item['id'];
            $eqdata['eq_product_name'] = $item['name'];
            $eqdata['eq_qty'] = $item['qty'];
            $res = $this->product_model->productEnquiry($eqdata);
        }
        if($res){
          $result = ['status'=>TRUE, 'message'=>'Your products query sent to enquiry deportment. We will get back to you soon.'];
          echo json_encode($result);
        }else{
          $result = ['status'=>FALSE, 'message'=>'Some thing went Worng. Please try again.'];
          echo json_encode($result);
        }
    }else{
      $result = ['status'=>FALSE, 'message'=>'Please add products to cart and try again.'];
      echo json_encode($result);
    }
    }else{
      $result = ['status'=>FALSE, 'message'=>'Some thing went Worng. Please try again.'];
      echo json_encode($result);
    }
  }


}
