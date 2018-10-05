<?php
	class Employee extends CI_Controller{

		public function index(){
			
		}
		
		public function createEmployee(){
			$this->load->model('Queries');
			$result = $this->Queries->getUserRole();
			$this->load->view('createEmployee' , ['result'=>$result] );
		}

		public function insertEmployee(){
				$this->form_validation->set_rules('name', 'Name', 'required');
	            $this->form_validation->set_rules('username', 'Username', 'required');
	            $this->form_validation->set_rules('password', 'password', 'required');
	            $this->form_validation->set_rules('user_role_id', 'User Role', 'required');
	            $this->form_validation->set_error_delimiters('<div class="text-danger">','</div>');	            
	                if ( $this->form_validation->run() )
	                {	 
	                	$data = $this->input->post(); 
	                	$this->load->model('Queries');
	                if($this->Queries->addEmployee($data)){
	                	$this->session->set_flashdata('employee_add','Employee Added Successfully');

	                	 }
	                else{
	                	 $this->session->set_flashdata('employee_add','Failed to add Employee');

	                	 }
	                	return redirect('dashboard');

	                }
	                else{
	                	$this->createEmployee();
	                }
		}
		public function employeelist(){
			$this->load->model('Queries');
			$this->load->library('pagination');
				$config = [
					'base_url' => base_url("employee/employeeList"),
					'per_page' => 5,
					'total_rows' => $this->Queries->get_employee_num_rows(),
					'uri_segment'=> 3,
					'full_tag_open' => "<ul class='pagination'>",
					'full_tag_close' => "</ul>",
					'first_tag_open' => '<li>',
					'first_tag_close' => '</li>',
					'last_tag_open' => '<li>',
					'last_tag_close' => '</li>',
					'next_tag_open' => '<li>',
					'next_tag_close' => '</li>',
					'prev_tag_open' => '<li>',
					'prev_tag_close' => '</li>',
					'num_tag_open' => '<li>',
					'num_tag_close' => '</li>',
					'cur_tag_open' => "<li class='active'><a>",
					'cur_tag_close' => '</a></li>',


					];
					$this->pagination->initialize($config);
					$result = $this->Queries->getEmployeeList($config['per_page'], $this->uri->segment(3));
					$this->load->view('employeelist' , ['result' => $result ]);
		}

			public function empPersonalDetails($employee_id){
			$this->load->model('Queries');
			$result = $this->Queries->getEmployeeRecords($employee_id);
			$records = $this->Queries->getEmployeeDetails($employee_id);

			$this->load->view('empPersonalDetails',['result' =>$result , 'records' =>$records]);
		}

			public function addPersonalDetails($employee_id){
				$config = [
					'upload_path' => './uploads' ,
					'allowed_types' => 'gif|jpg|png|jpeg'
						];
				
                $this->load->library('upload', $config);




				$this->form_validation->set_rules('first_name', 'Frist Name', 'required');
	            $this->form_validation->set_rules('midle_name', 'Midle Name', 'required');
	            $this->form_validation->set_rules('last_name', 'Last Name', 'required');
	            $this->form_validation->set_rules('username', 'Username', 'required');
	            $this->form_validation->set_rules('gender', 'Gender', 'required');
	            $this->form_validation->set_rules('nationality', 'Nationality', 'required');
	            $this->form_validation->set_rules('marital_status', 'Marital Status', 'required');
	            $this->form_validation->set_rules('dob', 'DOB', 'required');
	            // $this->form_validation->set_rules('avatar', 'Profile Image', 'required');
	            $this->form_validation->set_error_delimiters('<div class="text-danger">','</div>');


	            if ($this->form_validation->run() && $this->upload->do_upload('avatar'))
                {
                    $data = $this->input->post();
                    $upload_info = $this->upload->data();
                    $path = base_url("uploads/".$upload_info['raw_name'].$upload_info['file_ext']);
                    $data['avatar'] = $path ;
                    $this->load->model('Queries');
                    if($this->Queries->insertEmpPersonalDetails($data)){

                    	$this->session->set_flashdata('employee_add','Employee Added Successfully');

                    }

                    else{
                    	$this->session->set_flashdata('employee_add','Failed to Add Employee');

                    }

                    return redirect('dashboard');
				}
                else
                {
                	$upload_error = $this->upload->display_errors();
                      $this->empPersonalDetails($employee_id);
                	// echo validation_errors();
                }


			}

			public function empContactDetails($employee_id){
				$this->load->model('Queries');
				$result = $this->Queries->getEmployeeRecords($employee_id);
				$records = $this->Queries->getEmpContactDetails($employee_id);
				$profile_pic = $this->Queries->getEmployeeDetails($employee_id);
				$this->load->view('empContactDetails', ['result'=>$result,'records'=>$records,'profile_pic'=>$profile_pic]);



			}
			public function addContactDetails($employee_id){

				$this->form_validation->set_rules('addressLine1', 'Address Line1', 'required');
	            $this->form_validation->set_rules('addressLine2', 'Address Line2', 'required');
	            $this->form_validation->set_rules('city', 'City', 'required');
	            $this->form_validation->set_rules('thana', 'Thana', 'required');
	            $this->form_validation->set_rules('zip_code', 'Zip Code', 'required');
	            $this->form_validation->set_rules('country', 'Country', 'required');
	            $this->form_validation->set_rules('mobile', 'Mobile', 'required');
	            $this->form_validation->set_error_delimiters('<div class="text-danger">','</div>');	            
	            if ( $this->form_validation->run() )
	            {	

					$data = $this->input->post();
					$this->load->model('Queries');
					if($this->Queries->insertEmpContactDetails($data)){
						$this->session->set_flashdata('employee_add','Employee Added Successfully');

					}
					else{
						$this->session->set_flashdata('employee_add','Failed to Add Employee Details');

					}
					return redirect('dashboard');

				}

				else{

					$this->empContactDetails($employee_id);

				}

			}

			 public function empQualificationDetails($employee_id){
				$this->load->model('Queries');
			 	$result = $this->Queries->getEmployeeRecords($employee_id);
			 	$records = $this->Queries->getQualificationDetails($employee_id);
				$profile_pic = $this->Queries->getEmployeeDetails($employee_id);
				$this->load->view('empQualificationDetails',['result'=>$result,'records'=>$records,'profile_pic'=>$profile_pic]);

				}

				public function addQualificationDetails($employee_id){

				$this->form_validation->set_rules('ssc', 'S.S.C', 'required');
                $this->form_validation->set_rules('hsc', 'H.S.C', 'required');
                 $this->form_validation->set_rules('graduation', 'Graduation', 'required');
                 $this->form_validation->set_rules('post_graduation', 'Post Graduation', 'required');

                if ( $this->form_validation->run() )
	            {	

					$data = $this->input->post();
					$this->load->model('Queries');
					if($this->Queries->insertEmpQualificationDetails($data)){
						$this->session->set_flashdata('employee_add','Employee Added Successfully');

					}
					else{
						$this->session->set_flashdata('employee_add','Failed to Add Employee Details');

					}
					return redirect('dashboard');

				}

				else{

					$this->empQualificationDetails($employee_id);

            } 

		}

		public function deleteEmployee(){
			$this->load->model('Queries');
			foreach ($_POST['user_id'] as $userid) {
				$this->Queries->deleteEmp($userid);
			}
			return redirect('dashboard');
			
		}


		public function edit_employee($employee_id){

			$this->load->model('Queries');
			$res=$this->Queries->find_employee($employee_id);
			$this->load->view('edit_employee', ['res'=>$res]);
		}

		public function update_employee($employee_id){
		if($this->form_validation->run('add_article_rules')){
			// return redirect('admin/add_article');
			
			$post=$this->input->post();
			unset($post['submit']);

			return $this->_flashAndRedirect(
				$this->articles->update_articles($employee_id, $post),
				"Article Updated Successfully.",
				"Article Failed To Update. Please Try Again."
			);
		}else{
			$this->load->view('admin/edit_article');
		}
	}

	}

?>  