<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
	public function form_menu_insert()
	{
		
		$this->load->view('menu_insert',); 
		
	}
}
