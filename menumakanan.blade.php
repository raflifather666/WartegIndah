<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Menu Makanan</title>
</head>
<body>
    <x-app-layout>
        <!DOCTYPE html>
        <html lang="en">
            <head>
                @include("admin.admincss")
            </head>
            <body>
                <div class="container-scroller">
                    
               @include("admin.navbar")
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">    
    <title>Data Siswa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
  </head>
  <body class="bg-light">
    <main class="container">
       
        <!-- START DATA -->
        <div class="my-3 p-3 bg-body rounded shadow-sm">
                <!-- FORM PENCARIAN -->
                <div class="pb-3">
                  <form class="d-flex" action="" method="get">
                      <input class="form-control me-1" type="search" name="katakunci" value="{{ Request::get('katakunci') }}" placeholder="Masukkan kata kunci" aria-label="Search">
                      <button class="btn btn-secondary" type="submit">Cari</button>
                  </form>
                </div>
                
                <!-- TOMBOL TAMBAH DATA -->
                <div class="pb-3">
                  <a href='{{url('/tambahmakanan')}}' class="btn btn-primary">+ Tambah Data</a>
                </div>

                
          
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th class="col-md-1">Nama Makanan</th>
                            <th class="col-md-3">Harga</th>
                            <th class="col-md-4">Foto</th>
                            <th class="col-md-3">Deskripsi</th>
                            <th class="col-md-2">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>

                        
                        @foreach ( $data as $data )
                        <tr>
                            <td>{{$data->nama}}</td>
                            <td>{{$data->harga}}</td>
                            <td>{{$data->deskripsi}}</td>
                            <td><img src="/foodimage/{{$data->gambar}}"></td>

                           
                            <td>
                                <a href='{{url('editmakanan',$data->id)}}' class="btn btn-warning btn-sm">Edit</a>
                                <a href='{{url('deletemenu',$data->id)}}' class="btn btn-danger btn-sm">Del</a>
                            </td>
                           
                        </tr>
                        @endforeach
                        
                    </tbody>
                </table>
               
          </div>
          <!-- AKHIR DATA -->
    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
  </body>
</html>


</div>
@include("admin.adminscript")
<!-- container-scroller -->
</body>
</html>
</x-app-layout>

</body>
</html>