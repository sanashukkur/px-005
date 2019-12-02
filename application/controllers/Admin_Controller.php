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
        $this->load->library(array('form_validation','session','upload'));
		$this->load->helper(array('url','html','form'));
		$this->load->library('pagination');
         $this->load->database(); 
         $this->load->library('session'); 	
	}
    private $upload_path = UPLOAD_PATH;
	public function index()
	{
    
     $this->load->view('admin/adminheader');
     $this->load->view('admin/adminnavigation');
     $this->load->view('admin/admincontent');
     $this->load->view('admin/adminfooter');
     
       
    }
   
    //settings page
    public function settings_form()
    {
        $data['settings'] = $this->Admin_Model->showsettings();
        $this->load->view('admin/adminheader');
        $this->load->view('admin/adminnavigation');
        $this->load->view('admin/settings_form',$data);
        $this->load->view('admin/adminfooter');    
    }
    public function add_settings()
    { 
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
    {  $new_name ='';
        if (!empty($_FILES['logo']['name'])) {
           
        $new_name = time().'logo.png';
        $config['file_name'] = $new_name;
        $config['upload_path'] = UPLOAD_PATH;
        $config['allowed_types'] = 'gif|jpg|png';
        $this->upload->initialize($config);
       if (!$this->upload->do_upload('logo'))
        {
            $error = array('error' => $this->upload->display_errors());
          
        } else {
        }
        }
        $this->load->model('Admin_Model');
		$result= $this->Admin_Model->addusermodel( $new_name);
        redirect('admin-settings'); 	
    }
    }

 //banner1
    public function banner_form()
    {
        $data['value'] = $this->Admin_Model->showbanner();
        $this->load->view('admin/adminheader');
        $this->load->view('admin/adminnavigation');
        $this->load->view('admin/viewbanner1',$data);
        $this->load->view('admin/adminfooter');    
    } 
    public function add_banner()
    {
	$this->form_validation->set_rules('title','Title','required');
	$this->form_validation->set_rules('content','Content','required');
    $dat['msg']="";
	if($this->form_validation->run())	
    { 
		$this->load->model('Admin_model');
		$result= $this->Admin_Model->addbannermodel();
		$dat['msg']="content inserted successfully";
    }

    $this->load->view('admin/adminheader');
    $this->load->view('admin/adminnavigation');
    $this->load->view('admin/banner1',$dat);
    $this->load->view('admin/adminfooter');    
    }
    // public function update_banner()
    // {
    //     $this->form_validation->set_rules('title','Title','required');
    //     $this->form_validation->set_rules('content','Content','required');
    //     $dat['msg']="";
    //     if($this->form_validation->run())	
    //     { 
    //         $this->load->model('Admin_Model');
    //         $result= $this->Admin_Model->updatebannermodel();
    //         redirect('show-banner'); 
    //     }  
    // }

 
    public function update()
    {
        $id=$_REQUEST['id'];
         $data['query'] = $this->Admin_Model->updatebannermodel($id);
        $this->load->view('admin/adminheader');
        $this->load->view('admin/adminnavigation');
        $this->load->view('admin/updatebanner1',$data);
        $this->load->view('admin/adminfooter');    
    } 
     
    public function update_data()
    {
        $id=$_REQUEST['id'];
     $this->Admin_Model->updatedata($id);
       $data['value'] = $this->Admin_Model->showbanner();
        $this->load->view('admin/adminheader');
        $this->load->view('admin/adminnavigation');
        $this->load->view('admin/viewbanner1',$data);
        $this->load->view('admin/adminfooter');    
    } 



 //welcome banner

    public function welcomebanner_form()
    {
        $data['value'] = $this->Admin_Model->showwelcome_banner();
        $this->load->view('admin/adminheader');
        $this->load->view('admin/adminnavigation');
        $this->load->view('admin/welcomebanner',$data);
        $this->load->view('admin/adminfooter');    
    } 
     public function add_welcomebanner()
     {
        $this->form_validation->set_rules('Title','Title','required');
        $this->form_validation->set_rules('Content','Content','required');
        $this->form_validation->set_rules('Description','Description','required');
        $dat['msg']="";
        if($this->form_validation->run())	
        {
            $new_name ='';
            if (!empty($_FILES['Image']['name']))
             {
            $new_name = time().'Image.png';
            $config['file_name'] = $new_name;
            $config['upload_path'] = UPLOAD_PATH;
            $config['allowed_types'] = 'gif|jpg|png';
            $this->upload->initialize($config);
           if (!$this->upload->do_upload('Image')) 
           {
                $error = array('error' => $this->upload->display_errors());
              
            } else 
            {
            }
            }
            $this->load->model('Admin_Model');
            $result= $this->Admin_Model->addwelcome_banner($new_name);
            redirect('add-banner-company');     
        }     
    }
//banner2
public function add_banner2()
{
$this->form_validation->set_rules('title','Title','required');
$this->form_validation->set_rules('content','Content','required');
$this->form_validation->set_rules('description','description','required');
$this->form_validation->set_rules('icon1','Icon1','required');
$this->form_validation->set_rules('icon2','Icon2','required');
$this->form_validation->set_rules('icon3','Icon3','required');
$this->form_validation->set_rules('heading1','Heading1','required');
$this->form_validation->set_rules('heading2','Heading2','required');
$this->form_validation->set_rules('heading3','Heading3','required');
$dat['msg']="";
if($this->form_validation->run())	
{ 
    $this->load->model('Admin_model');
    $result= $this->Admin_Model->addbannermodel2();
    $dat['msg']="content inserted successfully";
}

$this->load->view('admin/adminheader');
$this->load->view('admin/adminnavigation');
$this->load->view('admin/banner2',$dat);
$this->load->view('admin/adminfooter');    
}

public function banner2_form()
{
    $data['value'] = $this->Admin_Model->show_banner2();
    $this->load->view('admin/adminheader');
    $this->load->view('admin/adminnavigation');
    $this->load->view('admin/banner2',$data);
    $this->load->view('admin/adminfooter');    
} 
public function update_banner2()
{
    $this->form_validation->set_rules('title','Title','required');
    $this->form_validation->set_rules('content','Content','required');
    $dat['msg']="";
    if($this->form_validation->run())	
    { 
        $this->load->model('Admin_Model');
        $result= $this->Admin_Model->updatebannermodel2();
        redirect('view-banner2'); 
    }  
}
//banner3

public function add_banner3()
{

$this->form_validation->set_rules('icon1','Icon1','required');
$this->form_validation->set_rules('icontitle1','Icon Title1','required');
$this->form_validation->set_rules('icon2','Icon2','required');
$this->form_validation->set_rules('icontitle2','Icon Title2','required');
$this->form_validation->set_rules('icon3','Icon3','required');
$this->form_validation->set_rules('icontitle3','Icon Title3','required');
$this->form_validation->set_rules('icon4','Icon4','required');
$this->form_validation->set_rules('icontitle4','Icon Title4','required');
$this->form_validation->set_rules('icon5','Icon5','required');
$this->form_validation->set_rules('icontitle5','Icon Title5','required');
$dat['msg']="";
if($this->form_validation->run())	
{ 
    $this->load->model('Admin_model');
    $result= $this->Admin_Model->addbannermodel3();
    $dat['msg']="content inserted successfully";
}

$this->load->view('admin/adminheader');
$this->load->view('admin/adminnavigation');
$this->load->view('admin/banner3',$dat);
$this->load->view('admin/adminfooter');    
}
public function banner3_form()
{
    $data['value'] = $this->Admin_Model->show_banner3();
    $this->load->view('admin/adminheader');
    $this->load->view('admin/adminnavigation');
    $this->load->view('admin/banner3',$data);
    $this->load->view('admin/adminfooter');    
} 

public function update_banner3()
{
    $this->form_validation->set_rules('icon1','Icon1','required');
    $this->form_validation->set_rules('icontitle1','Icon Title1','required');
    $this->form_validation->set_rules('icon2','Icon2','required');
    $this->form_validation->set_rules('icontitle2','Icon Title2','required');
    $this->form_validation->set_rules('icon3','Icon3','required');
    $this->form_validation->set_rules('icontitle3','Icon Title3','required');
    $this->form_validation->set_rules('icon4','Icon4','required');
    $this->form_validation->set_rules('icontitle4','Icon Title4','required');
    $this->form_validation->set_rules('icon5','Icon5','required');
    $this->form_validation->set_rules('icontitle5','Icon Title5','required');
    $dat['msg']="";
    if($this->form_validation->run())	
    { 
        $this->load->model('Admin_Model');
        $result= $this->Admin_Model->updatebannermodel3();
        redirect('view-banner3'); 
    }  

}
//banner4
//banner4 operations...
public function add_banner4()
{
    $this->load->view('admin/adminheader');
    $this->load->view('admin/adminnavigation');
    $this->load->view('admin/banner4_form');
    $this->load->view('admin/adminfooter');
}
//show banner4
public function  banner4_form()
{
    $data['value'] = $this->Admin_Model->showbanner4();
    $this->load->view('admin/adminheader');
    $this->load->view('admin/adminnavigation');
    $this->load->view('admin/viewbanner4',$data);
    $this->load->view('admin/adminfooter');    
} 
//insert data to banner4
  public function  insert_banner4()
{
$this->form_validation->set_rules('content','conent','required');
$this->form_validation->set_rules('footercontent','footercontent','required');


$dat['msg']="";
if($this->form_validation->run())	
{  $new_name ='';
    if (!empty($_FILES['img']['name'])) {
       
    $new_name = time().'colourtouch.jpg';
    $config['file_name'] = $new_name;
    $config['upload_path'] = UPLOAD_PATH;
    $config['allowed_types'] = 'gif|jpg|png';
    $this->upload->initialize($config);
   if (!$this->upload->do_upload('img')) {
        $error = array('error' => $this->upload->display_errors());
      
    } else {
   
    }
    }
    $this->load->model('Admin_Model');
    $result= $this->Admin_Model->addbanner4data($new_name);
    redirect('add-banner-content');
}
            

}
//view updatebanner4
public function update_banner4_data()
{
    $id=$_REQUEST['id'];
     $data['value'] = $this->Admin_Model->updatebanner4data($id);
    $this->load->view('admin/adminheader');
    $this->load->view('admin/adminnavigation');
    $this->load->view('admin/updatebanner4',$data);
    $this->load->view('admin/adminfooter');

} 
//update banner4
public function update_banner4_content()
{
$this->form_validation->set_rules('content','conent','required');
$this->form_validation->set_rules('footercontent','footercontent','required');
$dat['msg']="";
	if($this->form_validation->run())	
    {  
       
    $new_name ='';
    if (!empty($_FILES['img']['name']))
     {
       
    $new_name = time().'colourtouch.jpg';
    $config['file_name'] = $new_name;
    $config['upload_path'] = UPLOAD_PATH;
    $config['allowed_types'] = 'gif|jpg|png';
    $this->upload->initialize($config);
   if (!$this->upload->do_upload('img'))
    {
        $error = array('error' => $this->upload->display_errors());
      
    } else 
    {
   
    }
    
  
    } 
    $id=$_REQUEST['id'];
   
   $this->Admin_Model->updatebanner4content($id,$new_name);
   $data['value'] = $this->Admin_Model->showbanner4();
    $this->load->view('admin/adminheader');
    $this->load->view('admin/adminnavigation');
    $this->load->view('admin/viewbanner4',$data);
    $this->load->view('admin/adminfooter');    
}
}  

//banner5
public function view_banner5()
{
    $data['value'] = $this->Admin_Model->show_banner5();
    $this->load->view('admin/adminheader');
    $this->load->view('admin/adminnavigation');
    $this->load->view('admin/banner5',$data);
    $this->load->view('admin/adminfooter');    
}

public function add_banner5()
{
  
//  $this->form_validation->set_rules('bgimage','Image','required');
$this->form_validation->set_rules('title','Title','required');
$this->form_validation->set_rules('content','Content','required');

$dat['msg']="";
if($this->form_validation->run())	
{
    $new_name = time().'bgimage.png';
    $config['file_name'] = $new_name;
    $config['upload_path'] = UPLOAD_PATH;
    $config['allowed_types'] = 'gif|jpg|png';
    $this->upload->initialize($config);
   if (!$this->upload->do_upload('bgimage')) {
        $error = array('error' => $this->upload->display_errors());
      
    } else {
        $this->load->model('Admin_Model');
    $result= $this->Admin_Model->addbannermodel5($new_name);
    $dat['msg']="user inserted successfully";
    }
    
}
$this->load->view('admin/adminheader');
$this->load->view('admin/adminnavigation');
$this->load->view('admin/banner5',$dat);
$this->load->view('admin/adminfooter');

}
public function update_banner5()
{
   $this->form_validation->set_rules('title','Title','required');
   $this->form_validation->set_rules('content','Content','required');
   $dat['msg']="";
   if($this->form_validation->run())	
   {
       $new_name ='';
       if (!empty($_FILES['bgimage']['name']))
        {
       $new_name = time().'Bgimage.png';
       $config['file_name'] = $new_name;
       $config['upload_path'] = UPLOAD_PATH;
       $config['allowed_types'] = 'gif|jpg|png';
       $this->upload->initialize($config);
      if (!$this->upload->do_upload('bgimage')) 
      {
           $error = array('error' => $this->upload->display_errors());
         
       } else 
       {
       }
       }
       $this->load->model('Admin_Model');
       $result= $this->Admin_Model->update_bannermodel5($new_name);
       redirect('view-banner5');     
   }     
}


//banner6-logo
public function view_banner6()
{
    
    $this->load->view('admin/adminheader');
    $this->load->view('admin/adminnavigation');
    $this->load->view('admin/banner6');
    $this->load->view('admin/adminfooter');    
} 

public function add_banner6()
{
//  $this->form_validation->set_rules('logo_images','Logo','required');
$dat['msg']="";

    $new_name = time().'logoimg.png';
    $config['file_name'] = $new_name;
    $config['upload_path'] = UPLOAD_PATH;
    $config['allowed_types'] = 'gif|jpg|png';
    $this->upload->initialize($config);
   
   if (!$this->upload->do_upload('logo_images')) {
        $error = array('error' => $this->upload->display_errors());
      
    } else {
        $this->load->model('Admin_Model');
   $this->Admin_Model->addbannermodel6($new_name);
    $dat['msg']="image inserted successfully";
    }
    

$this->load->view('admin/adminheader');
$this->load->view('admin/adminnavigation');
$this->load->view('admin/banner6',$dat);
$this->load->view('admin/adminfooter');

}
public function show_banner6()
{
    $data['value'] = $this->Admin_Model->show_banner6();
    $this->load->view('admin/adminheader');
    $this->load->view('admin/adminnavigation');
    $this->load->view('admin/viewbanner6',$data);
    $this->load->view('admin/adminfooter');    
}

//view updatebanner6
public function updatebanner6()
{
    $id=$_REQUEST['id'];
     $data['value'] = $this->Admin_Model->updatebanner6model($id);
    $this->load->view('admin/adminheader');
    $this->load->view('admin/adminnavigation');
    $this->load->view('admin/updatebanner6',$data);
    $this->load->view('admin/adminfooter');

} 
public function update_logo6()
{

$dat['msg']="";

    $new_name ='';
    if (!empty($_FILES['logo_images']['name']))
     {
      
    $new_name = time().'colourtouch.jpg';
    $config['file_name'] = $new_name;
    $config['upload_path'] = UPLOAD_PATH;
    $config['allowed_types'] = 'gif|jpg|png';
    $this->upload->initialize($config);
   if (!$this->upload->do_upload('logo_images'))
    {
        $error = array('error' => $this->upload->display_errors());
      
    } else 
    {
    }
    } 
   
  
   $this->Admin_Model->updatebanner6content($new_name);
   
   redirect('show-banner6'); 

}  


//contact details

public function add_contact()
{

$this->form_validation->set_rules('address','Address','required');
$this->form_validation->set_rules('mobile','Mobile','required');
$this->form_validation->set_rules('email','Email','required');

$dat['msg']="";
if($this->form_validation->run())	
{ 
    $this->load->model('Admin_model');
    $result= $this->Admin_Model->addcontactmodel();
    $dat['msg']="content inserted successfully";
}

$this->load->view('admin/adminheader');
$this->load->view('admin/adminnavigation');
$this->load->view('admin/contactdetails',$dat);
$this->load->view('admin/adminfooter');    
} 
public function view_contact()
{
    $data['value'] = $this->Admin_Model-> show_contact();
    $this->load->view('admin/adminheader');
    $this->load->view('admin/adminnavigation');
    $this->load->view('admin/contactdetails',$data);
    $this->load->view('admin/adminfooter');    
} 
public function update_contact()
{
    $this->form_validation->set_rules('address','Address','required');
$this->form_validation->set_rules('tele','Tele','required');
$this->form_validation->set_rules('mobile','Mobile','required');
$this->form_validation->set_rules('email','Email','required');
    $dat['msg']="";
    if($this->form_validation->run())	
    { 
        $this->load->model('Admin_Model');
        $result= $this->Admin_Model->updatecontactmodel();
        redirect('view-contact'); 
    }  

}

    //map
    public function view_map()
    {
       
        $this->load->view('admin/adminheader');
        $this->load->view('admin/adminnavigation');
        $this->load->view('admin/map_url');
        $this->load->view('admin/adminfooter');    
    } 

    public function add_mapurl()
    {
    $this->form_validation->set_rules('mapurl','Map','required');

    $dat['msg']="";
    if($this->form_validation->run())	
    { 
        $this->load->model('Admin_model');
        $result= $this->Admin_Model->addmapmodel();
        $dat['msg']="map inserted successfully";
    }

    $this->load->view('admin/adminheader');
    $this->load->view('admin/adminnavigation');
    $this->load->view('admin/map_url',$dat);
    $this->load->view('admin/adminfooter');    
    } 

    public function show_map()
    {
        $data['value'] = $this->Admin_Model-> show_mapmodel();
        $this->load->view('admin/adminheader');
        $this->load->view('admin/adminnavigation');
        $this->load->view('admin/map_url',$data);
        $this->load->view('admin/adminfooter');    
    } 
    public function update_map()
    {
        $this->form_validation->set_rules('mapurl','Map','required');
        if($this->form_validation->run())	
        { 
            $this->load->model('Admin_Model');
            $result= $this->Admin_Model->updatemapmodel();
            redirect('show-map'); 
        }  
    
    }

//about footer
public function view_aboutfooter()
{
   
    $this->load->view('admin/adminheader');
    $this->load->view('admin/adminnavigation');
    $this->load->view('admin/aboutfooter');
    $this->load->view('admin/adminfooter');    
} 

public function add_aboutfooter()
{
$this->form_validation->set_rules('title','Title','required');
$this->form_validation->set_rules('content','Content','required');
$dat['msg']="";
if($this->form_validation->run())	
{ 
    $this->load->model('Admin_model');
    $result= $this->Admin_Model->addaboutmodel();
    $dat['msg']="content inserted successfully";
}

$this->load->view('admin/adminheader');
$this->load->view('admin/adminnavigation');
$this->load->view('admin/aboutfooter',$dat);
$this->load->view('admin/adminfooter');    
}
public function show_aboutfooter()
{
    $data['value'] = $this->Admin_Model->show_aboutmodel();
    $this->load->view('admin/adminheader');
    $this->load->view('admin/adminnavigation');
    $this->load->view('admin/aboutfooter',$data);
    $this->load->view('admin/adminfooter');    
} 

public function update_aboutfooter()
{
    $this->form_validation->set_rules('title','Title','required');
$this->form_validation->set_rules('content','Content','required');
    if($this->form_validation->run())	
    { 
        $this->load->model('Admin_Model');
        $result= $this->Admin_Model->update_aboutmodel();
        redirect('show-about'); 
    }  

}

//about-works
public function view_worksform()
{
    $this->load->view('admin/adminheader');
    $this->load->view('admin/adminnavigation');
    $this->load->view('admin/addworks');
    $this->load->view('admin/adminfooter');
}

public function  add_worksform()
{
$this->form_validation->set_rules('Title','Title','required');
$this->form_validation->set_rules('Content','Content','required');

$dat['msg']="";
if($this->form_validation->run())	
{  $new_name ='';
    if (!empty($_FILES['Image']['name']))
     {
       
    $new_name = time().'works.jpg';
    $config['file_name'] = $new_name;
    $config['upload_path'] = UPLOAD_PATH;
    $config['allowed_types'] = 'gif|jpg|png';
    $this->upload->initialize($config);
   if (!$this->upload->do_upload('Image')) 
   {
        $error = array('error' => $this->upload->display_errors());
      
    } else 
    {
   
    }
    }
    $this->load->model('Admin_Model');
    $result= $this->Admin_Model->add_worksmodel($new_name);
    redirect('view-works');
}     
}
//
public function  show_workform()
{
    $data['value'] = $this->Admin_Model->showworks();
    $this->load->view('admin/adminheader');
    $this->load->view('admin/adminnavigation');
    $this->load->view('admin/view_works',$data);
    $this->load->view('admin/adminfooter');    
} 
public function fetch_workform()
{
    $id=$_REQUEST['id'];
     $data['value'] = $this->Admin_Model->updateworkdata($id);
    $this->load->view('admin/adminheader');
    $this->load->view('admin/adminnavigation');
    $this->load->view('admin/updateworks',$data);
    $this->load->view('admin/adminfooter');

} 

public function update_works()
{
    $this->form_validation->set_rules('Title','Title','required');
    $this->form_validation->set_rules('Content','Content','required');
$dat['msg']="";
	if($this->form_validation->run())	
    {  
       
    $new_name ='';
    if (!empty($_FILES['Image']['name']))
     {
       
    $new_name = time().'works.jpg';
    $config['file_name'] = $new_name;
    $config['upload_path'] = UPLOAD_PATH;
    $config['allowed_types'] = 'gif|jpg|png';
    $this->upload->initialize($config);
   if (!$this->upload->do_upload('Image'))
    {
        $error = array('error' => $this->upload->display_errors());
      
    } else 
    {
   
    }
    
  
    } 
    $id=$_REQUEST['id'];
   $this->Admin_Model->updateworkmodel($id,$new_name);
   $data['value'] = $this->Admin_Model->showworks();
    $this->load->view('admin/adminheader');
    $this->load->view('admin/adminnavigation');
    $this->load->view('admin/view_works',$data);
    $this->load->view('admin/adminfooter');    
}
}  
   
//team content
public function view_teamcontentform()
{
    $this->load->view('admin/adminheader');
    $this->load->view('admin/adminnavigation');
    $this->load->view('admin/addteamcontent');
    $this->load->view('admin/adminfooter');
}

public function fetch_teamcontent()
{
    $data['value'] = $this->Admin_Model->show_banner5();
    $this->load->view('admin/adminheader');
    $this->load->view('admin/adminnavigation');
    $this->load->view('admin/banner5',$data);
    $this->load->view('admin/adminfooter');    
}


    public function add_teamcontent()
    {
	$this->form_validation->set_rules('Title','Title','required');
	$this->form_validation->set_rules('Content','Content','required');
    $dat['msg']="";
	if($this->form_validation->run())	
    { 
		$this->load->model('Admin_model');
		$result= $this->Admin_Model->add_teamcontentmodel();
		$dat['msg']="content inserted successfully";
    }

    $this->load->view('admin/adminheader');
    $this->load->view('admin/adminnavigation');
    $this->load->view('admin/banner1',$dat);
    $this->load->view('admin/adminfooter');    
    }



public function update_teamcontent()
{
   $this->form_validation->set_rules('title','Title','required');
   $this->form_validation->set_rules('content','Content','required');
   $dat['msg']="";
   if($this->form_validation->run())	
   {
       $new_name ='';
       if (!empty($_FILES['bgimage']['name']))
        {
       $new_name = time().'Bgimage.png';
       $config['file_name'] = $new_name;
       $config['upload_path'] = UPLOAD_PATH;
       $config['allowed_types'] = 'gif|jpg|png';
       $this->upload->initialize($config);
      if (!$this->upload->do_upload('bgimage')) 
      {
           $error = array('error' => $this->upload->display_errors());
         
       } else 
       {
       }
       }
       $this->load->model('Admin_Model');
       $result= $this->Admin_Model->update_bannermodel5($new_name);
       redirect('view-banner5');     
   }     
}



//add team content

public function add_teamform()
{
$this->form_validation->set_rules('Title','Title','required');
$this->form_validation->set_rules('Content','Content','required');
$dat['msg']="";
if($this->form_validation->run())	
{ 
    $this->load->model('Admin_model');
    $result= $this->Admin_Model->add_teamformmodel();
    $dat['msg']="content inserted successfully";
}

$this->load->view('admin/adminheader');
$this->load->view('admin/adminnavigation');
$this->load->view('admin/addteamcontent',$dat);
$this->load->view('admin/adminfooter');    
}

public function view_teams()
{
    $data['value'] = $this->Admin_Model->show_teams();
    $this->load->view('admin/adminheader');
    $this->load->view('admin/adminnavigation');
    $this->load->view('admin/showteam',$data);
    $this->load->view('admin/adminfooter');    
}
public function fetch_team()
{
    $id=$_REQUEST['id'];
     $data['value'] = $this->Admin_Model->showteam($id);
    $this->load->view('admin/adminheader');
    $this->load->view('admin/adminnavigation');
    $this->load->view('admin/addteamcontent1',$data);
    $this->load->view('admin/adminfooter');

}

public function updateteam()
{
    $this->form_validation->set_rules('Title','Title','required');
    $this->form_validation->set_rules('Content','Content','required');
$dat['msg']="";
	if($this->form_validation->run())	
    {  
    
    $id=$_REQUEST['id'];
   $this->Admin_Model->updateteammodel($id);
   $data['value'] = $this->Admin_Model->show_teams();
   $this->load->view('admin/adminheader');
   $this->load->view('admin/adminnavigation');
   $this->load->view('admin/showteam',$data);
   $this->load->view('admin/adminfooter');    
}
} 
//insert team
public function insert_team()
{
    $this->load->view('admin/adminheader');
    $this->load->view('admin/adminnavigation');
    $this->load->view('admin/insertteam');
    $this->load->view('admin/adminfooter');
}

public function  insert_team_data()
{
$this->form_validation->set_rules('subheading','subheading','required');
$this->form_validation->set_rules('heading','heading','required');
$this->form_validation->set_rules('content','content','required');
$this->form_validation->set_rules('body','body','required');

$dat['msg']="";
if($this->form_validation->run())	
{  $new_name ='';
    if (!empty($_FILES['Image']['name']))
     {
       
    $new_name = time().'team.jpg';
    $config['file_name'] = $new_name;
    $config['upload_path'] = UPLOAD_PATH;
    $config['allowed_types'] = 'gif|jpg|png';
    $this->upload->initialize($config);
   if (!$this->upload->do_upload('Image')) 
   {
        $error = array('error' => $this->upload->display_errors());
      
    } else 
    {
   
    }
    }
    $this->load->model('Admin_Model');
    $result= $this->Admin_Model->insertdata($new_name);
    redirect('insert-team');
}     
}
public function view_team()
{  $data['value'] = $this->Admin_Model->show_meet_team();
    $this->load->view('admin/adminheader');
    $this->load->view('admin/adminnavigation');
    $this->load->view('admin/insertteamdata',$data);
    $this->load->view('admin/adminfooter');
}

public function fetchallteam()
{
    $id=$_REQUEST['id'];
     $data['value'] = $this->Admin_Model->showallteam($id);
    $this->load->view('admin/adminheader');
    $this->load->view('admin/adminnavigation');
    $this->load->view('admin/addteamcontent1',$data);
    $this->load->view('admin/adminfooter');

}
//update team data


public function update_team_data()
{
   $this->form_validation->set_rules('subheading','subheading','required');
   $this->form_validation->set_rules('heading','heading','required');
   $this->form_validation->set_rules('content','content','required');
   $this->form_validation->set_rules('body','body','required');
   $dat['msg']="";
   if($this->form_validation->run())	
   {
       $new_name ='';
       if (!empty($_FILES['Image']['name']))
        {
       $new_name = time().'teamimg.png';
       $config['file_name'] = $new_name;
       $config['upload_path'] = UPLOAD_PATH;
       $config['allowed_types'] = 'gif|jpg|png';
       $this->upload->initialize($config);
      if (!$this->upload->do_upload('Image')) 
      {
           $error = array('error' => $this->upload->display_errors());
         
       } else 
       {
       }
       }
     
    
       $id=$_REQUEST['id'];
       $this->load->model('Admin_Model');
       $result= $this->Admin_Model->updateteamdatamodel($new_name);
       redirect('view-team');     
   }     
}

//............service section.................

//insert service
public function insert_service()
{
    $this->load->view('admin/adminheader');
    $this->load->view('admin/adminnavigation');
    $this->load->view('admin/insertservice');
    $this->load->view('admin/adminfooter');
}
//insert data to db

public function  insert_service_data()
{

$this->form_validation->set_rules('heading','heading','required');
$this->form_validation->set_rules('content','content','required');


$dat['msg']="";
if($this->form_validation->run())	
{  $new_name ='';
    if (!empty($_FILES['Image']['name']))
     {
       
    $new_name = time().'service.jpg';
    $config['file_name'] = $new_name;
    $config['upload_path'] = UPLOAD_PATH;
    $config['allowed_types'] = 'gif|jpg|png';
    $this->upload->initialize($config);
   if (!$this->upload->do_upload('Image')) 
   {
        $error = array('error' => $this->upload->display_errors());
      
    } else 
    {
   
    }
    }
    $this->load->model('Admin_Model');
    $result= $this->Admin_Model->insertservice($new_name);
    redirect('insert-service');
}     
}
//view all services
public function view_services()
{  $data['value'] = $this->Admin_Model->show_all_services();
    $this->load->view('admin/adminheader');
    $this->load->view('admin/adminnavigation');
    $this->load->view('admin/viewservices',$data);
    $this->load->view('admin/adminfooter');
}

public function fetch_service()
{
    $id=$_REQUEST['id'];
     $data['value'] = $this->Admin_Model->show_service_data($id);
    $this->load->view('admin/adminheader');
    $this->load->view('admin/adminnavigation');
    $this->load->view('admin/insertservice1',$data);
    $this->load->view('admin/adminfooter');

}

public function update_service_data()
{
   
   $this->form_validation->set_rules('heading','heading','required');
   $this->form_validation->set_rules('content','content','required');
   
   $dat['msg']="";
   if($this->form_validation->run())	
   {
       $new_name ='';
       if (!empty($_FILES['Image']['name']))
        {
       $new_name = time().'serviceimg.png';
       $config['file_name'] = $new_name;
       $config['upload_path'] = UPLOAD_PATH;
       $config['allowed_types'] = 'gif|jpg|png';
       $this->upload->initialize($config);
      if (!$this->upload->do_upload('Image')) 
      {
           $error = array('error' => $this->upload->display_errors());
         
       } else 
       {
       }
       }
     
    
       $id=$_REQUEST['id'];
       $this->load->model('Admin_Model');
       $result= $this->Admin_Model->updateservicedatamodel($new_name);
       redirect('view-services');     
   }     
}

public function  insert_services_data()
{

$this->form_validation->set_rules('heading','heading','required');
$this->form_validation->set_rules('content','content','required');


$dat['msg']="";
if($this->form_validation->run())	
{  $new_name ='';
    if (!empty($_FILES['Image']['name']))
     {
       
    $new_name = time().'service.jpg';
    $config['file_name'] = $new_name;
    $config['upload_path'] = UPLOAD_PATH;
    $config['allowed_types'] = 'gif|jpg|png';
    $this->upload->initialize($config);
   if (!$this->upload->do_upload('Image')) 
   {
        $error = array('error' => $this->upload->display_errors());
      
    } else 
    {
   
    }
    }
    $this->load->model('Admin_Model');
    $result= $this->Admin_Model->insertservicedata($new_name);
    redirect('view-services');  
}     

}
//........gallery section............
//insert gallery
public function insert_gallery()
{
    $this->load->view('admin/adminheader');
    $this->load->view('admin/adminnavigation');
    $this->load->view('admin/insertgallery');
    $this->load->view('admin/adminfooter');
}

public function  insert_gallery_data()
{

$dat['msg']="";
	
 $new_name ='';
    if (!empty($_FILES['Image']['name']))
     {
       
    $new_name = time().'gallery.jpg';
    $config['file_name'] = $new_name;
    $config['upload_path'] = UPLOAD_PATH;
    $config['allowed_types'] = 'gif|jpg|png';
    $this->upload->initialize($config);
   if (!$this->upload->do_upload('Image')) 
   {
        $error = array('error' => $this->upload->display_errors());
      
    } else 
    {
   
    }
    }
    $this->load->model('Admin_Model');
    $result= $this->Admin_Model->insertgallery($new_name);
    redirect('view-gallery');  
}     

//view all images
public function view_gallery()
{  $data['value'] = $this->Admin_Model->show_all_gallery();
    $this->load->view('admin/adminheader');
    $this->load->view('admin/adminnavigation');
    $this->load->view('admin/viewgallery',$data);
    $this->load->view('admin/adminfooter');
}
public function fetch_gallery()
{
    $id=$_REQUEST['id'];
     $data['value'] = $this->Admin_Model->show_gallery_data($id);
    $this->load->view('admin/adminheader');
    $this->load->view('admin/adminnavigation');
    $this->load->view('admin/insertgallery1',$data);
    $this->load->view('admin/adminfooter');

}

public function update_gallery_data()
{
   
  
   $dat['msg']="";
   
       $new_name ='';
       if (!empty($_FILES['Image']['name']))
        {
       $new_name = time().'gallery.png';
       $config['file_name'] = $new_name;
       $config['upload_path'] = UPLOAD_PATH;
       $config['allowed_types'] = 'gif|jpg|png';
       $this->upload->initialize($config);
      if (!$this->upload->do_upload('Image')) 
      {
           $error = array('error' => $this->upload->display_errors());
         
       } else 
       {
       }
       }
     
       $id=$_REQUEST['id'];
       $this->load->model('Admin_Model');
       $result= $this->Admin_Model->updategallerydatamodel($new_name);
       redirect('view-gallery');     
      
}
 //login section
 public function login_form()
 {
 

  $this->load->view('login.php');
 
  
    
 }
 public function adminlogin()
	{
		$email=$this->input->post('email');
		$password=$this->input->post('password');
	
	 	$res=$this->Admin_Model->check_admin($email,$password);
		
		  if($res==0)
		 	{
		 		$message= array(
		 		'title' => 'invalid email or password',
		 		'heading' => 'My Heading',
				 'message' => 'My Message');
			
		 		$this->session->set_userdata('invalid_admin_login',$message);
				 echo "invalid Email or Password.....!";
				 $this->load->view('login');
		 	}
		 	else
		 	 {
		 	$admin_id=$res[0]->id;
		 	$this->session->set_userdata('admin_id',$admin_id);
            $_SESSION['admin']=$_POST['email'];
            // echo $_SESSION['admin'];
            // echo $_SESSION['admin_id'];
            // die();
		   redirect("admin");

    }
}
public function SessionClear()
	{ $_SESSION['admin_id']="";
		$this->session->sess_destroy();
		echo "1";
	}

}