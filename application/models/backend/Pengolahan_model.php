<?php
class Pengolahan_model extends CI_Model
{
    /**
     * Description of Controller
     *
     * @author IsnanW
     */

    var $tablets = 'tb_kelompok';
    var $tablelog = 'tbl_log';
    var $column_search_ts = array('nama_kelompok', 'keterangan');
    var $order = array('kk.id' => 'ASC'); // default order

    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    private function _get_datatables_query()
    {
        $query = "(SELECT
                    l.lokasi as urai_kota,
                    l2.lokasi as urai_distrik,
                    l3.lokasi as urai_kampung,
                    tj.namajenishasilproduksi as jenishasil_p,
                    tk.*
                FROM
                    tb_kelompok tk
                JOIN tb_jenishasilproduksi tj on
                    tj.id_jenishasilproduksi = tk.jenis_hasil_produksi
                JOIN lokasi l on
                    l.kodelokasi = tk.lokasi
                JOIN lokasi l2 on
                    l2.kodelokasi = tk.distrik
                JOIN lokasi l3 on
                    l3.kodelokasi = tk.kampung
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
        $this->db->insert('tb_kelompok', $data);
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
        return $this->db->update('tb_kelompok', $data, array('id' => $id));
    }

    // public function update_detail($id, $data2)
    // {
    //     return $this->db->update('tb_rlpp', $data2, array('id_rl' => $id));
    // }

    public function single_entry($id)
    {
        $this->db->select('*');
        $this->db->from('tb_pembenihan');
        $this->db->where('id', $id);
        $query = $this->db->get();
        if (count($query->result()) > 0) {
            return $query->row();
        }
    }
    public function update_lock($id, $data)
    {
        return $this->db->update('tb_pembenihan', $data, array('id' => $id));
    }
    function delete($id)
    {
        return $this->db->delete('tb_kelompok', array('id' => $id));
    }

    function delete_detail($id)
    {
        return $this->db->delete('tb_rlpp', array('id_rl' => $id));
    }


    function import($data)
    {
        $insert = $this->db->insert_batch('tb_pembenihan', $data);
        if ($insert) {
            return true;
        }
    }
    public function edit($id)
    {
        $query = "SELECT
                    tk.id,
                    tk.lokasi as kodekabupaten,
                    l.lokasi as kabupaten,
                    l3.kodelokasi as kodedistrik,
                    l3.lokasi as distrik,
                    tk.kampung as kodekampung,
                    l2.lokasi as kampung,
                    tk.nama_kelompok,
                    tk.jenis_hasil_produksi,
                    j.namajenishasilproduksi,
                    tk.keterangan
                FROM
                    tb_kelompok tk
                LEFT JOIN lokasi l on
                    l.kodelokasi = tk.lokasi
                LEFT JOIN lokasi l2 on
                    l2.kodelokasi = tk.kampung
                LEFT JOIN tb_jenishasilproduksi j on
                    j.id_jenishasilproduksi = tk.jenis_hasil_produksi
                LEFT JOIN lokasi l3 on
                    l3.kodelokasi = LEFT(l2.kodelokasi,
                    8)
                -- LEFT JOIN tb_rlpp tk2 ON
                --     tk2.id_rl = tk.id
                WHERE
                    tk.id = $id";
        return $this->db->query($query)->row_array();
        echo json_encode($query);
    }
}
