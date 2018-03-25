<?php
/* 
 * Generated by CRUDigniter v3.2 
 * www.crudigniter.com
 */
 
class Level_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }
     public function isIdAvailable(){
   
    $shcekDataAvailableOrNot=$this->db->get('tbllevel');
    if($shcekDataAvailableOrNot->num_rows() > 0){

    $query = $this->db->query("SELECT level_id FROM tbllevel ORDER BY level_id DESC LIMIT 1");
    $result = $query->row()->level_id;
    $result ++;
    return $result++;
    }else{
        return 212;
    }
}
    
    /*
     * Get tbllevel by level_id
     */
    function get_tbllevel($level_id)
    {
        return $this->db->get_where('tbllevel',array('level_id'=>$level_id))->row_array();
    }
        
    /*
     * Get all tbllevel
     */
    function get_all_tbllevel()
    {
        $this->db->order_by('level_id', 'desc');
        return $this->db->get('tbllevel')->result_array();
    }
        
    /*
     * function to add new tbllevel
     */
    function add_tbllevel($params)
    {
        $this->db->insert('tbllevel',$params);
        return $this->db->insert_id();
    }
    
    /*
     * function to update tbllevel
     */
    function update_tbllevel($level_id,$params)
    {
        $this->db->where('level_id',$level_id);
        return $this->db->update('tbllevel',$params);
    }
    
    /*
     * function to delete tbllevel
     */
    function delete_tbllevel($level_id)
    {
        return $this->db->delete('tbllevel',array('level_id'=>$level_id));
    }
}