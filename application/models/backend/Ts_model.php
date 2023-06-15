<?php
class Ts_model extends CI_Model
{
    /**
     * Description of Controller
     *
     * @author BayuKun28
     */

    var $tablets = 'tb_ts';
    var $tablelog = 'tbl_log';
    var $column_search_ts = array('lokasi', 'kampung', 'ketua');
    var $order = array('id' => 'ASC'); // default order

    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    private function _get_datatables_query()
    {
        $query = "(SELECT ts.id,l.lokasi,l2.lokasi as kampung,ts.ketua,ts.jml_anggota,ts.jml_tambak,(ts.uk_tambak1*ts.uk_tambak2) as uk_tambak,(ts.potensi1*ts.potensi2) as potensi,(ts.existing1*ts.existing2) as existing,j.namajeniskomoditas,ts.jml_ekor
                    FROM tb_ts ts
                    LEFT JOIN lokasi l on l.kodelokasi = ts.lokasi
                    LEFT JOIN lokasi l2 on l2.kodelokasi = ts.kampung
                    LEFT JOIN tb_jeniskomoditas j on j.id_jeniskomoditas = ts.jenis_komoditas
                ) kk";
        $this->db->from($query);
        $i = 0;
        foreach ($this->column_search_ts as $item) {
            if ($_POST['search']['value']) {
                if ($i === 0) {
                    $this->db->group_start();
                    $this->db->like($item, $_POST['search']['value']);
                } else {
                    $this->db->or_like($item, $_POST['search']['value']);
                }

                if (count($this->column_search_ts) - 1 == $i)
                    $this->db->group_end();
            }
            $column_search_stock[$i] = $item; // set column array variable to order processing
            $i++;
        }

        if (isset($_POST['order'])) // here order processing
        {
            $this->db->order_by($column_search_stock[$_POST['order']['0']['column']], $_POST['order']['0']['dir']);
        } else if (isset($this->order)) {
            $order = $this->order;
            $this->db->order_by(key($order), $order[key($order)]);
        }
    }

    function get_datatables()
    {
        $this->db->order_by('kk.id', 'ASC');
        $this->_get_datatables_query();
        if ($_POST['length'] != -1)
            $this->db->limit($_POST['length'], $_POST['start']);
        $query = $this->db->get();
        return $query->result();
    }

    public function count_filtered()
    {
        $this->_get_datatables_query();
        $query = $this->db->get();
        return $query->num_rows();
    }

    public function count_all()
    {
        $this->db->from($this->tablets);
        return $this->db->count_all_results();
    }

    public function get_by_id($id)
    {
        $query = "(SELECT ts.id,l.lokasi,l2.lokasi as kampung,ts.ketua,ts.jml_anggota,ts.jml_tambak,ts.uk_tambak1,ts.uk_tambak2,(ts.uk_tambak1*ts.uk_tambak2) as hasiluk_tambak,ts.potensi1,ts.potensi2,(ts.potensi1*ts.potensi2) as hasilpotensi,ts.existing1,ts.existing2,(ts.existing1*ts.existing2) as hasilexisting,j.namajeniskomoditas,ts.jml_ekor
                    FROM tb_ts ts
                    LEFT JOIN lokasi l on l.kodelokasi = ts.lokasi
                    LEFT JOIN lokasi l2 on l2.kodelokasi = ts.kampung
                    LEFT JOIN tb_jeniskomoditas j on j.id_jeniskomoditas = ts.jenis_komoditas
                ) kk";
        $this->db->from($query);
        $this->db->where('kk.id', $id);
        $query = $this->db->get();
        return $query->row();
    }
    public function tambah_ts($data)
    {
        $this->db->insert('tb_ts', $data);
        $id = $this->db->insert_id();
        return (isset($id)) ? $id : FALSE;
    }
    public function tambah_detail_ts($data1)
    {
        $this->db->insert('tb_tspp', $data1);
    }
    function insert_log_ts($data2)
    {
        $insert = $this->db->insert($this->tablelog, $data2);
        if ($insert) {
            return true;
        }
    }

    public function update_ts($id, $data)
    {
        return $this->db->update('tb_ts', $data, array('id' => $id));
    }

    public function update_detail_ts($id, $data2)
    {
        return $this->db->update('tb_tspp', $data2, array('id_ts' => $id));
    }

    public function single_entry($id)
    {
        $this->db->select('*');
        $this->db->from('tb_ts');
        $this->db->where('id', $id);
        $query = $this->db->get();
        if (count($query->result()) > 0) {
            return $query->row();
        }
    }
    public function update_lock($id, $data)
    {
        return $this->db->update('tb_ts', $data, array('id' => $id));
    }
    function delete_ts($id)
    {
        return $this->db->delete('tb_ts', array('id' => $id));
    }

    function delete_tspp($id)
    {
        return $this->db->delete('tb_tspp', array('id_ts' => $id));
    }


    function import($data)
    {
        $insert = $this->db->insert_batch('tb_ts', $data);
        if ($insert) {
            return true;
        }
    }
    public function edit($id)
    {
        $query = "SELECT ts.id,ts.lokasi as kodelokasi,l.lokasi,ts.kampung as kodekampung,l2.lokasi as kampung,ts.ketua,ts.jml_anggota,ts.jml_tambak,ts.uk_tambak1,ts.uk_tambak2,(ts.uk_tambak1*ts.uk_tambak2) as hasiluk_tambak,ts.potensi1,ts.potensi2,(ts.potensi1*ts.potensi2) as hasilpotensi,ts.existing1,ts.existing2,(ts.existing1*ts.existing2) as hasilexisting,ts.jenis_komoditas,j.namajeniskomoditas,ts.jml_ekor,l3.kodelokasi as kodedistrik,l3.lokasi as distrik,
                    ts2.jan,ts2.feb,ts2.mar,ts2.apr,ts2.mei,ts2.jun,ts2.jul,ts2.agu,ts2.sep,ts2.okt,ts2.nov,ts2.des
                                        FROM tb_ts ts
                                        LEFT JOIN lokasi l on l.kodelokasi = ts.lokasi
                                        LEFT JOIN lokasi l2 on l2.kodelokasi = ts.kampung
                                        LEFT JOIN tb_jeniskomoditas j on j.id_jeniskomoditas = ts.jenis_komoditas 
                                        LEFT JOIN lokasi l3 on l3.kodelokasi = LEFT(l2.kodelokasi,8)
                                        LEFT JOIN tb_tspp ts2 ON ts2.id_ts = ts.id
                    WHERE ts.id = $id";
        return $this->db->query($query)->row_array();
        echo json_encode($query);
    }
}
