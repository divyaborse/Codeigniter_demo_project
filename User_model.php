<?php
class User_model extends CI_Model{
	function return_users(){
		$this->load->database();
		$query = $this->db->query("SELECT * FROM teacher");
		$query->result_array();
		/*echo "<pre>";
		print_r($query->result_array());
		echo "</pre>";*/
		return $query->result_array();
	}
}
?>
