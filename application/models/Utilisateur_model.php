<?php
/* 
 * Generated by CRUDigniter v3.2 
 * www.crudigniter.com
 */
 
class Utilisateur_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }
    
    /*
     * Get utilisateur by id_user
     */
    function get_utilisateur($id_user)
    {
        return $this->db->get_where('Utilisateurs',array('id_user'=>$id_user))->row_array();
    }
    
    /*
     * Get all utilisateurs count
     */
    function get_all_utilisateurs_count()
    {
        $this->db->from('Utilisateurs');
        return $this->db->count_all_results();
    }
        
    /*
     * Get all utilisateurs
     */
    function get_all_utilisateurs($params = array())
    {
        $this->db->order_by('id_user', 'desc');
        if(isset($params) && !empty($params))
        {
            $this->db->limit($params['limit'], $params['offset']);
        }
        return $this->db->get('Utilisateurs')->result_array();
    }
        
    /*
     * function to add new utilisateur
     */
    function add_utilisateur($params)
    {
        $this->db->insert('Utilisateurs',$params);
        return $this->db->insert_id();
    }
    
    /*
     * function to update utilisateur
     */
    function update_utilisateur($id_user,$params)
    {
        $this->db->where('id_user',$id_user);
        return $this->db->update('Utilisateurs',$params);
    }
    
    /*
     * function to delete utilisateur
     */
    function delete_utilisateur($id_user)
    {
        return $this->db->delete('Utilisateurs',array('id_user'=>$id_user));
    }
}
