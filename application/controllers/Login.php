<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function index(){
		$this->load->view('login');
	}
	
	public function logout(){
	    $sess_array = array(
                'username' => '',
                'email'=>''
        );
        $this->session->unset_userdata('logged_in', $sess_array);
        $data['message']="Successfully Logout!...";
       	$this->load->view('login', $data);
	}
	

}
