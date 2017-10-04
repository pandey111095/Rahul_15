<?php
class Signup extends CI_Controller{
	public function __construct()
	{
		parent::__construct();
	}
public function index()
{
	$this->load->helper('form');
	$this->load->view('signup.php');
	
}
public function do_signup() {
	$post=$this->input->post();
	//print_r($post);exit;
$this->form_validation->set_rules('name','Name','required|alpha');
$this->form_validation->set_rules('username','Username','required|min_length[4]|is_unique[user.username]');
$this->form_validation->set_rules('email','Email','required|valid_email|is_unique[user.email]');
$this->form_validation->set_rules('password','Password','required|min_length[6]');
$this->form_validation->set_rules('phone','Phone','required|exact_length[10]|trim|numeric');
$this->form_validation->set_error_delimiters("<p class='text-danger'>", "</p>");
if ($this->form_validation->run()==TRUE)
{
	
	unset($post['submit']);
	$post['password']=sha1($post['password']);
	
	$this->load->model('Dosignup');
	if ($this->Dosignup->signup_insert($post))
	{
		 
		$this->session->set_flashdata('feedback','Succefully Registred. Please verify your email');
	
	
	}
	else{
		$this->session->set_flashdata('feedback','Registration Failed');
	}
	return redirect('Signup');
}
else{
	$this->load->view('signup');
}

}




}


