@extends('templateAdmin')
@section('title','Edit Fasilitas Umum')
@section('content')
    <div class="row">
        <div class="col-md-6" style="position: relative;left: 24%;">
            <h3>Edit Fasilitas Umum</h3>
            <div class="card">
                <div class="card-body">
                    <form action="/admin/fasumum/{{$fas_umum->id_fas_umum}}" method="POST">
                        <div class="form-group">
                            <label for="fasumum">Fasilitas Umum</label>
                            <input type="text" name="fasilitas" id="fasilitas" class="form-control mb-3" placeholder="Nama Fasilitas Umum" value="{{$fas_umum->fasilitas}}" required>
                            <input type="submit" class="btn btn-primary" value="Simpan">
                            <a href="{{url('/admin/fasumum/')}}" class="btn btn-danger">Kembali</a>
                        </div>
                        @csrf 
                        @method('put')
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection