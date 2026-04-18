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
});