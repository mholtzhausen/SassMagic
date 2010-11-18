<?php

class QuickCompile extends Controller {

  function QuickCompile(){
    parent::Controller(); 
  }
  
  function index(){
    $this->layout('quickcompile/home',array());
  }
  
  function layout($viewName=NULL,$viewData=NULL,$getData=false){
    $data=array();
    
    $data['header']=$this->load->view('header',$this,true);
    $data['body']=$this->load->view($viewName,$viewData,true);
    $data['footer']=$this->load->view('footer',$this,true);
    
    return $this->load->view('layout',$data,$getData?true:false);    
  }
}

/* End of file welcome.php */
/* Location: ./system/application/controllers/welcome.php */