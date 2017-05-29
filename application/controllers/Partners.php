<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Partners extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{

    $data = array();
    $data['pageTitle'] = "Partners";
    $data['page'] = "partners";
    $data['sidebar'] = $this->load->view('pages/partners/sidebar', $data, TRUE);

    $this->load->view('layout/head', $data);
    $this->load->view('layout/header', $data);

    $this->load->view('pages/partners/partners', $data);
    $this->load->view('layout/footer', $data);
	}

  public function prir_firms()
  {

    $data = array();
    $data['pageTitle'] = "Prir Firms";
    $data['page'] = "prir-firms";
    $data['sidebar'] = $this->load->view('pages/partners/sidebar', $data, TRUE);

    $this->load->view('layout/head', $data);
    $this->load->view('layout/header', $data);

    $this->load->view('pages/partners/prir-firms', $data);
    $this->load->view('layout/footer', $data);
  }

  public function stockbrokers()
  {

    $data = array();
    $data['pageTitle'] = "Stockbrokers";
    $data['page'] = "stockbrokers";
    $data['sidebar'] = $this->load->view('pages/partners/sidebar', $data, TRUE);

    $this->load->view('layout/head', $data);
    $this->load->view('layout/header', $data);

    $this->load->view('pages/partners/stockbrokers', $data);
    $this->load->view('layout/footer', $data);
  }

}
