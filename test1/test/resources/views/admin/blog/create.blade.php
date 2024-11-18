@extends('Admin.index')
 @section('title')
     Gallary
 @endsection

 @section('content')
     <div class="card mt-5">
         <div class="card-body">
             <form action="{{ route('blog.store') }}" method="post" enctype="multipart/form-data">
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
                         <label for="description" class="form-label" style="font-size: 1.2rem;">description</label>
                         <input type="text" class="form-control" id="description" name="description"
                             placeholder="Enter  description" style="font-size: 1.1rem;">
                             @error('description')
            <div class="text-danger">{{ $message }}</div>
        @enderror
                     </div>
                 </div>
                 <div class="row mb-3">
                     <div class="col-md-6">
                         <label for="image" class="form-label" style="font-size: 1.2rem;">Image</label>
                         <input type="file" class="form-control" accept="image/*" name="image" required
                             style="font-size: 1.1rem;">
                             @error('image')
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