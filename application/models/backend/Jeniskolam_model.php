<?php
class Jeniskolam_model extends CI_Model
{
	/**
	 * Description of Controller
	 *
	 * @author isnanw
	 */

	var $tablejeniskolam = 'tb_jeniskolam';
	var $tablelog = 'tbl_log';
	var $column_search_jeniskolam = array('namajeniskolam');
	var $order = array('id_jeniskolam' => 'ASC'); // default order

	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}

	private function _get_datatables_query()
	{
		//add custom filter here
		if ($this->input->post('namajeniskolam')) {
			$this->db->like('namajeniskolam', $this->input->post('namajeniskolam'));
		}

		$this->db->from($this->tablejeniskolam);
		$i = 0;
		foreach ($this->column_search_jeniskolam as $item) {
			if ($_POST['search']['value']) {
				if ($i === 0) {
					$this->db->group_start();
					$this->db->like($item, $_POST['search']['value']);
				} else {
					$this->db->or_like($item, $_POST['search']['value']);
				}

				if (count($this->column_search_jeniskolam) - 1 == $i)
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
		$this->db->order_by('id_jeniskolam', 'ASC');
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
		$this->db->from($this->tablejeniskolam);
		return $this->db->count_all_results();
	}

	public function get_by_id($id_jeniskolam)
	{
		$this->db->from($this->tablejeniskolam);
		$this->db->where('id_jeniskolam', $id_jeniskolam);
		$query = $this->db->get();
		return $query->row();
	}

	function insert_jeniskolam($data)
	{
		$insert = $this->db->insert($this->tablejeniskolam, $data);
		if ($insert) {
			return true;
		}
	}

	function insert_log_jeniskolam($data2)
	{
		$insert = $this->db->insert($this->tablelog, $data2);
		if ($insert) {
			return true;
		}
	}

	public function update_entry($id, $data)
	{
		return $this->db->update('tb_jeniskolam', $data, array('id_jeniskolam' => $id));
	}

	public function single_entry($id_jeniskolam)
	{
		$this->db->select('*');
		$this->db->from('tb_jeniskolam');
		$this->db->where('id_jeniskolam', $id_jeniskolam);
		$query = $this->db->get();
		if (count($query->result()) > 0) {
			return $query->row();
		}
	}
	public function update_lock($id_jeniskolam, $data)
	{
		return $this->db->update('tb_jeniskolam', $data, array('id_jeniskolam' => $id_jeniskolam));
	}
	function delete_entry($id_jeniskolam)
	{
		return $this->db->delete('tb_jeniskolam', array('id_jeniskolam' => $id_jeniskolam));
	}

	function import($data)
	{
		$insert = $this->db->insert_batch('tb_jeniskolam', $data);
		if ($insert) {
			return true;
		}
	}

	function getkolam($searchTerm = "")
	{
		$query = "SELECT * FROM tb_jeniskolam WHERE namajeniskolam like '%$searchTerm%' ORDER BY id_jeniskolam ASC ";
		$dataprov = $this->db->query($query)->result_array();

		$data = array();
		foreach ($dataprov as $prov) {
			$data[] = array("id" => $prov['id_jeniskolam'], "text" => $prov['namajeniskolam']);
		}
		return $data;
	}
}
