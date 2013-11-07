<?php
if (!defined('BASEPATH'))
	exit('No direct script access allowed');

class Portfolio extends MX_Controller {

	function __construct() {
		parent::__construct();
	}

	public function index() {
		$data['content_view'] = "portfolio/portfolio_v";
		$data['title'] = "Dashboard | System Home";
		$this -> template($data);
	}

	public function template($data) {
		$this -> load -> module('template');
		$this -> template -> index($data);
	}

}
