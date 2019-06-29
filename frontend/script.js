$(document).ready(function(){
    var data = "data.php";
    $('#data-biodata').load(data);

    var hobi = "hobi.php";
    $('#data-hobi').load(hobi);

    $("#form-tambah").submit(function(e) {
        e.preventDefault();

        var dataform = $("#form-tambah").serialize();
        $.ajax({
            url: "save.php",
            type: "post",
            data: dataform,
            success: function(result) {
                var hasil = JSON.parse(result);
                if (hasil.hasil == "sukses") { 
                    $('#modal-tambah').modal('hide');
                    $("#nama").val('');
                    $("#kategori").val('');
                    $("#hobi").val('');
                    $('#data-biodata').load(data);
                }
            }
        });
    });
   
    $(document).on('click','#edit',function(e){
        e.preventDefault();
        $("#modal-edit").modal('show');
        $.post('edit.php',
            {id:$(this).attr('data-id')},
            function(html){
                $("#data-edit").html(html);
            }  
        );
    });
   
   
    $(document).on('click','#hapus',function(e){
        e.preventDefault();
        $.post('delete.php',
            {id:$(this).attr('data-id')},
            function(html){
                $('#data-biodata').load(data);           
            }  
        );
    });

    $(document).ready(function() {
        $('#kategori').change(function() { // Jika Select Box id provinsi dipilih
            var kategori = $(this).val(); // Ciptakan variabel provinsi
            $.ajax({
                    type: 'POST', // Metode pengiriman data menggunakan POST
                url: 'hobi.php', // File yang akan memproses data
                data: 'id_kategori=' + kategori, // Data yang akan dikirim ke file pemroses
                success: function(response) { // Jika berhasil
                    $('#hobi').html(response); // Berikan hasil ke id kota
                    }
            });
        });
    });
});