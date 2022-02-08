<?php
 defined('BASEPATH') OR exit('No direct script access allowed');

class Usersbuyerside extends CI_Controller {
// HEADER THINGS FOTR BUYER SIDE // 

    public function homepage()
    {
     $this->load->view('users/buyerside/homepage');
    }

	public function featuresec()
	{
      $this->load->view('users/buyerside/featuresec');
	}

	public function shopsec()
	{
      $this->load->view('users/buyerside/shopsec');
	}

	public function productsec()
	{
      $this->load->view('users/buyerside/productsec');
	}

	public function catsec()
	{
      $this->load->view('users/buyerside/catsec');
	}
	public function cart()
	{
      $this->load->view('users/buyerside/Cart');
	}

	public function devsec()
	{
      $this->load->view('users/buyerside/devsec');
	}
	
	/* si carlo naglagay dito, para to sa delete profile, di ko alam saan lalagay hehe*/
	public function userdelprofile()
	{
      $this->load->view('users/buyerside/userdelprofile');
	}

	public function updatestatus($user_id, $status){
		$this -> load -> model('user_model');
		$status = 'Inactive';
		$this -> user_model -> updateUserStatus ($user_id, $status);

		redirect('/usersbuyerside/logout');
	}
	/* si carlo naglagay dito, para to maview yung shop sa shop section, di ko alam saan lalagay hehe*/

	public function logout(){
		$this->session->sess_destroy();				
		redirect('/login');
	}
	public function usershop()
	{
      $this->load->view('users/buyerside/usershop');
	}
	/* si carlo naglagay dito hanggang trpurchases, para to maview yung sa purches, di ko alam saan lalagay hehe*/
	public function allpurchases()
	{
      $this->load->view('users/buyerside/allpurchases');
	}
	public function recpurchases()
	{
      $this->load->view('users/buyerside/recpurchases');
	}
	public function compurchases()
	{
      $this->load->view('users/buyerside/compurchases');
	}
	public function trpurchases()
	{
      $this->load->view('users/buyerside/trpurchases');
	}

	############################################################
	public function viewUser(){
		$this-> load -> model ('user_model');

		$user = $this -> user_model ->getUsers($_SESSION['user_id']);

		$output['user'] = $user[0];

		$data = array();
		$data = $this->input->post();
		if(isset($data) && $data != null) {
			$this -> load -> model('user_model');
			$this -> user_model->updateUser($data);
		}

		$this->load->view('users/buyerside/profile', $output);
	}
	
	############################################################

	public function editUser(){
		$this-> load -> model ('user_model');

		$user = $this -> user_model ->getUsers($_SESSION['user_id']);

		$output['user'] = $user[0];

		$data = array();
		$data = $this->input->post();
		//$data['user_id'] = $_SESSION['user_id'];                       	edit user controller
		if(isset($data) && $data != null) {											
			$this -> load -> model('user_model');
			$this -> user_model->updateUser($data);
			redirect('/usersbuyerside/viewUser');
		}

		$this->load->view('users/buyerside/editUser', $output);
		
		
	}

	public function changepassword(){
		$this-> load -> model ('user_model');

		$user = $this -> user_model ->getUsers($_SESSION['user_id']);

		$output['user'] = $user[0];

		$data = array();
		$data = $this->input->post();
		if(isset($data) && $data != null) {											
			$this -> load -> model('user_model');
			$data['user_password'] = sha1($data['user_password']); //sha1 na to
			$data['user_pwdRepeat'] = sha1($data['user_pwdRepeat']);
			$this -> user_model->updateUser($data);
			redirect('/Usersbuyerside/viewUser'); 
														// binalik ko sa view user lang para after mag changepass don lang sya pupunta
		}

		$this->load->view('users/buyerside/changepass', $output);
		
	}


	/////////////////////////////////////////////////////////////////////////////////////////////////////////
}
