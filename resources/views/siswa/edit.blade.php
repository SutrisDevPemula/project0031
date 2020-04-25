<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>

  <body>

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">Biodata</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav">
            <li class="nav-item active">
              <a class="nav-link" href="..">Data Siswa <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Data Guru</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Data Matkul</a>
            </li>
          </ul>
        </div>
    </nav>
    <br>

    @if (session('sukses'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Success!</strong> {{session('sukses')}}
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
    </div>
    @endif
    <div class="container">
        <h1>Update Data Siswa</h1><br>
        <div class="col-lg-12">
            {{-- //form --}}
            <form action="/siswa/{{$siswa->id}}/update" method="POST">
                {{csrf_field()}}
                <div class="form-group">
                    <label for="nim">Nim </label>
                <input type="text" class="form-control" id="nim" name="nim" value="{{$siswa -> nim}}">
                </div>
                <div class="form-group">
                    <label for="nama">Nama </label>
                    <input type="text" class="form-control" id="nama" name="nama" value="{{$siswa -> nama}}">
                </div>
                <div class="form-group">
                        <label for="jk">Jenis Kelamin </label>
                        <select class="form-control" id="jk" name="jenis_kelamin">
                            <option>Pilih jenis kelamin</option>
                            <option value="Laki-laki" @if ($siswa->jenis_kelamin == "Laki-laki") selected @endif>Laki-laki</option>
                            <option value="Perempuan" @if ($siswa->jenis_kelamin == "Perempuan") selected @endif>Perempuan</option>
                        </select>
                </div>
                <div class="form-group">
                    <label for="agama">Agama </label>
                    <select class="form-control" id="agama" name="agama">
                        <option value="Islam" @if ($siswa->agama == "Islam") selected @endif>Islam</option>
                        <option value="Hindu" @if ($siswa->agama == "Hindu") selected @endif>Hindu</option>
                        <option value="Budha" @if ($siswa->agama == "Budha") selected @endif>Budha</option>
                        <option value="Kristen" @if ($siswa->agama == "Kristen") selected @endif>Kristen</option>
                        <option value="Katolik" @if ($siswa->agama == "Katolik") selected @endif>Katolik</option>
                        <option value="Kong Hu Cu" @if ($siswa->agama == "Kong Hu Cu") selected @endif>Kong Hu Cu</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="alamat">Alamat </label>
                    <textarea class="form-control" id="alamat" name="alamat" rows="3">{{$siswa -> alamat}}</textarea>
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-warning float-right">Update</button>
                </div>                          
            </form><br><br> 
        </div>    
        
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</body>
</html>

