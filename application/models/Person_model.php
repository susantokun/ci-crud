<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Person_model extends CI_Model
{
    private $table = 'tbl_persons';
    private $id = 'tbl_persons.id';

    public function insert($data)
    {
        $this->db->insert($this->table, $data);
        return $this->db->insert_id();
    }
}

/* End of file Person_model.php */


