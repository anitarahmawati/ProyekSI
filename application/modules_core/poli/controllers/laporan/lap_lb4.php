<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Lap_LB4 extends CI_Controller {

function __construct(){
	parent::__construct();
	$this->load->model('laporan/m_lb4');
}
	public function index()
	{	
		$data['judul'] = 'LB 4';
		$data['poli'] = '1';
		$this->template->load('templatePoli','poliklinik/laporan/v_templatelb',$data);

	}

	public function ajaxTahun(){
		$data= $this->m_lb4->list_tahun();
		$response = json_encode($data);
		if (!empty($response)){
		echo $response;
	}else{
		echo null;
	}
}

public function getLaporanRekamExcel($poli,$judul,$unker,$tahun){
		$query['list']= $this->m_lb4->list_data_lb4($tahun,$unker);
		$query['file']='poliklinik/laporan/umum/v_lapLB4';
		$query['judul']=$judul;
		$this->load->view('poliklinik/laporan/excel', $query);
	}

	public function getLaporanRekam($stat=null){
		$success = '';
		$query['list']= $this->m_lb4->list_data_lb4($this->input->post('tahun'),$this->input->post('unker'));
		$query['file']='poliklinik/laporan/umum/v_lapLB4';
		if (empty($query['list'])){
			return false;
		}else{
			if ($stat){
			 $this->load->view('poliklinik/laporan/umum/v_lapLB4',$query,true);
			}else{
				$this->load->view('poliklinik/laporan/umum/v_lapLB4',$query);
			}
			}
		}	

}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */