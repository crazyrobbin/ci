
<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
session_start(); //we need to call PHP's session object to access it through CI
class Home extends CI_Controller {

 function __construct()
 {
   parent::__construct();
   $this->load->model('event');
   $this->load->model('tutorial');
   $this->load->model('project');
   $this->load->model('contact');
   $this->load->model('achivement');

 }

 function index()
 {
   if($this->session->userdata('logged_in'))
   {
     $session_data = $this->session->userdata('logged_in');
     $data['username'] = $session_data['username'];
     $data['name'] = $session_data['name'];
     $data['status']="login";
     $data['event'] = $this->event->get_event();
     $this->load->view('home', $data);
   }
   else
   {
     $data['status']="logout";
     $data['event'] = $this->event->get_event();
     $this->load->view('home', $data);
   }
 }

 function logout()
 {
   $this->session->unset_userdata('logged_in');
   session_destroy();
   redirect('home', 'refresh');
 }

  function home1()
 {
    if (isset($_SERVER['HTTP_X_REQUESTED_WITH']))
      {
          $this->load->view('home1');
      }
    else echo "<h1>Good try but you are not the best</h1>";

 }

  function tutorial()
 {

    if (isset($_SERVER['HTTP_X_REQUESTED_WITH']))
      {
        $data['tutorial'] = $this->tutorial->get_tutorial();
        $this->load->view('tutorial', $data);
      }
    else echo "<h1>Good try but you are not the best</h1>";

 }

   function achivement()
 {
    if (isset($_SERVER['HTTP_X_REQUESTED_WITH']))
      {
          $data['achivement'] = $this->achivement->get_achivement();
          $this->load->view('achivement', $data);
      }
    else echo "<h1>Good try but you are not the best</h1>";

 }

   function contact()
 {
    if (isset($_SERVER['HTTP_X_REQUESTED_WITH']))
      {
         $data['cordi'] = $this->contact->get_contact_cordi();
         $data['seci'] = $this->contact->get_contact_seci();
         $this->load->view('contact', $data);
      }
    else echo "<h1>Good try but you are not the best</h1>";
    
 }

   function project()
 {
    if (isset($_SERVER['HTTP_X_REQUESTED_WITH']))
      {
         $data['project'] = $this->project->get_project();
         $this->load->view('project', $data);
      }
    else echo "<h1>Good try but you are not the best</h1>";

 }


}

?>

