$('.hapus').on('click', function (e) {
    e.preventDefault();
    href = $(this).attr('href');

    Swal.fire({
        title: 'Anda yakin?',
        text: "Menghapus Data Siswa",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Ya, Hapus!'
    }).then((result) => {
        if (result.value) {
            document.location.href = href;
        }
    })
})