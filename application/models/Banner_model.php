<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Banner_model extends CI_Model {

	/// Load Koneksi Database
	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}
	/// Listing Data User
	public function listing()
	{
		
		$this->db->select('*');
		$this->db->from('banner');
		$this->db->order_by('id_banner', 'asc');
		$query = $this->db->get();
		return $query->result();
	}
	public function listing1()
	{
		$this->db->select('*');
		$this->db->from('banner');
		$this->db->where('id_banner', 'BN01');
			$this->db->limit(1);
		$query = $this->db->get();
		return $query->result();
	}
	public function listing2()
	{
		$this->db->select('*');
		$this->db->from('banner');
		$this->db->order_by('id_banner', 'desc');
			$this->db->limit(3);
		$query = $this->db->get();
		return $query->result();
	}
	public function listing_by_id($id_banner)
	{
		$this->db->select('*');
		$this->db->from('banner');
		$this->db->where('id_banner', $id_banner);
		$query = $this->db->get();
		return $query->result();
	}
	/// Tambah Data User
	public function tambah($data)
	{
		$this->db->insert('banner', $data);
		return $this->db->affected_rows();
	}
	/// Ubah Data User
	public function edit($data,$object)
	{
		$this->db->where('id_banner', $data);
		$this->db->update('banner', $object);
		return $this->db->affected_rows();
	}

	/// Hapus Data User
	public function delete($data)
	{
		$this->db->where('id_banner', $data);
		$this->db->delete('banner');
		return $this->db->affected_rows();
	}

	// ID Otomatis
	public function notis()
	{
		$this->db->select_max('id_banner');
		$this->db->from('banner');
		$kode = $this->db->get()->row()->id_banner;
		$noUrut = (int) substr($kode, 2, 2);
        $noUrut++;
        $char = "BN";
        $newID = $char . sprintf("%02s", $noUrut);
        return $newID;
	}
	public function banner_home()
	{
		$this->db->select('*');
		$this->db->from('banner');
		$this->db->order_by('id_banner', 'asc');
		$this->db->limit(3);
		$query = $this->db->get();
		return $query->result();	
	}


}

/* End of file admin_model.php */
/* Location: ./application/models/admin_model.php */