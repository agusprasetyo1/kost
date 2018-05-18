@extends('templateAdmin') 
@section('title','Edit Fasilitas Kamar Mandi') 
@section('content')
<div class="row">
    <div class="col-md-6" style="position: relative;left: 24%;">
        <h3>Edit Fasilitas Kamar Mandi</h3>
        <div class="card">
            <div class="card-body">
                <form action="/admin/faskamarmandi/{{$kamarmandi->id_kamarMandi}}" method="POST">
                    @csrf
                    @method('put')
                    <div class="form-group">
                        <label for="fasumum">Fasilitas Kamar Mandi</label>
                        <input type="text" name="fasilitas" id="fasilitas" class="form-control mb-3" placeholder="Nama Fasilitas Kamar mandi" value="{{$kamarmandi->fasilitas}}"
                            required>
                        <input type="submit" class="btn btn-primary" value="Simpan">
                        <a href="{{url('/admin/faskamarmandi/')}}" class="btn btn-danger">Kembali</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection