<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Layouts extends CI_Controller {

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
	public function index(){
	  //  echo "this is testing";
		$this->load->view('ui/dashboard');
	}
	public function layout_param($num){
		echo $num . "this is the number which is get from this site url";
	}
	public function layout_params($num,$var){
		echo $num . "this is the number which is get from this site url". $var . "base url is =". base_url();
	}
	
	
}
