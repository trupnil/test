<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

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
		$this->load->view('welcome_message');
	}

	public function mini()
	{
		//echo "mini";
		$this->load->view('sarita');
	}

	public function adddata()
	{
		// $fname = $this->input->post('fname');
		// $lname = $this->input->post('lname');
		// $email = $this->input->post('email');
		// $password = $this->input->post('password');
		// $dob = $this->input->post('dob');

		// $data = array(

		// 	"reg_fname"=>$fname,
		// 	"reg_lname"=>$lname,
		// 	"reg_email" => $email,
		// 	"reg_password" => $password,
		// 	"reg_dob" => $dob
  //          );
		//print_r($data);


		$data['reg_fname'] = $this->input->post('fname');
		$data['reg_lname'] = $this->input->post('lname');
		$data['reg_email'] = $this->input->post('email');
		$data['reg_password'] = $this->input->post('password');
		$data['reg_dob'] = $this->input->post('dob');

		//print_r($data);

		 $ins =  $this->Model->insert("reg",$data);

		 if($ins)
		 {
		 	redirect('welcome/mini');
		 }
		 else
		 {
		 	echo "Error";
		 }



	}


	public function showdata()
	{
		$data['all_data'] =  $this->Model->select_all("reg");
		$this->load->view('showdata',$data);
	}

	public function delete($id)
	{

		//echo $id;
		$where = array("reg_id" => $id);
		 $delete =  $this->Model->delete("reg",$where);

		 if($delete)
		 {
		 	redirect('Welcome/showdata');

		 }
		 else
		 {
		 	echo "Error";
		 }

	}

	public function edit($id)
	{

		//echo $id;
		$where = array("reg_id" => $id);
		$data['edit_data'] = $this->Model->select_where("reg",$where);

		//print_r($data['edit_data']);

		$this->load->view('edit',$data);

	}

	public function update()
	{
		$reg_id = $this->input->post('reg_id');
		$where = array("reg_id" => $reg_id);
        $data['reg_fname'] = $this->input->post('fname');
		$data['reg_lname'] = $this->input->post('lname');
		$data['reg_email'] = $this->input->post('email');
		$data['reg_password'] = $this->input->post('password');
		$data['reg_dob'] = $this->input->post('dob');
        $update =  $this->Model->update("reg",$data,$where);

			 if($update)
		 {
		 	redirect('Welcome/showdata');

		 }
		 else
		 {
		 	echo "Error";
		 }




	}

	public function login()
	{
		$this->load->view('login');
	}

	public function auth()
	{

		$data['reg_email'] = $this->input->post('email'); 
		$data['reg_password'] = $this->input->post('password');

		$login = $this->Model->select_where("reg",$data);
		// echo "<pre>";
		// print_r($login);

		if(count($login) == 1)
		{
			$this->load->library('session');
			$sess_array = array(); //data member
			foreach ($login as $key => $value) {

				$sess_array = array(

				"reg_id" => $value->reg_id,
				"reg_fname" => $value->reg_fname,
				"reg_lname" => $value->reg_lname,
				"reg_email" => $value->reg_email,
				"reg_password" => $value->reg_password,
				"reg_dob" => $value->reg_dob
                   );


				$this->session->set_userdata($sess_array);

				//echo $this->session->userdata('reg_id');
				//
				redirect('welcome/profile');
				

			}


			
        }
		else
		{
			echo "Error";
		}

	}

	public function profile()
	{
		$this->load->view('profile');
	}


	public function facebook()
	{
		$this->load->view('facebook');
	}

	





}
