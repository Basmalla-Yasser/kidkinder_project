@extends('Admin.index')
 @section('title')
     Subject
 @endsection

 @section('content')
 <div class="card mt-5">
         <div class="card-body">
             <form action="{{ route('subject.store') }}" method="post" enctype="multipart/form-data">
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
                         <label for="duration" class="form-label" style="font-size: 1.2rem;">duration</label>
                         <input type="text" class="form-control" id="duration" name="duration" placeholder="Enter  duration"
                             style="font-size: 1.1rem;">
                             @error('duration')
            <div class="text-danger">{{ $message }}</div>
        @enderror
                     </div>
                 </div>
                
             <div>

                 </div>

                 <div class="text-end">
                     <button type="submit" class="btn btn-primary" style="font-size: 1.2rem;">Add</button>
                 </div>
             </form>
         </div>
</div>
     @endsection