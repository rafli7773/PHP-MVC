<?php

class Siswa extends Controller
{
    public function index()
    {
        $data['judul'] = "Daftar Siswa";
        $data['siswa'] = $this->model("Siswa_model")->getAllSiswa();

        $this->view("templates/header", $data);
        $this->view("siswa/index", $data);
        $this->view("templates/footer");
    }

    public function detail($id)
    {
        $data['judul'] = "Detail Siswa";
        $data['siswa'] = $this->model("Siswa_model")->getSiswaById($id);

        $this->view("templates/header", $data);
        $this->view("siswa/detail", $data);
        $this->view("templates/footer");
    }

    public function hapus($id)
    {
        if ($this->model("Siswa_model")->hapusSiswa($id)) {
            Flasher::setFlash("success", "Berhasil", "DiHapus");
            header("location: " . BASEURL . "/siswa");
        }
    }

    public function tambah()
    {
        if ($this->model("Siswa_model")->tambahSiswa($_POST) > 0) {
            Flasher::setFlash("success", "Berhasil", "Di Tambahkan");
            header("location: " . BASEURL . "/siswa");
        }
    }

    public function getUbah()
    {
        echo json_encode($this->model("Siswa_model")->getSiswaById($_POST['id']));
    }

    public function ubah()
    {
        if ($this->model("Siswa_model")->ubahSiswa($_POST) > 0) {
            Flasher::setFlash("success", "Berhasil", "Di Ubah");
            header("location: " . BASEURL . "/siswa");
        }
    }

    public function cari()
    {
        $data['judul'] = "Daftar Siswa";
        $data['siswa'] = $this->model("Siswa_model")->cariSiswa();

        $this->view("templates/header", $data);
        $this->view("siswa/index", $data);
        $this->view("templates/footer");
    }
}
