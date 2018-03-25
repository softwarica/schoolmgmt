<?php
/* 
 * Generated by CRUDigniter v3.2 
 * www.crudigniter.com
 */
 
class Course extends CI_Controller{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Course_model');
        $this->load->model('Level_model');
    } 

    /*
     * Listing of tblcourse
     */
    function index()
    {
        $data['tblcourse'] = $this->Course_model->get_all_tblcourse_tbllevel();
        
        $data['_view'] = 'course/index';
        $this->load->view('layouts/main',$data);
    }

    /*
     * Adding a new tblcourse
     */
    function add()
    {   
        $this->load->library('form_validation');

		
		$this->form_validation->set_rules('course_name','Course Name','required|max_length[100]');
		$this->form_validation->set_rules('level_id','Level Id','required');
		
		if($this->form_validation->run())     
        {   
            $params = array(
				'course_id' =>$this->Course_model->isIdAvailable(),
				'course_name' => $this->input->post('course_name'),
				'level_id' => $this->input->post('level_id'),
            );
            
            $tblcourse_id = $this->Course_model->add_tblcourse($params);
            redirect('course/index');
        }
        else
        {        
            $data['level']=$this->Level_model->get_all_tbllevel();    
            $data['_view'] = 'course/add';
            $this->load->view('layouts/main',$data);
        }
    }  

    /*
     * Editing a tblcourse
     */
    function edit($course_id)
    {   
        // check if the tblcourse exists before trying to edit it
        $data['tblcourse'] = $this->Course_model->get_tblcourse($course_id);
        
        if(isset($data['tblcourse']['course_id']))
        {
            $this->load->library('form_validation');

			$this->form_validation->set_rules('id','ID','required|integer');
			$this->form_validation->set_rules('course_name','Course Name','required|max_length[100]');
			$this->form_validation->set_rules('level_id','Level Id','required|integer');
		
			if($this->form_validation->run())     
            {   
                $params = array(
					'id' => $this->input->post('id'),
					'course_name' => $this->input->post('course_name'),
					'level_id' => $this->input->post('level_id'),
                );

                $this->Course_model->update_tblcourse($course_id,$params);            
                redirect('course/index');
            }
            else
            {
                $data['_view'] = 'course/edit';
                $this->load->view('layouts/main',$data);
            }
        }
        else
            show_error('The tblcourse you are trying to edit does not exist.');
    } 

    /*
     * Deleting tblcourse
     */
    function remove($course_id)
    {
        $tblcourse = $this->Course_model->get_tblcourse($course_id);

        // check if the tblcourse exists before trying to delete it
        if(isset($tblcourse['course_id']))
        {
            $this->Course_model->delete_tblcourse($course_id);
            redirect('course/index');
        }
        else
            show_error('The tblcourse you are trying to delete does not exist.');
    }
    
}