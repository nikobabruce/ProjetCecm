<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Model_user extends CI_Model {

	public function get_all_users(){
		// "SELECT * FROM users u JOIN profiles p ON p.user_id = u.id"
		//$hasil = $this->db->get('users');
		//$hasil = $this->db->query("SELECT * FROM users u JOIN profiles p ON p.user_id = u.id");
		$hasil = $this->db->select('u.username, p.*')
						  ->from('users u')
						  ->join('profiles p','p.user_id = u.id')
						  ->get();
		return $hasil;
	}

	public function get_user($id){
		$hasil = $this->db->select('u.username, p.*')
						  ->from('users u')
						  ->join('profiles p','p.user_id = u.id')
						  ->where('u.id', $id)
						  ->limit(1)
						  ->get();
		return $hasil->row();
	}

	public function create($data_user,$data_profile){



		$this->db->insert('users',$data_user);
		$id_baru = $this->db->insert_id();

		$data_profile['user_id'] = $id_baru;
		$this->db->insert('profiles', $data_profile);

		$data_user['user_id'] = $this->db->insert_id();
	   $this->db->insert('rapport',$data_user);


	   $data_user['user_id'] = $this->db->insert_id();
	   $this->db->insert('planification',$data_plan);
	}

	public function update($id,$data_user,$data_profile){
		$this->db->where('id',$id)->update('users', $data_user);
		$this->db->where('user_id',$id)->update('profiles', $data_profile);
	}

	public function delete($id){
		// DELETE FROM users WHERE id = $id;
		// DELETE FROM profiles WHERE user_id = $id;

		$this->db->where('id',$id)->delete('users');
		$this->db->where('user_id',$id)->delete('profiles');
	}
        public function cek_user_password($username,$password){
            //SELECT  FROM users WHERE username='$username'AND password='$password'
            $hasil=$this->db->where('username',$username)
                            ->where('password',$password)
                            ->limit(1)
                            ->get('users');
            if($hasil->num_rows()>0){
                return $hasil->row();
            }else{

                return false;
            }
        }

		public function get_user_by_username($username){
			$user = $this->db->where('username',$username)
                            ->limit(1)
                            ->get('users')->row_array();
			return $user;
		}
		public function groups(){
		 return $this->db->select("*")->from("usersgroups")->get()->result_array();
		}

		public function save_group($data_group){
		  if($data_group['usersgroup_id'] == ""){
		    return $this->db->insert('usersgroups',$data_group);
		  }else{
		    return $this->db->where('usersgroup_id',$data_group["usersgroup_id"])->update('usersgroups',$data_group);
		  }
		}

		public function get_groups($group_id){
		 return $this->db->select("*")->from("usersgroups")->where("usersgroup_id", $group_id)->get()->row_array();
		}

		public function delete_group($group_id){
			$this->db->where('usersgroup_id',$group_id)->delete('usersgroups');
		}

		public function save_task($task){
			if(empty($task['usertask_id'])){
				$task['usertask_id'] = NULL;
				return $this->db->insert('userstasks', $task);
			}
			else{
				return $this->db->update('userstasks', $task, array('usertask_id' => $task['usertask_id']));
			}
		}

		public function getAllTasks(){
			return $this->db->select("*")->from("userstasks")->get()->result_array();
		}

		public function get_task($task_id){
		 return $this->db->select("*")->from("userstasks")->where("usertask_id", $task_id)->get()->row_array();
		}

		// public get_usersgroupsrules(($usersgroup_id){
			// /*$tasks = $this->db->select("*")->from("userstasks") ->join('usersgroupsrules', 'usersgroupsrules.userstask_id = userstasks.usertask_id')
			 					// ->where('usersgroupsrules.usersgroup_id', $usersgroup_id)->order_by("userstasks.usertask_name", "ASC")->get()->result_array();
			// return $tasks;*/
		// }

}
