<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Monitoring_model extends CI_Model {
	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}
	/// Listing Data User
	public function listing() 
	{
		$this->db->select('*');
		$this->db->from('monitoring');
		$this->db->order_by('id_monit', 'desc');
		$query = $this->db->get();
		return $query->result();
	}

public function listing_by_id($id_monit)
	{
		$this->db->select('*');
		$this->db->from('monitoring');
		$this->db->where('id_monit', $id_monit);
		$query = $this->db->get();
		return $query->result();
	}
	public function get_by_id($id)
	{
		$this->db->select('*');
		$this->db->from('monitoring');
		$this->db->where('id_monit', $id);
		$query = $this->db->get();
		return $query->row();
	}
	public function notis()
	{
		$this->db->select_max('id_monit');
		$this->db->from('monitoring');
		$kode = $this->db->get()->row()->id_monit;
		$noUrut = (int) substr($kode, 2, 4);
        $noUrut++;
        $char = "TL";
        $newID = $char . sprintf("%04s", $noUrut);
        return $newID;
	}
	/// Tambah Data
	public function tambah($data) 
	{
		$this->db->insert('monitoring', $data);
		return $this->db->affected_rows();
	}
	/// Ubah Data
	public function edit($data,$object)
	{
		$this->db->where('id_monit', $data);
		$this->db->update('monitoring', $object);
		return $this->db->affected_rows();
	}

	/// Hapus Data
	public function delete($kode)
	{
		$this->db->where('id_monit', $kode);
		$this->db->delete('monitoring');
		return $this->db->affected_rows();
	}
public function get_header1($kode)
	{
		$this->db->select('mon_ph');
		$this->db->from('monitoring');
		$this->db->where('id_monit', $kode);
		$data = $this->db->get()->row()->mon_ph;
		return $data;
	}	
	public function get_peternakan_by_id($kode)
	{
		$this->db->select('*');
		$this->db->from('monitoring');
		$this->db->where('id_monit', $kode);
		$query = $this->db->get();
		return $query->result();
	}
	
	public function chart($id)
	{
		$this->db->select('*');
		$this->db->from('monitoring');
		$this->db->where('mon_ph', $id);
		$query = $this->db->get();
		return $query->result();
	}
		
		// grafik
	public function grafiktanggal(){
		$this->db->select('tanggal_masuk');
		$this->db->from('monitoring');
		$this->db->order_by('id_monit','DESC');
		$this->db->limit(20);
		$query = $this->db->get();
		return $query->result();
	}
	public function grafikph(){
		$this->db->select('mon_ph');
		$this->db->from('monitoring');
		$this->db->order_by('id_monit','DESC');
		$this->db->limit(20);
		$query = $this->db->get();
		return $query->result();
	}
	public function grafiksuhu(){
		$this->db->select('mon_suhu');
		$this->db->from('monitoring');
		$this->db->order_by('id_monit','DESC');
		$this->db->limit(20);
		$query = $this->db->get();
		return $query->result();
	}


}

/* End of file peternakan_model.php */
/* Location: ./application/models/peternakan_model.php */