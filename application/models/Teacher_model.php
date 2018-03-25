<?php
/* 
 * Generated by CRUDigniter v3.2 
 * www.crudigniter.com
 */
 
class Teacher_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }

    public function isIdAvailable(){
   
    $shcekDataAvailableOrNot=$this->db->get('tblteacher');
    if($shcekDataAvailableOrNot->num_rows() > 0){

    $query = $this->db->query("SELECT teacher_id FROM tblteacher ORDER BY teacher_id DESC LIMIT 1");
    $result = $query->row()->teacher_id;
    $result ++;
    return $result++;
    }else{
        return 150212;
    }
}
    
    /*
     * Get tblteacher by teacher_id
     */
    function get_tblteacher($teacher_id)
    {
        return $this->db->get_where('tblteacher',array('teacher_id'=>$teacher_id))->row_array();
    }
        
    /*
     * Get all tblteacher
     */
    function get_all_tblteacher()
    {
        $this->db->order_by('teacher_id', 'desc');
        return $this->db->get('tblteacher')->result_array();
    }
        
    /*
     * function to add new tblteacher
     */
    function add_tblteacher($params)
    {
        $this->db->insert('tblteacher',$params);
        return $this->db->insert_id();
    }
    
    /*
     * function to update tblteacher
     */
    function update_tblteacher($teacher_id,$params)
    {
        $this->db->where('teacher_id',$teacher_id);
        return $this->db->update('tblteacher',$params);
    }
    
    /*
     * function to delete tblteacher
     */
    function delete_tblteacher($teacher_id)
    {
        return $this->db->delete('tblteacher',array('teacher_id'=>$teacher_id));
    }
}
