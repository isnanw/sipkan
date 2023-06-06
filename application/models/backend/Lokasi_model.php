<?php
class Lokasi_model extends CI_Model
{
    /**
     * Description of Controller
     *
     * @author BayuKun28
     */

    var $tablelokasi = 'lokasi';
    var $tablelog = 'tbl_log';
    var $column_search_lokasi = array('kodelokasi','lokasi');
    var $order = array('kodelokasi' => 'ASC'); // default order

    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    private function _get_datatables_query()
    {
        //add custom filter here
        if ($this->input->post('lokasi')) {
            $this->db->like('lokasi', $this->input->post('lokasi'));
        }

        $this->db->from($this->tablelokasi);
        $i = 0;
        foreach ($this->column_search_lokasi as $item) {
            if ($_POST['search']['value']) {
                if ($i === 0) {
                    $this->db->group_start();
                    $this->db->like($item, $_POST['search']['value']);
                } else {
                    $this->db->or_like($item, $_POST['search']['value']);
                }

                if (count($this->column_search_lokasi) - 1 == $i)
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
        $this->db->order_by('kodelokasi', 'ASC');
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
        $this->db->from($this->tablelokasi);
        return $this->db->count_all_results();
    }

    public function get_by_id($kodelokasi)
    {
        $this->db->from($this->tablelokasi);
        $this->db->where('kodelokasi', $kodelokasi);
        $query = $this->db->get();
        return $query->row();
    }

    function insert_lokasi($data)
    {
        $insert = $this->db->insert($this->tablelokasi, $data);
        if ($insert) {
            return true;
        }
    }

    function insert_log_lokasi($data2)
    {
        $insert = $this->db->insert($this->tablelog, $data2);
        if ($insert) {
            return true;
        }
    }

    public function update_entry($id, $data)
    {
        return $this->db->update('lokasi', $data, array('kodelokasi' => $id));
    }

    public function single_entry($kodelokasi)
    {
        $this->db->select('*');
        $this->db->from('lokasi');
        $this->db->where('kodelokasi', $kodelokasi);
        $query = $this->db->get();
        if (count($query->result()) > 0) {
            return $query->row();
        }
    }
    public function update_lock($kodelokasi, $data)
    {
        return $this->db->update('lokasi', $data, array('kodelokasi' => $kodelokasi));
    }
    function delete_entry($kodelokasi)
    {
        return $this->db->delete('lokasi', array('kodelokasi' => $kodelokasi));
    }

    function import($data)
    {
        $insert = $this->db->insert_batch('lokasi', $data);
        if ($insert) {
            return true;
        }
    }

    function getkab($searchTerm = "")
    {
        $query = "SELECT * FROM lokasi WHERE LENGTH(kodelokasi) <= 5  AND lokasi like '%$searchTerm%' ORDER BY kodelokasi ASC";
        $dataprov = $this->db->query($query)->result_array();

        $data = array();
        foreach ($dataprov as $prov) {
            $data[] = array("id" => $prov['kodelokasi'], "text" => $prov['lokasi']);
        }
        return $data;
    }

    function getdistrik($kodelokasi, $searchTerm = "")
    {
        $query = "SELECT kodelokasi ,lokasi FROM lokasi WHERE LENGTH(kodelokasi) = 8 AND LEFT(kodelokasi,5) = '$kodelokasi' AND lokasi like '%$searchTerm%'  ORDER BY kodelokasi ASC";
        $dataprov = $this->db->query($query)->result_array();

        $data = array();
        foreach ($dataprov as $prov) {
            $data[] = array("id" => $prov['kodelokasi'], "text" => $prov['lokasi']);
        }
        return $data;
    }

    function getkampung($kodelokasi, $searchTerm = "")
    {
        $query = "SELECT kodelokasi,lokasi FROM lokasi WHERE LENGTH(kodelokasi) > 8 AND LEFT(kodelokasi,8) = '$kodelokasi' AND lokasi like '%$searchTerm%' ORDER BY kodelokasi ASC";
        $dataprov = $this->db->query($query)->result_array();

        $data = array();
        foreach ($dataprov as $prov) {
            $data[] = array("id" => $prov['kodelokasi'], "text" => $prov['lokasi']);
        }
        return $data;
    }
}
