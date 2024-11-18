@extends('Admin.index')
 @section('title')
     Teacher
 @endsection

 @section('content')
     <div class="card mt-5">
         <div class="card-body">
             <form action="{{ route('teacher.store') }}" method="post" enctype="multipart/form-data">
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
                         <label for="twitter" class="form-label" style="font-size: 1.2rem;">twitter</label>
                         <input type="text" class="form-control" id="twitter" name="twitter" placeholder="Enter twitter"
                             style="font-size: 1.1rem;">
                             @error('twitter')
            <div class="text-danger">{{ $message }}</div>
        @enderror
                     </div>
                     <div class="col-md-6">
                         <label for="linkedin" class="form-label" style="font-size: 1.2rem;">linkedin</label>
                         <input type="text" class="form-control" id="linkedin" name="linkedin" placeholder="Enter linkedin"
                             style="font-size: 1.1rem;">
                             @error('linkedin')
            <div class="text-danger">{{ $message }}</div>
        @enderror
                     </div>
                     <div class="col-md-6">
                         <label for="facebook" class="form-label" style="font-size: 1.2rem;">facebook</label>
                         <input type="text" class="form-control" id="facebook" name="facebook" placeholder="Enter facebook"
                             style="font-size: 1.1rem;">
                             @error('facebook')
            <div class="text-danger">{{ $message }}</div>
        @enderror
                     </div>
                     <div class="col-md-6">
                         <label for="email" class="form-label" style="font-size: 1.2rem;">email</label>
                         <input type="text" class="form-control" id="email" name="email"
                             placeholder="Enter  email" style="font-size: 1.1rem;">
                             @error('email')
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
                     <div class="col-md-6">
                         <label for="subject_id" class="form-label" style="font-size: 1.2rem;">subject</label>
                         <select name="subject_id" id="subject_id" class="form-control" style="font-size: 1.1rem;">
                             @foreach ($subjects as $subject)
                                 <option value="{{ $subject->id }}">{{ $subject->name }}</option>
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