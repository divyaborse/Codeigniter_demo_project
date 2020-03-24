<?php
class IntellifyAdd_student extends CI_Controller{
	function index(){
		$this->load->view('Register_student');
		
	}
	 function form_validation(){
		$this->load->library('form_validation');
		$this->form_validation->set_rules("Name","Name",'required');
		$this->form_validation->set_rules("School_name","School_name",'required|alpha');
		$this->form_validation->set_rules("Class","class",'required');
		//$this->form_validation->set_rules("","Name",'required|alpha');
		$this->form_validation->set_rules("Email","Email",'required');//
		$this->form_validation->set_rules("Number","Number",'required');
		if($this->form_validation->run())
		{
			$this->load->model('Model_Add_Student');
			$data = array(
				"Name" =>$this->input->post("Name"),
				"Number" =>$this->input->post("Number"),
				"Email" =>$this->input->post("Email"),
				"School_name" =>$this->input->post("School_name"),
				"Class" =>$this->input->post("Class"));

			$this->Model_Add_Student->insert_data($data);
			//redirect(base_url()."IntellifyAdd_student/inserted");

		}
		else{
			$this->index();
		}
	}

/*public function inserted(){
$this->index();
}*/
}	

?>
