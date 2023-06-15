<?php
class About extends Controller
{
    public function index($nama = 'Alfius', $pekerjaan = 'Mahasiswa', $umur = 20)
    {
        $data['nama'] = $nama;
        $data['pekerjaan'] = $pekerjaan;
        $data['umur'] = $umur;
        $data['judul'] = 'About Me';

        $this->view('layouts/header', $data);
        $this->view('about/index', $data);
        $this->view('layouts/footer');
    }
    public function page()
    {
        $data['judul'] = 'Pages';
        $this->view('layouts/header', $data);
        $this->view('about/page');
        $this->view('layouts/footer');
    }
}
