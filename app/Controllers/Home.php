<?php namespace App\Controllers;

class Home extends BaseController
{
	public function index()
	{
		return view('welcome_message');
	}

	//--------------------------------------------------------------------
    public function add_course_score(){
        return view('add_course_score');
    }

}
