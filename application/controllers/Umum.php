<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Umum extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->model('Model_umum');
    }

    public function index()
    {
        $data['title'] = 'PPDB SMK Muh Karangmojo';
        $this->load->view('home/layout/header', $data);
        $this->load->view('home/layout/navbar');
        $this->load->view('home/index.php');
        $this->load->view('home/layout/footer');
    }

    public function daftar()
    {
        $data['title'] = 'Form Pendaftaran';
        $data['jk'] = ['Laki-laki', 'Perempuan'];
        $data['agama'] = ['Islam', 'Kristen Katolik', 'Kristen Protestan', 'Hindu', 'Budha'];
        $data['status_keluarga'] = ['', 'Anak Kandung', 'Anak Angkat'];
        $data['tingkat'] = ['', 'Kabupaten', 'Kecamatan', 'Provinsi', 'Nasional', 'Internasional'];
        $data['pendidikan'] = ['', 'Tidak sekolah', 'SD/MI', 'SMP/MTs', 'SMA/SMK/MA', 'Diploma', 'S1', 'S2', 'S3'];
        $data['pekerjaan'] = ['', 'Buruh', 'Tani', 'Ibu Rumah Tangga', 'Wiraswasta', 'PNS', 'Polri/TNI', 'Perangkat Desa', 'Nelayan', 'Lainnya'];
        $data['penghasilan'] = ['', '-500rb', '500-1jt', '1jt-3jt', '3jt-5jt', '5jt-10jt', '10jt+'];
        $data['status_sekolah'] = ['', 'Negeri', 'Swasta'];
        $data['jurusan'] = ['', 'Teknik Kendaraan Ringan Otomotif', 'Teknik Bisnis Sepeda Motor', 'Akuntansi dan Keuangan Lembaga', 'Otomatisasi dan Tata Kelola Perkantoran', 'Bisnis Daring dan Pemasaran'];
        $this->form_validation->set_rules('nisn', 'NISN', 'required|numeric|min_length[10]|max_length[10]|is_unique[master.nisn]');
        $this->form_validation->set_rules('nama_siswa', 'Nama Siswa', 'required');
        $this->form_validation->set_rules('tempat_lahir', 'Tempat Lahir', 'required');
        $this->form_validation->set_rules('tanggal_lahir', 'Tanggal Lahir', 'required');
        $this->form_validation->set_rules('status_keluarga', 'Status Keluarga', 'required');
        $this->form_validation->set_rules('alamat_siswa', 'Alamat Siswa', 'required');
        $this->form_validation->set_rules('hp_siswa', 'HP Siswa', 'numeric|min_length[10]|max_length[13]');
        $this->form_validation->set_rules('nama_ayah', 'Nama Ayah', 'required');
        $this->form_validation->set_rules('hp_ayah', 'HP Ayah', 'numeric|min_length[10]|max_length[13]');
        $this->form_validation->set_rules('nama_ibu', 'Nama Ibu', 'required');
        $this->form_validation->set_rules('hp_ibu', 'HP Ibu', 'numeric|min_length[10]|max_length[13]');
        $this->form_validation->set_rules('hp_wali', 'HP Wali', 'numeric|min_length[10]|max_length[13]');
        $this->form_validation->set_rules('nama_sekolah', 'Nama Sekolah', 'required');
        $this->form_validation->set_rules('alamat_sekolah', 'Alamat Sekolah', 'required');
        $this->form_validation->set_rules('tahun_lulus', 'Tahun Lulus', 'required');
        if ($this->form_validation->run() == FALSE) {
            $this->load->view('home/layout/header', $data);
            $this->load->view('home/layout/navbar');
            $this->load->view('home/daftar', $data);
            $this->load->view('home/layout/footer');
        } else {
            $this->Model_umum->tambahSiswa();
            $this->session->set_flashdata('flash', 'Selamat Anda Telah Menyelesaikan Tahap Pendaftaran');
            redirect('');
        }
    }

    public function buktiPendaftaran()
    {
        $data['title'] = 'Form Pendaftaran';
        $this->load->view('home/layout/header', $data);
        $this->load->view('home/layout/navbar');
        $this->load->view('home/bukti-pendaftaran');
        $this->load->view('home/layout/footer');
    }

    public function cetakFormulir()
    {

        $nisn = $this->input->get('nisn');
        $data['siswa'] = $this->Model_umum->getSiswaBy($nisn);
        $this->load->view('home/formulir', $data);


        $mpdf = new \Mpdf\Mpdf(['mode' => 'utf-8', 'format' => 'Folio-P']);

        $html = $this->load->view('home/formulir', [], true);
        $mpdf->WriteHTML($html);
        $mpdf->Output('FORMULIR PPDB.pdf', \Mpdf\Output\Destination::INLINE);
    }

    public function isipernyataan()
    {
        $data['title'] = 'Form Surat Pernyataan';
        $data['jk'] = ['Laki-laki', 'Perempuan'];
        $data['agama'] = ['Islam', 'Kristen Katolik', 'Kristen Protestan', 'Hindu', 'Budha'];
        $data['status_keluarga'] = ['', 'Anak Kandung', 'Anak Angkat'];
        $data['tingkat'] = ['', 'Kabupaten', 'Kecamatan', 'Provinsi', 'Nasional', 'Internasional'];
        $data['pendidikan'] = ['', 'Tidak sekolah', 'SD/MI', 'SMP/MTs', 'SMA/SMK/MA', 'Diploma', 'S1', 'S2', 'S3'];
        $data['pekerjaan'] = ['', 'Buruh', 'Tani', 'Ibu Rumah Tangga', 'Wiraswasta', 'PNS', 'Polri/TNI', 'Perangkat Desa', 'Nelayan', 'Lainnya'];
        $data['penghasilan'] = ['', '-500rb', '500-1jt', '1jt-3jt', '3jt-5jt', '5jt-10jt', '10jt+'];
        $data['status_sekolah'] = ['', 'Negeri', 'Swasta'];
        $this->form_validation->set_rules('nisn', 'NISN', 'required|numeric|min_length[10]|max_length[10]|is_unique[master.nisn]');
        $this->form_validation->set_rules('nama_siswa', 'Nama Siswa', 'required');
        $this->form_validation->set_rules('jenis_kelamin', 'Jenis Kelamin Siswa', 'required');
        $this->form_validation->set_rules('nama_sekolah', 'Nama Sekolah', 'required');
        $this->form_validation->set_rules('hp_siswa', 'HP Siswa', 'numeric|min_length[10]|max_length[13]');
        $this->form_validation->set_rules('nama_pernyataan', 'Nama Pernyataan', 'required');
        $this->form_validation->set_rules('jenis_kelamin_pernyataan', 'Jenis Kelamin Pernyataan', 'required');
        $this->form_validation->set_rules('alamat_pernyataan', 'Alamat', 'required');
        $this->form_validation->set_rules('pekerjaan_pernyataan', 'Pekerjaan', 'required');
        $this->form_validation->set_rules('hp_pernyataan', 'Nomor HP', 'required|numeric|min_length[10]|max_length[13]');
        if ($this->form_validation->run() == FALSE) {
            $this->load->view('home/layout/header', $data);
            $this->load->view('home/layout/navbar');
            $this->load->view('home/isi-pernyataan', $data);
            $this->load->view('home/layout/footer');
        } else {
            $this->Model_umum->tambahPernyataan();
            $this->session->set_flashdata('flash', 'Terima Kasih data berhasil di input...');
            redirect('umum/cetakPernyataan');
        }
    }

    public function suratPernyataan()
    {
        $data['title'] = 'Cetak Surat Pernyataan';
        $this->load->view('home/layout/header', $data);
        $this->load->view('home/layout/navbar');
        $this->load->view('home/cetak-pernyataan');
        $this->load->view('home/layout/footer');
    }
    public function cetakPernyataan()
    {

        $nisn = $this->input->get('nisn');
        $data['siswa'] = $this->Model_umum->getSurat($nisn);
        $this->load->view('home/surat-pernyataan', $data);


        $mpdf = new \Mpdf\Mpdf(['mode' => 'utf-8', 'format' => 'A4-P']);

        $html = $this->load->view('home/surat-pernyataan', [], true);
        $mpdf->WriteHTML($html);
        $mpdf->Output('FORMULIR PPDB.pdf', \Mpdf\Output\Destination::INLINE);
    }
}
