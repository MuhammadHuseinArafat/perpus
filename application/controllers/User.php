<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

	public function __construct()
	{

		parent::__construct();
		$this->load->model('Usermodel');
		$this->load->library(array('form_validation', 'session'));
        $this->load->helper(array('text', 'url'));
		

	}

	public function index(){
		$data['list'] =$this->Usermodel->get_user();
		
		$this->load->view('user', $data);
	}
public function detail($id_orang)
	{
			
			$data['detail'] =$this->Usermodel->get_user2($id_orang);
			$this->load->view('detail', $data);
			
	}
	public function add()
    {
        $this->load->view('user/add');
    }

    public function insert()
    {
        $cover = $_FILES['cover']['name'];
        $config = [
            'upload_path' => "./assets/images/cover/",
            'allowed_types' => "gif|jpg|png|jpeg",
            'overwrite' => TRUE,
            'max_size' => "2048000"
        ];
        $this->load->library('upload', $config);
        $this->upload->initialize($config);
        $this->upload->do_upload('cover');
        if ($this->Usermodel->insert($this->input->post(), $cover)) {
            $this->session->set_flashdata('pesan', 'Data berhasil ditambah');
            redirect(base_url('user'));
        }
    }
 public function delete($id)
    {
        if ($this->Koleksimodel->delete($id)) {
            $this->session->set_flashdata('pesan', 'Data berhasil dihapus');
            redirect(base_url('user'));
        }
    }

    public function edit($a)
    {
        $data['detail'] = $this->Koleksimodel->get_user2($a);
        $this->load->view('edit', $data);
    }
     public function update($id)
    {
        $cover = $_FILES['cover']['name'];
        $config = [
            'upload_path' => "./assets/images/gambar/",
            'allowed_types' => "gif|jpg|png|jpeg",
            'overwrite' => TRUE,
            'max_size' => "2048000"
        ];
        $this->load->library('upload', $config);
        $this->upload->initialize($config);
        if ($this->upload->do_upload('cover')) {
            $this->Koleksimodel->update_cover($cover, $id);
        }
        if ($this->Koleksimodel->update($this->input->post(), $id)) {
            $this->session->set_flashdata('pesan', 'Data berhasil diubah');
            redirect(base_url('user'));
        }

}
}