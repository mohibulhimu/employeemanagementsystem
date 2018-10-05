<?php
	class Queries extends CI_Model{

		public function login_user($username,$password){
			$query=$this->db->where(['username'=>$username,'password'=>$password])
				->get('users');
			if($query->num_rows() > 0){
				return $query->row()->user_id;

			}

		}
		public function getUserRole(){
			$query=$this->db->where(['role_name'=>'Employee'])
				->get('user_role');
			if($query->num_rows() > 0){
				return $query->row()->id;
			}
		}

		public function addEmployee($data){
			return $this->db->insert('users', $data);
		}

		public function getAllUsers($limit , $offset){
			$this->db->select(['users.user_id','users.name','users.username','user_role.role_name','users.created']);
			$this->db->from('users');
			$this->db->join('user_role','user_role.id = users.user_role_id');
			$this->db->limit($limit , $offset);
			// $this->db->order_by('id','DESC');
			$query = $this->db->get();
			return $query->result();
		}

		public function get_num_rows(){
			$query = $this->db->get('users');
			return $query->num_rows();
		}

		public function getEmployeeList($limit , $offset){
			$this->db->select(['users.user_id','users.name','users.username','user_role.role_name']);
			$this->db->from('users');
			$this->db->join('user_role','user_role.id = users.user_role_id');
			$this->db->where(['users.user_role_id' => '2']);
			$this->db->limit($limit , $offset);
			$query = $this->db->get();

			return $query->result();

		}
		public function get_employee_num_rows(){
			$this->db->select(['users.user_id','users.name','users.username','user_role.role_name']);
			$this->db->from('users');
			$this->db->join('user_role','user_role.id = users.user_role_id');
			$this->db->where(['users.user_role_id' => '2']);
			$query = $this->db->get();

			return $query->num_rows();
		}

		public function searchRecord($query){
			$this->db->select(['users.user_id','users.name','users.username','user_role.role_name']);
			$this->db->from('users');
			$this->db->join('user_role','user_role.id = users.user_role_id');
			$this->db->like('name',$query);
			$query = $this->db->get();			
			return $query->result();

		}
			public function getEmployeeRecords($employee_id){
				$query = $this->db->where(['user_id'=> $employee_id])
							->get('users');

				if ($query->num_rows() > 0) {
				return $query->row();
				
				}

			}

			public function insertEmpPersonalDetails($data){
				return $this->db->insert('emp_personal_details' , $data);

			}

			public function getEmployeeDetails($employee_id){
				 $query = $this->db->where(['user_id' => $employee_id])
				 		->get('emp_personal_details');

				 		if ($query->num_rows() > 0) {
						return $query->row();
								

						}
			}

			public function insertEmpContactDetails($data){
				return $this->db->insert('emp_contact_details' , $data);

			}
			public function getEmpContactDetails($employee_id){
				 $query = $this->db->where(['user_id' => $employee_id])
				 		->get('emp_contact_details');

				 		if ($query->num_rows() > 0) {
						return $query->row();
				 			
						}
			}

			public function insertEmpQualificationDetails($data){
				return $this->db->insert('emp_qualifications',$data);

			}
			public function getQualificationDetails($employee_id){
				 $query = $this->db->where(['user_id' => $employee_id])
				 		->get('emp_qualifications');

				 		if ($query->num_rows() > 0) {
						return $query->row();


			}
		}

		public function deleteEmp($userid){
			$this->db->delete('users',['user_id'=>$userid]);
			$this->db->delete('emp_personal_details',['user_id'=>$userid]);
			$this->db->delete('emp_contact_details',['user_id'=>$userid]);
			$this->db->delete('emp_qualifications',['user_id'=>$userid]);
		}




		public function find_employee($employee_id){
		$query = $this->db->where(['user_id' => $employee_id])
					->select('*')
				 	->where('user_id', $employee_id)
				 	->get('emp_personal_details');

						if ($query->num_rows() > 0) {
						return $query->row();		 
			}

		}
	}
	
?>