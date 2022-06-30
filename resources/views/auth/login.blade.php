@extends('layouts.login_layout')
@section('content')
    <div class="container">
        <form action="{{ route('login') }}" method="post">@csrf
            <div class="mb-3">
                <label for="email" class="form-label" >Email</label>
                <input type="text" class="form-control" id="email" name="email">
            </div>
            <div class="mb-3">
                <label for="password" class="form-label" >Password</label>
                <input type="text" class="form-control" id="password" name="password">
            </div>
            <div class="mb-3">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </form>
    </div>
@endsection