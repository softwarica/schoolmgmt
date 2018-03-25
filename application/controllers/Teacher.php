<?php
/* 
 * Generated by CRUDigniter v3.2 
 * www.crudigniter.com
 */
 
class Teacher extends CI_Controller{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Teacher_model');
    } 

    /*
     * Listing of tblteacher
     */
    function index()
    {
        $data['tblteacher'] = $this->Teacher_model->get_all_tblteacher();
        
        $data['_view'] = 'teacher/index';
        $this->load->view('layouts/main',$data);
    }

    /*
     * Adding a new tblteacher
     */
    function add()
    {   
        $this->load->library('form_validation');

		$this->form_validation->set_rules('full_name','Full Name','required|max_length[50]');
		$this->form_validation->set_rules('address','Address','required|max_length[50]');
		$this->form_validation->set_rules('contact','Contact','required|max_length[50]');
		$this->form_validation->set_rules('email','Email','required|max_length[60]|valid_email');
		$this->form_validation->set_rules('pword','Pword','required|max_length[60]');
		
		if($this->form_validation->run())     
        {   
            $params = array(
				'teacher_id' => $this->Teacher_model->isIdAvailable(),
				'full_name' => $this->input->post('full_name'),
				'address' => $this->input->post('address'),
				'contact' => $this->input->post('contact'),
				'email' => $this->input->post('email'),
				'pword' => $this->input->post('pword'),
            );
            
            $tblteacher_id = $this->Teacher_model->add_tblteacher($params);
            redirect('teacher/index');
        }
        else
        {            
            $data['_view'] = 'teacher/add';
            $this->load->view('layouts/main',$data);
        }
    }  

    /*
     * Editing a tblteacher
     */
    function edit($teacher_id)
    {   
        // check if the tblteacher exists before trying to edit it
        $data['tblteacher'] = $this->Teacher_model->get_tblteacher($teacher_id);
        
        if(isset($data['tblteacher']['teacher_id']))
        {
            $this->load->library('form_validation');

			$this->form_validation->set_rules('id','ID','required|integer');
			$this->form_validation->set_rules('full_name','Full Name','required|max_length[50]');
			$this->form_validation->set_rules('address','Address','required|max_length[50]');
			$this->form_validation->set_rules('contact','Contact','required|max_length[50]');
			$this->form_validation->set_rules('email','Email','required|max_length[60]|valid_email');
			$this->form_validation->set_rules('pword','Pword','required|max_length[60]');
		
			if($this->form_validation->run())     
            {   
                $params = array(
					'id' => $this->input->post('id'),
					'full_name' => $this->input->post('full_name'),
					'address' => $this->input->post('address'),
					'contact' => $this->input->post('contact'),
					'email' => $this->input->post('email'),
					'pword' => $this->input->post('pword'),
                );

                $this->Teacher_model->update_tblteacher($teacher_id,$params);            
                redirect('teacher/index');
            }
            else
            {
                $data['_view'] = 'teacher/edit';
                $this->load->view('layouts/main',$data);
            }
        }
        else
            show_error('The tblteacher you are trying to edit does not exist.');
    } 

    /*
     * Deleting tblteacher
     */
    function remove($teacher_id)
    {
        $tblteacher = $this->Teacher_model->get_tblteacher($teacher_id);

        // check if the tblteacher exists before trying to delete it
        if(isset($tblteacher['teacher_id']))
        {
            $this->Teacher_model->delete_tblteacher($teacher_id);
            redirect('teacher/index');
        }
        else
            show_error('The tblteacher you are trying to delete does not exist.');
    }
    
}