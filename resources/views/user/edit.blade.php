@extends('layouts.template')
@section('content')
    <div class="container">
        <h4>{{ __('Buat User Baru') }}</h4>

        <form method="POST" action="{{ route('user.update', $user->id) }}">
        @csrf
            <div class="mb-3">
                <label for="name" class="form-label" >{{ __('Nama') }}</label>
                <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" value="{{ $user->name }}" required autocomplete="name" autofocus>
                @error('name')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ message }}</strong>
                    </span>
                @enderror
            </div>
            <div class="mb-3">
                <label for="email" class="form-label" >{{ __('Alamat Email') }}</label>
                <input type="text" class="form-control @error('email') is-invalid @enderror" id="email" name="email" value="{{$user->email}}" required autocomplete="email">
                @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ message }}</strong>
                    </span>
                @enderror
            </div>
            <div class="mb-3">
                <label for="password" class="form-label" >{{ __('Password') }}</label>
                <input type="password" class="form-control @error('password') is-invalid @enderror" id="password" name="password" value="{{$user->password}}" required autocomplete="new-password">
                @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ message }}</strong>
                    </span>
                @enderror
            </div>
            <div class="mb-3">
                <label for="password_confirmation" class="form-label" >{{ __('Confirm Password') }}</label>
                <input type="password" class="form-control @error('password') is-invalid @enderror" id="password_confirmation" name="password_confirmation" required autocomplete="new-password" value="{{$user->password}}">
                @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ message }}</strong>
                    </span>
                @enderror
            </div>
            <div class="mb-3">
                <label for="level" class="form-label">Level</label>
                <select class="form-select text-secondary" aria-label="Default select example" name="level" for="level">
                    <option value="peminjam" <?php if($user->level == 'peminjam') echo 'selected="selected"' ?>>Peminjam</option>
                    <option value="admin" <?php if($user->level == 'admin') echo 'selected="selected"' ?>>Admin</option>
                </select>
            </div>
            <button type="submit" class="btn btn-primary">{{ __('Create') }}</button>
        </form>
    </div>
@endsection
