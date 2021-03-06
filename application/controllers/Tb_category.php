<?php
/*
 * Generated by CRUDigniter v3.2
 * www.crudigniter.com
 */

class Tb_category extends CI_Controller{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Tb_category_model');
    }

    /*
     * Listing of tb_categories
     */
    function index()
    {
        $data['tb_categories'] = $this->Tb_category_model->get_all_tb_categories();

        $data['_view'] = 'tb_category/index';
        $this->load->view('layouts/main',$data);
    }

    /*
     * Adding a new tb_category
     */
    function add()
    {
        if(isset($_POST) && count($_POST) > 0)
        {
            $params = array(
				'categorie_nom' => $this->input->post('categorie_nom'),
				'categorie_date' => date('Y-m-d H:i:s'),
				'categorie_details' => $this->input->post('categorie_details'),
            );

            $tb_category_id = $this->Tb_category_model->add_tb_category($params);
            redirect('tb_category/index');
        }
        else
        {
            $data['_view'] = 'tb_category/add';
            $this->load->view('layouts/main',$data);
        }
    }

    /*
     * Editing a tb_category
     */
    function edit($categorie_id)
    {
        // check if the tb_category exists before trying to edit it
        $data['tb_category'] = $this->Tb_category_model->get_tb_category($categorie_id);

        if(isset($data['tb_category']['categorie_id']))
        {
            if(isset($_POST) && count($_POST) > 0)
            {
                $params = array(
					'categorie_nom' => $this->input->post('categorie_nom'),
					'categorie_date' => $this->input->post('categorie_date'),
					'categorie_details' => $this->input->post('categorie_details'),
                );

                $this->Tb_category_model->update_tb_category($categorie_id,$params);
                redirect('tb_category/index');
            }
            else
            {
                $data['_view'] = 'tb_category/edit';
                $this->load->view('layouts/main',$data);
            }
        }
        else
            show_error('The tb_category you are trying to edit does not exist.');
    }

    /*
     * Deleting tb_category
     */
    function remove($categorie_id)
    {
        $tb_category = $this->Tb_category_model->get_tb_category($categorie_id);

        // check if the tb_category exists before trying to delete it
        if(isset($tb_category['categorie_id']))
        {
            $this->Tb_category_model->delete_tb_category($categorie_id);
            redirect('tb_category/index');
        }
        else
            show_error('The tb_category you are trying to delete does not exist.');
    }

}
