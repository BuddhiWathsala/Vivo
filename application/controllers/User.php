<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
* 
*/
class User extends CI_Controller
{
	function __construct(){
		parent::__construct();
		$this->load->model('login');
	}


	public function redirectfunc()
	{
		$this->load->view('index');
	}

	function login(){
		$res = $this->login->login();
		if($res){
			$this->load->view('welcome_message');
		}

	}

	function error(){

		$this->load->view('notFound');
	}

	function logout(){

		$this->login->loggout();
		redirect('Welcome');

	}
}


?>
