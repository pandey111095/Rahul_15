<?php
class Dologin extends CI_Model {


public function do_login($username,$password)
{
	
 	$query = $this->db->where(['username'=>$username,'password'=>sha1($password)])
 				->get('user');
 				if ($query->num_rows())
 				{
 					return $query->row();
 				}

 				else{
 					return FALSE;
 				}

}



}