<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class  Create extends CI_Controller {

 function __construct()
 {
   parent::__construct();
      $this->load->model('add_user');
 }

 function index()
 {
		$this->add_user->set_users();
		$data['status']="continue";
 		redirect('home','refresh');
 }

}

?>