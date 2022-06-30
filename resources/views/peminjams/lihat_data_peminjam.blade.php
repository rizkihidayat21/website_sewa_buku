@extends('layouts.template')

@section('content')

<div id="peminjam">
    <h3>Data peminjam</h3>
    @if(!empty($peminjam))
        <ul>
            @foreach ($peminjam as $data)
                <li>{{$data}}</li>
            @endforeach
        </ul>
    @else
        <p>Data peminjam kosong.</p>
    @endif
</div>

@endsection