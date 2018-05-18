@extends('templateAdmin') 
@section('title','Edit Fasilitas Kamar') 
@section('content')
<div class="row">
    <div class="col-md-6" style="position: relative;left: 24%;">
        <h3>Edit Fasilitas Kamar</h3>
        <div class="card">
            <div class="card-body">
                <form action="/admin/faskamar/{{$faskamar->id_kamar}}" method="POST">
                    @csrf
                    @method('put')
                    <div class="form-group">
                        <label for="fasumum">Fasilitas Kamar</label>
                        <input type="text" name="fasilitas" id="fasilitas" class="form-control mb-3" placeholder="Nama Fasilitas Kamar" value="{{$faskamar->fasilitas}}"
                            required>
                        <input type="submit" class="btn btn-primary" value="Simpan">
                        <a href="{{url('/admin/faskamar/')}}" class="btn btn-danger">Kembali</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection