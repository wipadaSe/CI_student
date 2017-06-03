<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Student extends CI_Controller {

	public function index(){
		
		$this->load->view('show');
	}

	public function get_student_profile(){
		
		$this->load->model('Student_model');
		$result= $this->Student_model->get_student_profile();
		//echo '<pre>',print_r($result); 
		return $result;
	}

	public function delete_student_profile(){
		$this->load->model('Student_model');
		$id = $this->uri->segment(3);
		$this->Student_model->delete_student_profile($id);
		redirect('student/form_student');
	}

	public function set_student_profile(){
		
		$this->load->model('Student_model');
		$input = array(
			'name' => $this->input->post('name'),
			'surname' => $this->input->post('surname'),
			'age'=>$this->input->post('age')
					  );

		$this->Student_model->set_student_profile($input);
		redirect('student/form_student');
	}
	public function form_student(){
		$data['student_list'] = $this->get_student_profile();
		$this->load->view('form_open',$data);
	}
}
