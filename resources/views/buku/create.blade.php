@extends('layouts.template')
@section('content')
    <div class="container">
        <h4>Tambah Data Buku</h4>
        
        @if(count($errors) > 0)
            @foreach($errors->all() as $error)
                <div class="alert alert-danger d-flex align-items-center" role="alert">
                    <div>{{ $error }}</div>
                </div>
            @endforeach
        @endif

        <form method="POST" action="{{ route('buku.store') }}">
        @csrf
            <div class="mb-3">
                <label for="kode_buku" class="form-label" >Kode Buku</label>
                <input type="text" class="form-control" id="kode_buku" name="kode_buku">
            </div>
            <div class="mb-3">
                <label for="judul_buku" class="form-label" >Judul Buku</label>
                <input type="text" class="form-control" id="judul_buku" name="judul_buku">
            </div>
            <div class="mb-3">
                <label for="jumlah_halaman" class="form-label" >Jumlah Halaman</label>
                <input type="number" class="form-control" id="jumlah_halaman" name="jumlah_halaman" min="0">
            </div>
            <div class="mb-3">
                <label for="ISBN" class="form-label" >ISBN</label>
                <input type="text" class="form-control" id="ISBN" name="ISBN" min="0">
            </div>
            <div class="mb-3">
                <label for="pengarang" class="form-label">Pengarang</label>
                <input type="text" class="form-control" id="pengarang" name="pengarang" min="0">
            </div>
            <div class="mb-3">
                <label for="tahun_terbit" class="form-label">Tahun Terbit</label>
                <select name="tahun_terbit" id="tahun_terbit">
                    <script>
                        let myDate = new Date();
                        let year = myDate.getFullYear();
                        console.log(year)
                        for (let index=2000; index<year+1; index++) {
                            document.write('<option value="'+index+'">'+index+'</option>')
                        }
                    </script>
                </select>
            </div>
            
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
@endsection