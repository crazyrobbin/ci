
<?php
class Add_user extends CI_Model {

	 public function __construct()
 {
  parent::__construct();
 }

public function set_users()
{
	$this->load->helper('url');	
	$pwd =$this->input->post('password');
	$p= MD5($pwd);
	$data = array(
		'name' => $this->input->post('name'),
		'username' => $this->input->post('username'),
		'password' => $p,
		'emailid' => $this->input->post('emailid')
	);
	
	return $this->db->insert('users', $data);
}
}

?>