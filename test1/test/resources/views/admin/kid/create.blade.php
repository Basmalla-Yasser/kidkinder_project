@extends('Admin.index')
 @section('title')
     Kid
 @endsection

 @section('content')
     <div class="card mt-5">
         <div class="card-body">
             <form action="{{ route('kid.store') }}" method="post" enctype="multipart/form-data">
                 @csrf
                 <div class="row mb-3">
                     <div class="col-md-6">
                         <label for="name" class="form-label" style="font-size: 1.2rem;">name</label>
                         <input type="text" class="form-control" id="name" name="name" placeholder="Enter name"
                             style="font-size: 1.1rem;">
                             @error('name')
            <div class="text-danger">{{ $message }}</div>
        @enderror
                     </div>
                     <div class="col-md-6">
                         <label for="hobby" class="form-label" style="font-size: 1.2rem;">hobby</label>
                         <input type="text" class="form-control" id="hobby" name="hobby" placeholder="Enter hobby"
                             style="font-size: 1.1rem;">
                             @error('hobby')
            <div class="text-danger">{{ $message }}</div>
        @enderror
                     </div>
                     <div class="col-md-6">
                         <label for="age" class="form-label" style="font-size: 1.2rem;">age</label>
                         <input type="text" class="form-control" id="age" name="age" placeholder="Enter age"
                             style="font-size: 1.1rem;">
                             @error('age')
            <div class="text-danger">{{ $message }}</div>
        @enderror
                     </div>
                     <div class="col-md-6">
                         <label for="address" class="form-label" style="font-size: 1.2rem;">address</label>
                         <input type="text" class="form-control" id="address" name="address" placeholder="Enter address"
                             style="font-size: 1.1rem;">
                             @error('address')
            <div class="text-danger">{{ $message }}</div>
        @enderror
                     </div>
                     <div class="col-md-6">
                         <label for="father_id" class="form-label" style="font-size: 1.2rem;">Father</label>
                         <select name="father_id" id="father_id" class="form-control" style="font-size: 1.1rem;">
                             @foreach ($fathers as $father)
                                 <option value="{{ $father->id }}">{{ $father->name }}</option>
                             @endforeach
                         </select>
</div>
                 </div>
                 <div class="text-end">
                     <button type="submit" class="btn btn-primary" style="font-size: 1.2rem;">Add</button>
                 </div>
             </form>
         </div>
     </div>
     @endsection