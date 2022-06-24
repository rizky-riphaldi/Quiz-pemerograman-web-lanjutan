@extends('layouts.app')
@section('content')

<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Data User</title>
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

        <form action="{{ url('/users') }}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="form-group row">
                <label for="kode" class="col-sm-2 col-form-label">Nama User</label>
                <div class="col-sm-10">
                    <input type="text" name="user_nama" class="form-control" id="kode"  >
                </div>
            </div>
            <div class="form-group row">
                <label for="kode" class="col-sm-2 col-form-label">Email User</label>
                <div class="col-sm-10">
                    <input type="text" name="user_email" class="form-control" id="kode"  >
                </div>
            </div>
            <div class="form-group row">
                <label for="kode" class="col-sm-2 col-form-label">Password User</label>
                <div class="col-sm-10">
                    <input type="Password" name="user_password" class="form-control" id="kode"  >
                </div>
            </div>            
            <div class="form-group row">
                <label for="kode" class="col-sm-2 col-form-label">Alamat User</label>
                <div class="col-sm-10">
                    <input type="text" name="user_alamat" class="form-control" id="kode"  >
                </div>
            </div>   
            <div class="form-group row">
                <label for="kode" class="col-sm-2 col-form-label">HP User</label>
                <div class="col-sm-10">
                    <input type="text" name="user_hp" class="form-control" id="kode"  >
                </div>
            </div>
            <div class="form-group row">
                <label for="kode" class="col-sm-2 col-form-label">Pos User</label>
                <div class="col-sm-10">
                    <input type="text" name="user_pos" class="form-control" id="kode"  >
                </div>
            </div> 
            <div class="form-group row">
                <label for="kode" class="col-sm-2 col-form-label">Role</label>
                <div class="col-sm-10">
                    <input type="text" name="user_role" class="form-control" id="kode"  >
                </div>
            </div>
            <div class="form-group row">
                <label for="kode" class="col-sm-2 col-form-label">Status Aktif</label>
                <div class="col-sm-10">
                    <input type="text" name="user_aktif" class="form-control" id="kode"  >
                </div>
            </div>                                                        
             <hr>
                <div class="form-group">
                    <a href="{{url('users')}}" class="btn btn-success">Kembali</a>
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