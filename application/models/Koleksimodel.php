<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Koleksimodel extends CI_Model {

	function __construct ()
	{
		
		$this->load->database();

	}
	 function get_koleksi()
    {
        return $this->db->get('koleksi')->result_array();
    }

    function get_detail($a)
    {
        $this->db->where('id_orang', $a);
        return $this->db->get('koleksi')->row_array();
    }
	
	function insert($a, $cover) {
		$data =[
			'Nama' => $a['judul'],
			'Penulis' => $a['penulis'],
			'Penerbit' => $a['penerbit'],
			'Cover' => $cover ];
			return $this->db->insert('koleksi', $data);

	}
  

	function update($a, $id)
    {
        $data = [
            'Nama' => $a['judul'],
            'Penulis' => $a['penulis'],
            'Penerbit' => $a['penerbit']
        ];
        $this->db->where('id_orang', $id);
        return $this->db->update('koleksi', $data);
    }

    function update_cover($a, $id)
    {
        $data = [
            'Cover' => $a
        ];
        $this->db->where('id_orang', $id);
        return $this->db->update('koleksi', $data);
    }

    function delete($id)
    {
        $this->db->where('id_orang', $id);
        return $this->db->delete('koleksi');
    }

}