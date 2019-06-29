<?php
    include "koneksi.php";
    
    $nama = $_POST['nama'];
    $kategori = $_POST['kategori'];
    $hobi = $_POST['hobi'];

    $query = "insert INTO nama SET name = '$nama', id_hobby = '$kategori', id_category = '$hobi'";
    mysqli_query($koneksi, $query)
    or die ("Gagal Perintah SQL".mysql_error());
    
    $data['hasil'] = 'sukses';
       
    echo json_encode($data);
 
?>