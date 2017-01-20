<?php
class RequestController extends CI_Controller {

	public function index()
	{
		
		$this->load->helper('url');
		$this->load->helper('form');
		$data['logged']=true;
		$data['page']='';

		$this->load->view('request_view',$data);
	}

	public function saveReservation()
	{
		$data['page']='';
		$this->load->model('Request');
		
		$this->load->helper('url');
		$this->load->helper('form');
		$this->load->library('form_validation');
		$this->form_validation->set_rules('name','Name','required|trim|alpha_numeric');
		$this->form_validation->set_rules('date','Date of the Event','required');
		$this->form_validation->set_rules('time','Time for the event','required');
		

		if($this->form_validation->run()==FALSE){
			$data['save'] = $this->input->post('save');
			$this->load->view('request_view',$data);
		}
		else{
			$request=array(
			'name' => $this->input->post('name'),
			'date' => $this->input->post('date'),
			'time' => $this->input->post('time'),
			'location' => $this->input->post('lat').','.$this->input->post('lng'),
			'description' => $this->input->post('description'),
			'package' => 3,
			'user' => (integer)($this->session->userdata('id'))
			);

			$this->Request->saveRequest($request);
			$this->sendMail();
			$this->load->view('request_view',$data);
		}
	}


	public function sendMail(){
		$config = Array(
		    'protocol' => 'smtp',
		    'smtp_host' => 'ssl://smtp.googlemail.com',
		    'smtp_port' => 465,
		    'smtp_user' => 'qfixvms@gmail.com',
		    'smtp_pass' => 'Qfixvms123',
		    'mailtype'  => 'html', 
		    'charset'   => 'iso-8859-1'
		);
		$this->load->library('email', $config);
		$this->email->set_newline("\r\n");

		// Set to, from, message, etc.
        
	    $this->email->from('qfixvms@gmail.com', 'VIVO Photography');
	    $this->email->to('ucscvmsdemo@gmail.com'); 

	    $this->email->subject('Action Required|New Reservation');
	    $this->email->message('New Reservation has been placed. Please visit the admin panel to take necessary measures.');

		$result = $this->email->send();
	}

}