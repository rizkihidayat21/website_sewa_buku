@extends('layouts.template')
@section('content')
    <div class="container">
        <h4>Edit Buku</h4>
        
        @if(count($errors) > 0)
            @foreach($errors->all() as $error)
                <div class="alert alert-danger d-flex align-items-center" role="alert">
                    <div>{{ $error }}</div>
                </div>
            @endforeach
        @endif

        <form method="POST" action="{{ route('buku.update', $buku->id) }}">
        @csrf
            <div class="mb-3">
                <label for="kode_buku" class="form-label" >Kode Buku</label>
                <input type="text" class="form-control" id="kode_buku" name="kode_buku" value="{{ $buku->kode_buku }}">
            </div>
            <div class="mb-3">
                <label for="judul_buku" class="form-label" >Judul Buku</label>
                <input type="text" class="form-control" id="judul_buku" name="judul_buku" value="{{$buku->judul_buku}}">
            </div>
            <div class="mb-3">
                <label for="jumlah_halaman" class="form-label" >Jumlah Halaman</label>
                <input type="number" class="form-control" id="jumlah_halaman" name="jumlah_halaman" min="0" value="{{$buku->jumlah_halaman}}">
            </div>
            <div class="mb-3">
                <label for="ISBN" class="form-label" >ISBN</label>
                <input type="text" class="form-control" id="ISBN" name="ISBN" value="{{$buku->ISBN}}">
            </div>
            <div class="mb-3">
                <label for="pengarang" class="form-label">Pengarang</label>
                <input type="text" class="form-control" id="pengarang" name="pengarang" value="{{$buku->pengarang}}">
            </div>
            <div class="mb-3">
                <?php
                    $tahun_terbit = $buku['tahun_terbit'];
                    $x = intval($tahun_terbit);
                    $already_selected_value = $x;
                    $tahun_awal = 2000;
                    print '<select name="tahun_terbit" id="tahun_terbit">';
                    foreach(range(date('Y', strtotime(date('Y', time()) . ' + 625 day')), $tahun_awal) as $tahun_terbit) {
                        print '<option value="'.$tahun_terbit.'"'.($tahun_terbit == $already_selected_value ? ' selected="selected"' : '').'>'.$tahun_terbit.'</option>';
                    }
                    print '</select>'
                ?>
                </select>
            </div>
            
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
@endsection