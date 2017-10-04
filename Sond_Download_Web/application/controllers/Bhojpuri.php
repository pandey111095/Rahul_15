<?php 
class Bhojpuri extends CI_Controller{

	public function index(){
    $this->load->model('Db');
	$data = $this->Db->watch();
	$this->load->view('bhojpuri',['data'=>$data]);
	}
}