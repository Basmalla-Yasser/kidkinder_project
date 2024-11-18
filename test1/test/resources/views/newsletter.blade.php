@extends('layout.app')

@section('content')
<div class="container">
    <h2>newsletter</h2>

    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <form action="/newsletter" method="POST">
        @csrf

        <div class="form-group">
            <label for="name">Your Name</label>
            <input type="text" name="name" class="form-control" value="{{ old('name') }}" required>
            @error('name')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>

        <div class="form-group">
            <label for="email"> Your Email</label>
            <input type="email" name="email" class="form-control" value="{{ old('email') }}" required>
            @error('email')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>


        <button type="submit" class="btn btn-primary">newsletter</button>
    </form>
</div>
@endsection