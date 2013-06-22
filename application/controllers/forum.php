<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
session_start(); //we need to call PHP's session object to access it through CI
class Forum extends CI_Controller {

 function __construct()
 {
   parent::__construct();
   $this->load->model('event');
   $this->load->model('forum_content');
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
   }
   else
   {
     $data['status']="logout";
     $data['event'] = $this->event->get_event();
   }
     $data['forum'] = $this->forum_content->get_forum('none');
     $this->load->view('forum', $data);
   
 }

 function askquestion()
 {
   $url = $this->input->post('url');
   $category=$this->input->post('category');
   $askas=$this->input->post('askas');
   $content=$this->input->post('question');
   //put the data into the database
   $this->load->database();
   $query=$this->db->query("SELECT id FROM  `questions` ORDER BY  `id` DESC LIMIT 0 , 1");
   foreach ($query->result() as $row)
    {
       $id=$row->id;
    }
   $id=$id+1;
   $this->db->query("insert into questions values ('$id',0,0,'$category','$content','','$askas')");
   
   $this->db->close();
   redirect($url, 'refresh');
 }
 
 function categories($default='cprogramming')
 {
     if($this->session->userdata('logged_in'))
   {
     $session_data = $this->session->userdata('logged_in');     
     $data['username'] = $session_data['username'];
     $data['name'] = $session_data['name'];
     $data['status']="login";
     $data['event'] = $this->event->get_event();
   }
   else
   {
     $data['status']="logout";
     $data['event'] = $this->event->get_event();
   }
     $data['forum'] = $this->forum_content->get_forum($default);
     $this->load->view('forum', $data);
   
 }
 
}