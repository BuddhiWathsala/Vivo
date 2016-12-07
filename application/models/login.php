<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
* 
*/
class Login extends CI_Model
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->library('session');
	}


	function login(){
		$username = $this->input->post('username');
		$pw = $this->input->post('password');

		$qry_to_login = "SELECT * FROM customer WHERE username='$username' AND password='$pw'";
		$qry = $this->db->query($qry_to_login);
		$res = $qry->result();

		foreach ($res as $value) {
			$nic = $value->id;
		}

		$rows = $qry->num_rows();

		if($rows == 1 ){
			
			$this->session->set_userdata(

				  array('username' => $username,
				  		'id' => $nic,
				  		'loggedin'=>TRUE 

				  		)
				);


		}

		return TRUE;

	}

	public function loggedin(){

		return (bool)$this->session->user_data('loggedin');

	}

	public function loggout(){

		$this->session->sess_destroy();
	}



}
?>