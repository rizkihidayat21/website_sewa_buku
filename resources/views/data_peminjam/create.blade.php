@extends('layouts.template')
@section('content')
    <div class="container">
        <h4>Tambah Data Peminjam</h4>
        
        @if(count($errors) > 0)
            @foreach($errors->all() as $error)
                <div class="alert alert-danger d-flex align-items-center" role="alert">
                    <div>{{ $error }}</div>
                </div>
            @endforeach
        @endif

        <form method="POST" action="/data_peminjam/store" enctype="multipart/form-data">
        @csrf
            <div class="mb-3">
                <label for="kode_peminjam" class="form-label" >Kode Peminjam</label>
                <input type="text" class="form-control" id="kode_peminjam" name="kode_peminjam">
                <input type="hidden" class="form-control" id="user_id" name="user_id" value="{{ $user_id }}">
            </div>
            <div class="mb-3">
                <label for="nama_peminjam" class="form-label" name="nama_peminjam">Nama Peminjam</label>
                <input type="text" class="form-control" id="nama_peminjam" name="nama_peminjam" value="{{ $name }}">
            </div>
            <div class="mb-3">
                <label for="jenis_kelamin" class="form-label">Jenis_kelamin</label>
                <select class="form-select text-secondary" aria-label="Default select example" name="id_jenis_kelamin" for="id_jenis_kelamin">
                    <option value="">Pilih Jenis Kelamin</option>
                    @foreach ($list_jenis_kelamin as $key => $value)
                        <option value="{{ $key }}">
                            {{ $value }}
                        </option>
                    @endforeach
                </select>
            </div>
            <div class="mb-3">
                <label for="tanggal_lahir" class="form-label">Tanggal Lahir</label>
                <input type="date" class="form-control" id="tanggal_lahir" name="tanggal_lahir">
            </div>
            <div class="form-floating mb-3">
                <textarea class="form-control" placeholder="Alamat" id="alamat" name="alamat" style="height: 100px"></textarea>
                <label for="floatingTextarea2">Alamat</label>
            </div>
            <div class="mb-3">
                <label for="pekerjaan" class="form-label" name="pekerjaan">Pekerjaan</label>
                <input type="text" class="form-control" id="pekerjaan" name="pekerjaan">
            </div>
            <div class="mb-3">
                <label for="telepon" class="form-label" name="telepon">Telepon</label>
                <input type="text" class="form-control" id="telepon" name="telepon">
            </div>
            <div class="mb-3">
                <label for="foto" class="form-label">Foto</label>
                <input type="file" class="form-control" id="foto" name="foto">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
@endsection
