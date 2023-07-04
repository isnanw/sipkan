<?php
class anggota_model extends CI_Model
{
    /**
     * Description of Controller
     *
     * @author BayuKun28
     */

    var $tableanggota = 'tb_anggota';
    var $tablelog = 'tbl_log';
    var $column_search_anggota = array('nama_anggota');
    var $order = array('id_anggota' => 'ASC'); // default order

    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    private function _get_datatables_query()
    {
        //add custom filter here
        if ($this->input->post('nama_anggota')) {
            $this->db->like('nama_anggota', $this->input->post('nama_anggota'));
        }

        $this->db->from($this->tableanggota);
        $this->db->join('tb_jabatan', 'tb_jabatan.id_jabatan = tb_anggota.jabatan_anggota');
        $i = 0;
        foreach ($this->column_search_anggota as $item) {
            if ($_POST['search']['value']) {
                if ($i === 0) {
                    $this->db->group_start();
                    $this->db->like($item, $_POST['search']['value']);
                } else {
                    $this->db->or_like($item, $_POST['search']['value']);
                }

                if (count($this->column_search_anggota) - 1 == $i)
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

    function get_datatables($id)
    {
        $this->db->where('id_kelompok', $id);
        $this->db->order_by('id_kelompok', 'ASC');

        // die($this->db->last_query());
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
        $this->db->from($this->tableanggota);
        return $this->db->count_all_results();
    }

    public function get_by_id($id_anggota)
    {
        $this->db->from($this->tableanggota);
        $this->db->join('tb_jabatan', 'tb_jabatan.id_jabatan = tb_anggota.jabatan_anggota');
        $this->db->where('id_anggota', $id_anggota);
        $query = $this->db->get();
        return $query->row();
    }

    function insert_anggota($data)
    {
        $insert = $this->db->insert($this->tableanggota, $data);
        if ($insert) {
            return true;
        }
    }

    function insert_log_anggota($data2)
    {
        $insert = $this->db->insert($this->tablelog, $data2);
        if ($insert) {
            return true;
        }
    }

    public function update_entry($id, $data)
    {
        return $this->db->update('tb_anggota', $data, array('id_anggota' => $id));
    }

    public function single_entry($id_anggota)
    {
        $this->db->select('*');
        $this->db->from('tb_anggota');
        $this->db->where('id_anggota', $id_anggota);
        $query = $this->db->get();
        if (count($query->result()) > 0) {
            return $query->row();
        }
    }
    public function update_lock($id_anggota, $data)
    {
        return $this->db->update('tb_anggota', $data, array('id_anggota' => $id_anggota));
    }
    function delete_entry($id_anggota)
    {
        return $this->db->delete('tb_anggota', array('id_anggota' => $id_anggota));
    }

    function import($data)
    {
        $insert = $this->db->insert_batch('tb_anggota', $data);
        if ($insert) {
            return true;
        }
    }

    function getanggota($searchTerm = "")
    {
        $query = "SELECT * FROM tb_jabatan WHERE namajabatan like '%$searchTerm%' ORDER BY id_jabatan ASC ";
        $dataprov = $this->db->query($query)->result_array();

        $data = array();
        foreach ($dataprov as $prov) {
            $data[] = array("id" => $prov['id_jabatan'], "text" => $prov['namajabatan']);
        }
        return $data;
    }
}
