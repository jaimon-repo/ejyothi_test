<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class HomeModel extends CI_Model
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

    public function insertDb($table, $data){
		$this->db->insert($table, $data);
		return $id = $this->db->insert_id();
	}

	public function getAllScore(){
		$this->db->select('*');
		$this->db->from('score_details');
		$this->db->join('student_record', 'student_record.student_id = score_details.student_id	');
		$this->db->join('course_details', 'course_details.course_id  = score_details.course_id');
		$this->db->order_by('student_record.student_id','asc');
		$query=$this->db->get();
		return $query->result();

	}
}
