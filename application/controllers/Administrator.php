<?php
defined('BASEPATH') or exit('No direct script access allowed');

use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

class Administrator extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        is_logged_in();
        $this->load->model('Administrator_model');
    }

    public function index()
    {
        $data['user'] = $this->db->get_where('tbl_user', ['email' => $this->session->userdata('email')])->row_array();
        $data['title'] = 'Dasboard Admin';
        $data['siswa'] = $this->Administrator_model->getAllSiswa();
        $data['total_siswa'] = $this->Administrator_model->hitungJumlahSiswa();
        $data['total_verifikasi'] = $this->Administrator_model->hitungJumlahVerifikasi();
        $data['total_belum_verifikasi'] = $this->Administrator_model->hitungJumlahBelumVerifikasi();
        $data['total_belum_ambil_beasiswa'] = $this->Administrator_model->BelumAmbilBeasiswa();
        $data['tkro'] = $this->Administrator_model->totalTKRO();
        $data['tbsm'] = $this->Administrator_model->totalTBSM();
        $data['akl'] = $this->Administrator_model->totalAKL();
        $data['otkp'] = $this->Administrator_model->totalOTKP();
        $data['bdp'] = $this->Administrator_model->totalBDP();
        $this->load->view('administrator/layout/v_header', $data);
        $this->load->view('administrator/layout/v_nav', $data);
        $this->load->view('administrator/v_home', $data);
        $this->load->view('administrator/layout/v_footer');
    }

    public function Pendaftar()
    {
        $data['user'] = $this->db->get_where('tbl_user', ['email' => $this->session->userdata('email')])->row_array();
        $data['title'] = 'Data Pendaftar';
        $data['siswa'] = $this->Administrator_model->getAllSiswa();
        $this->load->view('administrator/layout/v_header', $data);
        $this->load->view('administrator/layout/v_nav', $data);
        $this->load->view('administrator/semua_siswa', $data);
        $this->load->view('administrator/layout/v_footer',);
    }

    public function diterima()
    {
        $data['user'] = $this->db->get_where('tbl_user', ['email' => $this->session->userdata('email')])->row_array();
        $data['title'] = 'Data Pendaftar Verifikasi';
        $data['siswa'] = $this->Administrator_model->getSiswaDiterima();
        $this->load->view('administrator/layout/v_header', $data);
        $this->load->view('administrator/layout/v_nav', $data);
        $this->load->view('administrator/diterima', $data);
        $this->load->view('administrator/layout/v_footer',);
    }
    public function belumdiverifikasi()
    {
        $data['user'] = $this->db->get_where('tbl_user', ['email' => $this->session->userdata('email')])->row_array();
        $data['title'] = 'Data Pendaftar Belum Verifikasi';
        $data['siswa'] = $this->Administrator_model->getSiswaBelumDiverifikasi();
        $this->load->view('administrator/layout/v_header', $data);
        $this->load->view('administrator/layout/v_nav', $data);
        $this->load->view('administrator/belum_verifikasi', $data);
        $this->load->view('administrator/layout/v_footer',);
    }
    public function beasiswa()
    {
        $data['user'] = $this->db->get_where('tbl_user', ['email' => $this->session->userdata('email')])->row_array();
        $data['title'] = 'Data Pendaftar Belum Verifikasi';
        $data['siswa'] = $this->Administrator_model->getSiswaBeasiswa();
        $this->load->view('administrator/layout/v_header', $data);
        $this->load->view('administrator/layout/v_nav', $data);
        $this->load->view('administrator/beasiswa', $data);
        $this->load->view('administrator/layout/v_footer',);
    }

    //Jurusan
    public function tkro()
    {
        $data['user'] = $this->db->get_where('tbl_user', ['email' => $this->session->userdata('email')])->row_array();
        $data['title'] = 'Data Pendaftar Jurusan TKRO';
        $data['siswa'] = $this->Administrator_model->getSiswaTKRO();
        $this->load->view('administrator/layout/v_header', $data);
        $this->load->view('administrator/layout/v_nav', $data);
        $this->load->view('administrator/tkro', $data);
        $this->load->view('administrator/layout/v_footer',);
    }
    public function tbsm()
    {
        $data['user'] = $this->db->get_where('tbl_user', ['email' => $this->session->userdata('email')])->row_array();
        $data['title'] = 'Data Pendaftar Jurusan TBSM';
        $data['siswa'] = $this->Administrator_model->getSiswaTBSM();
        $this->load->view('administrator/layout/v_header', $data);
        $this->load->view('administrator/layout/v_nav', $data);
        $this->load->view('administrator/tbsm', $data);
        $this->load->view('administrator/layout/v_footer',);
    }
    public function akl()
    {
        $data['user'] = $this->db->get_where('tbl_user', ['email' => $this->session->userdata('email')])->row_array();
        $data['title'] = 'Data Pendaftar Jurusan AKL';
        $data['siswa'] = $this->Administrator_model->getSiswaAKL();
        $this->load->view('administrator/layout/v_header', $data);
        $this->load->view('administrator/layout/v_nav', $data);
        $this->load->view('administrator/akl', $data);
        $this->load->view('administrator/layout/v_footer',);
    }
    public function otkp()
    {
        $data['user'] = $this->db->get_where('tbl_user', ['email' => $this->session->userdata('email')])->row_array();
        $data['title'] = 'Data Pendaftar Jurusan OTKP';
        $data['siswa'] = $this->Administrator_model->getSiswaOTKP();
        $this->load->view('administrator/layout/v_header', $data);
        $this->load->view('administrator/layout/v_nav', $data);
        $this->load->view('administrator/otkp', $data);
        $this->load->view('administrator/layout/v_footer',);
    }
    public function bdp()
    {
        $data['user'] = $this->db->get_where('tbl_user', ['email' => $this->session->userdata('email')])->row_array();
        $data['title'] = 'Data Pendaftar Jurusan BDP';
        $data['siswa'] = $this->Administrator_model->getSiswaBDP();
        $this->load->view('administrator/layout/v_header', $data);
        $this->load->view('administrator/layout/v_nav', $data);
        $this->load->view('administrator/bdp', $data);
        $this->load->view('administrator/layout/v_footer',);
    }


    public function Menu()
    {
        $data['user'] = $this->db->get_where('tbl_user', ['email' => $this->session->userdata('email')])->row_array();
        $data['title'] = 'Menu';
        $data['menu'] = $this->db->get('user_menu')->result_array();

        $this->form_validation->set_rules('menu', 'Menu', 'required');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('administrator/layout/v_header', $data);
            $this->load->view('administrator/layout/v_nav', $data);
            $this->load->view('administrator/menu', $data);
            $this->load->view('administrator/layout/v_footer',);
        } else {
            $this->db->insert('user_menu', ['menu' => $this->input->post('menu')]);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">New Menu Added!!</div>');
            redirect('administrator/menu');
        }
    }

    public function editMenu($id)
    {
        $data['user'] = $this->db->get_where('tbl_user', ['email' => $this->session->userdata('email')])->row_array();
        $data['title'] = 'Edit Menu';
        $data['menu'] = $this->Administrator_model->getMenuById($id);

        $this->form_validation->set_rules('menu', 'Menu', 'required');
        if ($this->form_validation->run() == FALSE) {
            $this->load->view('administrator/layout/v_header', $data);
            $this->load->view('administrator/layout/v_nav');
            $this->load->view('administrator/edit-menu');
            $this->load->view('administrator/layout/v_footer');
        } else {
            $this->Administrator_model->editDataMenu();
            $this->session->set_flashdata('flash', 'Data berhasil diupdate');
            redirect('administrator/menu');
        }
    }

    public function submenu()
    {
        $data['user'] = $this->db->get_where('tbl_user', ['email' => $this->session->userdata('email')])->row_array();
        $data['title'] = 'Sub Menu';
        $data['submenu'] = $this->Administrator_model->getSubMenu();
        $data['menu'] = $this->db->get('user_menu')->result_array();

        $this->form_validation->set_rules('title', 'Title', 'required');
        $this->form_validation->set_rules('menu_id', 'Menu', 'required');
        $this->form_validation->set_rules('url', 'URL', 'required');
        $this->form_validation->set_rules('icon', 'Icon', 'required');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('administrator/layout/v_header', $data);
            $this->load->view('administrator/layout/v_nav', $data);
            $this->load->view('administrator/submenu', $data);
            $this->load->view('administrator/layout/v_footer',);
        } else {
            $data = [
                'title' => $this->input->post('title'),
                'menu_id' => $this->input->post('menu_id'),
                'url' => $this->input->post('url'),
                'icon' => $this->input->post('icon'),
                'is_active' => $this->input->post('is_active')
            ];
            $this->db->insert('user_sub_menu', $data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">New Submenu Added!!</div>');
            redirect('administrator/submenu');
        }
    }

    public function level()
    {
        $data['title'] = 'Level User';
        $data['user'] = $this->db->get_where('tbl_user', ['email' => $this->session->userdata('email')])->row_array();

        $data['level'] = $this->db->get('user_level')->result_array();

        $this->load->view('administrator/layout/v_header', $data);
        $this->load->view('administrator/layout/v_nav', $data);
        $this->load->view('administrator/level', $data);
        $this->load->view('administrator/layout/v_footer',);
    }

    public function levelaccess($level_id)
    {
        $data['title'] = 'Level Acces';
        $data['user'] = $this->db->get_where('tbl_user', ['email' => $this->session->userdata('email')])->row_array();

        $data['level'] = $this->db->get('user_level', ['id' => $level_id])->row_array();

        $data['menu'] = $this->db->get('user_menu')->result_array();

        $this->load->view('administrator/layout/v_header', $data);
        $this->load->view('administrator/layout/v_nav', $data);
        $this->load->view('administrator/level-access', $data);
        $this->load->view('administrator/layout/v_footer',);
    }

    public function hapus($id)
    {
        $this->Administrator_model->hapusData($id);
        $this->session->set_flashdata('flash', 'Data Berhasil dihapus');
        redirect('administrator/pendaftar');
    }
    public function detail($id)
    {

        $data['user'] = $this->db->get_where('tbl_user', ['email' => $this->session->userdata('email')])->row_array();
        $data['title'] = 'Detail';
        $data['siswa'] = $this->Administrator_model->getSiswaById($id);
        $this->load->view('administrator/layout/v_header', $data);
        $this->load->view('administrator/layout/v_nav', $data);
        $this->load->view('administrator/detail', $data);
        $this->load->view('administrator/layout/v_footer',);
    }
    public function edit($id)
    {
        $data['user'] = $this->db->get_where('tbl_user', ['email' => $this->session->userdata('email')])->row_array();
        $data['title'] = 'Edit Pendaftaran';
        $data['siswa'] = $this->Administrator_model->getSiswaById($id);
        $data['jk'] = ['Laki-laki', 'Perempuan'];
        $data['agama'] = ['Islam', 'Kristen Katolik', 'Kristen Protestan', 'Hindu', 'Budha'];
        $data['status_keluarga'] = ['Anak Kandung', 'Anak Angkat'];
        $data['tingkat'] = ['', 'Kabupaten', 'Kecamatan', 'Provinsi', 'Nasional', 'Internasional'];
        $data['pendidikan'] = ['', 'Tidak sekolah', 'SD/MI', 'SMP/MTs', 'SMA/SMK/MA', 'Diploma', 'S1', 'S2', 'S3'];
        $data['pekerjaan'] = ['', 'Buruh', 'Tani', 'Ibu Rumah Tangga', 'Wiraswasta', 'PNS', 'Polri/TNI', 'Perangkat Desa', 'Nelayan', 'Lainnya'];
        $data['penghasilan'] = ['', '-500rb', '500-1jt', '1jt-3jt', '3jt-5jt', '5jt-10jt', '10jt+'];
        $data['status_sekolah'] = ['Negeri', 'Swasta'];
        $this->form_validation->set_rules('nisn', 'NISN', 'required|numeric|min_length[10]|max_length[10]');
        $this->form_validation->set_rules('nama_siswa', 'Nama Siswa', 'required');
        $this->form_validation->set_rules('tempat_lahir', 'Tempat Lahir', 'required');
        $this->form_validation->set_rules('tanggal_lahir', 'Tanggal Lahir', 'required');
        $this->form_validation->set_rules('alamat_siswa', 'Alamat Siswa', 'required');
        $this->form_validation->set_rules('nama_ayah', 'Nama Ayah', 'required');
        $this->form_validation->set_rules('nama_ibu', 'Nama Ibu', 'required');
        $this->form_validation->set_rules('nama_sekolah', 'Nama Sekolah', 'required');
        $this->form_validation->set_rules('alamat_sekolah', 'Alamat Sekolah', 'required');
        $this->form_validation->set_rules('tahun_lulus', 'Tahun Lulus', 'required');
        if ($this->form_validation->run() == FALSE) {
            $this->load->view('administrator/layout/v_header', $data);
            $this->load->view('administrator/layout/v_nav');
            $this->load->view('administrator/edit');
            $this->load->view('administrator/layout/v_footer');
        } else {
            $this->Administrator_model->editDataSiswa();
            $this->session->set_flashdata('flash', 'Data berhasil diupdate');
            redirect('administrator/pendaftar');
        }
    }

    //verivikasi
    public function verifikasi($id)
    {
        $data['user'] = $this->db->get_where('tbl_user', ['email' => $this->session->userdata('email')])->row_array();
        $data['title'] = 'Verfikasi Pendaftaran';
        $data['siswa'] = $this->Administrator_model->getSiswaById($id);
        $data['verifikasi'] = ['Belum Diverifikasi', 'Diterima', 'Tidak Diterima'];
        $this->form_validation->set_rules('nama_siswa', 'Nama Siswa', 'required');
        if ($this->form_validation->run() == FALSE) {
            $this->load->view('administrator/layout/v_header', $data);
            $this->load->view('administrator/layout/v_nav');
            $this->load->view('administrator/verifikasi');
            $this->load->view('administrator/layout/v_footer');
        } else {
            $this->Administrator_model->verifikasiDataSiswa();
            $this->session->set_flashdata('flash', 'Data berhasil diupdate');
            redirect('administrator/belumdiverifikasi');
        }
    }
    public function verifikasibeasiswa($id)
    {
        $data['user'] = $this->db->get_where('tbl_user', ['email' => $this->session->userdata('email')])->row_array();
        $data['title'] = 'Verfikasi Beasiswa';
        $data['siswa'] = $this->Administrator_model->getSiswaById($id);
        $data['beasiswa'] = ['Sudah Diambil', 'Belum Diambil'];
        $this->form_validation->set_rules('beasiswa', 'Beasiswa', 'required');
        if ($this->form_validation->run() == FALSE) {
            $this->load->view('administrator/layout/v_header', $data);
            $this->load->view('administrator/layout/v_nav');
            $this->load->view('administrator/ver_beasiswa');
            $this->load->view('administrator/layout/v_footer');
        } else {
            $this->Administrator_model->verifikasiBeasiswa();
            $this->session->set_flashdata('flash', 'Data berhasil diupdate');
            redirect('administrator/beasiswa');
        }
    }

    //BACKUP
    public function excel()
    {
        $data = $this->Administrator_model->getAllSiswa();

        $spreadsheet = new Spreadsheet();

        // Set document properties
        $spreadsheet->getProperties()->setCreator('Eko Cahyanto')
            ->setLastModifiedBy('Eko Cahyanto')
            ->setTitle('PPDB SMK Muhammadiyah Karangmojo')
            ->setSubject('PPDB SMK Muhammadiyah Karangmojo')
            ->setDescription('PPDB SMK Muhammadiyah Karangmojo')
            ->setKeywords('office 2007 openxml php')
            ->setCategory('PPDB');


        $sheet = $spreadsheet->getActiveSheet();
        $sheet->setCellValue('A1', 'PPDB SMK Muh Karangmojo')
            ->setCellValue('A3', 'NO')
            ->setCellValue('B3', 'NO PENDAFTARAN')
            ->setCellValue('C3', 'NAMA SISWA')
            ->setCellValue('D3', 'JENIS KELAMIN')
            ->setCellValue('E3', 'TEMPAT LAHIR')
            ->setCellValue('F3', 'TANGGAL LAHIR')
            ->setCellValue('G3', 'AGAMA SISWA')
            ->setCellValue('H3', 'STATUS KELUARGA')
            ->setCellValue('I3', 'ALAMAT SISWA')
            ->setCellValue('J3', 'HP SISWA')
            ->setCellValue('K3', 'PRESTASI #1')
            ->setCellValue('L3', 'TINGKAT PRES #1')
            ->setCellValue('M3', 'PRESTASI #2')
            ->setCellValue('N3', 'TINGKAT PRES #2')
            ->setCellValue('O3', 'PRESTASI #3')
            ->setCellValue('P3', 'TINGKAT PRES #3')
            ->setCellValue('Q3', 'NAMA AYAH')
            ->setCellValue('R3', 'PENDIDIKAN AYAH')
            ->setCellValue('S3', 'PEKERJAAN AYAH')
            ->setCellValue('T3', 'PENGHASILAN AYAH')
            ->setCellValue('U3', 'HP AYAH')
            ->setCellValue('V3', 'NAMA IBU')
            ->setCellValue('W3', 'PENDIDIKAN IBU')
            ->setCellValue('X3', 'PEKERJAAN IBU')
            ->setCellValue('Y3', 'PENGHASILAN IBU')
            ->setCellValue('Z3', 'HP IBU')
            ->setCellValue('AA3', 'NAMA WALI')
            ->setCellValue('AB3', 'PENDIDIKAN WALI')
            ->setCellValue('AC3', 'PEKERJAAN WALI')
            ->setCellValue('AD3', 'PENGHASILAN WALI')
            ->setCellValue('AE3', 'HP WALI')
            ->setCellValue('AF3', 'NAMA SEKOLAH')
            ->setCellValue('AG3', 'STATUS SEKOLAH')
            ->setCellValue('AH3', 'ALAMAT SEKOLAH')
            ->setCellValue('AI3', 'TAHUN LULUS')
            ->setCellValue('AJ3', 'NAMA WALI KELAS')
            ->setCellValue('AK3', 'HP WALI KELAS')
            ->setCellValue('AL3', 'JURUSAN')
            ->setCellValue('AM3', 'NAMA MEDIATOR')
            ->setCellValue('AN3', 'ALAMAT MEDIATOR')
            ->setCellValue('AO3', 'STATUS PENDAFTARAN')
            ->setCellValue('AP3', 'TANGGAL PENDAFTARAN')
            ->setCellValue('AQ3', 'BEASISWA');


        $i = 4;
        $no = 1;
        foreach ($data as $data) {

            $sheet = $spreadsheet->setActiveSheetIndex(0);
            $sheet->setCellValue('A' . $i, $no)
                ->setCellValue('B' . $i, $data['id'] . '/PAN.PPDB/2020')
                ->setCellValue('C' . $i, $data['nama_siswa'])
                ->setCellValue('D' . $i, $data['jenis_kelamin'])
                ->setCellValue('E' . $i, $data['tempat_lahir'])
                ->setCellValue('F' . $i, $data['tanggal_lahir'])
                ->setCellValue('G' . $i, $data['agama_siswa'])
                ->setCellValue('H' . $i, $data['status_keluarga'])
                ->setCellValue('I' . $i, $data['alamat_siswa'])
                ->setCellValue('J' . $i, $data['hp_siswa'])
                ->setCellValue('K' . $i, $data['prestasi1'])
                ->setCellValue('L' . $i, $data['tingkat1'])
                ->setCellValue('M' . $i, $data['prestasi2'])
                ->setCellValue('N' . $i, $data['tingkat2'])
                ->setCellValue('O' . $i, $data['prestasi3'])
                ->setCellValue('P' . $i, $data['tingkat3'])
                ->setCellValue('Q' . $i, $data['nama_ayah'])
                ->setCellValue('R' . $i, $data['pendidikan_ayah'])
                ->setCellValue('S' . $i, $data['pekerjaan_ayah'])
                ->setCellValue('T' . $i, $data['penghasilan_ayah'])
                ->setCellValue('U' . $i, $data['hp_ayah'])
                ->setCellValue('V' . $i, $data['nama_ibu'])
                ->setCellValue('W' . $i, $data['pendidikan_ibu'])
                ->setCellValue('X' . $i, $data['pekerjaan_ibu'])
                ->setCellValue('Y' . $i, $data['penghasilan_ibu'])
                ->setCellValue('Z' . $i, $data['hp_ibu'])
                ->setCellValue('AA' . $i, $data['nama_wali'])
                ->setCellValue('AB' . $i, $data['pendidikan_wali'])
                ->setCellValue('AC' . $i, $data['pekerjaan_wali'])
                ->setCellValue('AD' . $i, $data['penghasilan_wali'])
                ->setCellValue('AE' . $i, $data['hp_wali'])
                ->setCellValue('AF' . $i, $data['nama_sekolah'])
                ->setCellValue('AG' . $i, $data['status_sekolah'])
                ->setCellValue('AH' . $i, $data['alamat_sekolah'])
                ->setCellValue('AI' . $i, $data['tahun_lulus'])
                ->setCellValue('AJ' . $i, $data['nama_wali_kelas'])
                ->setCellValue('AK' . $i, $data['hp_wali_kelas'])
                ->setCellValue('AL' . $i, $data['jurusan'])
                ->setCellValue('AM' . $i, $data['nama_mediator'])
                ->setCellValue('AN' . $i, $data['alamat_mediator'])
                ->setCellValue('AO' . $i, $data['status_pendaftaran'])
                ->setCellValue('AP' . $i, $data['tanggal_pendaftaran'])
                ->setCellValue('AQ' . $i, $data['beasiswa']);
            $i++;
            $no++;
        }

        $writer = new Xlsx($spreadsheet);

        $filename = 'backup-ppdb';

        header('Content-Type: application/vnd.ms-excel');
        header('Content-Disposition: attachment;filename="' . $filename . '.xlsx"');
        header('Cache-Control: max-age=0');

        $writer->save('php://output');
    }
}
