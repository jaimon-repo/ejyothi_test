<?php namespace App\Controllers;

class Home extends BaseController
{
	public function index()
	{
		return view('welcome_message');
	}

	//--------------------------------------------------------------------
    public function add_course_score(){
        $this->load->model('HomeModel', 'homeModel');
//	    $data = array(
//	        'courses' => $this->homeModel->getAllCourse(),
//            'students' => $this->homeModel->getAllStudent()
//        );
        return view('add_course_score');
    }

}
