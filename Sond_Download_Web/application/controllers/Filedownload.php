<?php
class Filedownload extends CI_Controller{
	
	function download($id) {
   
    $this->load->helper('download');
    $this->load->model('Db');
    $var=$this->Db->getDetail($id);
    foreach ($var as $var) {
    	$var2=$var->path;
    }
    
    //print_r($var2);exit;
    //print_r($var2);exit;
    $data = file_get_contents(base_url($var2));
    $filename=ltrim($var2,"songs/");
    force_download($filename, $data);
}

}