<?php

class Flasher
{
    public static function setFlash($tipe, $aksi, $pesan)
    {
        $_SESSION['flash'] = [
            "pesan" => $pesan,
            "aksi" => $aksi,
            "tipe" => $tipe
        ];
    }

    public static function flash()
    {
        if (isset($_SESSION['flash'])) {
            echo '
        <div class="alert alert-' . $_SESSION['flash']['tipe'] . ' alert-dismissible fade show" role="alert">Data Siswa
            <strong>' . $_SESSION['flash']['aksi'] . '</strong> ' . $_SESSION['flash']['pesan'] . '
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
                </button>
        </div>';
        }
        unset($_SESSION['flash']);
    }
}
