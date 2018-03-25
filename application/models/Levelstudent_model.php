<?php
/* 
 * Generated by CRUDigniter v3.2 
 * www.crudigniter.com
 */
 
class Levelstudent_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }
    
    /*
     * Get tbllevelstudent by id
     */
    function get_tbllevelstudent($id)
    {
        return $this->db->get_where('tbllevelstudent',array('id'=>$id))->row_array();
    }
        
    /*
     * Get all tbllevelstudent
     */
    function get_all_tbllevelstudent()
    {
        $this->db->order_by('id', 'desc');
        return $this->db->get('tbllevelstudent')->result_array();
    }
      function get_all_tbllevelstudent_tblstudent_tbllevel()
    {
         return $this->db->query("
            select tls.id,tls.level_id,tls.student_id,tl.level_name,ts.full_name as 'student_name' FROM
            tbllevelstudent tls inner join tblstudent ts on tls.student_id=ts.student_id
                                inner join tbllevel tl on tls.level_id=tl.level_id
            ")->result_array();
    } 
        
    /*
     * function to add new tbllevelstudent
     */
    function add_tbllevelstudent($params)
    {
        $this->db->insert('tbllevelstudent',$params);
        return $this->db->insert_id();
    }
    
    /*
     * function to update tbllevelstudent
     */
    function update_tbllevelstudent($id,$params)
    {
        $this->db->where('id',$id);
        return $this->db->update('tbllevelstudent',$params);
    }
    
    /*
     * function to delete tbllevelstudent
     */
    function delete_tbllevelstudent($id)
    {
        return $this->db->delete('tbllevelstudent',array('id'=>$id));
    }
}