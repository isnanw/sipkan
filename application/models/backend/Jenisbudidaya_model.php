<?php
class Jenisbudidaya_model extends CI_Model
{
    /**
     * Description of Controller
     *
     * @author BayuKun28
     */

    var $tablejenisbudidaya = 'tb_jenisbudidaya';
    var $tablelog = 'tbl_log';
    var $column_search_jenisbudidaya = array('namajenisbudidaya');
    var $order = array('id_jenisbudidaya' => 'ASC'); // default order

    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    private function _get_datatables_query()
    {
        //add custom filter here
        if ($this->input->post('namajenisbudidaya')) {
            $this->db->like('namajenisbudidaya', $this->input->post('namajenisbudidaya'));
        }

        $this->db->from($this->tablejenisbudidaya);
        $i = 0;
        foreach ($this->column_search_jenisbudidaya as $item) {
            if ($_POST['search']['value']) {
                if ($i === 0) {
                    $this->db->group_start();
                    $this->db->like($item, $_POST['search']['value']);
                } else {
                    $this->db->or_like($item, $_POST['search']['value']);
                }

                if (count($this->column_search_jenisbudidaya) - 1 == $i)
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
        $this->db->order_by('id_jenisbudidaya', 'ASC');
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
        $this->db->from($this->tablejenisbudidaya);
        return $this->db->count_all_results();
    }

    public function get_by_id($id_jenisbudidaya)
    {
        $this->db->from($this->tablejenisbudidaya);
        $this->db->where('id_jenisbudidaya', $id_jenisbudidaya);
        $query = $this->db->get();
        return $query->row();
    }

    function insert_jenisbudidaya($data)
    {
        $insert = $this->db->insert($this->tablejenisbudidaya, $data);
        if ($insert) {
            return true;
        }
    }

    function insert_log_jenisbudidaya($data2)
    {
        $insert = $this->db->insert($this->tablelog, $data2);
        if ($insert) {
            return true;
        }
    }

    public function update_entry($id, $data)
    {
        return $this->db->update('tb_jenisbudidaya', $data, array('id_jenisbudidaya' => $id));
    }

    public function single_entry($id_jenisbudidaya)
    {
        $this->db->select('*');
        $this->db->from('tb_jenisbudidaya');
        $this->db->where('id_jenisbudidaya', $id_jenisbudidaya);
        $query = $this->db->get();
        if (count($query->result()) > 0) {
            return $query->row();
        }
    }
    public function update_lock($id_jenisbudidaya, $data)
    {
        return $this->db->update('tb_jenisbudidaya', $data, array('id_jenisbudidaya' => $id_jenisbudidaya));
    }
    function delete_entry($id_jenisbudidaya)
    {
        return $this->db->delete('tb_jenisbudidaya', array('id_jenisbudidaya' => $id_jenisbudidaya));
    }

    function import($data)
    {
        $insert = $this->db->insert_batch('tb_jenisbudidaya', $data);
        if ($insert) {
            return true;
        }
    }

    function getbudidaya($searchTerm = "")
    {
        $query = "SELECT * FROM tb_jenisbudidaya WHERE namajenisbudidaya like '%$searchTerm%' ORDER BY id_jenisbudidaya ASC ";
        $dataprov = $this->db->query($query)->result_array();

        $data = array();
        foreach ($dataprov as $prov) {
            $data[] = array("id" => $prov['id_jenisbudidaya'], "text" => $prov['namajenisbudidaya']);
        }
        return $data;
    }
}
