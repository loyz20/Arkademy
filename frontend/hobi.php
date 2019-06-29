<?php
    include "koneksi.php";

    echo $_POST['id_kategori'];

    echo "<option selected>- Pilih Hobi -</option>";
    $query = "SELECT * FROM hobi where id_category = $_POST[id_kategori]";
    $data = mysqli_query($koneksi, $query);

    while($row=mysqli_fetch_array($data)){
        echo "<option value='$row[id]'>$row[name]</option>";
    }
?>