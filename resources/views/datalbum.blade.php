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
       table{
	margin: auto;
	padding-bottom: 50px;
	color: #000000;
	background: #bdbbd7;
	height: 1px;
	border-radius: 0px;
	width: 40%;
	padding: 1%;
	font-size: 18px;

}
table td{
   padding: 8px 0;
}
    </style>
    <h1 class="text-center mb-4">Data Pemesanan Album KPOP</h1>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <div class="container">
    <a href="/tambah" class="btn btn-success">Tambahkan data</a><br>

    <div class="row">
    <br><table class="table">

  <thead>
    <tr>
    <th scope="col">Nomor</th>
      <th scope="col">Nama</th>
      <th scope="col">Nomor Telepon</th>
      <th scope="col">Alamat</th>
      <th scope="col">Grup/Solo</th>
      <th scope="col">Album</th>
      <th scope="col">Versi</th>
      <th scope="col">Aksi</th>
    </tr>
  </thead>
  <tbody>
    @php
    $no =1;
    @endphp
    @foreach ($data as $row)
    <tr>
      <th scope="row" >{{ $no++ }}</th>
      <td>{{ $row->nama }}</td>
      <td>{{ $row->nohp }}</td>
      <td>{{ $row->alamat }}</td>
      <td>{{ $row->grup }}</td>
      <td>{{ $row->album }}</td>
      <td>{{ $row->versi }}</td>
      <td>
      <a href="/tampilkandata/{{ $row->id }}" class="btn btn-info">Edit</a>
      <a href="/delete/{{ $row->id }}" class="btn btn-danger">Delate</a>
   
      </td>
    </tr>
    @endforeach
    </tr>
  </tbody>
</table>
    </div>
</div>
   
  </body>
</html>