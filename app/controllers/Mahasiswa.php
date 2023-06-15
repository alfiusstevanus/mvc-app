<?php
class Mahasiswa extends Controller
{
    public function index()
    {
        $data['judul'] = 'Daftar mahasiswa';
        $data['mhs'] = $this->model('Mahasiswa_Model')->getAllMhs();
        $this->view('layouts/header', $data);
        $this->view('mahasiswa/index', $data);
        $this->view('layouts/footer');
    }
    public function detail($id)
    {
        $data['judul'] = 'Detail mahasiswa';
        $data['mhs'] = $this->model('Mahasiswa_Model')->getMhsById($id);
        $this->view('layouts/header', $data);
        $this->view('mahasiswa/detail', $data);
        $this->view('layouts/footer');
    }
    public function tambah()
    {
        if ($this->model('Mahasiswa_Model')->tambahDataMahasiswa($_POST) > 0) {
            Flasher::setFlash('berhasil', 'ditambahkan', 'success');
            header('location: ' . BASEURL . '/mahasiswa');
            exit;
        } else {
            Flasher::setFlash('gagal', 'ditambahkan', 'danger');
            header('location: ' . BASEURL . '/mahasiswa');
            exit;
        }
    }
    public function hapus($id)
    {
        if ($this->model('Mahasiswa_Model')->hapusDataMahasiswa($id) > 0) {
            Flasher::setFlash('berhasil', 'dihapus', 'success');
            header('location: ' . BASEURL . '/mahasiswa');
            exit;
        } else {
            Flasher::setFlash('gagal', 'dihapus', 'danger');
            header('location: ' . BASEURL . '/mahasiswa');
            exit;
        }
    }
    public function getUbah()
    {
        echo json_encode($this->model('Mahasiswa_Model')->getMhsById($_POST['id']));
    }
    public function ubah()
    {
        if ($this->model('Mahasiswa_Model')->ubahDataMahasiswa($_POST) > 0) {
            Flasher::setFlash('berhasil', 'diubah', 'success');
            header('location: ' . BASEURL . '/mahasiswa');
            exit;
        } else {
            Flasher::setFlash('gagal', 'diubah', 'danger');
            header('location: ' . BASEURL . '/mahasiswa');
            exit;
        }
    }

    public function cari()
    {
        $data['judul'] = 'Daftar mahasiswa';
        $data['mhs'] = $this->model('Mahasiswa_Model')->cariMhs($_POST['keyword']);
        $this->view('layouts/header', $data);
        $this->view('mahasiswa/index', $data);
        $this->view('layouts/footer');
    }
}
