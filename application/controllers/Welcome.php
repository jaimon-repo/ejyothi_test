<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$this->load->view('welcome_message');
	}

	public function view_course_score(){
		$this->load->model('HomeModel', 'homeModel');
//		echo '<pre>';var_dump($allScores);exit;
		$data['allScores'] = $this->homeModel->getAllScore();
		$this->load->view('course_score', $data);
	}

	public function add_course_score(){
		$this->load->model('HomeModel', 'homeModel');
		$message = '';
		if ($_POST && $_POST['score'] != '' ){
			//insert new course
			$arr = array(
				'student_id' => $_POST['student'],
				'course_id' => $_POST['course'],
				'course_score' => $_POST['score'],
			);
			$insertId = $this->homeModel->insertDb('score_details', $arr);
			if (is_int($insertId))
				$message = 'Course score added successfully';
		}
	    $data = array(
	        'courses' => $this->homeModel->getAllCourse(),
            'students' => $this->homeModel->getAllStudent(),
			'message' => $message
        );
		$this->load->view('add_course_score',$data);
	}

	public function add_new_course(){
		$message = '';
		$this->load->model('HomeModel','homeModel');
		if ($_POST && $_POST['course_name'] != '' ){
			//insert new course
			$arr = array(
				'course_name' => $_POST['course_name'],
			);
			$insertId = $this->homeModel->insertDb('course_details', $arr);
			if (is_int($insertId))
				$message = 'Course added successfully';
		}
		$data = array(
			'message' => $message
		);
		$this->load->view('add_new_course', $data);
	}

	public function add_new_student(){
		$message = '';
		$this->load->model('HomeModel','homeModel');
		if ($_POST && $_POST['student_name'] != '' ){
			//insert new student record
			$arr = array(
				'student_name' => $_POST['student_name'],
				'student_dob' => date("d-m-Y", strtotime($_POST['student_dob'])),
				'created_date' => date("Y-m-d h:i:s")
			);
			$insertId = $this->homeModel->insertDb('student_record', $arr);
			if (is_int($insertId))
				$message = 'Student detail added successfully';
		}
		$data = array(
			'message' => $message
		);
		$this->load->view('add_new_student', $data);
	}
}
