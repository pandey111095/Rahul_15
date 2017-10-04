<?php 
class Hindi extends CI_Controller{

	public function index(){
		$this->load->model('Db');
		$data = $this->Db->latest();
		$this->load->view('hindi',['data'=>$data]);
	}
}