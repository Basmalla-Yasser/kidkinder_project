@extends('Admin.index')
 @section('title')
     Father
 @endsection

 @section('content')
 <div class="card mt-5">
         <div class="card-body">
             <form action="{{ route('father.store') }}" method="post" enctype="multipart/form-data">
                 @csrf
                 <div class="row mb-3">
                     <div class="col-md-6">
                         <label for="name" class="form-label" style="font-size: 1.2rem;">name</label>
                         <input type="text" class="form-control" id="name" name="name"
                             placeholder="Enter name" style="font-size: 1.1rem;">
                             @error('name')
            <div class="text-danger">{{ $message }}</div>
        @enderror
                     </div>
                     <div class="col-md-6">
                         <label for="phone" class="form-label" style="font-size: 1.2rem;">Phone</label>
                         <input type="text" class="form-control" id="phone" name="phone" placeholder="Enter  phone"
                             style="font-size: 1.1rem;">
                             @error('phone')
            <div class="text-danger">{{ $message }}</div>
        @enderror
                     </div>
                 </div>
                 <div class="row mb-3">
                     <div class="col-md-6">
                         <label for="email" class="form-label" style="font-size: 1.2rem;">Email</label>
                         <input type="email" class="form-control" id="email" name="email" placeholder="Enter email"
                             style="font-size: 1.1rem;">
                             @error('email')
            <div class="text-danger">{{ $message }}</div>
        @enderror
                     </div>
                     <div class="col-md-6">
                         <label for="job" class="form-label" style="font-size: 1.2rem;">job</label>
                         <input type="text" class="form-control" id="job" name="job"
                             placeholder="Enter  job" style="font-size: 1.1rem;">
                             @error('job')
            <div class="text-danger">{{ $message }}</div>
        @enderror
                     </div>
                 </div>
                 <div class="row mb-3">
                     <div class="col-md-6">
                         <label for="address" class="form-label" style="font-size: 1.2rem;">address</label>
                         <input type="text" class="form-control" id="address" name="address"
                             placeholder="Enter address" style="font-size: 1.1rem;">
                             @error('address')
            <div class="text-danger">{{ $message }}</div>
        @enderror
                     </div>
                     <div class="col-md-6">
                         <label for="state" class="form-label" style="font-size: 1.2rem;">state</label>
                         <input type="text" class="form-control" id="state" name="state"
                             placeholder="Enter  state" style="font-size: 1.1rem;">
                             @error('state')
            <div class="text-danger">{{ $message }}</div>
        @enderror
                     </div>
                 </div>
                 <div class="row mb-3">
                     
                 </div>

                 <div class="text-end">
                     <button type="submit" class="btn btn-primary" style="font-size: 1.2rem;">Add</button>
                 </div>
             </form>
         </div>
</div>
     @endsection