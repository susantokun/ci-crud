<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Person extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Person_model');
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
        redirect('person/add');
    }
}

/* End of file Person.php */
