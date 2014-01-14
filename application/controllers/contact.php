<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Contact extends MY_Controller {

	public function index()
	{
		$this->load->helper(array('url','html'));
		$this->load->helper('language');  
		$this->lang->load('contact');
		$this->_render('pages/contact');
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */