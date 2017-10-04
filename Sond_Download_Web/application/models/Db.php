<?php
class Db extends CI_Model{

public function latest()
{

             $limit=3;
        	
        	$this->db->where_in('type',array('bolly'));
        	$latest= $this->db->limit($limit)->get('song');
            return $latest->result();


}
public function rec()
{

             $limit=3;
        	
        	$this->db->where_in('type',array('holly'));
        	$rec= $this->db->limit($limit)->get('song');
            return $rec->result();


}
public function watch()
{

             $limit=3;
        	
        	$this->db->where_in('type',array('bhoj'));
        	$watch= $this->db->limit($limit)->get('song');
            return $watch->result();


}
 public function getDetail($id)
    {
      $q= $this->db->where('id',$id)
                    ->get('song');
                    return $q->result();


    }



}