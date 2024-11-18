@extends('Layout.app')
@section('content')
<form action="\teacher" method="POST">
@csrf

<div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">Name</label>
  <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name">
</div>
<div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">Email address</label>
  <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
</div><div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">Age</label>
  <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="age">
</div><div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">Job</label>
  <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="job">
</div><div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">ID</label>
  <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="id">
</div>
<div class="mb-3">
  <label for="exampleFormControlTextarea1" class="form-label">Example textarea</label>
  <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
</div>
<div class="col-auto">
    <button type="submit" class="btn btn-primary">Submit</button>
  </div>
  

@endsection