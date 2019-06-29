<?php
    include "koneksi.php";
    $no = 1;
    $query = "SELECT nama.id, nama.name as Name, hobi.name as Hobby, kategori.name as Category FROM nama 
    LEFT JOIN hobi on nama.id_hobby=hobi.id LEFT JOIN kategori on nama.id_category=kategori.id WHERE nama.id = $_POST[id]";
    $row = mysqli_fetch_array ($data);
?>
<form role="form" id="form-edit" method="post" action="update.php">
    <div class="form-group">
        <label>Nama</label>
        <input type="hidden" name="id" value="<?php echo $row['id'] ; ?>">
        <input class="form-control" name="nama" value="<?php echo $row['Name'] ; ?>">
        <p style="color:red" id="error_edit_nama"></p>
    </div>
    
   
</form>