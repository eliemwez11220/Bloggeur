<?php
/* 
 * Generated by CRUDigniter v3.2 
 * www.crudigniter.com
 */
 
class Redacteur_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }
    
    /*
     * Get tb_redacteur by redacteur_id
     */
    function get_tb_redacteur($redacteur_id)
    {
        return $this->db->get_where('tb_redacteurs',array('redacteur_id'=>$redacteur_id))->row_array();
    }
    
    /*
     * Get all tb_redacteurs count
     */
    function get_all_tb_redacteurs_count()
    {
        $this->db->from('tb_redacteurs');
        return $this->db->count_all_results();
    }
        
    /*
     * Get all tb_redacteurs
     */
    function get_all_tb_redacteurs($params = array())
    {
        $this->db->order_by('redacteur_id', 'desc');
        if(isset($params) && !empty($params))
        {
            $this->db->limit($params['limit'], $params['offset']);
        }
        return $this->db->get('tb_redacteurs')->result_array();
    }
        
    /*
     * function to add new tb_redacteur
     */
    function add_tb_redacteur($params)
    {
        $this->db->insert('tb_redacteurs',$params);
        return $this->db->insert_id();
    }
    
    /*
     * function to update tb_redacteur
     */
    function update_tb_redacteur($redacteur_id,$params)
    {
        $this->db->where('redacteur_id',$redacteur_id);
        return $this->db->update('tb_redacteurs',$params);
    }
    
    /*
     * function to delete tb_redacteur
     */
    function delete_tb_redacteur($redacteur_id)
    {
        return $this->db->delete('tb_redacteurs',array('redacteur_id'=>$redacteur_id));
    }
}
