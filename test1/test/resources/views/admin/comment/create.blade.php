@extends('Admin.index')
 @section('title')
     Comment
 @endsection

 @section('content')
     <div class="card mt-5">
         <div class="card-body">
             <form action="{{ route('comment.store') }}" method="post" enctype="multipart/form-data">
                 @csrf
                 <div class="row mb-3">
                     <div class="col-md-6">
                         <label for="name" class="form-label" style="font-size: 1.2rem;">Name</label>
                         <input type="text" class="form-control" id="name" name="name" placeholder="Enter name"
                             style="font-size: 1.1rem;">
                             @error('name')
            <div class="text-danger">{{ $message }}</div>
        @enderror
                     </div>
                     <div class="col-md-6">
                         <label for="email" class="form-label" style="font-size: 1.2rem;">Email</label>
                         <input type="text" class="form-control" id="email" name="email" placeholder="Enter email"
                             style="font-size: 1.1rem;">
                             @error('email')
            <div class="text-danger">{{ $message }}</div>
        @enderror
                     </div>
                 </div>
                 <div class="row mb-3">
                     <div class="col-md-6">
                         <label for="website" class="form-label" style="font-size: 1.2rem;">website</label>
                         <input type="text" class="form-control" id="website" name="website"
                             placeholder="Enter subject" style="font-size: 1.1rem;">
                             @error('website')
            <div class="text-danger">{{ $message }}</div>
        @enderror
                     </div>
                     <div class="col-md-6">
                         <label for="message" class="form-label" style="font-size: 1.2rem;">message</label>
                         <input type="text" class="form-control" id="message" name="message"
                             placeholder="Enter message" style="font-size: 1.1rem;">
                             @error('message')
            <div class="text-danger">{{ $message }}</div>
        @enderror
                     </div>
                
               
                 </div>

                 <div class="text-end">
                     <button type="submit" class="btn btn-primary" style="font-size: 1.2rem;">Add</button>
                 </div>
             </form>
         </div>
     </div>
     @endsection