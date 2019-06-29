<table class="table table-bordered">
    <thead class="thead-light">
        <tr>
            <th scope="col">Name</th>
            <th scope="col">Hobby</th>
            <th scope="col">Category</th>
            <th scope="col">Action</th>
        </tr>
    </thead>
    <tbody>
        <?php
            include "koneksi.php";
            $no = 1;
            $query = "SELECT nama.id, nama.name as Name, hobi.name as Hobby, kategori.name as Category FROM nama 
            LEFT JOIN hobi on nama.id_hobby=hobi.id LEFT JOIN kategori on nama.id_category=kategori.id";
            $data = mysqli_query($koneksi, $query);
            while ($row = mysqli_fetch_array($data))
            {
        ?>
        <tr>
            <td>
                <?php echo $row['Name']; ?>
            </td>
            <td>
                <?php echo $row['Hobby']; ?>
            </td>
            <td>
                <?php echo $row['Category']; ?>
            </td>
            <td>
                <a href="#" id="hapus" data-id="<?php echo $row['id']; ?>">
                    <img src="https://cdn2.iconfinder.com/data/icons/e-business-helper/240/627249-delete3-512.png" width="23" height="20">
                </a>
                <a href="#" id="edit" data-id="<?php echo $row['id']; ?>">
                    <img src="https://image.flaticon.com/icons/svg/61/61456.svg" width="23" height="18">
                </a>
            </td>
        </tr>
        <?php
            }
        ?>
    </tbody>
</table>