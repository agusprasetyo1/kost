@extends('templateAdmin') 
@section('title','Tambah Akses Lingkungan') 
@section('content')
<div class="row">
    <div class="col-md-6" style="position: relative;left: 24%;">
        <h3>Tambah Akses Lingkungan</h3>
        <div class="card">
            <div class="card-body">
                <form action="/admin/lingkungan/" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="fasumum">Akses Lingkungan</label>
                        <input type="text" name="akses" id="akses" class="form-control mb-3" placeholder="Nama Akses Lingkungan" value="{{old('akses')}}" required>
                        <input type="submit" class="btn btn-primary" value="Simpan">
                        <a href="{{url('/admin/lingkungan/')}}" class="btn btn-danger">Kembali</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection