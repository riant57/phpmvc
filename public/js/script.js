//console.log('ok');
$(function(){
    $('.tombolTambahData').on('click', function(){
        $('#judulModal').html('Tambah Data Mahasiswa');
        // CSS selector
        $('.modal-footer button[type=submit]').html('Tambah Data');
        $('.form-wrapper form').attr('action','http://localhost/phpmvc/public/Mahasiswa/tambah');

        $('#id').val("");
        $('#nama').val("");
        $('#nrp').val("");
        $('#email').val("");
        $('#jurusan').val("");
    });
    $('.tampilModalUbah').on('click', function(){
        $('#judulModal').html('Ubah Data Mahasiswa');
        $('.modal-footer button[type=submit]').html('Ubah Data');
        $('.form-wrapper form').attr('action','http://localhost/phpmvc/public/Mahasiswa/ubah');

        const id = $(this).data('id');
        
        $.ajax({
            url:'http://localhost/phpmvc/public/Mahasiswa/getUbah',
            data:{id : id},
            method:'post',
            dataType:'json',
            success: function(data){
                //console.log(data);
                $('#id').val(data.id);
                $('#nama').val(data.nama);
                $('#nrp').val(data.nrp);
                $('#email').val(data.email);
                $('#jurusan').val(data.jurusan);
            }
        });

    });

    

});