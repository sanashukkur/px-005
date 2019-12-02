<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_Controller extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
    function __construct() 
	{
        parent::__construct();
        $this->load->helper('url');
		$this->load->model('Admin_Model');
        $this->load->library(array('form_validation','session',upload));
		$this->load->helper(array('url','html','form'));
		$this->load->library('pagination');
         $this->load->database();  	
         $this->load->library('upload');
	}
	
	public function index()
	{
    
     $this->load->view('admin/adminheader');
     $this->load->view('admin/adminnavigation');
     $this->load->view('admin/admincontent');
     $this->load->view('admin/adminfooter');
     
       
    }
    public function settings_form()
    {
        $this->load->view('admin/adminheader');
        $this->load->view('admin/adminnavigation');
        $this->load->view('admin/settings_form');
        $this->load->view('admin/adminfooter');    
    }
    public function add_settings()
    {
      
	$this->form_validation->set_rules('logo','Logo','required');
	$this->form_validation->set_rules('twitter','Twitter','required');
	$this->form_validation->set_rules('pinterest','Pinterest','required');
	$this->form_validation->set_rules('facebook','Facebook','required');
    $this->form_validation->set_rules('youtube','Youtube','required');
    $this->form_validation->set_rules('tele','Telephone','required');
	$this->form_validation->set_rules('mobile','Mobilee Number','required');
	$this->form_validation->set_rules('email','Email Id','required');
	$this->form_validation->set_rules('address','Address','required');
	
	$dat['msg']="";
	if($this->form_validation->run())	
	{
		 $this->load->model('Admin_model');
		$result= $this->Admin_Model->addusermodel();
		$dat['msg']="user inserted successfully";
    }
    $this->load->view('admin/adminheader');
    $this->load->view('admin/adminnavigation');
    $this->load->view('admin/settings_form',$dat);
    $this->load->view('admin/adminfooter');
	
	
    }
}
