<?php
class Dashboard_model extends CI_Model{

    function laporan_statistics(){
        date_default_timezone_set('Asia/Jayapura');
        $bulan =date('m');

        $this->db->select("tbl_rekap_cash.*,SUM(IF(DATE_FORMAT(tgl_cash,'%d'), total_cash, 0)) AS totals,DATE_FORMAT(tgl_cash,'%d') AS tgl");
        $this->db->from('tbl_rekap_cash');

        $this->db->where ( 'month(tgl_cash)', $bulan);
        $this->db->group_by('date(tgl_cash)');
        $query = $this->db->get();
        if($query->num_rows() > 0){
            foreach($query->result() as $data){
                $result[] = $data;
            }
            return $result;
        }
    }


    public function countUsers() {
        return $this->db->count_all('tbl_user'); // Menghitung jumlah baris di tabel "user"
    }

    public function countKolam() {
        return $this->db->count_all('tb_jeniskolam'); // Menghitung jumlah baris di tabel "jeniskolam"
    }

    public function countBudidaya() {
        return $this->db->count_all('tb_jenisbudidaya'); // Menghitung jumlah baris di tabel "jenisbudidaya"
    }

    public function countIkan() {
        return $this->db->count_all('tb_jenisikan'); // Menghitung jumlah baris di tabel "jenisikan"
    }

    public function countKomoditas() {
        return $this->db->count_all('tb_jeniskomoditas'); // Menghitung jumlah baris di tabel "jeniskomunditas"
    }

    public function countPembenihan() {
        return $this->db->count_all('tb_pembenihan'); // Menghitung jumlah baris di tabel "pembenihan"
    }

    public function countPembesaran() {
        return $this->db->count_all('tb_pembesaran'); // Menghitung jumlah baris di tabel "pembesaran"
    }

    public function countPud()
    {
        return $this->db->count_all('tb_ts'); // Menghitung jumlah baris di tabel "pembesaran"
    }
    public function countKat()
    {
        return $this->db->count_all('tb_kat'); // Menghitung jumlah baris di tabel "pembesaran"
    }
    public function countKjtt()
    {
        return $this->db->count_all('tb_kjtt'); // Menghitung jumlah baris di tabel "pembesaran"
    }
    public function countKjat()
    {
        return $this->db->count_all('tb_kjat'); // Menghitung jumlah baris di tabel "pembesaran"
    }
    public function countMnp()
    {
        return $this->db->count_all('tb_mnp'); // Menghitung jumlah baris di tabel "pembesaran"
    }
    public function countKjal()
    {
        return $this->db->count_all('tb_kjal'); // Menghitung jumlah baris di tabel "pembesaran"
    }
    function count_pengeluaran() {
            $query = $this->db->query("SELECT SUM(biaya_pengeluaran) AS pengeluaran_count FROM tbl_pengeluaran WHERE
            MONTH(tgl_pengeluaran)=MONTH(NOW())");
            return $query;
    }
    function count_biayaproduksi() {
            $query = $this->db->query("SELECT SUM(produksi_selesai_biaya) AS biayaproduksi_count FROM tbl_produksi_selesai WHERE
            MONTH(produksi_selesai_tgl)=MONTH(NOW())");
            return $query;
    }
    function pendapatan_kotor_count() {
            $query = $this->db->query("SELECT SUM(total_belanja) AS pendapatan_kotor FROM tbl_list_transaksi WHERE
            MONTH(tgl_transaksi)=MONTH(NOW())");
            return $query;
    }




}