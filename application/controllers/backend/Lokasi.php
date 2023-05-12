<?php
class Lokasi extends CI_Controller
{
  function __construct()
  {
    parent::__construct();
    error_reporting(0);
    if ($this->session->userdata('logged') != TRUE) {
      $url = base_url('login');
      redirect($url);
    };
    $this->load->model('backend/Lokasi_model', 'lokasi_model');
    $this->load->model('Site_model', 'site_model');

    $this->load->helper('text');
    $this->load->helper('url');
    $this->load->helper('download');
    $this->load->library('upload');
  }

  function index()
  {
    $site = $this->site_model->get_site_data()->row_array();
    $data['site_title'] = $site['site_title'];
    $data['site_favicon'] = $site['site_favicon'];
    $data['images'] = $site['images'];
    $data['title'] = 'Data Lokasi';
    $data['title0'] = 'Master';

    $this->load->view('backend/menu', $data);
    $this->load->view('backend/modal/lokasi_modal');
    $this->load->view('backend/_partials/templatejs');
    $this->load->view('backend/v_lokasi', $data);
  }

  public function get_ajax_list()
  {
    $list = $this->lokasi_model->get_datatables();
    $data = array();
    $no = $_POST['start'];
    foreach ($list as $d) {
      $no++;
      $row = array();
      $row[] = $no;
      $row[] = $d->kodelokasi;
      $row[] = $d->lokasi;

      $data[] = $row;
    }

    $output = array(
      "draw" => $_POST['draw'],
      "recordsTotal" => $this->lokasi_model->count_all(),
      "recordsFiltered" => $this->lokasi_model->count_filtered(),
      "data" => $data,
    );
    //output to json format

    echo json_encode($output);
  }
}
