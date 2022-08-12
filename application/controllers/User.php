<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
{
    public function index()
    {
        $data['accident'] = $this->User_m->SemuaData();

        $data['title'] = 'Data Accident';
        $this->load->view('templates/auth_footer');
        $this->load->view('user/template/header', $data);
        $this->load->view('user/index', $data);
    }

    public function tambah()
    {
        $data['accident'] = $this->User_m->SemuaData();

        $data['title'] = 'Create Data';
        $this->load->view('user/template/header', $data);
        $this->load->view('auth/create_data');
        $this->load->view('user/template/footer', $data);
    }

    public function proses_tambah_data()
    {
        $this->User_m->proses_tambah_data();
        redirect('User');
    }

    public function hapus_data($id)
    {
        $this->User_m->hapus_data($id);
        redirect('User');
    }

    public function edit_data($id)
    {
        $data['data_accident'] = $this->User_m->ambil_id_data_accident($id);
        $data['title'] = 'Edit Data';
        $this->load->view('user/template/header', $data);
        $this->load->view('auth/edit_data', $data);
        $this->load->view('user/template/footer', $data);
    }

    public function proses_edit_data()
    {
        $this->User_m->proses_edit_data();
        redirect('User');
    }
}
