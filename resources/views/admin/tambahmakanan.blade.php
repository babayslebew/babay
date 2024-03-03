<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Tambah Makanan</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
  </head>
  <body class="bg-light">
    <main class="container">
       
        <!-- START FORM -->

       <form action='{{url('/uploadmakanan')}}' method='post' enctype="multipart/form-data">
        @csrf

        <div class="mb-3">
            <a href="{{url('/menumakanan')}}" class="btn btn-primary"> <-Kembali</a>
        </div>

        <div class="my-3 p-3 bg-body rounded shadow-sm">
            <div class="mb-3 row">
                <label for="namamakanan" class="col-sm-2 col-form-label">Nama Makanan</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name='nama' id="nama" placeholder="Masukan Nama Makanan">
                </div>
            </div>
            <div class="mb-3 row">
                <label for="harga" class="col-sm-2 col-form-label">Harga</label>
                <div class="col-sm-10">
                    <input type="number" class="form-control" name='harga' id="harga" placeholder="Masukan Harga">
                </div>
            </div>
            <div class="mb-3 row">
                <label for="formFile" class="col-sm-2 col-form-label">Upload Foto Makanan</label>
                <div class="col-sm-10">
                    <input type="file" class="form-control" name='gambar' id="formFile">
                </div>
            </div>
            <div class="mb-3 row">
                <label for="deskripsi" class="col-sm-2 col-form-label">Deskripsi</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="deskripsi" id="deskripsi" placeholder="Masukan Deskripsi Makanan">
                </div>
            </div>
            <div class="mb-3 row">
                <label for="jurusan" class="col-sm-2 col-form-label"></label>
                <div class="col-sm-10"><button type="submit" class="btn btn-primary" name="submit">SIMPAN</button></div>
            </div>
          </form>
        </div>
    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
  </body>
</html>