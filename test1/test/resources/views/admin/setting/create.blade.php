@extends('Admin.index')
 @section('title')
     Setting
 @endsection

 @section('content')
 <div class="card mt-5">
         <div class="card-body">
             <form action="{{ route('setting.store') }}" method="post" enctype="multipart/form-data">
                 @csrf
                 <div class="row mb-3">
                     <div class="col-md-6">
                         <label for="address" class="form-label" style="font-size: 1.2rem;">Address</label>
                         <input type="text" class="form-control" id="address" name="address"
                             placeholder="Enter address" style="font-size: 1.1rem;">
                             @error('address')
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
                         <label for="linkedin" class="form-label" style="font-size: 1.2rem;">Linkedin</label>
                         <input type="text" class="form-control" id="linkedin" name="linkedin"
                             placeholder="Enter  linkedin" style="font-size: 1.1rem;">
                             @error('linkedin')
            <div class="text-danger">{{ $message }}</div>
        @enderror
                     </div>
                 </div>
                 <div class="row mb-3">
                     <div class="col-md-6">
                         <label for="instagram" class="form-label" style="font-size: 1.2rem;">Instagram</label>
                         <input type="text" class="form-control" id="instagram" name="instagram"
                             placeholder="Enter instagram" style="font-size: 1.1rem;">
                             @error('instagram')
            <div class="text-danger">{{ $message }}</div>
        @enderror
                     </div>
                     <div class="col-md-6">
                         <label for="twitter" class="form-label" style="font-size: 1.2rem;">Twitter</label>
                         <input type="text" class="form-control" id="twitter" name="twitter"
                             placeholder="Enter  twitter" style="font-size: 1.1rem;">
                             @error('twitter')
            <div class="text-danger">{{ $message }}</div>
        @enderror
                     </div>
                 </div>
                 <div class="row mb-3">
                     <div class="col-md-6">
                         <label for="facebook" class="form-label" style="font-size: 1.2rem;">Facebook</label>
                         <input type="text" class="form-control" id="facebook" name="facebook"
                             placeholder="Enter facebook" style="font-size: 1.1rem;">
                             @error('facebook')
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