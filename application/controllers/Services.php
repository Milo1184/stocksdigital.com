<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Services extends CI_Controller {

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

    $this->load->helper('url');
    redirect('/#services');
	}

  public function research_coverage()
  {

    $data = array();
    $data['pageTitle'] = "Research Coverage";
    $data['page'] = "research-coverage";
    $data['sidebar'] = $this->load->view('pages/services/sidebar', $data, TRUE);

    $this->load->view('layout/head', $data);
    $this->load->view('layout/header', $data);

    $this->load->view('pages/services/research-coverage', $data);
    $this->load->view('layout/footer', $data);
  }

  public function investor_news_services()
  {

    $data = array();
    $data['pageTitle'] = "Investor News Services";
    $data['page'] = "investor-news-services";
    $data['sidebar'] = $this->load->view('pages/services/sidebar', $data, TRUE);

    $this->load->view('layout/head', $data);
    $this->load->view('layout/header', $data);

    $this->load->view('pages/services/investor-news-services', $data);
    $this->load->view('layout/footer', $data);
  }

  public function marketing_bursts()
  {

    $data = array();
    $data['pageTitle'] = "Marketing Bursts";
    $data['page'] = "marketing-bursts";
    $data['sidebar'] = $this->load->view('pages/services/sidebar', $data, TRUE);

    $this->load->view('layout/head', $data);
    $this->load->view('layout/header', $data);

    $this->load->view('pages/services/marketing-bursts', $data);
    $this->load->view('layout/footer', $data);
  }

  public function company_website_content_and_management()
  {

    $data = array();
    $data['pageTitle'] = "Company Website Content and Management";
    $data['page'] = "company-website";
    $data['sidebar'] = $this->load->view('pages/services/sidebar', $data, TRUE);

    $this->load->view('layout/head', $data);
    $this->load->view('layout/header', $data);

    $this->load->view('pages/services/company-website', $data);
    $this->load->view('layout/footer', $data);
  }

  public function investor_mailing_list_database()
  {

    $data = array();
    $data['pageTitle'] = "Investor Mailing List Database";
    $data['page'] = "investor-mailing-list";
    $data['sidebar'] = $this->load->view('pages/services/sidebar', $data, TRUE);

    $this->load->view('layout/head', $data);
    $this->load->view('layout/header', $data);

    $this->load->view('pages/services/investor-mailing-list', $data);
    $this->load->view('layout/footer', $data);
  }

  public function social_media()
  {

    $data = array();
    $data['pageTitle'] = "Social Media";
    $data['page'] = "social-media";
    $data['sidebar'] = $this->load->view('pages/services/sidebar', $data, TRUE);

    $this->load->view('layout/head', $data);
    $this->load->view('layout/header', $data);

    $this->load->view('pages/services/social-media', $data);
    $this->load->view('layout/footer', $data);
  }

  public function icat_digital_advertising()
  {

    $data = array();
    $data['pageTitle'] = "ICAT Digital Advertising";
    $data['page'] = "digital-advertising";
    $data['sidebar'] = $this->load->view('pages/services/sidebar', $data, TRUE);

    $this->load->view('layout/head', $data);
    $this->load->view('layout/header', $data);

    $this->load->view('pages/services/digital-advertising', $data);
    $this->load->view('layout/footer', $data);
  }

  public function reporting_metrics()
  {

    $data = array();
    $data['pageTitle'] = "Reporting Metrics";
    $data['page'] = "reporting-metrics";
    $data['sidebar'] = $this->load->view('pages/services/sidebar', $data, TRUE);

    $this->load->view('layout/head', $data);
    $this->load->view('layout/header', $data);

    $this->load->view('pages/services/reporting-metrics', $data);
    $this->load->view('layout/footer', $data);
  }
}
