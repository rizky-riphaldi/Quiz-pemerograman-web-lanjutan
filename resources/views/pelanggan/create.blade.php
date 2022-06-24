@extends('layouts.app')
@section('content')

<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Data pelanggan</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    </head>
    <body>
<div class="container mt-5">
        <div class="row">
            <div class="col-md-12">
                <div class="card border-0 shadow rounded">
            <div class="col-lg-12">
                <h3>Tambah Data Users</h3>
            </div>                    
                    <div class="card-body">
        <form action="{{ url('/pelanggan') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group row">
                <label for="pel_id_gol" class="col-sm-2 col-form-label">ID Golongan</label>
                <div class="col-sm-10">
                    <input type="text" name="pel_id_gol" class="form-control" id="pel_id_gol"  >
                </div>
            </div>
            <div class="form-group row">
                <label for="kode" class="col-sm-2 col-form-label">Nomor Pelanggan</label>
                <div class="col-sm-10">
                    <input type="text" name="pel_no" class="form-control" id="pel_nama"  >
                </div>
            </div>            
            <div class="form-group row">
                <label for="kode" class="col-sm-2 col-form-label">Nama Pelanggan</label>
                <div class="col-sm-10">
                    <input type="text" name="pel_nama" class="form-control" id="pel_nama"  >
                </div>
            </div>            

            <div class="form-group row">
                <label for="pelanggan" class="col-sm-2 col-form-label">Alamat</label>
                <div class="col-sm-10">
                    <input type="text" name="pel_alamat" class="form-control" id="pel_alamat"  >
                </div>
            </div>
            <div class="form-group row">
                <label for="pelanggan" class="col-sm-2 col-form-label">HP</label>
                <div class="col-sm-10">
                    <input type="text" name="pel_hp" class="form-control" id="pel_hp"  >
                </div>
            </div>
            <div class="form-group row">
                <label for="pelanggan" class="col-sm-2 col-form-label">KTP</label>
                <div class="col-sm-10">
                    <input type="text" name="pel_ktp" class="form-control" id="pel_ktp"  >
                </div>
            </div>
            <div class="form-group row">
                <label for="pelanggan" class="col-sm-2 col-form-label">Seri</label>
                <div class="col-sm-10">
                    <input type="text" name="pel_seri" class="form-control" id="pel_seri"  >
                </div>
            </div>
            <div class="form-group row">
                <label for="pelanggan" class="col-sm-2 col-form-label">Meteran</label>
                <div class="col-sm-10">
                    <input type="text" name="pel_meteran" class="form-control" id="pel_meteran" >
                </div>
            </div>
            <div class="form-group row">
                <label for="pelanggan" class="col-sm-2 col-form-label">Status Aktif</label>
                <div class="col-sm-10">
                    <input type="text" name="pel_aktif" class="form-control" id="pel_aktif"  >
                </div>
            </div>   
            <div class="form-group row">
                <label for="pelanggan" class="col-sm-2 col-form-label">User Pelanggan</label>
                <div class="col-sm-10">
                    <input type="text" name="pel_id_user" class="form-control" id="pel_id_user"  >
                </div>
            </div>                                                                     
             <hr>
                <div class="form-group">
                    <a href="{{url('pelanggan')}}" class="btn btn-success">Kembali</a>
                    <button type="submit" class="btn btn-primary">Tambah</button>
                </div>
        </form>

    </div>
    </div>
</div>
</div>
</div>
</div>
    </body>
</html>
    
@endsection