<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

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

	public function index()
	{
		$this->load->view('Admin/login');
	}
	public function testtt()
	{
		
	}

	function category()
	{
		$this->load->view('Admin/addcategory');
	}
	function addcategory()
	{
		$data['cat_name'] = $this->input->post('category');

		 $cat =  $this->Model->insert("category",$data);
		 if($cat)
		 {
		 	redirect('Admin/showcategory');
		 }
		 else
		 {
		 	echo  "Error";
		 }

	}

	public function showcategory()
	{
		 $data['all_category'] =  $this->Model->select_all("category");
		$this->load->view('Admin/showcategory',$data);
	}

	public function subcategory()
	{
		 $data['all_category'] =  $this->Model->select_all("category");
		$this->load->view('Admin/subcategory',$data);
	}

	public function addsubcategory()
	{
		$data['category_fk'] = $this->input->post('category_fk');
		$data['sub_name'] = $this->input->post('subcategory');

		$sub_cat =  $this->Model->insert('sub_category',$data);

		 if($sub_cat)
		 {
		 	redirect('Admin/showsubcategory');
		 }
		 else
		 {
		 	echo  "Error";
		 }

    }

    public function showsubcategory()
    {
    	$data['all_subcat'] = $this->Model->join_two("sub_category","category","sub_category.category_fk = category.cat_id");
    	$this->load->view('Admin/showsubcategory',$data);
    	
    }

    public function Addproduct()
    {
    	 $data['all_category'] =  $this->Model->select_all("category");
    	 $data['all_subcat'] = $this->Model->select_all("sub_category");
    	
    	$this->load->view('Admin/addproduct',$data);
    }


    public function get_sub()
    {
    	$cat_id  = $this->input->post('cat');
    	$where  = array("category_fk" => $cat_id );
    	$get_Data = $this->Model->select_where("sub_category",$where);
    	//print_r($get_Data);
    	foreach ($get_Data as $key => $value) {
    	echo "<option value='$value->sub_id'>$value->sub_name </option>";
    	}
    }

    public function addp()
    {
    	$data['category_fk'] = $this->input->post('category_fk');
    	$data['sub_cat_fk'] = $this->input->post('sub_category');
    	$data['pro_name'] = $this->input->post('pro_name');
    	$data['pro_price']  = $this->input->post('pro_price');
    	$data['pro_details'] = $this->input->post('pro_details');

    	        $config['upload_path']          = './uploads/';
                $config['allowed_types']        = 'gif|jpg|png';
                // $config['max_size']             = 100;
                // $config['max_width']            = 1024;
                // $config['max_height']           = 768;
            $this->load->library('upload', $config); 

            $this->upload->do_upload('image');
            $upload_data =    $this->upload->data();
		    $data['pro_image'] = $upload_data['file_name'];

		    //print_r($data);
		    $upload =  $this->Model->insert("product",$data);


    }

    public function showproduct()
    {
       $data['all_product'] =  	$this->Model->select_all("product");
       $this->load->view("Admin/allproduct",$data);
    }












}
