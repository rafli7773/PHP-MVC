<?php

class Siswa_model
{
    public function __construct()
    {
        $this->db = new Database;
    }

    public function getAllSiswa()
    {
        $this->db->query("SELECT * FROM siswa ORDER BY id DESC");
        return $this->db->resultSet();
    }

    public function getSiswaById($id)
    {
        $this->db->query("SELECT * FROM siswa WHERE id = :id");
        $this->db->bind("id", $id);
        return $this->db->single();
    }

    public function hapusSiswa($id)
    {
        $this->db->query("DELETE FROM siswa WHERE id = :id");
        $this->db->bind("id", $id);
        return $this->db->rowCount();
    }

    public function tambahSiswa($data)
    {
        $this->db->query("INSERT INTO siswa VALUES('', :nama, :nik, :kelas, :jurusan)");
        $this->db->bind("nama", $data['nama']);
        $this->db->bind("nik", $data['nik']);
        $this->db->bind("kelas", $data['kelas']);
        $this->db->bind("jurusan", $data['jurusan']);
        return $this->db->rowCount();
    }

    public function ubahSiswa($data)
    {
        $this->db->query("UPDATE siswa SET nama = :nama, nik = :nik, kelas = :kelas, jurusan = :jurusan WHERE id = :id");
        $this->db->bind("id", $data['id']);
        $this->db->bind("nama", $data['nama']);
        $this->db->bind("nik", $data['nik']);
        $this->db->bind("kelas", $data['kelas']);
        $this->db->bind("jurusan", $data['jurusan']);
        return $this->db->rowCount();
    }

    public function cariSiswa()
    {
        $keyword = $_POST['keyword'];
        $this->db->query("SELECT * FROM siswa WHERE nama LIKE :keyword");
        $this->db->bind("keyword", "%$keyword%");
        return $this->db->resultSet();
    }
}
