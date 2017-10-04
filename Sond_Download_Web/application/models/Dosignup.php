<?php
class Dosignup extends CI_Model {
    public function signup_insert($post)
    {
    	//print_r($post);exit;
    	return $this->db->insert('user',$post);



    }



}