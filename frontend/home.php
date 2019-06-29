<html>
    <head>
        <title>Seleksi Bootcamp</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    </head>
    <body>
        <nav class="navbar navbar-light bg-light">
            <a class="navbar-brand" href="#">
              <img src="https://digitalamoeba.id/wp-content/uploads/Picture5-2.png" width="60" height="30" class="d-inline-block align-top" alt="">
              ARKADEMY BOOTCAMP
            </a>
          </nav>
          <div class="container" style="margin-top:8%">
          <div class="row">
                <div class="col-md-8 offset-md-2">
                    <div class="float-right" style="margin-bottom:20px">
                        <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#addmodal">ADD</button>
                    </div>
                    <div id="data-biodata">
                    </div>
                </div>
            </div>
          </div>
    </body>
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="script.js"></script>
</html>

<!-- Add Data -->
<div class="modal fade" id="addmodal" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
        <form role="form" id="form-tambah" method="post" action="save.php">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Add Data</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="form-group">
                    <label>Nama</label>
                    <input class="form-control" id="nama" name="nama">
                    <p style="color:red" id="error_nama"></p>
                </div>
                <div class="input-group mb-3">
                    <select class="custom-select" id="kategori" name="kategori">
                    <option selected>- Pilih Kategori -</option>
                    <?php 
                        include "koneksi.php";
                        $query = "SELECT * FROM kategori";
                        $data = mysqli_query($koneksi, $query);

                        while($row=mysqli_fetch_array($data)){
                            echo "<option value='$row[id]'>$row[name]</option>";
                        }
                    ?>
                    </select>
                </div>
                <div class="input-group mb-3">
                    <select class="custom-select" id="hobi" name="hobi">
                        <option selected>- Pilih Hobi -</option>
                    </select>
                </div>
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-warning">ADD</button>
            </div>
        </form>
    </div>
  </div>
</div>

<!-- Edit Data -->
<div class="modal fade" id="editmodal" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
        <form role="form" id="form-tambah" method="post" action="input.php">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Add Data</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="form-group">
                    <label>Nama</label>
                    <input class="form-control" id="nama" name="nama">
                    <p style="color:red" id="error_nama"></p>
                </div>
                <div class="input-group mb-3">
                    <select class="custom-select" id="kategori">
                    <option selected>- Pilih Kategori -</option>
                    <?php 
                        include "koneksi.php";
                        $query = "SELECT * FROM kategori";
                        $data = mysqli_query($koneksi, $query);

                        while($row=mysqli_fetch_array($data)){
                            echo "<option value='$row[id]'>$row[name]</option>";
                        }
                    ?>
                    </select>
                </div>
                <div class="input-group mb-3">
                    <select class="custom-select" id="hobi">
                        <option selected>- Pilih Hobi -</option>
                    </select>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-warning">ADD</button>
            </div>
        </form>
    </div>
  </div>
</div>