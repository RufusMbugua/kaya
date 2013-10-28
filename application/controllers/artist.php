<?php

error_reporting(0);
class Artist extends MY_Controller {
	
	
	function __construct() {
		parent::__construct();
		$this -> load -> library('PHPExcel');
		$this -> load -> helper('url');
		
	}
	public function index(){
		
	}	
	
}
	
?>