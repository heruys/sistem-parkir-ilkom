<?php

class Logout extends CI_Controller{
	function index(){
		session_destroy();
		redirect('Login/Mhs');
		exit;
	}

}
?>
