<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index()
	{



		$data=array('title'=>'Porciweb');
		$this->load->view('home/header',$data);
		$this->load->view('home/nav',$data);
		$this->load->view('home/content');
		$this->load->view('home/footer');
	}
}