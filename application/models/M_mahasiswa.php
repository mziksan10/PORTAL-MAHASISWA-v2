<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_mahasiswa extends CI_Model
{
    protected $ksk='ksks';
    protected $nilai_ksk='nilai_ksks';

    
    function ambil_data_mhs($npm){
        return $this->db->query("SELECT mahasiswa.npm, mahasiswa.kelas, mahasiswa.nama, mahasiswa.tempatlahir, mahasiswa.tanggallahir, mahasiswa.kelamin, mahasiswa.agama, mahasiswa.alamat1, mahasiswa.hp, MAX(nilai09.smt) AS semester, IF(MID(mahasiswa.npm,3,3) = '301', 'AKE', IF(MID(mahasiswa.npm,3,3) = '401', 'KAT', IF(MID(mahasiswa.npm,3,3) = '404', 'MBIS', IF(MID(mahasiswa.npm,3,3) = '308', 'AKS', IF(MID(mahasiswa.npm,3,3) = '307', 'FAR', IF(MID(mahasiswa.npm,3,3) = '309', 'FIS', IF(MID(mahasiswa.npm,3,3) = '403', 'IRM', IF(MID(mahasiswa.npm,3,3) = '303', 'RMIK', IF(MID(mahasiswa.npm,3,3) = '305', 'ARS', IF(MID(mahasiswa.npm,3,3) = '302', 'MIF', IF(MID(mahasiswa.npm,3,3) = '402', 'SI', IF(MID(mahasiswa.npm,3,3) = '304', 'TIK', IF(MID(mahasiswa.npm,3,3) = '306', 'KMA', ''))))))))))))) AS nama_jurusan FROM mahasiswa LEFT OUTER JOIN nilai09 ON mahasiswa.npm = nilai09.npm WHERE mahasiswa.npm = '$npm'")->row();
    }

    function ambil_data_nilai($npm){
        return $this->db->query("SELECT n.smt, mk.KodeMatkul, mk.namamatkul, mk.SKS, n.nilaiuts, n.nilaiuas, n.nilaiakhir, IF(n.nilaiakhir = 'A', '4.00', IF(n.nilaiakhir = 'AB', '3.50', IF(n.nilaiakhir = 'B', '3.00', IF(n.nilaiakhir = 'BC', '2.50', IF(n.nilaiakhir = 'C', '2.00', IF(n.nilaiakhir = 'CD', '1.50', IF(n.nilaiakhir = 'D', '1.00', IF(n.nilaiakhir = 'E', '0.00',0)))))))) AS asss FROM (nilai09 n LEFT OUTER JOIN matakuliah09 mk ON n.kodematkul = mk.KodeMatkul) LEFT OUTER JOIN mahasiswa mhs ON n.npm = mhs.NPM WHERE mhs.NPM = '$npm' GROUP BY mk.KodeMatkul");
    }

    function ambil_data_semester($npm){
        return $this->db->query("SELECT n.smt FROM (nilai09 n LEFT OUTER JOIN matakuliah09 mk ON n.kodematkul = mk.KodeMatkul) LEFT OUTER JOIN mahasiswa mhs ON n.npm = mhs.NPM WHERE mhs.NPM = '$npm' GROUP BY n.smt");
    }

    function ambil_data_cetak_khs($npm, $smt){
        return $this->db->query("SELECT n.smt, mk.KodeMatkul, mk.namamatkul, mk.SKS, n.nilaiuts, n.nilaiuas, n.nilaiakhir, IF(n.nilaiakhir = 'A', '4.00', IF(n.nilaiakhir = 'AB', '3.50', IF(n.nilaiakhir = 'B', '3.00', IF(n.nilaiakhir = 'BC', '2.50', IF(n.nilaiakhir = 'C', '2.00', IF(n.nilaiakhir = 'CD', '1.50', IF(n.nilaiakhir = 'D', '1.00', IF(n.nilaiakhir = 'E', '0.00',0)))))))) AS asss FROM (nilai09 n LEFT OUTER JOIN matakuliah09 mk ON n.kodematkul = mk.KodeMatkul) LEFT OUTER JOIN mahasiswa mhs ON n.npm = mhs.NPM WHERE mhs.NPM = '$npm' AND n.smt = '$smt' GROUP BY mk.KodeMatkul");
    }
    
    public function get_ksk($npm=null)
    {        
        $this->select_field();
        $this->db->from($this->nilai_ksk);
        $this->db->join($this->ksk,'nilai_ksks.id_ksk=ksks.id');
        $this->db->order_by("nilai_ksks.semester", "asc");
        return $this->db->where('nilai_ksks.npm',$npm)->get();        
    }

    protected function select_field(){
        return $this->db->select('ksks.kode_ksk, ksks.nama_ksk, nilai_ksks.npm, nilai_ksks.nilai_rata_akhir, nilai_ksks.nilai_mutu, nilai_ksks.keterangan, nilai_ksks.deskripsi, nilai_ksks.semester, nilai_ksks.tahun_semester');         
    }
    
}