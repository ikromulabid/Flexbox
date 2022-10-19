<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index()
	{
		$this->load->view('Home');

	}

    public function dashboard()
	{
		$this->load->view('dashboard');
		$this->load->view('Home');

	}
    public function view2()
	{
		$this->load->view('view2');

	}

    public function view3()
	{
		$this->load->view('view3');

	}

    public function view4()
	{
		$this->load->view('view4');

	}

    public function view5()
	{
		$this->load->view('view5');

	}
    public function view6()
	{
		$this->load->view('view6');

	}
    public function view7()
	{
		$this->load->view('view7');

	}
    public function view8()
	{
		$this->load->view('view8');

	}
    public function view9()
	{
		$this->load->view('view9');

	}
}
