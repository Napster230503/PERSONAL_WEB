$(document).ready(function() {
    console.log("JS Experience Berhasil Dimuat!");

    // 1. Inisialisasi DataTable
    $('#tableExperience').DataTable({
        "paging": true,
        "lengthChange": true,
        "searching": true,
        "ordering": true,
        "info": true,
        "autoWidth": false,
        "responsive": true,
    });

    // 2. Alert Sukses SweetAlert2
    const successMsg = $('.flash-data').data('success');
    if (successMsg) {
        console.log("Pesan Sukses Ditemukan: " + successMsg);
        Swal.fire({
            title: 'Success!!',
            text: successMsg,
            icon: 'success',
            confirmButtonText: 'Oke'
        });
    }

    $('.btn-hapus').on('click', function(e) {
        e.preventDefault(); // Hentikan link agar tidak langsung pindah halaman
        const href = $(this).attr('href');

        Swal.fire({
            title: 'Apakah Anda yakin?',
            text: "Data pengalaman kerja ini akan dihapus secara permanen!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#28a745',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Ya, Hapus!',
            cancelButtonText: 'Batal'
        }).then((result) => {
            if (result.isConfirmed) {
                document.location.href = href;
            }
        });
    });

    function handleAction(select) {
        const action = select.value;
        const option = select.options[select.selectedIndex];

        if (action === 'edit') {
            // 1. Ambil data dari atribut data-
            const id = option.getAttribute('data-id');
            const mulai = option.getAttribute('data-mulai');
            const akhir = option.getAttribute('data-akhir');
            const instansi = option.getAttribute('data-instansi');
            const jabatan = option.getAttribute('data-jabatan');
            const deskripsi = option.getAttribute('data-deskripsi');

            // 2. Masukkan ke dalam form
            $('#id_experience').val(id);
            $('#tgl_mulai').val(mulai);
            $('#tgl_akhir').val(akhir);
            $('#nama_instansi').val(instansi);
            $('#jabatan').val(jabatan);
            $('#deskripsi').val(deskripsi);

            // 3. Ubah tampilan tombol & Judul Card (Optional biar user tahu sedang mode edit)
            $('.card-title').last().text('Edit Experience');
            $('#btnSubmit').text('Update Data').removeClass('btn-success').addClass('btn-primary');
            
            // 4. Reset dropdown ke default
            $(select).val("");

        } else if (action !== "") {
            // Jika action adalah URL delete, jalankan konfirmasi hapus
            konfirmasiHapus(action);
        }
    }

    function resetForm() {
        $('#id_experience').val('');
        $('.card-title').last().text('Form Experience & Achievement');
        $('#btnSubmit').text('Submit').removeClass('btn-primary').addClass('btn-success');
    }
});