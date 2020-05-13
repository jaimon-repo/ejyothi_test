<?php namespace App\Models;

use CodeIgniter\Model;

class HomeModel extends Model
{
    public function getAllCourse(){
        $this->db->select('course_id,course_name');
        $query 	= $this->db->get('course_details');
        $result =  $query->result_array();

        if(count($result)>= 1){
            return  $result;
        } else {
            return false;
        }

    }

    public function getAllStudent(){
        $this->db->select('student_id,student_name');
        $query 	= $this->db->get('student_record');
        $result =  $query->result_array();

        if(count($result)>= 1){
            return  $result;
        } else {
            return false;
        }
    }
}