<?php
class Jenishasilproduksi extends CI_Controller
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
        $this->load->model('backend/Jenishasilproduksi_model', 'jenishasilproduksi_model');
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
        $data['title'] = 'Data Jenis Hasil Produksi';
        $data['title0'] = 'Master';

        $this->load->view('backend/menu', $data);
        $this->load->view('backend/modal/jenishasilproduksi_modal');
        // $this->load->view('backend/_partials/templatejs');
        $this->load->view('backend/v_jenishasilproduksi', $data);
    }

    public function get_ajax_list()
    {
        $list = $this->jenishasilproduksi_model->get_datatables();
        $data = array();
        $no = $_POST['start'];
        foreach ($list as $d) {
            $no++;
            $row = array();
            $row[] = $no;
            $row[] = $d->namajenishasilproduksi;
            $row[] = '<div class="btn-group mb-1"><div class="dropdown"><button class="btn btn-primary btn-sm dropdown-toggle" type="button" id="dropdownMenuButton7" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Opsi</button><div class="dropdown-menu" aria-labelledby="dropdownMenuButton7">
      <a class="dropdown-item" href="javascript:void()" title="Edit" onclick="edit_jenishasilproduksi(' . "'" . $d->id_jenishasilproduksi . "'" . ')"><i class="bi bi-pen-fill"></i> Edit</a>
      <a class="dropdown-item" href="javascript:void()" title="Hapus" id="deletejenishasilproduksi" value="' . $d->id_jenishasilproduksi . '"><i class="bi bi-trash"></i> Hapus</a></div></div></div>';

            $data[] = $row;
        }

        $output = array(
            "draw" => $_POST['draw'],
            "recordsTotal" => $this->jenishasilproduksi_model->count_all(),
            "recordsFiltered" => $this->jenishasilproduksi_model->count_filtered(),
            "data" => $data,
        );
        //output to json format

        echo json_encode($output);
    }

    public function ajax_edit($id_jenishasilproduksi)
    {
        $data = $this->jenishasilproduksi_model->get_by_id($id_jenishasilproduksi);
        echo json_encode($data);
    }

    function add()
    {
        $this->_validate();

        $users = $this->session->userdata('id');
        $nama_users = $this->session->userdata('name');

        $data = array(
            'namajenishasilproduksi' => $this->input->post('namajenishasilproduksi')
        );
        $insert = $this->jenishasilproduksi_model->insert_jenishasilproduksi($data);

        if ($insert) {
            // INSERT LOG

            $j = $this->input->post('namajenishasilproduksi');
            $b = '<b>' . $nama_users . '</b> Melakukan Tambah jenishasilproduksi <b>' . $j . '</b>';
            $data2 = array(
                'ket' => $b,
            );
            $this->jenishasilproduksi_model->insert_log_jenishasilproduksi($data2);
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
        $ajax_data['namajenishasilproduksi'] = $this->input->post('namajenishasilproduksi');


        if ($this->jenishasilproduksi_model->update_entry($id, $ajax_data)) {
            // INSERT LOG
            $nama_users = $this->session->userdata('name');

            $j = $this->input->post('namajenishasilproduksi');
            $b = '<b>' . $nama_users . '</b> Melakukan Edit jenishasilproduksi <b>' . $j . '</b>';
            $data2 = array(
                'ket' => $b,
            );
            $this->jenishasilproduksi_model->insert_log_jenishasilproduksi($data2);
            // INSERT LOG
            echo json_encode(array("status" => TRUE));
        } else {
            echo json_encode(array("status" => FALSE));
        }
    }

    public function deletejenishasilproduksi()
    {
        if ($this->input->is_ajax_request()) {

            $id_jenishasilproduksi = $this->input->post('idkon');
            if ($this->jenishasilproduksi_model->delete_entry($id_jenishasilproduksi)) {

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
        $nama = $this->input->post('namajenishasilproduksi');

        if ($this->input->post('namajenishasilproduksi') == '') {
            $data['inputerror'][] = 'namajenishasilproduksi';
            $data['error_string'][] = 'Form jenishasilproduksi harus berisi';
            $data['status'] = FALSE;
        }

        $namalength = strlen($nama);
        if ($namalength < 3) {
            $data['inputerror'][] = 'namajenishasilproduksi';
            $data['error_string'][] = 'Nama jenishasilproduksi Miminal 3 Karakter';
            $data['status'] = FALSE;
        }
        if ($namalength > 25) {
            $data['inputerror'][] = 'namajenishasilproduksi';
            $data['error_string'][] = 'Nama jenishasilproduksi Maksimal 25 Karakter';
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

        $nama = $this->input->post('namajenishasilproduksi');

        if ($this->input->post('namajenishasilproduksi') == '') {
            $data['inputerror'][] = 'namajenishasilproduksi';
            $data['error_string'][] = 'Form Nama jenishasilproduksi harus berisi';
            $data['status'] = FALSE;
        }

        $namalength = strlen($nama);
        if ($namalength < 3) {
            $data['inputerror'][] = 'namajenishasilproduksi';
            $data['error_string'][] = 'Nama Miminal 3 Karakter';
            $data['status'] = FALSE;
        }
        if ($namalength > 25) {
            $data['inputerror'][] = 'namajenishasilproduksi';
            $data['error_string'][] = 'Nama Maksimal 25 Karakter';
            $data['status'] = FALSE;
        }

        if ($data['status'] === FALSE) {
            echo json_encode($data);
            exit();
        }
    }

    public function getproduksi()
    {
        $searchTerm = $this->input->post('searchTerm');
        $response   = $this->jenishasilproduksi_model->getproduksi($searchTerm);
        echo json_encode($response);
    }
}
