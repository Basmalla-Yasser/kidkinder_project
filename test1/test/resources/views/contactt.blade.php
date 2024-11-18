@extends('layout.app')

@section('content')
<div class="container">
    <h2>contact</h2>

    @if(session('error'))
        <div class="alert alert-danger">
            {{ session('error') }}
        </div>
    @endif

    <form action="\contactt" method="POST">
        @csrf

        <div class="form-group">
            <label for="email">Email Address</label>
            <input type="email" name="email" class="form-control" value="{{ old('email') }}" required>
            @error('email')
                <span class="alert">{{ $message }}</span>
            @enderror
        </div>

        <div class="form-group">
            <label for="name">name</label>
            <input type="name" name="name" class="form-control" required>
            @error('password')
                <span class="alert">{{ $message }}</span>
            @enderror
        </div>
        <div class="form-group">
            <label for="subject">subject</label>
            <input type="subject" name="password" class="form-control" required>
            @error('subject')
                <span class="alert">{{ $message }}</span>
            @enderror
        </div>
        <div class="form-group">
            <label for="message">message</label>
            <input type="message" name="message" class="form-control" required>
            @error('message')
                <span class="alert">{{ $message }}</span>
            @enderror
        </div>

        <button type="submit" class="btn btn-primary">Send Message</button>
    </form>
</div>
@endsection