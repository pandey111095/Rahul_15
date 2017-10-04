<?php 
class English extends CI_Controller{

	public function index(){
		$this->load->model('Db');
		$data = $this->Db->rec();
		
	
		$this->load->view('english',['data'=>$data]);
	}
}