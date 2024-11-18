@extends('layout.app')

@section('content')
<div class="container">
    <h2>Login</h2>

    @if(session('error'))
        <div class="alert alert-danger">
            {{ session('error') }}
        </div>
    @endif

    <form action="\login" method="POST">
        @csrf

        <div class="form-group">
            <label for="email">Email Address</label>
            <input type="email" name="email" class="form-control" value="{{ old('email') }}" required>
            @error('email')
                <span class="alert">{{ $message }}</span>
            @enderror
        </div>

        <div class="form-group">
            <label for="password">Password</label>
            <input type="password" name="password" class="form-control" required>
            @error('password')
                <span class="alert">{{ $message }}</span>
            @enderror
        </div>

        <button type="submit" class="btn btn-primary">Login</button>
    </form>
</div>
@endsection