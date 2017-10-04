<?php
class Login extends CI_Controller {
	
public function index()
{
	if ($this->session->userdata('id'))
		return redirect('Home');
	//$this->load->helper('form');
	$this->load->view('login.php');
	
}
public function do_login()
{

	//$this->load->library('form_validation');
	$this->form_validation->set_rules('username','Username','required|trim|min_length[4]|max_length[12]');
	$this->form_validation->set_rules('password','Password','required|trim|min_length[6]');
	$this->form_validation->set_error_delimiters("<p class='text-danger'>", "</p>");
	if ($this->form_validation->run()==TRUE)
	{
		$username= $this->input->post('username');
		$password= $this->input->post('password');
    	
    	$this->load->model('Dologin');
    	
    	$check=$this->Dologin->do_login($username,$password);
    	if ($check) {
    		$this->session->set_userdata('id',$check->id);
    		$this->session->set_userdata('name',$check->name);
    		return redirect('Home');
    	}
    	
    	else{
    		$this->session->set_flashdata('login_failed','Inavlid Username or Password!');
    		return redirect('Login');


    	}
	}
	else{
	$this->load->view('login');
		

	}
}
public function logout()
{
	$this->session->unset_userdata('id');
	$this->session->unset_userdata('name');
	return redirect('Home');

}

}