<?php
class Jenisbudidaya extends CI_Controller
{
    /**
     * Description of Controller
     *
     * @author BayuKun28
     */
    function __construct()
    {
        parent::__construct();
        //ini_set('memory_limit', "256M");
        error_reporting(0);
        if ($this->session->userdata('logged') != TRUE) {
            $url = base_url('login');
            redirect($url);
        };
        $this->load->model('backend/Jenisbudidaya_model', 'jenisbudidaya_model');
        $this->load->model('Site_model', 'site_model');
        $this->load->helper('text');
        $this->load->helper('url');
        $this->load->helper('tanggal');
    }

    public function index()
    {
        $site = $this->site_model->get_site_data()->row_array();
        $data['site_title'] = $site['site_title'];
        $data['site_favicon'] = $site['site_favicon'];
        $data['images'] = $site['images'];
        $data['tahun'] = $site['tahun'];
        $data['title'] = 'Data Jenis Budidaya';
        $data['title0'] = 'Master';

        $this->load->view('backend/menu', $data);
        $this->load->view('backend/modal/jenisbudidaya_modal');
        // $this->load->view('backend/_partials/templatejs');
        $this->load->view('backend/v_jenisbudidaya', $data);
    }

    public function get_ajax_list()
    {
        $list = $this->jenisbudidaya_model->get_datatables();
        $data = array();
        $no = $_POST['start'];
        foreach ($list as $d) {
            $no++;
            $row = array();
            $row[] = $no;
            $row[] = $d->namajenisbudidaya;
            $row[] = '<div class="btn-group mb-1"><div class="dropdown"><button class="btn btn-primary btn-sm dropdown-toggle" type="button" id="dropdownMenuButton7" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Opsi</button><div class="dropdown-menu" aria-labelledby="dropdownMenuButton7">
      <a class="dropdown-item" href="javascript:void()" title="Edit" onclick="edit_jenisbudidaya(' . "'" . $d->id_jenisbudidaya . "'" . ')"><i class="bi bi-pen-fill"></i> Edit</a>
      <a class="dropdown-item" href="javascript:void()" title="Hapus" id="deletejenisbudidaya" value="' . $d->id_jenisbudidaya . '"><i class="bi bi-trash"></i> Hapus</a></div></div></div>';

            $data[] = $row;
        }

        $output = array(
            "draw" => $_POST['draw'],
            "recordsTotal" => $this->jenisbudidaya_model->count_all(),
            "recordsFiltered" => $this->jenisbudidaya_model->count_filtered(),
            "data" => $data,
        );
        //output to json format

        echo json_encode($output);
    }

    public function ajax_edit($id_jenisbudidaya)
    {
        $data = $this->jenisbudidaya_model->get_by_id($id_jenisbudidaya);
        echo json_encode($data);
    }

    function add()
    {
        $this->_validate();

        $users = $this->session->userdata('id');
        $nama_users = $this->session->userdata('name');

        $data = array(
            'namajenisbudidaya' => $this->input->post('namajenisbudidaya')
        );
        $insert = $this->jenisbudidaya_model->insert_jenisbudidaya($data);

        if ($insert) {
            // INSERT LOG

            $j = $this->input->post('namajenisbudidaya');
            $b = '<b>' . $nama_users . '</b> Melakukan Tambah jenisbudidaya <b>' . $j . '</b>';
            $data2 = array(
                'ket' => $b,
            );
            $this->jenisbudidaya_model->insert_log_jenisbudidaya($data2);
            // INSERT LOG
            echo json_encode(array("status" => TRUE));
        } else {
            echo json_encode(array("status" => FALSE));
        }
    }

    function edit()
    {
        $id = $this->input->post('id', TRUE);
        $this->_validate_edit();


        $users = $this->session->userdata('id');
        $ajax_data['namajenisbudidaya'] = $this->input->post('namajenisbudidaya');


        if ($this->jenisbudidaya_model->update_entry($id, $ajax_data)) {
            // INSERT LOG
            $nama_users = $this->session->userdata('name');

            $j = $this->input->post('namajenisbudidaya');
            $b = '<b>' . $nama_users . '</b> Melakukan Edit jenisbudidaya <b>' . $j . '</b>';
            $data2 = array(
                'ket' => $b,
            );
            $this->jenisbudidaya_model->insert_log_jenisbudidaya($data2);
            // INSERT LOG
            echo json_encode(array("status" => TRUE));
        } else {
            echo json_encode(array("status" => FALSE));
        }
    }

    public function deletejenisbudidaya()
    {
        if ($this->input->is_ajax_request()) {

            $id_jenisbudidaya = $this->input->post('idkon');
            if ($this->jenisbudidaya_model->delete_entry($id_jenisbudidaya)) {

                $data = array('res' => "success", 'message' => "Proses berhasil dilakukan");
            } else {
                $data = array('res' => "error", 'message' => "Proses gagal dilakukan");
            }

            echo json_encode($data);
        } else {
            echo "No direct script access allowed";
        }
    }

    private function _validate()
    {
        $data = array();
        $data['error_string'] = array();
        $data['inputerror'] = array();
        $data['status'] = TRUE;
        $nama = $this->input->post('namajenisbudidaya');

        if ($this->input->post('namajenisbudidaya') == '') {
            $data['inputerror'][] = 'namajenisbudidaya';
            $data['error_string'][] = 'Form jenisbudidaya harus berisi';
            $data['status'] = FALSE;
        }

        $namalength = strlen($nama);
        if ($namalength < 3) {
            $data['inputerror'][] = 'namajenisbudidaya';
            $data['error_string'][] = 'Nama jenisbudidaya Miminal 3 Karakter';
            $data['status'] = FALSE;
        }
        if ($namalength > 25) {
            $data['inputerror'][] = 'namajenisbudidaya';
            $data['error_string'][] = 'Nama jenisbudidaya Maksimal 25 Karakter';
            $data['status'] = FALSE;
        }

        if ($data['status'] === FALSE) {
            echo json_encode($data);
            exit();
        }
    }

    private function _validate_edit()
    {
        $data = array();
        $data['error_string'] = array();
        $data['inputerror'] = array();
        $data['status'] = TRUE;

        $nama = $this->input->post('namajenisbudidaya');

        if ($this->input->post('namajenisbudidaya') == '') {
            $data['inputerror'][] = 'namajenisbudidaya';
            $data['error_string'][] = 'Form Nama jenisbudidaya harus berisi';
            $data['status'] = FALSE;
        }

        $namalength = strlen($nama);
        if ($namalength < 3) {
            $data['inputerror'][] = 'namajenisbudidaya';
            $data['error_string'][] = 'Nama Miminal 3 Karakter';
            $data['status'] = FALSE;
        }
        if ($namalength > 25) {
            $data['inputerror'][] = 'namajenisbudidaya';
            $data['error_string'][] = 'Nama Maksimal 25 Karakter';
            $data['status'] = FALSE;
        }

        if ($data['status'] === FALSE) {
            echo json_encode($data);
            exit();
        }
    }


    public function getdatabudidaya()
    {
        $searchTerm = $this->input->post('searchTerm');
        $response   = $this->jenisbudidaya_model->getbudidaya($searchTerm);
        echo json_encode($response);
    }
}
