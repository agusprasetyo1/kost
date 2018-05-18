@extends('templateAdmin')
@section('title','Tambah Fasilitas Umum')
@section('content')
    <div class="row">
        <div class="col-md-6" style="position: relative;left: 24%;">
            <h3>Tambah Fasilitas Umum</h3>
            <div class="card">
                <div class="card-body" >
                    <form action="/admin/fasumum/" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="fasumum">Fasilitas Umum</label>
                            <input type="text" name="fasilitas" id="fasilitas" class="form-control mb-3" placeholder="Nama Fasilitas Umum" value="{{old('fasumum')}}" required>
                            <input type="submit" class="btn btn-primary" value="Simpan">
                            <a href="{{url('/admin/fasumum/')}}" class="btn btn-danger">Kembali</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>    
@endsection