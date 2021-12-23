<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dasbor extends CI_Controller {
public function __construct()
{
	parent::__construct();
	$this->load->model('monitoring_model');

}
	public function index()
	{
		$monitoring = $this->monitoring_model->listing();
		$x_tanggal = $this->monitoring_model->grafiktanggal();
		$x_ph = $this->monitoring_model->grafikph();
		$x_suhu = $this->monitoring_model->grafiksuhu();
		$data_monitoring = count($monitoring);
		$data = array(	'title'			=>	'Halaman Dasbor monitoring kualitas air',
						'data_monitoring'	=>	$data_monitoring,
						'x_tanggal'	=>	$x_tanggal,
						'x_ph'	=>	$x_ph,
						'x_suhu'	=>	$x_suhu,
						'isi'			=>	'admin/dasbor/list');
		$this->load->view('admin/layout/wrapper', $data, FALSE);		
	}

}

/* End of file Dasbor.php */
/* Location: ./application/controllers/admin/Dasbor.php */