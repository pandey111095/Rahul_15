<?php 
class Download extends CI_Controller{

public function page()
{
	$id=$this->uri->segment(3);
	$this->load->model('Db');
	$detail = $this->Db->getDetail($id);
	$this->load->view('download',['detail'=>$detail]);
}


}