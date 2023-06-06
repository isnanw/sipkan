<?php
class Jenisikan_model extends CI_Model
{
    /**
     * Description of Controller
     *
     * @author BayuKun28
     */

    var $tablejenisikan = 'tb_jenisikan';
    var $tablelog = 'tbl_log';
    var $column_search_jenisikan = array('namajenisikan');
    var $order = array('id_jenisikan' => 'ASC'); // default order

    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    private function _get_datatables_query()
    {
        //add custom filter here
        if ($this->input->post('namajenisikan')) {
            $this->db->like('namajenisikan', $this->input->post('namajenisikan'));
        }

        $this->db->from($this->tablejenisikan);
        $i = 0;
        foreach ($this->column_search_jenisikan as $item) {
            if ($_POST['search']['value']) {
                if ($i === 0) {
                    $this->db->group_start();
                    $this->db->like($item, $_POST['search']['value']);
                } else {
                    $this->db->or_like($item, $_POST['search']['value']);
                }

                if (count($this->column_search_jenisikan) - 1 == $i)
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
        $this->db->order_by('id_jenisikan', 'ASC');
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
        $this->db->from($this->tablejenisikan);
        return $this->db->count_all_results();
    }

    public function get_by_id($id_jenisikan)
    {
        $this->db->from($this->tablejenisikan);
        $this->db->where('id_jenisikan', $id_jenisikan);
        $query = $this->db->get();
        return $query->row();
    }

    function insert_jenisikan($data)
    {
        $insert = $this->db->insert($this->tablejenisikan, $data);
        if ($insert) {
            return true;
        }
    }

    function insert_log_jenisikan($data2)
    {
        $insert = $this->db->insert($this->tablelog, $data2);
        if ($insert) {
            return true;
        }
    }

    public function update_entry($id, $data)
    {
        return $this->db->update('tb_jenisikan', $data, array('id_jenisikan' => $id));
    }

    public function single_entry($id_jenisikan)
    {
        $this->db->select('*');
        $this->db->from('tb_jenisikan');
        $this->db->where('id_jenisikan', $id_jenisikan);
        $query = $this->db->get();
        if (count($query->result()) > 0) {
            return $query->row();
        }
    }
    public function update_lock($id_jenisikan, $data)
    {
        return $this->db->update('tb_jenisikan', $data, array('id_jenisikan' => $id_jenisikan));
    }
    function delete_entry($id_jenisikan)
    {
        return $this->db->delete('tb_jenisikan', array('id_jenisikan' => $id_jenisikan));
    }

    function import($data)
    {
        $insert = $this->db->insert_batch('tb_jenisikan', $data);
        if ($insert) {
            return true;
        }
    }

    function getikan($searchTerm = "")
    {
        $query = "SELECT * FROM tb_jenisikan WHERE namajenisikan like '%$searchTerm%' ORDER BY id_jenisikan ASC ";
        $dataprov = $this->db->query($query)->result_array();

        $data = array();
        foreach ($dataprov as $prov) {
            $data[] = array("id" => $prov['id_jenisikan'], "text" => $prov['namajenisikan']);
        }
        return $data;
    }
}
