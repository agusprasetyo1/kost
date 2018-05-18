@extends('templateAdmin') 
@section('title', 'Fasilitas Umum') 
@section('content')
<div class="card">
    <div class="card-body">
        <a href="/admin/fasumum/create/" class="btn btn-primary mb-3">Tambah data</a>

        <table class="table table-striped table-hover" style="font-size: 15px;" id="data">
            <thead>
                <tr>
                    <th>No</th>
                    <th>ID</th>                    
                    <th>Fasilitas Umum</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($fasumum as $key => $item)
                <tr>
                    <td>{{$key + 1}}.</td>
                    <td>{{$item->id_fas_umum}}</td>                    
                    <td>{{$item->fasilitas}}</td>
                    <td align="center">
                        <div class="btn-group">
                            <form action="/admin/fasumum/{{$item->id_fas_umum}}/" method="post" id="{{$item->id_fas_umum}}">
                            @csrf
                            @method('delete')
                            </form>
                            <a href="/admin/fasumum/{{$item->id_fas_umum}}/edit/" class="btn btn-info">Edit</a>
                            <button onclick="return confirm('Apakah anda yakin ingin menghapus data ini ?')" type="submit" form="{{$item->id_fas_umum}}" class="btn btn-danger">Hapus</button>
                        </div>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection