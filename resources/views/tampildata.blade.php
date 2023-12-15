<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Data Album</title>
</head>
<body>
    <style>
body{
	  background-image: url(https://www.dreamers.id/img_artikel/596IdolK-PopBerbakatYangMenggambarCoverAlbumMerekaSendiri.jpg);
    background-size: cover;
    background-repeat: no-repeat;
       }
       h1{
      text-align: center;
	  background-color: rgb(189,187,215);
      
	  border-radius: 100px;
	  width: 50%;
      height: 50px
	  font-size: 60px;
	  font-family: Serif;
       }
       </style>
    <h1 class="text-center mb-4">Edit Pemesanan Album KPOP</h1>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-8">
            <div class="card">
                <div class="card-body">
                    <form action="/updatedata/{{ $data->id }}" method="POST">
                        @csrf
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Nama</label>
                            <input type="text" name="nama" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{ $data->nama }}">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Nomor Telepon</label>
                            <input type="number" name="nohp" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{ $data->nohp }}">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Alamat</label>
                            <input type="text" name="alamat" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{ $data->alamat }}">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Grup/Solois</label>
                            <input type="text" name="grup" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{ $data->grup }}">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Album</label>
                            <input type="text" name="album" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{ $data->album }}">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Versi</label>
                            <input type="text" name="versi" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{ $data->versi }}">
                        </div>
                    <center><button type="submit" class="btn btn-primary">Tambahkan</button></center>
                    </form>
                </div>
            </div>
            </div>
        </div>
    </div>
       
</body>
</html>