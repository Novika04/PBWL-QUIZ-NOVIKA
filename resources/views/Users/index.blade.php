@extends('layouts.app')
@section('content')
    <div class="container">
        <h3>DATA USERS</h3>
        @if (session()->has('success'))
        <div class="alert alert-success" role="alert">
            {{ session ('success')}}
        </div>
        @endif
        <a class="btn btn-success btn-sm float-end" href="{{ url('users/create')}}">Tambah Data</a>
        <table class="table table-collapse">
            <thead>
                <th>NO</th>
                <th>EMAIL</th>
                <th>PASSWORD</th>
                <th>NAMA</th>
                <th>ALAMAT</th>
                <th>NOMOR HP</th>
                <th>EDIT</th>
                <th>HAPUS</th>
            </thead>
            @foreach ($rows as $row)
            <tbody>
                <td>{{ $row->user_id}}</td>
                <td>{{ $row->user_email}}</td>
                <td>{{ $row->user_password}}</td>
                <td>{{ $row->user_nama}}</td>
                <td>{{ $row->user_alamat}}</td>
                <td>{{ $row->user_hp}}</td>
                <td><a class="btn btn-info btn-sm float" href="{{url('users/' .$row->user_id. '/edit')}}">Edit</a></td>
                <td>
                    <form action="{{url('users/' .$row->user_id)}}" method="post">
                        @method('DELETE')
                        @csrf
                        <button class="btn btn-danger btn-sm float" onclick="return confirm('Apakah yakin ingin dihapus')">Hapus</button>
                    </form>
                </td>
            </tbody>
            @endforeach
        </table>
    </div>
@endsection