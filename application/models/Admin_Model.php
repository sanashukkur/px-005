<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_Model extends CI_Model
 {
  function __construct(){
    parent::__construct();
    $this->load->database();
  }
 
//settings
public function addusermodel($new_name)
{
  $data=array();
//   $file_name = $_FILES['logo']['name'];
//   $data['logo'] = $file_name; 
    $id=$_POST['idval'];
    if($new_name=='')
    {
      $data['logo']=$_POST['imageval'];
    }
    else{
      $data['logo']=$new_name;
    }
    
    $data['twitter_url']=$_POST['twitter'];
    $data['pinterest_url']=$_POST['pinterest'];
    $data['facebook_url']=$_POST['facebook'];
    $data['youtube_url']=$_POST['youtube'];
    $data['company_tele']=$_POST['tele'];
    $data['company_mob']=$_POST['mobile'];
    $data['company_email']=$_POST['email'];
    $data['company_address']=$_POST['address'];
  
    $this->db->where('id', $id);
    $this->db->update('ct_settings', $data);
}
public function showsettings()
{
$this->db->select('*');
$this->db->from('ct_settings');
$query = $this->db->get();
$result = $query->result();
return $result;
}

//banner1
public function addbannermodel()
{
  $data=array();
    $data['banner_title']=$_POST['title'];
    $data['banner_content']=$_POST['content'];
    $this->db->insert('ct_banner1',$data);
}
public function showbanner()
{
$this->db->select('*');
$this->db->from('ct_banner1');
$query = $this->db->get();
$result = $query->result();
return $result;
}

public function updatebannermodel($id)
{
  
    $this->db->where('id', $id);
    $query = $this->db->get('ct_banner1');
    $result = $query->result();
return $result;

}

public function updatedata($id)
{
  $data=array();

    
    $data['banner_title']=$_POST['title'];
    $data['banner_content']=$_POST['content'];
   
  
    $this->db->where('id', $id);
    $this->db->update('ct_banner1', $data);
}

//welcome banner
public function addwelcome_banner($new_name)
{
  $data=array();

  $id=$_POST['idval'];

  if($new_name=='')
  {
    $data['img']=$_POST['imageval'];
  
  }
  else{
    $data['img']=$new_name;
  }

    $data['title']=$_POST['Title'];
    $data['content']=$_POST['Content'];
    $data['body']=$_POST['Description'];
 

    $this->db->where('id', $id);
    $this->db->update('ct_welcome', $data);
}
public function showwelcome_banner()
{
$this->db->select('*');
$this->db->from('ct_welcome');
$query = $this->db->get();
$result = $query->result();
return $result;
}
//banner2
public function addbannermodel2()
{
  $data=array();
    $data['title']=$_POST['title'];
    $data['content']=$_POST['content'];
    $data['description']=$_POST['description'];
    $data['iconstyle1']=$_POST['icon1'];
    $data['iconheading1']=$_POST['heading1'];
    $data['iconstyle2']=$_POST['icon2'];
    $data['iconheading2']=$_POST['heading2'];
    $data['iconstyle3']=$_POST['icon3'];
    $data['iconheading3']=$_POST['heading3'];
    $this->db->insert('ct_banner2',$data);
}
public function show_banner2()
{
$this->db->select('*');
$this->db->from('ct_banner2');
$query = $this->db->get();
$result = $query->result();
return $result;
}
public function updatebannermodel2()
{
  $id=$_POST['idval'];
  $data=array();
  $data['title']=$_POST['title'];
  $data['content']=$_POST['content'];
  $data['description']=$_POST['description'];
  $data['iconstyle1']=$_POST['icon1'];
  $data['iconheading1']=$_POST['heading1'];
  $data['iconstyle2']=$_POST['icon2'];
  $data['iconheading2']=$_POST['heading2'];
  $data['iconstyle3']=$_POST['icon3'];
  $data['iconheading3']=$_POST['heading3'];
    $this->db->update('ct_banner2',$data);
}
//banner3
public function addbannermodel3()
{
  $data=array();
   
    $data['iconstyle1']=$_POST['icon1'];
    $data['icontitle1']=$_POST['icontitle1'];
    $data['iconstyle2']=$_POST['icon2'];
    $data['icontitle2']=$_POST['icontitle2'];
    $data['iconstyle3']=$_POST['icon3'];
    $data['icontitle3']=$_POST['icontitle3'];
    $data['iconstyle4']=$_POST['icon4'];
    $data['icontitle4']=$_POST['icontitle4'];
    $data['iconstyle5']=$_POST['icon5'];
    $data['icontitle5']=$_POST['icontitle5'];
    $this->db->insert('ct_banner3',$data);
}
public function show_banner3()
{
$this->db->select('*');
$this->db->from('ct_banner3');
$query = $this->db->get();
$result = $query->result();
return $result;
}

public function updatebannermodel3()
{
  $id=$_POST['idval'];
  $data=array();
  $data['iconstyle1']=$_POST['icon1'];
  $data['icontitle1']=$_POST['icontitle1'];
  $data['iconstyle2']=$_POST['icon2'];
  $data['icontitle2']=$_POST['icontitle2'];
  $data['iconstyle3']=$_POST['icon3'];
  $data['icontitle3']=$_POST['icontitle3'];
  $data['iconstyle4']=$_POST['icon4'];
  $data['icontitle4']=$_POST['icontitle4'];
  $data['iconstyle5']=$_POST['icon5'];
  $data['icontitle5']=$_POST['icontitle5'];
  $this->db->update('ct_banner3',$data);
}
//banner4

public function addbanner4data($new_name)
{
  $data=array();
//   $file_name = $_FILES['logo']['name'];
//   $data['logo'] = $file_name; 
    $data['img']=$new_name;
    $data['content']=$_POST['content'];
    $data['footercontent']=$_POST['footercontent'];
    $this->db->insert('ct_banner4', $data);
}

public function showbanner4()
{
$this->db->select('*');
$this->db->from('ct_banner4');
$query = $this->db->get();
$result = $query->result();
return $result;
}

public function updatebanner4data($id)
{
 
    $this->db->where('id', $id);
    $query = $this->db->get('ct_banner4');
    $result = $query->result();
return $result;

}

public function updatebanner4content($id,$new_name)
{
  $data=array();
  
    $data['img']=$new_name;
    $data['content']=$_POST['content'];
    $data['footercontent']=$_POST['footercontent'];
   
    $this->db->where('id', $id);
    $this->db->update('ct_banner4',$data);
}

//banner5
public function addbannermodel5($new_name)
{
  $data=array();
//   $file_name = $_FILES['logo']['name'];
//   $data['logo'] = $file_name; 
    $data['bg_image']=$new_name;
    $data['title']=$_POST['title'];
    $data['content']=$_POST['content'];
    $this->db->insert('ct_banner5', $data);
}
public function show_banner5()
{
$this->db->select('*');
$this->db->from('ct_banner5');
$query = $this->db->get();
$result = $query->result();
return $result;
}
public function update_bannermodel5($new_name)
{
  $data=array();
  $id=$_POST['idval'];
  if($new_name=='')
  {
    $data['bg_image']=$_POST['imageval'];
  }
  else{
    $data['bg_image']=$new_name;
  }
   // $data['bg_image']=$new_name;
    $data['title']=$_POST['title'];
    $data['content']=$_POST['content'];
    $this->db->where('id', $id);
    $this->db->update('ct_banner5', $data);
}

//banner6
public function addbannermodel6($new_name)
{
  $data=array(); 
    $data['logo_images']=$new_name;
    $this->db->insert('ct_banner6', $data);
}

public function show_banner6()
{
$this->db->select('*');
$this->db->from('ct_banner6');
$query = $this->db->get();
$result = $query->result();
return $result;
}

public function updatebanner6model($id)
{
 
    $this->db->where('id', $id);
    $this->db->select('*');
    $this->db->from('ct_banner6');
    $query = $this->db->get();
    $result = $query->result();
return $result;

}
public function updatebanner6content($new_name)
{
  $data=array();
  $id=$_POST['idval'];
    if($new_name=='')
    {
      $data['logo_images']=$_POST['imageval'];
    }
  else{
    $data['logo_images']=$new_name;
  }
  
    $data['logo_images']=$new_name; 
    $this->db->where('id', $id);
    $this->db->update('ct_banner6',$data);
}

//contact details
public function addcontactmodel()
{
  $data=array();
   
    $data['address']=$_POST['address'];
    $data['tele']=$_POST['tele'];
  $data['mobile']=$_POST['mobile'];
    $data['email']=$_POST['email'];
    $this->db->insert('ct_contact_details',$data);
}
public function show_contact()
{
$this->db->select('*');
$this->db->from('ct_contact_details');
$query = $this->db->get();
$result = $query->result();
return $result;
}
public function updatecontactmodel()
{
  $data=array();
  $id=$_POST['idval'];
    if($new_name=='')
    {
      $data['img']=$_POST['imageval'];
    }
  else{
    $data['img']=$new_name;
  }
  $data['address']=$_POST['address'];
  $data['tele']=$_POST['tele'];
  $data['mobile']=$_POST['mobile'];
  $data['email']=$_POST['email'];
  $this->db->update('ct_contact_details',$data);
}
//map
public function addmapmodel()
{
  $data=array();
    $data['map_url']=$_POST['mapurl'];
    $this->db->insert('ct_map',$data);
}
public function show_mapmodel()
{
$this->db->select('*');
$this->db->from('ct_map');
$query = $this->db->get();
$result = $query->result();
return $result;
}
public function updatemapmodel()
{
  $data=array();
  $id=$_POST['idval'];
    if($new_name=='')
    {
      $data['img']=$_POST['imageval'];
    }
  else{
    $data['img']=$new_name;
  }
  $data=array();
  $data['map_url']=$_POST['mapurl'];
  $this->db->update('ct_map',$data);
}
//about footer
public function addaboutmodel()
{
  $data=array();
    $data['title']=$_POST['title'];
    $data['content']=$_POST['content'];
    $this->db->insert(' ct_about_footer',$data);
}

public function show_aboutmodel()
{
$this->db->select('*');
$this->db->from('ct_about_footer');
$query = $this->db->get();
$result = $query->result();
return $result;
}
public function update_aboutmodel()
{
  $data=array();
  $id=$_POST['idval'];
    if($new_name=='')
    {
      $data['img']=$_POST['imageval'];
    }
  else{
    $data['img']=$new_name;
  }
  $data=array();
  $data['title']=$_POST['title'];
    $data['content']=$_POST['content'];
  $this->db->update('ct_about_footer',$data);
}
//add works
public function add_worksmodel($new_name)
{
  $data=array();
//   $file_name = $_FILES['Image']['name'];
//   $data['logo'] = $file_name; 
    $data['image']=$new_name;
    $data['title']=$_POST['Title'];
    $data['content']=$_POST['Content'];
    $this->db->insert('ct_works', $data);
}
public function showworks()
{
$this->db->select('*');
$this->db->from('ct_works');
$query = $this->db->get();
$result = $query->result();
return $result;
}
public function updateworkdata($id)
{
    $this->db->where('id', $id);
    $query = $this->db->get('ct_works');
    $result = $query->result();
return $result;

}

public function updateworkmodel($id,$new_name)
{
  $data=array();
  $id=$_POST['idval'];
    if($new_name=='')
    {
      $data['img']=$_POST['imageval'];
    }
  else{
    $data['img']=$new_name;
  }
    $data['image']=$new_name;
    $data['title']=$_POST['Title'];
    $data['content']=$_POST['Content']; 
    $this->db->where('id', $id);
    $this->db->update('ct_works',$data);
}
//insert data into team
public function add_teamformmodel()
{
  $data=array();
 
    $data['title']=$_POST['Title'];
    $data['content']=$_POST['Content'];
    $this->db->insert('ct_meet_team', $data);
}
public function show_teams()
{
$this->db->select('*');
$this->db->from('ct_meet_team');
$query = $this->db->get();
$result = $query->result();
return $result;
}

public function showteam($id)
{
 
    $this->db->where('id', $id);
    $this->db->select('*');
    $this->db->from('ct_meet_team');
    $query = $this->db->get();
    $result = $query->result();
return $result;

}

public function updateteammodel($id)
{
  $data=array();
  $id=$_POST['idval'];
    if($new_name=='')
    {
      $data['img']=$_POST['imageval'];
    }
  else{
    $data['img']=$new_name;
  }
    
    $data['title']=$_POST['Title'];
    $data['content']=$_POST['Content']; 
    $this->db->where('id', $id);
    $this->db->update('ct_meet_team',$data);
}
public function insertdata($new_name)
{
  $data=array();
 
    $data['img']=$new_name;
    $data['sub_heading']=$_POST['subheading'];
    $data['heading']=$_POST['heading'];
    $data['body']=$_POST['body'];
    $data['content']=$_POST['content'];
    $this->db->insert('ct_team', $data);
}


public function show_meet_team()
{
 
    
    $this->db->select('*');
    $this->db->from('ct_team');
    $query = $this->db->get();
    $result = $query->result();
return $result;

}
public function showallteam($id)
{
 
    $this->db->where('id', $id);
    $this->db->select('*');
    $this->db->from('ct_team');
    $query = $this->db->get();
    $result = $query->result();
return $result;

}
//update team
public function updateteamdatamodel($new_name)
{
  $data=array();
  $id=$_POST['idval'];
    if($new_name=='')
    {
      $data['img']=$_POST['imageval'];
    }
  else{
    $data['img']=$new_name;
  }
  
    $data['sub_heading']=$_POST['subheading'];
    $data['heading']=$_POST['heading'];
    $data['content']=$_POST['content'];
    $data['body']=$_POST['body'];
    $this->db->where('id', $id);
    $this->db->update('ct_team', $data);
}
//show all services
public function show_all_services()
{
 
    
    $this->db->select('*');
    $this->db->from('ct_service');
    $query = $this->db->get();
    $result = $query->result();
return $result;

}

public function show_service_data($id)
{
 
    $this->db->where('id', $id);
    $this->db->select('*');
    $this->db->from('ct_service');
    $query = $this->db->get();
    $result = $query->result();
return $result;

}

//update service
public function updateservicedatamodel($new_name)
{
  $data=array();
  $id=$_POST['idval'];
    if($new_name=='')
    {
      $data['img']=$_POST['imageval'];
    }
  else{
    $data['img']=$new_name;
  }
  
    
    $data['heading']=$_POST['heading'];
    $data['content']=$_POST['content'];
   
    $this->db->where('id', $id);
    $this->db->update('ct_service', $data);
}
//insert service data
public function insertservicedata($new_name)
{
  $data=array();
 
    $data['img']=$new_name;
 
    $data['heading']=$_POST['heading'];
  
    $data['content']=$_POST['content'];
    $this->db->insert('ct_service', $data);
}
//insert gallery image
public function insertgallery($new_name)
{
  $data=array();
 
    $data['img']=$new_name;
 
    $this->db->insert('ct_gallery', $data);
}
public function show_all_gallery()
{
 
    
    $this->db->select('*');
    $this->db->from('ct_gallery');
    $query = $this->db->get();
    $result = $query->result();
return $result;

}

public function show_gallery_data($id)
{
 
    $this->db->where('id', $id);
    $this->db->select('*');
    $this->db->from('ct_gallery');
    $query = $this->db->get();
    $result = $query->result();
return $result;

}

//update images in gallery
public function updategallerydatamodel($new_name)
{
  $data=array();
  $id=$_POST['idval'];
    if($new_name=='')
    {
      $data['img']=$_POST['imageval'];
    }
  else{
    $data['img']=$new_name;
  }
  
   
    $this->db->where('id', $id);
    $this->db->update('ct_gallery', $data);
}
//login
public function check_admin($email,$password)
  {
    $where='(email="'.$email.'" and password="'.$password.'")';
    $this->db->select('id')->from('ct_login')->where($where)->limit(1);
    $query=$this->db->get();
    if($query->num_rows() > 0)
    {
      $result=$query->result();
      return $result;
    }else{
      return 0;
    }
  }

}

