@extends('templateAdmin');
@section('title', 'Akses Lingkungan')
@section('content')
    <div class="card">
        <div class="card-body">
            <a href="/admin/lingkungan/create/" class="btn btn-primary mb-3">Tambah data</a>
            <table class="table table-striped table-hover" style="font-size: 15px;" id="data">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>ID</th>
                        <th>Akses Lingkungan</th>
                        <th>Aksi</th>                                                                        
                    </tr>
                </thead>
                <tbody>
                    @foreach ($lingkungan as $key => $item)                 
                    <tr>
                        <td>{{$key + 1}}.</td>
                        <td>{{$item->id_lingkungan}}</td>
                        <td>{{$item->fasilitas}}</td>                        
                        <td align="center">
                            <form action="/admin/lingkungan/{{$item->id_lingkungan}}" method="post" id="{{$item->id_lingkungan}}">
                                @csrf
                                @method('delete')
                            </form>
                            <div class="btn-group">
                                <a href="/admin/lingkungan/{{$item->id_lingkungan}}/edit/" class="btn btn-info">Edit</a>
                                <button onclick="return confirm('Apakah anda yakin ingin menghapus data ini ?')" type="submit" class="btn btn-danger" form="{{$item->id_lingkungan}}">Hapus</button>
                            </div>    
                        </td>                        
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>


@endsection