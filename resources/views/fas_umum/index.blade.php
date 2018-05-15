@extends('template') 
@section('title', 'Fasilitas Umum') 
@section('content')
<div class="card">
    <div class="card-body">
        <a href="/fasumum/create" class="btn btn-primary mb-3">Tambah data</a>

        <table class="table table-striped table-hover" style="font-size: 15px;" id="data">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Fasilitas Umum</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($fasumum as $key => $item)
                <tr>
                    <td>{{$key + 1}}.</td>
                    <td>{{$item->fasilitas}}</td>
                    <td align="center">
                        <div class="btn-group">
                            <a href="fasumum/{{$item->id_fas_umum}}/edit" class="btn btn-info">Edit</a>
                            <a href="#" class="btn btn-danger">Hapus</a>
                        </div>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection