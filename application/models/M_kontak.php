<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_kontak extends CI_Model
{
    function ambil_data_kontak(){
        return $this->db->get('kontak');
    }

    function ambil_data_bagian(){
        return $this->db->query('SELECT bagian FROM kontak GROUP BY bagian;');
    }
}