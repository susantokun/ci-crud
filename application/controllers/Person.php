<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Person extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Person_model');
    }

    public function index()
    {
        $data['persons'] = $this->Person_model->get_all();
        $this->load->view('v_list', $data);
    }

    public function add()
    {
        $this->load->view('v_create');
    }

    public function create()
    {
        $name = $this->input->post('name');
        $address = $this->input->post('address');

        $data = array(
          'name' => $name,
          'address' => $address
        );
        $this->Person_model->insert($data);
        redirect('person');
    }

    public function edit($id)
    {
        $data['person'] = $this->Person_model->get_by_id($id);
        $this->load->view('v_update', $data);
    }

    public function update()
    {
        $id = $this->input->post('id');
        $name = $this->input->post('name');
        $address = $this->input->post('address');

        $data = array(
          'name' => $name,
          'address' => $address
        );
        $this->Person_model->update(['id' => $id], $data);
        redirect('person');
    }

    public function detail($id)
    {
        $data['person'] = $this->Person_model->get_by_id($id);
        $this->load->view('v_detail', $data);
    }
}

/* End of file Person.php */
