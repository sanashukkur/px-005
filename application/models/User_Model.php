<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_Model extends CI_Model
 {
  function __construct(){
    parent::__construct();
    $this->load->database();
  }
 

public function usermodel()
{
   
    $this->db->select('*')->from('ct_settings');
    $query=$this->db->get();
    if($query->num_rows() > 0)
    {
      
      $result=$query->result();
      return $result;
    }else{
      return 0;
    }
}
//main banner
public function userbanner()
{
   
    $this->db->select('*')->from('ct_banner1');
    $query=$this->db->get();
    if($query->num_rows() > 0)
    {
      
      $result=$query->result();
      return $result;
    }else{
      return 0;
    }
}
//welcome banner
public function userwelcome()
{
   
    $this->db->select('*')->from('ct_welcome');
    $query=$this->db->get();
    if($query->num_rows() > 0)
    {
      
      $result=$query->result();
      return $result;
    }else{
      return 0;
    }
}
//banner 2
public function userbanner2()
{
   
    $this->db->select('*')->from('ct_banner2');
    $query=$this->db->get();
    if($query->num_rows() > 0)
    {
      
      $result=$query->result();
      return $result;
    }else{
      return 0;
    }
}
//banner 3
public function userbanner3()
{
   
    $this->db->select('*')->from('ct_banner3');
    $query=$this->db->get();
    if($query->num_rows() > 0)
    {
      
      $result=$query->result();
      return $result;
    }else{
      return 0;
    }
}

//banner 4
public function userbanner4()
{
   
    $this->db->select('*')->from('ct_banner4');
    $query=$this->db->get();
    if($query->num_rows() > 0)
    {
      
      $result=$query->result();
      return $result;
    }else{
      return 0;
    }
}

//banner 5
public function userbanner5()
{
   
    $this->db->select('*')->from('ct_banner5');
    $query=$this->db->get();
    if($query->num_rows() > 0)
    {
      
      $result=$query->result();
      return $result;
    }else{
      return 0;
    }
}

//banner 6
public function userbanner6()
{
   
    $this->db->select('*')->from('ct_banner6');
    $query=$this->db->get();
    if($query->num_rows() > 0)
    {
      
      $result=$query->result();
      return $result;
    }else{
      return 0;
    }
}

//contact details
public function usercontact()
{
   
    $this->db->select('*')->from('ct_contact_details');
    $query=$this->db->get();
    if($query->num_rows() > 0)
    {
      
      $result=$query->result();
      return $result;
    }else{
      return 0;
    }
}

//map
public function map()
{
   
    $this->db->select('*')->from('ct_map');
    $query=$this->db->get();
    if($query->num_rows() > 0)
    {
      
      $result=$query->result();
      return $result;
    }else{
      return 0;
    }
}

//about footer
public function aboutfooter()
{
   
    $this->db->select('*')->from('ct_welcome');
    $query=$this->db->get();
    if($query->num_rows() > 0)
    {
      
      $result=$query->result();
      return $result;
    }else{
      return 0;
    }
}
//about-works

//about footer
public function aboutwork()
{
   
    $this->db->select('*')->from('ct_works');
    $query=$this->db->get();
    if($query->num_rows() > 0)
    {
      
      $result=$query->result();
      return $result;
    }else{
      return 0;
    }
  }
    //team review
    public function team()
{
   
    $this->db->select('*')->from('ct_team');
    $query=$this->db->get();
    if($query->num_rows() > 0)
    {
      
      $result=$query->result();
      return $result;
    }else{
      return 0;
    }
}
//meet team
//team review
public function meetteam()
{
   
    $this->db->select('*')->from('ct_meet_team');
    $query=$this->db->get();
    if($query->num_rows() > 0)
    {
      
      $result=$query->result();
      return $result;
    }else{
      return 0;
    }
  }
    public function get_all_service()
{
 
    
    $this->db->select("*,REPLACE(`heading`, ' ', '_') as formattedtext");
    $this->db->from('ct_service');
    $query = $this->db->get();
    $result = $query->result();
return $result;

}
    public function servicemodel($servicename)
{
    $query = $this->db->query("SELECT *,REPLACE(`heading`, ' ', '_') as formattedtext FROM ct_service where REPLACE(`heading`, ' ', '_')='".$servicename."'");


    if($query->num_rows() > 0)
    {
      
      $result=$query->result();
      
      return $result;
    }else{
      return 0;
    }
}
//gallery
public function get_all_pics()
{
   
    $this->db->select('*')->from('ct_gallery');
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

