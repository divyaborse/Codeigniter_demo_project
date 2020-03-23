<?php
class User_details extends CI_Controller{
	function index(){
		$this->load->model('User_model');
		$data['user_array'] = $this->User_model->return_users();

		$this->load->view('User_view',$data);
	}
}
?>
