<?php
class Kat extends CI_Controller
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
            $url = base_url('login_user');
            redirect($url);
        };
        $this->load->model('backend/Jenisikan_model', 'jenisikan_model');
        $this->load->model('backend/Lokasi_model', 'lokasi_model');
        $this->load->model('backend/Kat_model', 'kat_model');
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
        $data['title'] = 'Data Produksi Budidaya Ikan Kolam Air Tenang ( KAT )';
        $data['title0'] = 'Produksi Budidaya Ikan';

        $this->load->view('backend/menu', $data);
        // $this->load->view('backend/modal/jenisikan_modal');
        $this->load->view('backend/v_kat', $data);
    }

    public function v_input()
    {
        $site = $this->site_model->get_site_data()->row_array();
        $data['site_title'] = $site['site_title'];
        $data['site_favicon'] = $site['site_favicon'];
        $data['images'] = $site['images'];
        $data['title'] = 'Input Budidaya Ikan Kolam Air Tenang ( KAT )';
        $data['title0'] = 'Produksi Budidaya Ikan';

        $this->load->view('backend/menu', $data);
        $this->load->view('backend/v_katinput', $data);
    }
    public function v_edit()
    {
        $data['id_kat'] = $this->uri->segment(4);
        $site = $this->site_model->get_site_data()->row_array();
        $data['site_title'] = $site['site_title'];
        $data['site_favicon'] = $site['site_favicon'];
        $data['images'] = $site['images'];
        $data['title'] = 'Edit Budidaya Ikan Kolam Air Tenang ( KAT )';
        $data['title0'] = 'Produksi Budidaya Ikan';

        $this->load->view('backend/menu', $data);
        $this->load->view('backend/v_katedit', $data);
    }
    public function ajax_edit($id_kat)
    {
        $data = $this->kat_model->edit($id_kat);
        echo json_encode($data);
    }

    public function get_ajax_list()
    {
        $list = $this->kat_model->get_datatables();
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
      <a class="dropdown-item" href="' . base_url('backend/Kat/v_edit/') . $d->id . '" title="Edit" ><i class="bi bi-pen-fill"></i> Edit</a>
      <a class="dropdown-item" href="javascript:void()" title="Hapus" id="deletets" value="' . $d->id . '"><i class="bi bi-trash"></i> Hapus</a></div></div></div>';
            $data[] = $row;
        }

        $output = array(
            "draw" => $_POST['draw'],
            "recordsTotal" => $this->kat_model->count_all(),
            "recordsFiltered" => $this->kat_model->count_filtered(),
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
            'jenis_kolam' => $this->input->post('kolam'),
            'jml_kolam' => $this->input->post('jml_kolam'),
            'uk_kolam' => $this->input->post('uk_kolam'),
            'potensi' => $this->input->post('potensi'),
            'existing' => $this->input->post('existing'),
            'jenis_komoditas' => $this->input->post('komoditas'),
            'jml_ekor' => $this->input->post('jml_ekor')
        );
        $id_kat = $this->kat_model->tambah_kat($data);
        $data1 = array(
            'id_kat' => $id_kat,
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
        $prosesdetail = $this->kat_model->tambah_detail_kat($data1);
        if ($id_kat) {
            // INSERT LOG
            $b = '<b>' . $nama_users . '</b> Melakukan Tambah KAT';
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

        redirect('backend/Kat');
    }

    function edit()
    {
        $id = $this->input->post('id_kat', TRUE);
        $users = $this->session->userdata('id');
        $nama_users = $this->session->userdata('name');

        $data = array(
            'lokasi' => $this->input->post('kab'),
            'kampung' => $this->input->post('kampung'),
            'ketua' => $this->input->post('ketua'),
            'jml_anggota' => $this->input->post('jml_anggota'),
            'jenis_kolam' => $this->input->post('kolam'),
            'jml_kolam' => $this->input->post('jml_kolam'),
            'uk_kolam' => $this->input->post('uk_kolam'),
            'potensi' => $this->input->post('potensi'),
            'existing' => $this->input->post('existing'),
            'jenis_komoditas' => $this->input->post('komoditas'),
            'jml_ekor' => $this->input->post('jml_ekor')
        );
        $id_kat = $this->kat_model->update_kat($id, $data);
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
        $prosesdetail = $this->kat_model->update_detail_kat($id, $data1);
        // INSERT LOG
        $b = '<b>' . $nama_users . '</b> Melakukan Update Tambak Sederhana';
        $data2 = array(
            'ket' => $b,
        );
        $this->jenisikan_model->insert_log_jenisikan($data2);
        // INSERT LOG
        echo json_encode(array("status" => TRUE));
        $this->session->set_flashdata('message', 'successedit');
        redirect('backend/Kat');
    }

    public function deletets()
    {
        if ($this->input->is_ajax_request()) {

            $iddelete = $this->input->post('id_kat');
            if ($this->kat_model->delete_kat($iddelete) && $this->kat_model->delete_katspp($iddelete)) {
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
