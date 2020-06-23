<?php
class Model_umum extends CI_Model
{
    public function tambahSiswa()
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
            "status_pendaftaran" => 'Belum Diverifikasi',
            "tanggal_pendaftaran" => date("Y-m-d H:i:s"),
            "beasiswa" => 'Belum Diambil',
        ];

        $this->db->insert('master', $data);
    }
    public function getSiswaBy($nisn)
    {
        return $this->db->get_where('master', ['nisn' => $nisn])->row_array();
    }
    public function getSurat($nisn)
    {
        return $this->db->get_where('surat_pernyataan', ['nisn' => $nisn])->row_array();
    }

    public function tambahPernyataan()
    {
        $data = [
            "nisn" => $this->input->post('nisn', true),
            "nama_siswa" => $this->input->post('nama_siswa', true),
            "jenis_kelamin" => $this->input->post('jenis_kelamin', true),
            "nama_sekolah" => $this->input->post('nama_sekolah', true),
            "hp_siswa" => $this->input->post('hp_siswa', true),
            "nama_pernyataan" => $this->input->post('nama_pernyataan', true),
            "jenis_kelamin_pernyataan" => $this->input->post('jenis_kelamin_pernyataan', true),
            "alamat_pernyataan" => $this->input->post('alamat_pernyataan', true),
            "pekerjaan_pernyataan" => $this->input->post('pekerjaan_pernyataan', true),
            "hp_pernyataan" => $this->input->post('hp_pernyataan', true),
        ];
        $this->db->insert('surat_pernyataan', $data);
    }
}
