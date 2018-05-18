@extends('templateAdmin') 
@section('title','Edit Akses Lingkungan') 
@section('content')
<div class="row">
    <div class="col-md-6" style="position: relative;left: 24%;">
        <h3>Edit Akses Lingkungan</h3>
        <div class="card">
            <div class="card-body">
                <form action="/admin/lingkungan/{{$lingkungan->id_lingkungan}}" method="POST">
                    @csrf
                    @method('put')
                    <div class="form-group">
                        <label for="fasumum">Akses Lingkungan</label>
                        <input type="text" name="akses" id="akses" class="form-control mb-3" placeholder="Nama Akses Lingkungan" value="{{$lingkungan->fasilitas}}"required>
                        <input type="submit" class="btn btn-primary" value="Simpan">
                        <a href="{{url('/admin/lingkungan/')}}" class="btn btn-danger">Kembali</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection