<?php
class Admin_model extends CI_Model
{
    public function getAllSiswa()
    {
        return $this->db->get('master')->result_array();
    }
    public function hitungJumlahSiswa()
    {
        $query = $this->db->get('master');
        if ($query->num_rows() > 0) {
            return $query->num_rows();
        } else {
            return 0;
        }
    }

    public function getSiswaDiterima()
    {
        return $this->db->get_where('master', ['status_pendaftaran' => 'Diterima'])->result_array();
    }
    public function getSiswaBelumDiverifikasi()
    {
        return $this->db->get_where('master', ['status_pendaftaran' => 'Belum Diverifikasi'])->result_array();
    }
    public function getSiswaBeasiswa()
    {
        return $this->db->get_where('master', ['beasiswa' => 'Belum Diambil'])->result_array();
    }
    //Get Jurusan
    public function getSiswaTKRO()
    {
        return $this->db->get_where('master', ['jurusan' => 'Teknik Kendaraan Ringan Otomotif'])->result_array();
    }
    public function getSiswaTBSM()
    {
        return $this->db->get_where('master', ['jurusan' => 'Teknik Bisnis Sepeda Motor'])->result_array();
    }
    public function getSiswaAKL()
    {
        return $this->db->get_where('master', ['jurusan' => 'Akuntansi dan Keuangan Lembaga'])->result_array();
    }
    public function getSiswaOTKP()
    {
        return $this->db->get_where('master', ['jurusan' => 'Otomatisasi dan Tata Kelola Perkantoran'])->result_array();
    }
    public function getSiswaBDP()
    {
        return $this->db->get_where('master', ['jurusan' => 'Bisnis Daring dan Pemasaran'])->result_array();
    }


    //Verifikasi
    public function hitungJumlahVerifikasi()
    {
        $sql = "SELECT count(if(status_pendaftaran='Diterima', status_pendaftaran, NULL)) as status_pendaftaran FROM master";
        $result = $this->db->query($sql);
        return $result->row();
    }
    //Belum Diverifikasi
    public function hitungJumlahBelumVerifikasi()
    {
        $sql = "SELECT count(if(status_pendaftaran='Belum Diverifikasi', status_pendaftaran, NULL)) as status_pendaftaran FROM master";
        $result = $this->db->query($sql);
        return $result->row();
    }
    //Belum Ambil Beasiswa
    public function BelumAmbilBeasiswa()
    {
        $sql = "SELECT count(if(beasiswa='Belum Diambil', beasiswa, NULL)) as beasiswa FROM master";
        $result = $this->db->query($sql);
        return $result->row();
    }
    //Total Perjurusan
    public function totalTKRO()
    {
        $sql = "SELECT count(if(jurusan='Teknik Kendaraan Ringan Otomotif', jurusan, NULL)) as jurusan FROM master";
        $result = $this->db->query($sql);
        return $result->row();
    }
    public function totalTBSM()
    {
        $sql = "SELECT count(if(jurusan='Teknik Bisnis Sepeda Motor', jurusan, NULL)) as jurusan FROM master";
        $result = $this->db->query($sql);
        return $result->row();
    }
    public function totalAKL()
    {
        $sql = "SELECT count(if(jurusan='Akuntansi dan Keuangan Lembaga', jurusan, NULL)) as jurusan FROM master";
        $result = $this->db->query($sql);
        return $result->row();
    }
    public function totalOTKP()
    {
        $sql = "SELECT count(if(jurusan='Otomatisasi dan Tata Kelola Perkantoran', jurusan, NULL)) as jurusan FROM master";
        $result = $this->db->query($sql);
        return $result->row();
    }
    public function totalBDP()
    {
        $sql = "SELECT count(if(jurusan='Bisnis Daring dan Pemasaran', jurusan, NULL)) as jurusan FROM master";
        $result = $this->db->query($sql);
        return $result->row();
    }

    //sub menu
    public function getSubMenu()
    {
        $query = "SELECT `user_sub_menu`.*,`user_menu`.`menu`
                    FROM `user_sub_menu` JOIN `user_menu`
                    ON `user_sub_menu`.`menu_id`=`user_menu`.`id`
        ";
        return $this->db->query($query)->result_array();
    }

    public function hapusData($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('master');
    }

    public function getSiswaById($id)
    {
        return $this->db->get_where('master', ['id' => $id])->row_array();
    }

    public function editDataSiswa()
    {
        $data = [
            "nisn" => $this->input->post('nisn', true),
            "nama_siswa" => $this->input->post('nama_siswa', true),
            "jenis_kelamin" => $this->input->post('jenis_kelamin', true),
            "tempat_lahir" => $this->input->post('tempat_lahir', true),
            "tanggal_lahir" => $this->input->post('tanggal_lahir', true),
            "agama_siswa" => $this->input->post('agama_siswa', true),
            "status_keluarga" => $this->input->post('status_keluarga', true),
            "alamat_siswa" => $this->input->post('alamat_siswa', true),
            "hp_siswa" => $this->input->post('hp_siswa', true),
            "prestasi1" => $this->input->post('prestasi1', true),
            "tingkat1" => $this->input->post('tingkat1', true),
            "prestasi2" => $this->input->post('prestasi2', true),
            "tingkat2" => $this->input->post('tingkat2', true),
            "prestasi3" => $this->input->post('prestasi3', true),
            "tingkat3" => $this->input->post('tingkat3', true),
            "nama_ayah" => $this->input->post('nama_ayah', true),
            "pendidikan_ayah" => $this->input->post('pendidikan_ayah', true),
            "pekerjaan_ayah" => $this->input->post('pekerjaan_ayah', true),
            "penghasilan_ayah" => $this->input->post('penghasilan_ayah', true),
            "hp_ayah" => $this->input->post('hp_ayah', true),
            "nama_ibu" => $this->input->post('nama_ibu', true),
            "pendidikan_ibu" => $this->input->post('pendidikan_ibu', true),
            "pekerjaan_ibu" => $this->input->post('pekerjaan_ibu', true),
            "penghasilan_ibu" => $this->input->post('penghasilan_ibu', true),
            "hp_ibu" => $this->input->post('hp_ibu', true),
            "nama_wali" => $this->input->post('nama_wali', true),
            "pendidikan_wali" => $this->input->post('pendidikan_wali', true),
            "pekerjaan_wali" => $this->input->post('pekerjaan_wali', true),
            "penghasilan_wali" => $this->input->post('penghasilan_wali', true),
            "hp_wali" => $this->input->post('hp_wali', true),
            "nama_sekolah" => $this->input->post('nama_sekolah', true),
            "status_sekolah" => $this->input->post('status_sekolah', true),
            "alamat_sekolah" => $this->input->post('alamat_sekolah', true),
            "tahun_lulus" => $this->input->post('tahun_lulus', true),
            "nama_wali_kelas" => $this->input->post('nama_wali_kelas', true),
            "hp_wali_kelas" => $this->input->post('hp_wali_kelas', true),
            "jurusan" => $this->input->post('jurusan', true),
            "nama_mediator" => $this->input->post('nama_mediator', true),
            "alamat_mediator" => $this->input->post('alamat_mediator', true),
        ];

        $this->db->where('id', $this->input->post('id'));
        $this->db->update('master', $data);
    }
}
