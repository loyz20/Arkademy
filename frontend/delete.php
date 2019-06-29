<?php
    include "koneksi.php";

    $query = "DELETE FROM nama WHERE id ='$_POST[id]'";    
    mysqli_query($koneksi, $query)
    or die ("Gagal Perintah SQL".mysql_error());
 
?>