<?php
class Dashboard extends CI_Controller{
/**
* Description of Controller
*
* @author isnanw
* 24 April 2023
*/
	function __construct(){
		parent::__construct();
		error_reporting(0);
		if($this->session->userdata('logged') !=TRUE){
            $url=base_url('login');
            redirect($url);
        };
		$this->load->model('backend/Dashboard_model', 'dashboard_model');
		$this->load->model('Site_model','site_model');

		$this->load->helper('text');
		$this->load->helper('url');
		$this->load->helper('download');
		$this->load->library('upload');
	}
	function index(){

		$site = $this->site_model->get_site_data()->row_array();
		$data['site_title']     = $site['site_title'];
		$data['site_favicon']   = $site['site_favicon'];
		$data['images']         = $site['images'];
		$data['tahun']          = $site['tahun'];
		$data['site_deskripsi'] = $site['site_deskripsi'];

		$data['jmlh_user']       = $this->dashboard_model->countUsers();
		$data['jmlh_kolam']      = $this->dashboard_model->countKolam();
		$data['jmlh_ikan']       = $this->dashboard_model->countIkan();
		$data['jmlh_budidaya']   = $this->dashboard_model->countBudidaya();
		$data['jmlh_komoditas']  = $this->dashboard_model->countKomoditas();
		$data['jmlh_pembesaran'] = $this->dashboard_model->countPembesaran();
		$data['jmlh_pembenihan'] = $this->dashboard_model->countPembenihan();
		$data['jmlh_pud']  = $this->dashboard_model->countPud();
		$data['jmlh_kat']  = $this->dashboard_model->countKat();
		$data['jmlh_kjtt'] = $this->dashboard_model->countKjtt();
		$data['jmlh_kjat'] = $this->dashboard_model->countKjat();
		$data['jmlh_mnp']  = $this->dashboard_model->countMnp();
		$data['jmlh_kjal'] = $this->dashboard_model->countKjal();

		$data['title'] = 'Dashboard';

		if($this->session->userdata('access')=='1') {
			if($this->session->userdata('access') != "1"){
				$url=base_url('login');
        redirect($url);
			};
      $this->load->view('backend/menu',$data);
      $this->load->view('backend/_partials/templatejs');
			$this->load->view('backend/v_dashboard',$data);
		} else {
      $data['title'] = 'Dashboard';
      $this->load->view('backend/menu',$data);
      $this->load->view('backend/_partials/templatejs');
			$this->load->view('backend/v_dashboard_karyawan',$data);
		}

  }
}