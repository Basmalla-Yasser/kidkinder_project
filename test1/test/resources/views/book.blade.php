@extends('layout.app')

@section('content')
<div class="container">
    <h2>Book Now</h2>

    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <form action="/book" method="POST">
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
        <div class="form-group">
            <label for="select a class">select a class</label>
            <input type="select a class" name="select a class" class="form-control" required>
            @error('password')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>

        

        <button type="Book Now" class="btn btn-primary">Book Now</button>
    </form>
</div>
@endsection