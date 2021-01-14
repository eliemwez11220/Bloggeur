<?php
/* 
 * Generated by CRUDigniter v3.2 
 * www.crudigniter.com
 */
 
class Article_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }
    
    /*
     * Get tb_article by article_id
     */
    function get_tb_article($article_id)
    {
        return $this->db->get_where('tb_articles',array('article_id'=>$article_id))->row_array();
    }
        
    /*
     * Get all tb_articles
     */
    function get_all_tb_articles()
    {
        $this->db->order_by('article_id', 'desc');
        return $this->db->get('tb_articles')->result_array();
    }
        
    /*
     * function to add new tb_article
     */
    function add_tb_article($params)
    {
        $this->db->insert('tb_articles',$params);
        return $this->db->insert_id();
    }
    
    /*
     * function to update tb_article
     */
    function update_tb_article($article_id,$params)
    {
        $this->db->where('article_id',$article_id);
        return $this->db->update('tb_articles',$params);
    }
    
    /*
     * function to delete tb_article
     */
    function delete_tb_article($article_id)
    {
        return $this->db->delete('tb_articles',array('article_id'=>$article_id));
    }
}
