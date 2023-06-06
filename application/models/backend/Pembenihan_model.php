<?php
class Pembenihan_model extends CI_Model
{
    /**
     * Description of Controller
     *
     * @author IsnanW
     */

    var $tablets = 'tb_rl';
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
        $query = "(SELECT ts.id,l.lokasi,l2.lokasi as kampung,ts.ketua,
                            ts.jml_anggota,ts.jml_unit,ts.jml_longline,
                            ts.potensi,ts.existing,j.namajeniskomoditas,ts.jml_bibit
                    FROM tb_rl ts
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
    public function tambah($data)
    {
        $this->db->insert('tb_pembenihan', $data);
        $id = $this->db->insert_id();
        return (isset($id)) ? $id : FALSE;
    }
    public function tambah_detail($data1)
    {
        $this->db->insert('tb_rlpp', $data1);
    }
    function insert_log($data2)
    {
        $insert = $this->db->insert($this->tablelog, $data2);
        if ($insert) {
            return true;
        }
    }

    public function update($id, $data)
    {
        return $this->db->update('tb_rl', $data, array('id' => $id));
    }

    public function update_detail($id, $data2)
    {
        return $this->db->update('tb_rlpp', $data2, array('id_rl' => $id));
    }

    public function single_entry($id)
    {
        $this->db->select('*');
        $this->db->from('tb_rl');
        $this->db->where('id', $id);
        $query = $this->db->get();
        if (count($query->result()) > 0) {
            return $query->row();
        }
    }
    public function update_lock($id, $data)
    {
        return $this->db->update('tb_rl', $data, array('id' => $id));
    }
    function delete($id)
    {
        return $this->db->delete('tb_rl', array('id' => $id));
    }

    function delete_detail($id)
    {
        return $this->db->delete('tb_rlpp', array('id_rl' => $id));
    }


    function import($data)
    {
        $insert = $this->db->insert_batch('tb_rl', $data);
        if ($insert) {
            return true;
        }
    }
    public function edit($id)
    {
        $query = "SELECT ts.id,ts.lokasi as kodelokasi,l.lokasi,ts.kampung as kodekampung,
                            l2.lokasi as kampung,ts.ketua,ts.jml_unit,ts.jml_longline,ts.jml_anggota,
                            ts.potensi,ts.existing,ts.jenis_komoditas,j.namajeniskomoditas,ts.jml_bibit,
                            l3.kodelokasi as kodedistrik,l3.lokasi as distrik,
                            ts2.jan,ts2.feb,ts2.mar,ts2.apr,ts2.mei,ts2.jun,ts2.jul,ts2.agu,ts2.sep,ts2.okt,ts2.nov,ts2.des
                    FROM tb_rl ts
                    LEFT JOIN lokasi l on l.kodelokasi = ts.lokasi
                    LEFT JOIN lokasi l2 on l2.kodelokasi = ts.kampung
                    LEFT JOIN tb_jeniskomoditas j on j.id_jeniskomoditas = ts.jenis_komoditas
                    LEFT JOIN lokasi l3 on l3.kodelokasi = LEFT(l2.kodelokasi,8)
                    LEFT JOIN tb_rlpp ts2 ON ts2.id_rl = ts.id
                    WHERE ts.id = $id";
        return $this->db->query($query)->row_array();
        echo json_encode($query);
    }
}
