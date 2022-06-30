@extends('layouts.template')
@section('content')
<div class="container">
    <h4>Data Peminjam</h4>

    @include('_partial/flash_message')
    
    <form method="get" action="{{ route('data_peminjam.search') }}">
        @csrf
        <div class="row align-items-center mb-3">
            <div class="col-4">
                <input type="text" id="kata" class="form-control" name="kata" placeholder="Cari...">
            </div>
        </div>
    </form>

    <table class="table table-striped">
        <thead>
            <tr>
                <th>No</th>
                <th>Foto</th>
                <th>Kode Peminjam</th>
                <th>Nama Peminjam</th>
                <th>Jenis Kelamin</th>
                <th>Tanggal Lahir</th>
                <th>Alamat</th>
                <th>Pekerjaan</th>
                <th>Nomor Telepon</th>
                <th>Edit</th>
                <th>Hapus</th>
            </tr>
        </thead>
        <tbody>
            @foreach($data_peminjam as $peminjam)
                <tr>
                    <td>{{ $peminjam->id }}</td>
                    <td>
                        @if(empty($peminjam->foto))
                            <img src="{{ asset('foto_peminjam/foto_peminjam_kosong.png') }}" alt="avatar" style="width: 50px; height: 50px">
                        @else
                            <img src="{{ asset('foto_peminjam/'.$peminjam->foto) }}" alt="avatar" style="width: 50px; height: 50px">
                        @endif
                    </td>
                    <td>{{ $peminjam->kode_peminjam }}</td>
                    <td>{{ $peminjam->nama_peminjam }}</td>
                    <td>{{ $peminjam->jenis_kelamin['nama_jenis_kelamin'] }}</td>
                    <td>{{ $peminjam->tanggal_lahir }}</td>
                    <td>{{ $peminjam->alamat }}</td>
                    <td>{{ $peminjam->pekerjaan }}</td>
                    <td>{{ !empty($peminjam->telepon['nomor_telepon']) ? $peminjam->telepon['nomor_telepon'] : '-' }}</td>
                    <td><a href="{{route('data_peminjam.edit', $peminjam->id) }}" class="btn btn-warning btn-sm">Edit</a></td>
                    <td>
                    <form method="POST" action="{{route('data_peminjam.destroy', $peminjam->id) }}">
                        @csrf
                        <button class="btn btn-danger btn-sm" onclick="return confirm('Anda yakin ingin menghapus?')">Hapus</button>
                    </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <div class="pull-left">
        <strong>
            jumlah Peminjam : {{ $jumlah_peminjam }}
        </strong>
        <p>{{ $data_peminjam->links() }}</p>
    </div>
</div>
@endsection
