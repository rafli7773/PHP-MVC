$(function () {
    $('.tampilModalTambah').on('click', function () {
        $('.modal-header').html("Tambah Data Siswa");
        $('.modal-footer button[type=submit]').html("Tambah");
        $('.modal-body form').attr("action", "http://localhost/mvc/public/siswa/tambah");
    })

    $('.tampilModalUbah').on('click', function () {
        $('.modal-header').html("Ubah Data Siswa");
        $('.modal-footer button[type=submit]').html("Ubah");
        $('.modal-body form').attr("action", "http://localhost/mvc/public/siswa/ubah");
        const id = $(this).data('id');

        $.ajax({
            url: "http://localhost/mvc/public/siswa/getUbah",
            data: {
                id: id
            },
            method: "POST",
            dataType: "JSON",
            success: function (data) {
                $('#id').val(data.id)
                $('#nama').val(data.nama)
                $('#nik').val(data.nik)
                $('#kelas').val(data.kelas)
                $('#jurusan').val(data.jurusan)
            }
        })
    })
})