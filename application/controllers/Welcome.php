<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function __construct()
	{
            parent::__construct();
                if(!$this->session->userdata('username')){

                    $this->session->set_flashdata('error','Maaf,Anda belum login!');
                    redirect('login');
                }

		$this->load->model('model_user');
	}

	public function index()
	{
		$data['users'] = $this->model_user->get_all_users();

		$this->load->view('welcome_message', $data);
	}

	public function create(){
		$this->form_validation->set_rules('username', 'Username', 'required|alpha_numeric');
		$this->form_validation->set_rules('password', 'Password', 'required|alpha_numeric');
		$this->form_validation->set_rules('nama_lengkap', 'Nama Lengkap', 'required');
		$this->form_validation->set_rules('alamat', 'Alamat', 'required');
		$this->form_validation->set_rules('email', 'Email', 'required|valid_email');
		$this->form_validation->set_rules('telp', 'Nomor Telp', 'required|numeric');

		if ($this->form_validation->run() == FALSE)
		{
			$data ["group_list"] = $this->model_user->groups();
			$this->load->view('form_tambah', $data);
		} else {
			$data_user = array(
							'username' => set_value('username'),
							'password' => set_value('password'),
							'level'    => '1'
						 );
			$data_profile = array(
							'nama_lengkap' 	=> set_value('nama_lengkap'),
							'alamat' 		=> set_value('alamat'),
							'telp' 			=> set_value('telp'),
							'email' 		=> set_value('email')
						 );
			$this->model_user->create($data_user,$data_profile);
			redirect('welcome');
		}
	}

	public function update($id){
		$this->form_validation->set_rules('username', 'Username', 'required|alpha_numeric');
		$this->form_validation->set_rules('password', 'Password', 'alpha_numeric');
		$this->form_validation->set_rules('nama_lengkap', 'Nama Lengkap', 'required');
		$this->form_validation->set_rules('alamat', 'Alamat', 'required');
		$this->form_validation->set_rules('email', 'Email', 'required|valid_email');
		$this->form_validation->set_rules('telp', 'Nomor Telp', 'required|numeric');

		if ($this->form_validation->run() == FALSE)
		{
			$data['user'] = $this->model_user->get_user($id);
			$this->load->view('form_edit',$data);
		} else {
			$data_user = array(
							'username' => set_value('username'),
							'level'    => '1'
						 );
			if($this->input->post('password') != ''){
				$data_user['password'] = set_value('password');
			}
			$data_profile = array(
							'nama_lengkap' 	=> set_value('nama_lengkap'),
							'alamat' 		=> set_value('alamat'),
							'telp' 			=> set_value('telp'),
							'email' 		=> set_value('email')
						 );
			$this->model_user->update($id,$data_user,$data_profile);
			redirect('welcome');
		}
	}

	public function delete($id){
		$this->model_user->delete($id);
		redirect('welcome');
	}

	public function add_group(){
		$data = array("usersgroup_id" => "", "usersgroup_name" => "", "usersgroup_description" => "", "sortorder" => "");
		$this->load->view('group_form', $data);
	}

	public function save_group(){
		$this->form_validation->set_rules('usersgroup_name', 'usersgroup_name', 'required|alpha_numeric');
		$this->form_validation->set_rules('usersgroup_description', 'usersgroup_description', 'required');
		$this->form_validation->set_rules('sortorder', 'sortorder', 'required|numeric');


		if ($this->form_validation->run() == FALSE)
		{
			$this->load->view('group_form');
		} else {
			$data_group = array(
							'usersgroup_id' => $this->input->post("usersgroup_id"),
							'usersgroup_name' => $this->input->post("usersgroup_name"),
							'usersgroup_description' => trim($this->input->post("usersgroup_description")),
							'sortorder'    => $this->input->post("sortorder")
						 );
			$success = $this->model_user->save_group($data_group);
			redirect('welcome/user_groups/');
		}


	}

	public function edit_group($id){
		$data = $this->model_user->get_groups($id);
		$this->load->view('group_form', $data);
	}

	public function user_groups(){
		$data ['groups'] = $this->model_user->groups();

		$this->load->view('list_groups', $data);
	}

	public function delete_group($group_id){
		$this->model_user->delete_group($group_id);
		redirect('welcome/user_groups/');
	}

			//Add user task
			public function add_task($data = ''){
				$allTasks = $this->model_user->getAllTasks();
				$listTasks = array();
				foreach ($allTasks as $key => $value) {
					array_push($listTasks, $value['usertask_name']);
				}
				$controllers=array('' => 'Select');
		    foreach (glob(APPPATH . 'controllers/*' . EXT) as $controller) {
		    	require_once($controller);
		      $methods = get_class_methods(basename($controller, EXT));
		      foreach ($methods as $methodVar) {
		      	if (!in_array($methodVar, array('__construct','get_instance'))) {
							//if(!in_array(basename($controller, EXT).'/'.$methodVar.'/', $listTasks)){
								$methodVar = ($methodVar=='index')?'':$methodVar.'/';
								$controllers[basename($controller, EXT).'/'.$methodVar] = basename($controller, EXT).'/'.$methodVar;
							//}
		      	}
		    	}
		    }
		    $data['usertask_name'] =  $controllers;
				$this->load->view('add_task',$data);
			}

			public function save_task(){
				$task=$this->input->post();
				$this->load->library('form_validation');
				$this->form_validation->set_rules('usertask_name', 'Tache', 'trim|required');
				$this->form_validation->set_rules('usertask_description', 'Description', 'trim|required');
				if ($this->form_validation->run() == FALSE)
				{
					$this->add_task($task);
				}else
				{
					if($this->model_user->save_task($task)){
						redirect('welcome/all_tasks');
					}
				}
			}

			public function all_tasks(){
				$data['tasks'] = $this->model_user->getAllTasks();
				$this->load->view('list_tasks', $data);
			}

			public function edit_task($task_id){
				$data['task'] = $this->model_user->get_task($task_id);
				//echo "<pre>"; print_r($data);
					$this->add_task($data);
			}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */

