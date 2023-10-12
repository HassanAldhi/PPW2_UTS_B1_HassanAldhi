@extends('pemains.layout')

@section('content')
@include('pemains.header')
<div class="card">
    <div class="card-header">Daftar Pemain</div>
    <div class="card-body">
        <button class="btn btn-success mb-3">+ Tambah Pemain</button>
        <table class="table table-striped table-bordered">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nama Pemain</th>
                        <th>No Punggung</th>
                        <th>Posisi</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($pemain as $item)
                        <tr>
                            <td>{{ $item->id }}</td>
                            <td>{{ $item->nama_pemain }}</td>
                            <td>{{ $item->no_punggung}}</td>
                            <td>{{ $item->posisi }}</td>
                            <td>
                                <button class="btn btn-primary"><i class="bi bi-pencil-square"></i></button>
                                <button class="btn btn-danger"><i class="bi bi-trash"></i></button>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
    </div>
    </div>
</div>
@endsection