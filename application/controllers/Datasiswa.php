<?php
class Datasiswa extends CI_Controller
{
    public function index()
    {
        $this->load->view('view-form-siswa');
    }
    public function cetak()
    {
        $data = [
            'nama' => $this->input->post('nama'),
            'nis' => $this->input->post('nis'),
            'kelas' => $this->input->post('kelas'),
            'tgllahir' => $this->input->post('tgllahir'),
            'tmptlahir' => $this->input->post('tmptlahir'),
            'alamat' => $this->input->post('alamat'),
            'jnskel' => $this->input->post('jnskel'),
            'agama' => $this->input->post('agama')
        ];
        $this->load->view('view-data-siswa', $data);
    }
}