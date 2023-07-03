<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('M_Home');
		// auth_menu();
	}

	private function load()
	{
		$data = array(
			'kategori' => $this->M_Home->getDataKategori(),
		);

		$page = array(
			"head" => $this->load->view('template_view/head', false, true),
            "header" => $this->load->view('template_view/header', $data, true),
            "main_js" => $this->load->view('template_view/main_js', false, true),
            "footer" => $this->load->view('template_view/footer', false, true)
        );
        
        return $page;
	}

    public function index()
	{
		$data = array(
			'jumlahaplikasi' => $this->M_Home->getJumlahAplikasi(),
		);

		$path = "";
        $data = array(
            "page" => $this->load($path),
            "content" => $this->load->view('index', $data, true)
        );
        $this->load->view('template_view/default_template', $data);
	}
}