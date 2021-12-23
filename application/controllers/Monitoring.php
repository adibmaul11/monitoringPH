<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Monitoring extends CI_Controller {
public function __construct()
	{
		parent::__construct();
		$this->load->model('monitoring_model');

	}  
	public function index()
	{
	
		$monitoring = $this->monitoring_model->listing();
		$data_monitoring = count($monitoring);
		$data = array(	'title'			=>	'Data Produksi Monitoring Monitoring PH dan Suhu  ('.$data_monitoring.')',
						'monitoring'		=>	$monitoring,
						'data_monitoring'	=>	$data_monitoring,
						'isi'			=>	'admin/monitoring/list');
		$this->load->view('admin/layout/wrapper', $data, FALSE);
		$this->session->set_flashdata('msg_list','');
	}
	public function tambah()
	{
		
		$monitoring = $this->monitoring_model->listing();
		$data_monitoring = count($monitoring);
		$data = array(	'title'			=>	'Tambah Data Monitoring PH Dan SUHU',
						'monitoring'		=>	$monitoring,
						'data_monitoring'	=>	$data_monitoring,
						'isi'			=>	'admin/monitoring/tambah');
		$this->load->view('admin/layout/wrapper', $data, FALSE);
		$this->session->set_flashdata('msg','');
	}
	
	public function hapus()
	{
		$kode=$this->uri->segment(3);
		$hapus = $this->monitoring_model->delete($kode);
		if($hapus){
			$this->session->set_flashdata('msg_list', 
                '<div class="alert alert-success">
                    <h4>Berhasil </h4>
                    <p>Anda Berhasil Menghapus Data monitoring.</p>
                </div>');	
		}else{
			$this->session->set_flashdata('msg_list', 
                '<div class="alert alert-danger">
                    <h4>Oppss</h4>
                    <p>Gagal Menghapus Data monitoring.</p>
                </div>');
		}
		redirect(base_url('monitoring'),'refresh');
	}
	public function simpan_data()
	{ 
				$mon_ph = $this->input->post('mon_ph');
				$mon_suhu = $this->input->post('mon_suhu');
				$data = array(	'mon_ph'		=>	$mon_ph,
								'mon_suhu'		=>	$mon_suhu);
				$simpan = $this->monitoring_model->tambah($data);
				if($simpan){
					$this->session->set_flashdata('msg', 
                '<div class="alert alert-success">
                    <h4>Berhasil </h4>
                    <p>Anda Berhasil Menambah Data Monitoring Monitoring PH dan Suhu .</p>
                </div>');	
				}else{
					$this->session->set_flashdata('msg', 
                '<div class="alert alert-danger">
                    <h4>Oppss</h4>
                    <p>Gagal Menambah Data Monitoring Monitoring PH dan Suhu .</p>
                </div>'); 	
				}
            redirect(base_url('monitoring'),'refresh');
	}

	public function simpan_edit(){ 
			   $mon_ph = $this->input->post('mon_ph');
			   $id_monit = $this->input->post('id_monit');
				$mon_suhu = $this->input->post('mon_suhu');
				$data = array(	'mon_ph'		=>	$mon_ph,
								'mon_suhu'		=>	$mon_suhu);

				$simpan = $this->monitoring_model->edit($id_monit,$data);
				if($simpan){
					$this->session->set_flashdata('msg_list', 
                '<div class="alert alert-success">
                    <h4>Berhasil </h4>
                    <p>Anda Berhasil Mengubah Data Monitoring Monitoring PH dan Suhu .</p>
                </div>');	
				}else{
					$this->session->set_flashdata('msg_list', 
                '<div class="alert alert-danger">
                    <h4>Oppss</h4>
                    <p>Gagal Mengubah Data Monitoring Monitoring PH dan Suhu .</p>
                </div>'); 	
				}
            redirect(base_url('admin/monitoring'),'refresh');
	}
}

/* End of file Karya.php */
/* Location: ./application/controllers/admin/monitoring.php */