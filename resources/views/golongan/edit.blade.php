@extends('layouts.app')
@section('content')

<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Data Golongan</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    </head>
    <body>
    <div class="container">
        <div class=" form-row">
            <div class="col-lg-12">
                <h3>Edit Data Golongan</h3>
            </div>
        </div>
        <br>

        @if ($errors->all())
            <div class="alert alert-danger">
                <strong>Whoops! </strong> Ada permasalahan inputanmu.<br>
                <ul>
                    @foreach ($errors as $error)
                        <li>{{$error}}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        
        <form action="{{ url('/golongan/' . $row->gol_id) }}" method="post" enctype="multipart/form-data">
            @method('PATCH')
            @csrf
            <div class="form-group row">
                <label for="kode" class="col-sm-2 col-form-label">Kode Golongan</label>
                <div class="col-sm-10">
                    <input type="text" name="gol_kode" class="form-control" id="kode" value="{{ $row->gol_kode }}" placeholder="Kode Golongan">
                </div>
            </div>
            <div class="form-group row">
                <label for="golongan" class="col-sm-2 col-form-label">Nama Golongan</label>
                <div class="col-sm-10">
                    <input type="text" name="gol_nama" class="form-control" id="nama" value="{{ $row->gol_nama }}" placeholder="Nama Golongan">
                </div>
            </div>
             <hr>
                <div class="form-group">
                    <a href="{{url('golongan')}}" class="btn btn-success">Kembali</a>
                    <button type="submit" class="btn btn-primary">Edit</button>
                </div>
        </form>

    </div>
    </body>
</html>
    
@endsection