<?php
 defined('BASEPATH') OR exit('No direct script access allowed');

class Userssellerside extends CI_Controller {
// HEADER THINGS FOTR SELLER SIDE // 

    public function homepage()
    {
     $this->load->view('users/sellerside/homepage');
    }

	public function featuresec()
	{
      $this->load->view('users/sellerside/featuresec');
	}

	public function shopsec()
	{
      $this->load->view('users/sellerside/shopsec');
	}

	public function productsec()
	{
      $this->load->view('users/sellerside/productsec');
	}

	public function catsec()
	{
      $this->load->view('users/sellerside/catsec');
	}

	public function devsec()
	{
      $this->load->view('users/sellerside/devsec');
	}
	/* si carlo naglagay dito, para to sa delete profile, di ko alam saan lalagay hehe*/
	public function userdelprofile()
	{
      $this->load->view('users/sellerside/userdelprofile');
	}
	/* si carlo naglagay dito, para to maview yung shop sa shop section, di ko alam saan lalagay hehe*/
	public function usershop()
	{
<<<<<<< HEAD
      $this->load->view('users/usershop');
	}
	/* si carlo naglagay dito hanggang trpurchases, para to maview yung sa purches, di ko alam saan lalagay hehe*/
	public function allpurchases()
	{
      $this->load->view('users/allpurchases');
	}
	public function recpurchases()
	{
      $this->load->view('users/recpurchases');
	}
	public function compurchases()
	{
      $this->load->view('users/compurchases');
	}
	public function trpurchases()
	{
      $this->load->view('users/trpurchases');
	}

=======
      $this->load->view('users/sellerside/usershop');
	}
	/* si carlo naglagay dito hanggang trpurchases, para to maview yung sa purches, di ko alam saan lalagay hehe*/
	public function shopprofile()
	{
      $this->load->view('users/sellerside/shopprofile');
	}
	
>>>>>>> 3a949392535e7f78cb2a56a504019da7fcb6d717
	public function viewUser(){
		$this-> load -> model ('user_model');

		$user = $this -> user_model ->getUsers($_SESSION['user_id']);

		$output['user'] = $user[0];

		$data = array();
		$data = $this->input->post();
		//$data['user_id'] = $_SESSION['user_id'];
		if(isset($data) && $data != null) {
			$this -> load -> model('user_model');
			$this -> user_model->updateUser($data);
		}

		$this->load->view('users/sellerside/profile', $output);
		//redirect('/Homepage');
	}

	public function editUser(){
		$this-> load -> model ('user_model');

		$user = $this -> user_model ->getUsers($_SESSION['user_id']);

		$output['user'] = $user[0];

		$data = array();
		$data = $this->input->post();
		//$data['user_id'] = $_SESSION['user_id'];                       	edit user controller
		if(isset($data) && $data != null) {											
			$this -> load -> model('user_model');
<<<<<<< HEAD
=======
			
>>>>>>> 3a949392535e7f78cb2a56a504019da7fcb6d717
			$this -> user_model->updateUser($data);
			redirect('/userssellerside/viewUser');
		}

		$this->load->view('users/sellerside/editUser', $output);
		
		
	}

	public function changepassword(){
		$this-> load -> model ('user_model');

		$user = $this -> user_model ->getUsers($_SESSION['user_id']);

		$output['user'] = $user[0];

		$data = array();
		$data = $this->input->post();
		if(isset($data) && $data != null) {											
			$this -> load -> model('user_model');
			$data['user_password'] = md5($data['user_password']); //md5
			$data['user_pwdRepeat'] = md5($data['user_pwdRepeat']);
			$this -> user_model->updateUser($data);
<<<<<<< HEAD
			redirect('/Userssellerside/viewUser'); 
													// binalik ko sa view user lang para after mag changepass don lang sya pupunta
=======
			redirect('/logout'); //dapat dito is destroy session or logout
>>>>>>> 3a949392535e7f78cb2a56a504019da7fcb6d717
		
		}

		$this->load->view('users/sellerside/changepass', $output);
		
	}
<<<<<<< HEAD
=======
	
>>>>>>> 3a949392535e7f78cb2a56a504019da7fcb6d717

	/////////////////////////////////////////////////////////////////////////////////////////////////////////
}
