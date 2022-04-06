<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Usermodel extends CI_Model {

	function __construct ()
	{
		
		$this->load->database();

	}
	function get_user()
	{
		$query = $this->db->query("SELECT * FROM user");
		return $query->result();
	}
	function insert($a, $cover) {
		$data =[
			'Nama' => $a['nama'],
			'Email' => $a['email'],
			'Telepon' => $a['telepon'],
			'Cover' => $cover ];
			return $this->db->insert('user', $data);

	}
	function update($a, $id)
    {
        $data = [
            'Nama' => $a['nama'],
			'Email' => $a['email'],
			'Telepon' => $a['telepon'],
        ];
        $this->db->where('id_orang', $id);
        return $this->db->update('user', $data);
    }
    function update_cover($a, $id)
    {
        $data = [
            'Cover' => $a
        ];
        $this->db->where('id_orang', $id);
        return $this->db->update('user', $data);
    }

    function delete($id)
    {
        $this->db->where('id_orang', $id);
        return $this->db->delete('user');
    }
    
    function auth($email, $pwd)
    {
        return $this->db->get('user')->result_array();
        $this->db->where('email', $email);
        $this->db->where('Password', $pwd);
        if ($this->db->get('user')->num_rows() == 1) {
            return TRUE;
        } else {
            return FALSE;
        }
    }
    function get_user_by_email($id)
	{
		$this->db->where('email', $email);
		return $this->db->get('user')->row_array();
	}
	function update_cookie($cookie, $id)
    {
        $data = [
            'cookie' => $cookie
        ];
        $this->db->where('email', $email);
        return $this->db->update('user', $data);
    }
	
  
}