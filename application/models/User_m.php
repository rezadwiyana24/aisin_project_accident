<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User_m extends CI_Model
{
    public function SemuaData()
    {
        return $this->db->get('data_accident')->result_array();
    }

    public function proses_tambah_data()
    {
        $data = [
            "id" => $this->input->post('id'),
            "name" => $this->input->post('name'),
            "type" => $this->input->post('type'),
            "description" => $this->input->post('description'),
            "date_of_incident" => $this->input->post('date_of_incident'),
        ];

        $this->db->insert('data_accident', $data);
    }

    public function hapus_data($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('data_accident');
    }

    public function ambil_id_data_accident($id)
    {
        return $this->db->get_where('data_accident', ['id' => $id])->row_array();
    }

    public function proses_edit_data()
    {
        $data = [
            "id" => $this->input->post('id'),
            "name" => $this->input->post('name'),
            "type" => $this->input->post('type'),
            "description" => $this->input->post('description'),
            "date_of_incident" => $this->input->post('date_of_incident'),
        ];

        $this->db->where('id', $this->input->post('id'));
        $this->db->update('data_accident', $data);
    }
}
