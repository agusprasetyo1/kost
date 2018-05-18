@extends('templateAdmin');
@section('title', 'Fasilitas Kamar Mandi')
@section('content')
    <div class="card">
        <div class="card-body">
            <a href="/admin/faskamarmandi/create/" class="btn btn-primary mb-3">Tambah data</a>
            <table class="table table-striped table-hover" style="font-size: 15px;" id="data">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>ID</th>
                        <th>Fasilitas</th>
                        <th>Aksi</th>                                                                        
                    </tr>
                </thead>
                <tbody>
                    @foreach ($kamarmandi as $key => $item)                 
                    <tr>
                        <td>{{$key + 1}}.</td>
                        <td>{{$item->id_kamarMandi}}</td>
                        <td>{{$item->fasilitas}}</td>                        
                        <td align="center">
                            <form action="/admin/faskamarmandi/{{$item->id_kamarMandi}}" method="post" id="{{$item->id_kamarMandi}}">
                                @csrf
                                @method('delete')
                            </form>
                            <div class="btn-group">
                                <a href="/admin/faskamarmandi/{{$item->id_kamarMandi}}/edit/" class="btn btn-info">Edit</a>
                                <button onclick="return confirm('Apakah anda yakin ingin menghapus data ini ?')" type="submit" class="btn btn-danger" form="{{$item->id_kamarMandi}}">Hapus</button>
                            </div>    
                        </td>                        
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>


@endsection