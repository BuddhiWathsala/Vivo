<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Test extends CI_Controller {

	public function view($page = 'Test')
	{
		// https://www.codeigniter.com/userguide3/helpers/html_helper.html
		$this->load->helper('html');
		// $this->load->helper('html'); not used
		// http://www.formget.com/codeigniter-loading-css-and-javascript-file/
		$this->load->helper('url');
		//echo base_url(); // work after $this->load->helper('url');
		// load multiple helper
		// $this->load->helper(
		//	array('helper1', 'helper2', 'helper3')
		// );
        if ( ! file_exists(APPPATH.'views/admin/'.$page.'.php'))
        {
                // Whoops, we don't have a page for that!
                show_404();
        }
		$data['title'] = $page; // Capitalize the first letter
    $this->load->view("admin/".$page, $data);

	}
		public function index()
	{
		$this->load->helper('html');
		$this->load->helper('url');
		$this->load->view('index');
	}
}
?>
