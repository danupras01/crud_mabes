<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Dasboard extends CI_Controller {
	
	function index (){
	$this->load->view("dasboard/index.php");
}
	
}