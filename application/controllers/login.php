<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('model_user');
	}
	   
	public function index()
	{
		
		$this->form_validation->set_rules('username', 'Username', 'required|alpha_numeric');
		$this->form_validation->set_rules('password', 'Password', 'required|alpha_numeric');
                
                
       if ($this->form_validation->run() == false)
		{
		$this->load->view('form_login');
                }else{
                    $username=  set_value('username');
                    $password=  set_value('password');
                    
                    $is_valid=$this->model_user->cek_user_password($username,$password);
                    
                    if($is_valid != false){
                        $this->session->set_userdata('username',$username);
						$user_info = $this->model_user->get_user_by_username($username);
						//echo "<pre>"; print_r($user_info); exit;
						$this->session->set_userdata('user_id',$user_info ["id"]);
						
                        redirect('welcome');
                    }else{
                        $this->session->set_flashdata('error','Mauvais username/password ');
                        redirect('login');
                    }
                }
	}
	
	
        public function logout(){
            $this->session->sess_destroy();
            redirect('activite');
        }
	
	
}
