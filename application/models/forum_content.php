<?php
class Forum_content extends CI_Model {

public function get_forum($class)
{
	if($class=='none'){
	 	/*$this -> db -> select('id,category,comments,visits,content,timestamp,added_by');
   		$this -> db -> from('questions');

   		$query = $this -> db -> get();*/
   		$this->load->database();
        $query=$this->db->query("select * from questions  order by timestamp DESC;");
     	return $query->result_array();
     }
     else {
        $this->load->database();
        $query=$this->db->query("select * from questions where category='$class' order by timestamp DESC");
        return $query->result_array();
     }

}

}
?>

<!--m->83403591
a->5020175
dob->1-10-1996
Ankit Kumar
Navin Kumar-->