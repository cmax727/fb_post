<?php

class Main extends MY_Controller{
  
  private $filter = '';
  
  public function __construct() {
    parent::__construct();
    $this->cssjsloader->link_js('js/jquery/jquery-1.7.1.min');
    $this->cssjsloader->link_js('js/fb-functions');
    
    $this->cssjsloader->link_js('jquery/jquery.validate.min');
    
    $this->load->library('pagination');
    $this->load->model('job');
    $this->load->model('fanpage');
    
    $this->load->library('phpmailer');
    
    
    session_start();
      include_once('invite-check.php');
      include_once('config.php');
      if (isset($_REQUEST["signed_request"]) && !empty($_REQUEST["signed_request"])){
        $signed_request = $_REQUEST["signed_request"];
        $secret='caec98153c78964f2d5cd33920091d7d'; //get application secret from edit setting and update here
        include_once('sig_control.php');
        $data=parse_signed_request($signed_request, $secret);
        $_SESSION['data'] = $data;
        $_SESSION['firstTime'] = 1;
      }else{
        $_SESSION['firstTime'] = 0;
      }
  }
  
  public function index($offset =  0){
    $data=$_SESSION['data'];
    $filter = $data["page"]["id"];
    $this->filter = $filter;
    
    $config['base_url'] = base_url() . 'main/index/';
    $config['total_rows'] = JobItem::factory()->getCountByFilter($filter);
    $config['per_page'] = 5; 
    $this->pagination->initialize($config); 
    $jobs = JobItem::factory()->getLimitedAndFiltered(5, $offset, $filter);
    $paganation = $this->pagination->create_links();
    $paganation = preg_replace_callback('/<a[^>]*href="([^>]*)">/', array($this, 'add_filter_to_peganation'), $paganation);
    
    $flag = $this->session->userdata('flag');
    $data_aa = array(
        'peganation' => $paganation, 
        'jobs' => $jobs
    );
    
    
    $this->load->view('mainpage.tpl.php', $data_aa);
  }
  
  
  private function add_filter_to_peganation($matches){
    return ($this->filter && $matches[1]) ? '<a href="' . $matches[1] . '?id=' . $this->filter . '">' : $matches[0];
  }
  
  public function readmore($id){
    $job = JobItem::factory($id);
    $this->load->view('jobfull.tpl.php', array('job' => $job));
  }
  
  public function postjobform(){
    $lastpage = (isset($_SERVER['HTTP_REFERER']) && !empty($_SERVER['HTTP_REFERER'])) ? $_SERVER['HTTP_REFERER'] : base_url() . 'main/index';
    $this->load->view('emailform.tpl.php', array('lastpage' => $lastpage));
  }
  
  public function sendmail(){
    $mail = new PHPMailer(true);
//    if(!isset($_POST['captcha']) || $_POST['captcha'] != 15){
//      return false;
//    }
    try {
      $mail->AddAddress('nouman915@gmail.com', '');
      $mail->AddAddress('ProductioNotices@gmail.com ', '');
      $mail->SetFrom($this->input->post('emailyou'), '');
      $mail->Subject = 'Job Posting';
      $message = "
      <p>city : " . $this->input->post('city') . "</p>    
      <p>job : " . $this->input->post('job') . "</p>    
      <p>duration : " . $this->input->post('duration') . "</p>    
      <p>rate : " . $this->input->post('rate') . "</p>    
      <p>dailyrate : " . $this->input->post('dailyrate') . "</p>    
      <p>emailapply : " . $this->input->post('emailapply') . "</p>    
      <p>emailyou : " . $this->input->post('emailyou') . "</p>    
      <p>desc : " . $this->input->post('desc') . "</p>    
      ";
      $mail->MsgHTML($message);
      $mail->Send();
    } catch (phpmailerException $e) {
    } catch (Exception $e) {
    }
    $data = $_SESSION['data'];
    $redirect = (isset($_POST['lastpage']) && !empty($_POST['lastpage']) && !isset($data["app_data"])) ? $_POST['lastpage'] : base_url() . 'main/index';
    
//    redirect($redirect);
    redirect(base_url() . 'main/index');
  }
}