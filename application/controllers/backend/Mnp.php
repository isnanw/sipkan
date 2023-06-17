<?php
class Mnp extends CI_Controller
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
        $this->load->model('backend/Jenisikan_model', 'jenisikan_model');
        $this->load->model('backend/Lokasi_model', 'lokasi_model');
        $this->load->model('backend/Mnp_model', 'mnp_model');
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
        $data['title'] = 'Data Produksi Budidaya Ikan Mina Padi ( MNP )';
        $data['title0'] = 'Produksi Budidaya Ikan';

        $this->load->view('backend/menu', $data);
        // $this->load->view('backend/modal/jenisikan_modal');
        $this->load->view('backend/v_mnp', $data);
    }

    public function v_input()
    {
        $site = $this->site_model->get_site_data()->row_array();
        $data['site_title'] = $site['site_title'];
        $data['site_favicon'] = $site['site_favicon'];
        $data['images'] = $site['images'];
        $data['tahun'] = $site['tahun'];
        $data['title'] = 'Input Budidaya Ikan Mina Padi ( MNP )';
        $data['title0'] = 'Produksi Budidaya Ikan';

        $this->load->view('backend/menu', $data);
        $this->load->view('backend/v_mnpinput', $data);
    }
    public function v_edit()
    {
        $data['idedit'] = $this->uri->segment(4);
        $site = $this->site_model->get_site_data()->row_array();
        $data['site_title'] = $site['site_title'];
        $data['site_favicon'] = $site['site_favicon'];
        $data['images'] = $site['images'];
        $data['tahun'] = $site['tahun'];
        $data['title'] = 'Edit Budidaya Ikan Mina Padi ( MNP )';
        $data['title0'] = 'Produksi Budidaya Ikan';

        $this->load->view('backend/menu', $data);
        $this->load->view('backend/v_mnpedit', $data);
    }
    public function ajax_edit($idedit)
    {
        $data = $this->mnp_model->edit($idedit);
        echo json_encode($data);
    }

    public function get_ajax_list()
    {
        $list = $this->mnp_model->get_datatables();
        $data = array();
        $no = $_POST['start'];
        foreach ($list as $d) {
            $no++;
            $row = array();
            $row[] = $no;
            $row[] = $d->lokasi;
            $row[] = $d->kampung;
            $row[] = $d->ketua;
            $row[] = $d->jml_anggota;
            $row[] = '<div class="btn-group mb-1"><div class="dropdown"><button class="btn btn-primary btn-sm dropdown-toggle" type="button" id="dropdownMenuButton7" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Opsi</button><div class="dropdown-menu" aria-labelledby="dropdownMenuButton7">
      <a class="dropdown-item" href="' . base_url('backend/Mnp/v_edit/') . $d->id . '" title="Edit" ><i class="bi bi-pen-fill"></i> Edit</a>
      <a class="dropdown-item" href="javascript:void()" title="Hapus" id="deletets" value="' . $d->id . '"><i class="bi bi-trash"></i> Hapus</a></div></div></div>';
            $data[] = $row;
        }

        $output = array(
            "draw" => $_POST['draw'],
            "recordsTotal" => $this->mnp_model->count_all(),
            "recordsFiltered" => $this->mnp_model->count_filtered(),
            "data" => $data,
        );
        //output to json format

        echo json_encode($output);
    }

    function add()
    {
        // $this->_validate();

        $users = $this->session->userdata('id');
        $nama_users = $this->session->userdata('name');

        $data = array(
            'lokasi' => $this->input->post('kab'),
            'kampung' => $this->input->post('kampung'),
            'ketua' => $this->input->post('ketua'),
            'jml_anggota' => $this->input->post('jml_anggota'),
            'jml_kolam' => $this->input->post('jml_kolam'),
            'uk_kolam1' => $this->input->post('uk_kolam1'),
            'uk_kolam2' => $this->input->post('uk_kolam2'),
            'potensi1' => $this->input->post('potensi1'),
            'potensi2' => $this->input->post('potensi2'),
            'existing1' => $this->input->post('existing1'),
            'existing2' => $this->input->post('existing2'),
            'jenis_komoditas' => $this->input->post('komoditas'),
            'jml_ekor' => $this->input->post('jml_ekor')
        );
        $idedit = $this->mnp_model->tambah($data);
        $data1 = array(
            'id_mnp' => $idedit,
            'jan' => $this->input->post('jan'),
            'feb' => $this->input->post('feb'),
            'mar' => $this->input->post('mar'),
            'apr' => $this->input->post('apr'),
            'mei' => $this->input->post('mei'),
            'jun' => $this->input->post('jun'),
            'jul' => $this->input->post('jul'),
            'agu' => $this->input->post('agu'),
            'sep' => $this->input->post('sep'),
            'okt' => $this->input->post('okt'),
            'nov' => $this->input->post('nov'),
            'des' => $this->input->post('des')
        );
        $prosesdetail = $this->mnp_model->tambah_detail($data1);
        if ($idedit) {
            // INSERT LOG
            $b = '<b>' . $nama_users . '</b> Melakukan Tambah KJA T';
            $data2 = array(
                'ket' => $b,
            );
            $this->jenisikan_model->insert_log_jenisikan($data2);
            // INSERT LOG
            echo json_encode(array("status" => TRUE));
            $this->session->set_flashdata('message', 'success');
        } else {
            echo json_encode(array("status" => FALSE));
            $this->session->set_flashdata('message', 'error');
        }

        redirect('backend/Mnp');
    }

    function edit()
    {
        $id = $this->input->post('idedit', TRUE);
        $users = $this->session->userdata('id');
        $nama_users = $this->session->userdata('name');

        $data = array(
            'lokasi' => $this->input->post('kab'),
            'kampung' => $this->input->post('kampung'),
            'ketua' => $this->input->post('ketua'),
            'jml_anggota' => $this->input->post('jml_anggota'),
            'jml_kolam' => $this->input->post('jml_kolam'),
            'uk_kolam1' => $this->input->post('uk_kolam1'),
            'uk_kolam2' => $this->input->post('uk_kolam2'),
            'potensi1' => $this->input->post('potensi1'),
            'potensi2' => $this->input->post('potensi2'),
            'existing1' => $this->input->post('existing1'),
            'existing2' => $this->input->post('existing2'),
            'jenis_komoditas' => $this->input->post('komoditas'),
            'jml_ekor' => $this->input->post('jml_ekor')
        );
        $idedit = $this->mnp_model->update($id, $data);
        $data1 = array(
            'jan' => $this->input->post('jan'),
            'feb' => $this->input->post('feb'),
            'mar' => $this->input->post('mar'),
            'apr' => $this->input->post('apr'),
            'mei' => $this->input->post('mei'),
            'jun' => $this->input->post('jun'),
            'jul' => $this->input->post('jul'),
            'agu' => $this->input->post('agu'),
            'sep' => $this->input->post('sep'),
            'okt' => $this->input->post('okt'),
            'nov' => $this->input->post('nov'),
            'des' => $this->input->post('des')
        );
        $prosesdetail = $this->mnp_model->update_detail($id, $data1);
        // INSERT LOG
        $b = '<b>' . $nama_users . '</b> Melakukan Update KJA T';
        $data2 = array(
            'ket' => $b,
        );
        $this->jenisikan_model->insert_log_jenisikan($data2);
        // INSERT LOG
        echo json_encode(array("status" => TRUE));
        $this->session->set_flashdata('message', 'successedit');
        redirect('backend/Mnp');
    }

    public function deletets()
    {
        if ($this->input->is_ajax_request()) {

            $iddelete = $this->input->post('id');
            if ($this->mnp_model->delete($iddelete) && $this->mnp_model->delete_detail($iddelete)) {
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
        $nama = $this->input->post('namajenisikan');

        if ($this->input->post('namajenisikan') == '') {
            $data['inputerror'][] = 'namajenisikan';
            $data['error_string'][] = 'Form jenisikan harus berisi';
            $data['status'] = FALSE;
        }

        $namalength = strlen($nama);
        if ($namalength < 3) {
            $data['inputerror'][] = 'namajenisikan';
            $data['error_string'][] = 'Nama jenisikan Miminal 3 Karakter';
            $data['status'] = FALSE;
        }
        if ($namalength > 25) {
            $data['inputerror'][] = 'namajenisikan';
            $data['error_string'][] = 'Nama jenisikan Maksimal 25 Karakter';
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

        $nama = $this->input->post('namajenisikan');

        if ($this->input->post('namajenisikan') == '') {
            $data['inputerror'][] = 'namajenisikan';
            $data['error_string'][] = 'Form Nama jenisikan harus berisi';
            $data['status'] = FALSE;
        }

        $namalength = strlen($nama);
        if ($namalength < 3) {
            $data['inputerror'][] = 'namajenisikan';
            $data['error_string'][] = 'Nama Miminal 3 Karakter';
            $data['status'] = FALSE;
        }
        if ($namalength > 25) {
            $data['inputerror'][] = 'namajenisikan';
            $data['error_string'][] = 'Nama Maksimal 25 Karakter';
            $data['status'] = FALSE;
        }

        if ($data['status'] === FALSE) {
            echo json_encode($data);
            exit();
        }
    }
}
