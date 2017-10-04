<?php
class Home extends CI_Controller{

public function index()
{

		$this->load->model('Db');
		$latest = $this->Db->latest();
		$rec = $this->Db->rec();
		$watch=$this->Db->watch();
	
		$this->load->view('home',['latest'=>$latest,'rec'=>$rec,'watch'=>$watch]);


}


}