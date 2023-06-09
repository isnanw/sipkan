<?php
class Jeniskomoditas_model extends CI_Model
{
    /**
     * Description of Controller
     *
     * @author BayuKun28
     */

    var $tablejeniskomoditas = 'tb_jeniskomoditas';
    var $tablelog = 'tbl_log';
    var $column_search_jeniskomoditas = array('namajeniskomoditas');
    var $order = array('id_jeniskomoditas' => 'ASC'); // default order

    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    private function _get_datatables_query()
    {
        //add custom filter here
        if ($this->input->post('namajeniskomoditas')) {
            $this->db->like('namajeniskomoditas', $this->input->post('namajeniskomoditas'));
        }

        $this->db->from($this->tablejeniskomoditas);
        $i = 0;
        foreach ($this->column_search_jeniskomoditas as $item) {
            if ($_POST['search']['value']) {
                if ($i === 0) {
                    $this->db->group_start();
                    $this->db->like($item, $_POST['search']['value']);
                } else {
                    $this->db->or_like($item, $_POST['search']['value']);
                }

                if (count($this->column_search_jeniskomoditas) - 1 == $i)
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
        $this->db->order_by('id_jeniskomoditas', 'ASC');
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
        $this->db->from($this->tablejeniskomoditas);
        return $this->db->count_all_results();
    }

    public function get_by_id($id_jeniskomoditas)
    {
        $this->db->from($this->tablejeniskomoditas);
        $this->db->where('id_jeniskomoditas', $id_jeniskomoditas);
        $query = $this->db->get();
        return $query->row();
    }

    function insert_jeniskomoditas($data)
    {
        $insert = $this->db->insert($this->tablejeniskomoditas, $data);
        if ($insert) {
            return true;
        }
    }

    function insert_log_jeniskomoditas($data2)
    {
        $insert = $this->db->insert($this->tablelog, $data2);
        if ($insert) {
            return true;
        }
    }

    public function update_entry($id, $data)
    {
        return $this->db->update('tb_jeniskomoditas', $data, array('id_jeniskomoditas' => $id));
    }

    public function single_entry($id_jeniskomoditas)
    {
        $this->db->select('*');
        $this->db->from('tb_jeniskomoditas');
        $this->db->where('id_jeniskomoditas', $id_jeniskomoditas);
        $query = $this->db->get();
        if (count($query->result()) > 0) {
            return $query->row();
        }
    }
    public function update_lock($id_jeniskomoditas, $data)
    {
        return $this->db->update('tb_jeniskomoditas', $data, array('id_jeniskomoditas' => $id_jeniskomoditas));
    }
    function delete_entry($id_jeniskomoditas)
    {
        return $this->db->delete('tb_jeniskomoditas', array('id_jeniskomoditas' => $id_jeniskomoditas));
    }

    function import($data)
    {
        $insert = $this->db->insert_batch('tb_jeniskomoditas', $data);
        if ($insert) {
            return true;
        }
    }
    function getkomoditas($searchTerm = "")
    {
        $query = "SELECT * FROM tb_jeniskomoditas WHERE namajeniskomoditas like '%$searchTerm%' ORDER BY id_jeniskomoditas ASC ";
        $dataprov = $this->db->query($query)->result_array();

        $data = array();
        foreach ($dataprov as $prov) {
            $data[] = array("id" => $prov['id_jeniskomoditas'], "text" => $prov['namajeniskomoditas']);
        }
        return $data;
    }

    function getperiode($searchTerm = "")
    {
        $query = "SELECT * FROM tb_periode WHERE periode like '%$searchTerm%' ORDER BY id ASC ";
        $dataprov = $this->db->query($query)->result_array();

        $data = array();
        foreach ($dataprov as $prov) {
            $data[] = array("id" => $prov['id'], "text" => $prov['periode']);
        }
        return $data;
    }
}
