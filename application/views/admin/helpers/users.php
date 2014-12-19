<?php
class Users extends User_Controller
{
	public function __construct(){
            parent::__construct();
	}

	public function index()
    	{   
            if($this->input->post('message'))
              NotificationHepler::distribution();
            
            $data['test'] = 'hello';
            $this->load->view('admin/send_notification', $data);
    	}
        
}
?>