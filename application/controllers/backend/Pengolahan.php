<?php
class Pengolahan extends CI_Controller
{
  /**
   * Description of Controller
   *
   * @author IsnanW
   */
  function __construct()
  {
    parent::__construct();
    //ini_set('memory_limit', "256M");
    error_reporting(0);
    if ($this->session->userdata('logged') != TRUE) {
      $url = base_url('login');
      redirect($url);
    }
    ;
    $this->load->model('backend/Anggota_model', 'anggota_model');
    $this->load->model('backend/Jenisikan_model', 'jenisikan_model');
    $this->load->model('backend/Lokasi_model', 'lokasi_model');
    $this->load->model('backend/Rl_model', 'rl_model');
    $this->load->model('backend/pengolahan_model', 'pengolahan_model');
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
    $data['title'] = 'Kelompok Pengolahan Hasil Perikanan';
    $data['title0'] = 'Data';

    $this->load->view('backend/menu', $data);
    // $this->load->view('backend/modal/jenisikan_modal');
    $this->load->view('backend/pengolahan/index', $data);
  }

  public function v_input()
  {
    $site = $this->site_model->get_site_data()->row_array();
    $data['site_title'] = $site['site_title'];
    $data['site_favicon'] = $site['site_favicon'];
    $data['images'] = $site['images'];
    $data['tahun'] = $site['tahun'];
    $data['title1'] = 'Tambah Data';
    $data['title'] = 'Kelompok Pengolahan Hasil Perikanan';
    $data['title0'] = 'Data';

    $this->load->view('backend/menu', $data);
    $this->load->view('backend/pengolahan/tambah', $data);
  }
  public function v_edit()
  {
    $data['idedit'] = $this->uri->segment(4);
    $site = $this->site_model->get_site_data()->row_array();
    $data['site_title'] = $site['site_title'];
    $data['site_favicon'] = $site['site_favicon'];
    $data['images'] = $site['images'];
    $data['tahun'] = $site['tahun'];
    $data['title1'] = 'Edit Data';
    $data['title'] = 'Kelompok Pengolahan Hasil Perikanan';
    $data['title0'] = 'Produksi Budidaya Ikan';

    $this->load->view('backend/menu', $data);
    $this->load->view('backend/pengolahan/edit', $data);
  }
  public function ajax_edit($idedit)
  {
    $data = $this->pengolahan_model->edit($idedit);
    echo json_encode($data);
  }

  public function ajax_edit_anggota($id_anggota)
  {
    $data = $this->anggota_model->get_by_id($id_anggota);
    echo json_encode($data);
  }

  public function get_ajax_list()
  {
    $list = $this->pengolahan_model->get_datatables();
    $data = array();
    $no = $_POST['start'];
    foreach ($list as $d) {
      $no++;
      $row = array();
      $row[] = $no;
      $row[] = "<a href='" . base_url('backend/pengolahan/anggota/') . $d->id . "'>" . $d->nama_kelompok . "</a>";
      $row[] = $d->urai_distrik . "/" . $d->urai_kampung;
      $row[] = $d->jenishasil_p;
      $row[] = $d->keterangan;
      $row[] = '<div class="btn-group mb-1"><div class="dropdown"><button class="btn btn-primary btn-sm dropdown-toggle" type="button" id="dropdownMenuButton7" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Opsi</button><div class="dropdown-menu" aria-labelledby="dropdownMenuButton7">
      <a class="dropdown-item" href="' . base_url('backend/pengolahan/v_edit/') . $d->id . '" title="Edit" ><i class="bi bi-pen-fill"></i> Edit</a>
      <a class="dropdown-item" href="javascript:void()" title="Hapus" id="deletets" value="' . $d->id . '"><i class="bi bi-trash"></i> Hapus</a></div></div></div>';
      $data[] = $row;
    }

    $output = array(
      "draw" => $_POST['draw'],
      "recordsTotal" => $this->pengolahan_model->count_all(),
      "recordsFiltered" => $this->pengolahan_model->count_filtered(),
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
      'distrik' => $this->input->post('distrik'),
      'kampung' => $this->input->post('kampung'),
      'nama_kelompok' => $this->input->post('nama_kelompok'),
      'jenis_hasil_produksi' => $this->input->post('jenis_hasil_produksi'),
      'keterangan' => $this->input->post('keterangan')
    );
    $insert = $this->pengolahan_model->tambah($data);

    if ($insert) {
      // INSERT LOG
      $b = '<b>' . $nama_users . '</b> Melakukan Tambah Kelompok';
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

    redirect('backend/pengolahan');
  }

  function edit()
  {
    $id = $this->input->post('idedit', TRUE);
    $users = $this->session->userdata('id');
    $nama_users = $this->session->userdata('name');

    $data = array(
      'lokasi' => $this->input->post('kab'),
      'distrik' => $this->input->post('distrik'),
      'kampung' => $this->input->post('kampung'),
      'nama_kelompok' => $this->input->post('nama_kelompok'),
      'jenis_hasil_produksi' => $this->input->post('jenis_hasil_produksi'),
      'keterangan' => $this->input->post('keterangan')
    );
    $idedit = $this->pengolahan_model->update($id, $data);

    // $prosesdetail = $this->pengolahan_model->update_detail($id, $data1);
    // INSERT LOG
    $b = '<b>' . $nama_users . '</b> Melakukan Update pengolahan';
    $data2 = array(
      'ket' => $b,
    );
    $this->jenisikan_model->insert_log_jenisikan($data2);
    // INSERT LOG
    echo json_encode(array("status" => TRUE));
    $this->session->set_flashdata('message', 'successedit');
    redirect('backend/pengolahan');
  }

  public function deletets()
  {
    if ($this->input->is_ajax_request()) {

      $iddelete = $this->input->post('id');
      if ($this->pengolahan_model->delete($iddelete)) {
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

  public function anggota()
  {
    $site = $this->site_model->get_site_data()->row_array();
    $data['site_title'] = $site['site_title'];
    $data['site_favicon'] = $site['site_favicon'];
    $data['images'] = $site['images'];
    $data['tahun'] = $site['tahun'];
    $data['title'] = 'Kelompok Pengolahan Hasil Perikanan';
    $data['title0'] = 'Data';
    $data['title1'] = 'Data Anggota';

    $this->load->view('backend/menu', $data);
    $this->load->view('backend/pengolahan/modal/anggota_modal');
    $this->load->view('backend/pengolahan/anggota', $data);
  }

  public function getdataanggota()
  {
    $searchTerm = $this->input->post('searchTerm');
    $response = $this->anggota_model->getanggota($searchTerm);
    echo json_encode($response);
  }

  public function get_ajax_list_anggota()
  {
    $id = $this->uri->segment(4);
    $list = $this->anggota_model->get_datatables($id);
    $data = array();
    $no = $_POST['start'];
    foreach ($list as $d) {
      $no++;
      $row = array();
      $row[] = $no;
      $row[] = '<a href="' . base_url('backend/pengolahan/unit/') . $d->id_anggota . '?idkelompok=' . $id . '">' . $d->nama_anggota . '</a>';
      $row[] = $d->namajabatan;
      $row[] = '<div class="btn-group mb-1"><div class="dropdown"><button class="btn btn-primary btn-sm dropdown-toggle" type="button" id="dropdownMenuButton7" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Opsi</button><div class="dropdown-menu" aria-labelledby="dropdownMenuButton7">
      <a class="dropdown-item" href="javascript:void()" title="Edit" onclick="edit_anggota(' . "'" . $d->id_anggota . "'" . ')"><i class="bi bi-pen-fill"></i> Edit</a>
      <a class="dropdown-item" href="javascript:void()" title="Hapus" id="deleteanggota" value="' . $d->id_anggota . '"><i class="bi bi-trash"></i> Hapus</a></div></div></div>';

      $data[] = $row;
    }

    $output = array(
      "draw" => $_POST['draw'],
      "recordsTotal" => $this->anggota_model->count_all(),
      "recordsFiltered" => $this->anggota_model->count_filtered($id),
      "data" => $data,
    );
    //output to json format

    echo json_encode($output);
  }

  function add_anggota()
  {
    $this->_validate_anggota();

    $users = $this->session->userdata('id');
    $nama_users = $this->session->userdata('name');

    $data = array(
      'nama_anggota' => $this->input->post('nama_anggota'),
      'jabatan_anggota' => $this->input->post('jabatan_anggota'),
      'id_kelompok' => $this->input->post('id_kelompok'),
    );
    $insert = $this->anggota_model->insert_anggota($data);

    if ($insert) {
      // INSERT LOG

      $j = $this->input->post('nama_anggota');
      $b = '<b>' . $nama_users . '</b> Melakukan Tambah Jenis Ikan <b>' . $j . '</b>';
      $data2 = array(
        'ket' => $b,
      );
      $this->jenisikan_model->insert_log_jenisikan($data2);
      // INSERT LOG
      echo json_encode(array("status" => TRUE));
    } else {
      echo json_encode(array("status" => FALSE));
    }
  }

  function edit_anggota()
  {
    $id = $this->input->post('id', TRUE);
    $this->_validate_edit_anggota();


    $users = $this->session->userdata('id');
    $ajax_data['nama_anggota'] = $this->input->post('nama_anggota');
    $ajax_data['jabatan_anggota'] = $this->input->post('jabatan_anggota');


    if ($this->anggota_model->update_entry($id, $ajax_data)) {
      // INSERT LOG
      $nama_users = $this->session->userdata('name');

      $j = $this->input->post('nama_anggota');
      $k = $this->input->post('jabatan_anggota');
      $b = '<b>' . $nama_users . '</b> Melakukan Edit Anggota  <b>' . $j . '</b> dengan jabatan <b>' . $k . '</b>';
      $data2 = array(
        'ket' => $b,
      );
      $this->jenisikan_model->insert_log_jenisikan($data2);
      // INSERT LOG
      echo json_encode(array("status" => TRUE));
    } else {
      echo json_encode(array("status" => FALSE));
    }
  }

  public function deleteanggota()
  {
    if ($this->input->is_ajax_request()) {

      $id_anggota = $this->input->post('id');
      if ($this->anggota_model->delete_entry($id_anggota)) {

        $data = array('res' => "success", 'message' => "Proses berhasil dilakukan");
      } else {
        $data = array('res' => "error", 'message' => "Proses gagal dilakukan");
      }

      echo json_encode($data);
    } else {
      echo "No direct script access allowed";
    }
  }

  private function _validate_anggota()
  {
    $data = array();
    $data['error_string'] = array();
    $data['inputerror'] = array();
    $data['status'] = TRUE;
    $nama = $this->input->post('nama_anggota');
    $jabatan_anggota = $this->input->post('jabatan_anggota');

    if ($this->input->post('nama_anggota') == '') {
      $data['inputerror'][] = 'nama_anggota';
      $data['error_string'][] = 'Form jenis ikan harus berisi';
      $data['status'] = FALSE;
    }

    if ($this->input->post('jabatan_anggota') == '') {
      $data['inputerror'][] = 'jabatan_anggota';
      $data['error_string'][] = 'Form jabatan_anggota ikan harus berisi';
      $data['status'] = FALSE;
    }

    $namalength = strlen($nama);
    if ($namalength < 3) {
      $data['inputerror'][] = 'nama_anggota';
      $data['error_string'][] = 'Nama jenisikan Miminal 3 Karakter';
      $data['status'] = FALSE;
    }
    if ($namalength > 25) {
      $data['inputerror'][] = 'nama_anggota';
      $data['error_string'][] = 'Nama jenisikan Maksimal 25 Karakter';
      $data['status'] = FALSE;
    }

    if ($data['status'] === FALSE) {
      echo json_encode($data);
      exit();
    }
  }

  private function _validate_edit_anggota()
  {
    $data = array();
    $data['error_string'] = array();
    $data['inputerror'] = array();
    $data['status'] = TRUE;

    $nama = $this->input->post('nama_anggota');

    if ($this->input->post('nama_anggota') == '') {
      $data['inputerror'][] = 'nama_anggota';
      $data['error_string'][] = 'Form Nama jenisikan harus berisi';
      $data['status'] = FALSE;
    }

    $namalength = strlen($nama);
    if ($namalength < 3) {
      $data['inputerror'][] = 'nama_anggota';
      $data['error_string'][] = 'Nama Miminal 3 Karakter';
      $data['status'] = FALSE;
    }
    if ($namalength > 25) {
      $data['inputerror'][] = 'nama_anggota';
      $data['error_string'][] = 'Nama Maksimal 25 Karakter';
      $data['status'] = FALSE;
    }

    if ($data['status'] === FALSE) {
      echo json_encode($data);
      exit();
    }
  }

  public function unit()
  {
    $id = $this->uri->segment(4);
    $id_kelompok = $_GET['idkelompok'];

    $site = $this->site_model->get_site_data()->row_array();
    $data['site_title'] = $site['site_title'];
    $data['site_favicon'] = $site['site_favicon'];
    $data['kelompok'] = $this->db->query('SELECT * FROM tb_kelompok WHERE id = ' . $id_kelompok . '')->row();
    $data['anggota'] = $this->db->query('SELECT * FROM tb_anggota WHERE id_anggota = ' . $id . ' AND id_kelompok = ' . $id_kelompok . '')->row();
    // print($this->db->last_query());
    $data['images'] = $site['images'];
    $data['tahun'] = $site['tahun'];
    $data['title'] = 'Data Dasar Unit Pengolahan Ikan (UPI)';
    $data['title0'] = 'Data';
    $data['title1'] = 'Data Anggota';
    $data['title2'] = 'Data Unit Anggota';

    $this->load->view('backend/menu', $data);
    $this->load->view('backend/pengolahan/unit', $data);
  }

  public function unit_edit()
  {
    $site = $this->site_model->get_site_data()->row_array();
    $data['site_title'] = $site['site_title'];
    $data['site_favicon'] = $site['site_favicon'];
    $data['images'] = $site['images'];
    $data['tahun'] = $site['tahun'];
    $data['title'] = 'Data Dasar Unit Pengolahan Ikan (UPI)';
    $data['title0'] = 'Data';
    $data['title1'] = 'Data Anggota';
    $data['title2'] = 'Data Unit Anggota';

    $this->load->view('backend/menu', $data);
    $this->load->view('backend/pengolahan/unit_edit', $data);
  }

  function unit_add()
  {
    // $this->_validate();

    $users = $this->session->userdata('id');
    $nama_users = $this->session->userdata('name');

    $data = array(
      'id' => $this->input->post('id'),
      'id_kelompok' => $this->input->post('id_kelompok'),
      'nama_unit' => $this->input->post('namaunit'),
      'entitas' => $this->input->post('entitas'),
      'nama_pemilik' => $this->input->post('namapemilik'),
      'penanggungjawab' => $this->input->post('penanggungajwab'),
      'modalusaha' => $this->input->post('modalusaha'),
      'omzettahunanupi' => $this->input->post('omzet'),
      'tahun_berdiri' => $this->input->post('tahunberdiri'),
      'kontakperson' => $this->input->post('kontakperson'),
      'provinsi' => $this->input->post('provinsi'),
      'kabupaten' => $this->input->post('kabupaten'),
      'kecamatan' => $this->input->post('Kecamatan'),
      'kelurahan' => $this->input->post('kelurahan'),
      'alamat' => $this->input->post('alamat'),
      'kodepost' => $this->input->post('kodepos'),
      'nib' => $this->input->post('nib'),
      'kbli' => $this->input->post('kbli'),
      'npwp' => $this->input->post('npwp'),
      'no_iup' => $this->input->post('no_iup'),
      'no_skp' => $this->input->post('skp'),
      'no_haccp' => $this->input->post('hscpp'),
      'no_siup' => $this->input->post('siup'),
      'no_akte' => $this->input->post('akte'),
      'email' => $this->input->post('email'),

      'nama_produk' => $this->input->post('namaproduk'),
      'teknologi_produksi' => $this->input->post('teknologi'),
      'tujuan_pemasaran_domestik' => $this->input->post('domestik'),
      'tujuan_pemasaran_mancanegara' => $this->input->post('mancanegara'),
      'realisasi_pertahun' => $this->input->post('realisasi'),

      'asal_wilayah' => $this->input->post('asalwilayah'),
      'jenis_ikan' => $this->input->post('jenisikan'),
      'bentuk_ikan' => $this->input->post('bentukikan'),
      'kebutuhan_perhari' => $this->input->post('kebutuhan'),
      'sni' => $this->input->post('sni'),

      'jumlah_unit' => $this->input->post('jenisunit'),
      'jumlah_kapasitas' => $this->input->post('jumlahkapasitas'),

      'tenagakerjaasing_laki' => $this->input->post('tenagakerjaasing_laki'),
      'tenagakerjaasing_perempuan' => $this->input->post('tenagakerjaasing_perempuan'),
      'tenagakerjatetap_laki' => $this->input->post('tenagakerjatetap_laki'),
      'tenagakerjatetap_perempuan' => $this->input->post('tenagakerjatetap_perempuan'),
      'tenagakerjaharian_laki' => $this->input->post('tenagakerjaharian_laki'),
      'tenagakerjaharian_perempuan' => $this->input->post('tenagakerjaharian_perempuan'),
      'jumlahharikerja_perbulan' => $this->input->post('jmlhharikerja'),
      'jumlahshift_perhari' => $this->input->post('jmlhshift'),
      'upi' => $this->input->post('upi'),
      'produksi' => $this->input->post('produksi'),
      'mutu' => $this->input->post('mutu'),
      'sumber' => $this->input->post('sumber'),
      'pengolahan' => $this->input->post('pengolahan'),
      'volume' => $this->input->post('volume'),
      'produksi_sendiri' => $this->input->post('produksisendiri'),
      'pembelian_dari' => $this->input->post('pembeliandari'),
      'bentuk_es' => $this->input->post('bentukes'),
      'penggunaan_es' => $this->input->post('penggunaanes'),
      'bahan_tambahan_pangan' => $this->input->post('bahantambahanpangan'),
      'bahan_kimia_yangdigunakan' => $this->input->post('bahankimia'),
      'bahan_lainnya' => $this->input->post('bahanlainnya'),
      'jenis_bahan_kemasan' => $this->input->post('jenisbahankemasan'),
      'informasi_lainnya' => $this->input->post('informasilainnya'),
      'catatan' => $this->input->post('kab'),
    );
    $insert = $this->pengolahan_model->tambah($data);

    if ($insert) {
      // INSERT LOG
      $b = '<b>' . $nama_users . '</b> Melakukan Tambah Kelompok';
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

    redirect('backend/pengolahan');
  }

}