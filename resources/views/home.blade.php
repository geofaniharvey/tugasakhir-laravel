<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=yes">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>@yield('title')</title>
  </head>
  <body style="background-color:ivory;">
<div class="container-fluid">
    <div class="row row-cols-2">
        <div class="col col-auto">
            <nav id="navbar-example3" class="navbar navbar-light bg-light flex-column align-items-stretch p-3">
            <a class="navbar-brand" href="#">Piket</a>
            <nav class="nav nav-pills flex-column">
                <a class="nav-link" href="#namap">Nama Pegawai</a>
                    
                <a class="nav-link" href="#shift">Shift</a>
                <nav class="nav nav-pills flex-column">
                <a class="nav-link ms-3 my-1" href="#opening">Opening</a>
                <a class="nav-link ms-3 my-1" href="#closing">Closing</a>
                </nav>
            </nav>
            </nav>
    </div>
<div class="col-md">
    <div data-bs-spy="scroll" data-bs-target="#navbar-example3" data-bs-offset="0" tabindex="0">
        
    <img src="img/banner.png" class="img-fluid" alt="banner">
        <h1 id="namap"></h1>
        
            <!-- Button trigger modal -->
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
  Tambah Pegawai
</button><br>

<!-- Modal -->
<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">Profil Pegawai</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">

                <form action="/" method="POST">
              @csrf
            
              <div class="form-group">
                <label for="exampleInputEmail1">Nik</label>
                <input type="text" class="form-control" id="exampleInputEmail1" name="nik" aria-describedby="emailHelp" value="{{ old('nik') }}">
                @error('nik')
          @enderror
                
              </div>
              <div class="form-group">
                <label for="exampleInputPassword1">Nama Pegawai</label>
                <input type="text" class="form-control" name="nama" id="exampleInputPassword1" value="{{ old('nama') }}">
                @error('nama')
          @enderror
              </div>
              <div class="form-group">
                <label for="exampleInputPassword1">No Telp</label>
                <input type="text" class="form-control" name="telp" id="exampleInputPassword1" value="{{ old('telp') }}">
                @error('telp')
          @enderror
              </div>

              <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
              <button type="submit" class="btn btn-primary">Submit</button>
            </form>
      </div>
      
      </div>
    </div>
  </div>
</div>

<br><table class="table table-striped table-hover">

  <thead>
    <tr>
      <th scope="col">No.</th>
      <th scope="col">NIP</th>
      <th scope="col">Nama</th>
      <th scope="col"></th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>1231231</td>
      <td>Asep</td>
      <td><button>Edit</button> <button>Delete</button></td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>1231232</td>
      <td>Beno</td>
      <td><button>Edit</button> <button>Delete</button></td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>1231233</td>
      <td>Cecep</td>
      <td><button>Edit</button> <button>Delete</button></td>
    </tr>
    <tr>
      <th scope="row">4</th>
      <td>1231234</td>
      <td>Dodi</td>
      <td><button>Edit</button> <button>Delete</button></td>
    </tr>
    <tr>
      <th scope="row">5</th>
      <td>1231235</td>
      <td>Elang</td>
      <td><button>Edit</button> <button>Delete</button></td>
    </tr>
  </tbody>

</table>

<figure class="text-center">
  <blockquote class="blockquote">
    <p>"Start by doing what is necessary, then what is possible, and suddenly you are doing the imposibble."</p>
  </blockquote>
  <figcaption class="blockquote-footer">
    <cite title="Source Title">Francis of  Assist</cite>
  </figcaption>
</figure>

        <br><br><br><br>

        <img src="img/jadwal.png" class="img-fluid" alt="banner">
        <h2 id="hari"></h2>

        <img src="img/ope.png" class="img-fluid" alt="banner">
        <h4 id="opening"></h4>
         <ul class="list-group list-group-flush">
            <li class="list-group-item">Beno</li>
            <li class="list-group-item">Cecep</li>
            <li class="list-group-item">Elang</li>
         </ul>
        
        <img src="img/clo.png" class="img-fluid" alt="banner">
        <h4 id="closing"></h4>
        <ul class="list-group list-group-flush">
            <li class="list-group-item">Asep</li>
            <li class="list-group-item">Beno</li>
         </ul>

        </div>
    </div>
</div>
<br>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>