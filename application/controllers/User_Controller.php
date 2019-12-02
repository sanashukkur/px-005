<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_Controller extends CI_Controller {
	function __construct() 
	{
        parent::__construct();
        $this->load->helper('url');
		 $this->load->model('User_Model');
        $this->load->library(array('form_validation','session','upload'));
		$this->load->helper(array('url','html','form','text'));
		$this->load->library('pagination');
		 $this->load->database();  
		 	
	}

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
	
	public function index()
	{
		$res['data']= $this->User_Model->usermodel();
		$res['dat']= $this->User_Model->userbanner();
		$res['welcome']= $this->User_Model->userwelcome();
		$res['banner2']= $this->User_Model->userbanner2();
		$res['banner3']= $this->User_Model->userbanner3();
		$res['banner4']= $this->User_Model->userbanner4();
		$res['banner5']= $this->User_Model->userbanner5();
		$res['banner6']= $this->User_Model->userbanner6();
		$res['contact']= $this->User_Model->usercontact();
		$res['service']= $this->User_Model->get_all_service();
		
		$res['map']= $this->User_Model->map();
		$res['about']= $this->User_Model->aboutfooter();
		 $this->load->view('user/user_header',$res);
		$this->load->view('user/colourhome',$res);
		$this->load->view('user/user_footer',$res);
	}
	
	public function about()
	{
		$result['data']= $this->User_Model->usermodel();
		$result['about']= $this->User_Model->aboutfooter();
		$result['banner4']= $this->User_Model->userbanner4();
		$result['works']= $this->User_Model->aboutwork();
		$result['banner6']= $this->User_Model->userbanner6();
		$result['team']= $this->User_Model->team();
		$result['meetteam']= $this->User_Model->meetteam();
		$result['service']= $this->User_Model->get_all_service();
		 $this->load->view('user/user_header',$result);
		$this->load->view('user/about',$result);
		$this->load->view('user/user_footer',$result);
	}
	
	public function service($service='')
	{

		$header['data']= $this->User_Model->usermodel();
		$footer['about']= $this->User_Model->aboutfooter();
		$header['service']= $this->User_Model->get_all_service();
		$result['allservice']= $this->User_Model->get_all_service();
		$result['service']= $this->User_Model->servicemodel($service);
		 $this->load->view('user/user_header',$header);
		 
		$this->load->view('user/services',$result);
		$this->load->view('user/user_footer',$footer);
	}
	
	public function gallery()
	{
		$result['data']= $this->User_Model->usermodel();
		$result['about']= $this->User_Model->aboutfooter();
		$result['service']= $this->User_Model->get_all_service();
		$result['pic']= $this->User_Model->get_all_pics();
		$result['banner6']= $this->User_Model->userbanner6();
		 $this->load->view('user/user_header',$result);
		$this->load->view('user/gallery',$result);
		$this->load->view('user/user_footer',$result);
	}
	public function contact()
	{
		$header['data']= $this->User_Model->usermodel();
		$res['contact']= $this->User_Model->usercontact();
		$res['about']= $this->User_Model->aboutfooter();
		$header['service']= $this->User_Model->get_all_service();
		
		 $this->load->view('user/user_header',$header);
		$this->load->view('user/contact',$res);
		$this->load->view('user/user_footer',$res);
	}
	public function contact_form()
	{
		
//  Load the email library
		 $this->load->library('email');
        
		 // Mail config
		 $to = 'sanashukkur123@gmail.com';
		 $from = 'sanashukkur123@gmail.com';
		 $fromName = 'Colourtouch';
		 $mailSubject = 'Contact Request Submitted by '.$_POST['name'];
		 
		 // Mail content
		 $mailContent = '
			 <h2>Contact Request Submitted</h2>
			 <p><b>Name: </b>'.$_POST['name'].'</p>
			 <p><b>Email: </b>'.$_POST['email'].'</p>
			 <p><b>Message: </b>'.$_POST['phno'].''.$_POST['message'].'</p>
		 ';
			 
		 $config['mailtype'] = 'html';
		 $this->email->initialize($config);
		 $this->email->to($to);
		 $this->email->from($from, $fromName);
		 $this->email->subject($mailSubject);
		 $this->email->message($mailContent);
		 
		 // Send email & return status
		//  $this->email->send();
	  return $this->email->send()?true:false;

		 $result['data']= $this->User_Model->usermodel();
		 $this->load->view('user/user_header',$result);
		 $this->load->view('user/contact');
		 $this->load->view('user/user_footer',$result);
	
		
	}
	
}
