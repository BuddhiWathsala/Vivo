<?php
class UserController extends CI_Controller {

	public function index()
	{
		
		$this->load->helper('url');
		$this->load->helper('form');

		if(($this->session->has_userdata('id'))) {
			$data['logged']=true;
		}
		$data['page']='';
		$this->load->view('home',$data);
	}
	public function registerUser()
	{
		$data['page']='';
		$this->load->model('user_model');
		
		$this->load->helper('url');
		$this->load->helper('form');
		$this->load->library('form_validation');
		$this->form_validation->set_rules('nic','NIC number','required|trim|regex_match[/^[0-9]{9}[vV]$/]');
		$this->form_validation->set_rules('name','Name','required|trim|alpha');
		$this->form_validation->set_rules('email','E-mail','required|trim|valid_email');
		$this->form_validation->set_rules('contact_no','Contact Number','required|trim|numeric');
		$this->form_validation->set_rules('username','Username','required|trim|alpha_numeric');
		$this->form_validation->set_rules('password','Password','required|alpha_numeric');
		$this->form_validation->set_rules('confirm_password','Password Confirmation','required|matches[password]');

		if($this->form_validation->run()==FALSE){
			$data['register'] = $this->input->post('register');
			$this->load->view('home',$data);
		}
		else{
			$user=array(
			'nic' => $this->input->post('nic'),
			'name' => $this->input->post('name'),
			'email' => $this->input->post('email'),
			'contact_no' => $this->input->post('contact_no'),
			'username' => $this->input->post('username'),
			'password' => $this->input->post('password'),
			'join_date' => date('Y-m-d')
			);

			$this->load->model('user_model');
			$this->user_model->saveUser($user);
			$this->load->view('home',$data);
		}

		
	}
	public function login()
	{
		$this->load->model('user_model');
		$this->load->helper('url');
		$this->load->helper('form');
		$this->load->library('form_validation');
		$this->form_validation->set_rules('email','E-mail','required|trim|valid_email');
		$this->form_validation->set_rules('password','Password','required|alpha_numeric');

		if($this->form_validation->run()==FALSE){
			$data['login'] = $this->input->post('login');
			$this->load->view('home',$data);
		}
		else{
			
			$email = $this->input->post('email');
			$password = $this->input->post('password');
			

			$this->load->model('user_model');
			$acc = $this->user_model->login($email,$password);

			if($acc){
				$this->session->set_userdata('id',$acc[0]->nic);
				$data['profile'] =$this->user_model->getUserProfile($this->session->userdata('id'));
				$data['logged']=true;
				$this->load->view('home',$data);
			}
			else{
				$data['invlogin']=true;
				$this->load->view('home',$data);
			}
		}

		
	}
	public function updateUser()
	{
		$data['logged']=true;
		$this->load->helper('url');
		$this->load->helper('form');
		$this->load->library('form_validation');
		$this->load->model('user_model');

		$this->form_validation->set_rules('email','E-mail','required|trim|valid_email');
		$this->form_validation->set_rules('contact_no','Contact Number','required|trim|numeric');
		$this->form_validation->set_rules('password','Password','required|alpha_numeric');
		$this->form_validation->set_rules('confirm_password','Password Confirmation','required|matches[password]');

		if($this->form_validation->run()==FALSE){
			$data['edit'] = $this->input->post('edit');			
		}
		else{
			$user=array(
			'email' => $this->input->post('email'),
			'contact_no' => $this->input->post('contact_no'),
			'password' => $this->input->post('password')
			);
			$this->user_model->updateUser($user);

		}


		$data['profile'] =$this->user_model->getUserProfile($this->session->userdata('id'));
		$this->load->view('profile_view',$data);
	}

	public function logout(){
		$this->session->unset_userdata('id');
		$this->load->helper('url');
		$this->load->helper('form');

		$data['page']='';
		$this->load->view('home',$data);
	
	}

}