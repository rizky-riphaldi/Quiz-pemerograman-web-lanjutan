@extends('layouts.app')
@section('content')
 
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Data Users</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    </head>
    <body>
  <div class="container mt-5">
        <div class="row">
            <div class="col-md-12">
                <div class="card border-0 shadow rounded">
                    <div class="card-body">
                        <a class="btn btn-success" href="{{ url('users/create')}}"> Tambah Data </a>
                        <table class="table table-bordered">
                            <thead>
                              <tr>
            <th width="40px"><b>No.</b></th>
                <td>Nama User</td>
                <td>Email User</td>
                <td>HP User</td>
                <td>Alamat User</td>
                <td>Pos User</td>
                <td>Role User</td>
                <td>Status Aktif</td>                                
            <th width="210px">Action</th>
        </tr>
      </thead>
<?php $no=1;
?>
         @foreach ($rows as $row)
            <tr>
                <td><b> <?= $no++; ?><b></td>
                    <td>{{ $row->user_nama }}</td>
                    <td>{{ $row->user_email }}</td>
                    <td>{{ $row->user_hp }}</td>
                    <td>{{ $row->user_alamat }}</td>
                    <td>{{ $row->user_pos }}</td>
                    <td>{{ $row->user_role }}</td>
                    <td>{{ $row->user_aktif }}</td>
                <td>
            <a href="{{ url('users/' . $row->user_id . '/edit') }}" class="btn btn-primary">Edit</a>
                    
                        <form action="{{ url('users/' . $row->user_id) }}" method="POST">
                            @method('DELETE')
                            @csrf
                            <button class="btn btn-danger">Hapus</button>
                        </form>                </td>
            </tr>
        @endforeach
    </table>


    </div>
    </div>
</div>
</div>
</div>
</div>
    </body>

</html>

@endsection