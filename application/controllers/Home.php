<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Home extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */

	public function __construct()
	{
		parent::__construct();
		$this->load->Model('Model');
	}

	public function showproduct()
	{
	 	$data['all_product'] =  $this->Model->select_all("product");
		$this->load->view('User/showproduct',$data);
	}

	public function add_to_cart()
	{
		$id = $this->input->post('id');
		$name = $this->input->post('name');
		$price = $this->input->post('price');
		$qty = $this->input->post('qty');
		$image = $this->input->post('image');

		$this->load->library('cart');

		$data = array(

        'id'      => $id,
        'qty'     => $qty,
        'price'   => $price,
        'name'    => $name,
        'image'   => $image
        );

        //print_r($data);
        //
         $cart =  $this->cart->insert($data);



         // foreach ($this->cart->contents() as $items) {
         // 	echo "<br>";
         // 	echo $items['id']."<br>";
         // 	echo $items['name']."<br>";
         // 	echo $items['price']."<br>";
         // 	echo $items['qty']."<br>";
         // 	echo $items['subtotal'];
         // }
         // 
         if($cart)
         {
         	redirect('Home/display_cart');
         }
         else
         {
         	echo "Error";
         }
        
	}

	public function display_cart()
	{
		
		$this->load->view('User/display');
	}

	public function save_cart()
	{
		$fname  = $this->input->post('fname');
		$payment  = $this->input->post('payment');
		$mobile = $this->input->post('mobile');
		$address = $this->input->post('address');

		$order_code = "ORD".rand();
        date_default_timezone_set('Asia/Kolkata');
  	    $date = date('Y-M-D H:i:s');
  	    $user_fk = $this->session->userdata('reg_id');

  	    foreach ($this->cart->contents() as $items) {
  	    	
  	    	$data = array(

  	    		"order_code" =>  $order_code,
  	    		"order_product_fk" => $items['id'],
  	    		"order_user_fk" =>  $user_fk,
  	    		"order_fname" => $fname,
  	    		"order_mobile" => $mobile,
  	    		"order_address" => $address,
  	    		"order_payment" => $payment,
  	    		"order_date" => $date 
  	    		
                );

  	    	//echo "<pre>";

  	    	//print_r($data);


  	    	 $save_order =  $this->Model->insert("product_order",$data);
           }

            if($save_order)
  	    	 {
  	    	 	$this->cart->destroy();
  	    	 	redirect('Home/success');
  	    	 }
  	    	 else
  	    	 {
  	    	 	echo "Error";
  	    	 }
  	    	 

}

	public function success()
	{
		$this->load->view('User/success');
	}

	public function destroy_cart()
	{
		$this->cart->destroy();
	}





	


	}

