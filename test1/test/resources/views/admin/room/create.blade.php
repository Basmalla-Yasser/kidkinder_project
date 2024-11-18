@extends('Admin.index')
 @section('title')
     Room
 @endsection

 @section('content')
 <div class="card mt-5">
         <div class="card-body">
             <form action="{{ route('room.store') }}" method="post" enctype="multipart/form-data">
                 @csrf
                 <div class="row mb-3">
                     <div class="col-md-6">
                         <label for="number_of_seats" class="form-label" style="font-size: 1.2rem;">number_of_seats	</label>
                         <input type="text" class="form-control" id="address" name="number_of_seats"
                             placeholder="Enter number_of_seats" style="font-size: 1.1rem;">
                             @error('number_of_seats')
            <div class="text-danger">{{ $message }}</div>
        @enderror
                     </div>
                     <div class="col-md-6">
                         <label for="age_of_kids" class="form-label" style="font-size: 1.2rem;">age_of_kids</label>
                         <input type="text" class="form-control" id="age_of_kids" name="age_of_kids" placeholder="Enter  age_of_kids	"
                             style="font-size: 1.1rem;">
                             @error('age_of_kids')
            <div class="text-danger">{{ $message }}</div>
        @enderror
                             
                     </div>
                 </div>
                 <div class="row mb-3">
                     <div class="col-md-6">
                         <label for="description" class="form-label" style="font-size: 1.2rem;">description</label>
                         <input type="description" class="form-control" id="description" name="description" placeholder="Enter description"
                             style="font-size: 1.1rem;">
                             @error('description')
            <div class="text-danger">{{ $message }}</div>
        @enderror
                             
                     </div>
                     <div class="col-md-6">
                         <label for="name" class="form-label" style="font-size: 1.2rem;">name</label>
                         <input type="text" class="form-control" id="name" name="name"
                             placeholder="Enter  name" style="font-size: 1.1rem;">
                             @error('name')
            <div class="text-danger">{{ $message }}</div>
        @enderror
                     </div>
                 </div>
                 <div class="row mb-3">
                     <div class="col-md-6">
                         <label for="class_time" class="form-label" style="font-size: 1.2rem;">class_time</label>
                         <input type="text" class="form-control" id="class_time" name="class_time"
                             placeholder="Enter class_time" style="font-size: 1.1rem;">
                             @error('class_time')
            <div class="text-danger">{{ $message }}</div>
        @enderror
                     </div>
                     <div class="col-md-6">
                         <label for="Tution_Fee" class="form-label" style="font-size: 1.2rem;">Tution_Fee</label>
                         <input type="text" class="form-control" id="Tution_Fee" name="Tution_Fee"
                             placeholder="Enter  Tution_Fee" style="font-size: 1.1rem;">
                             @error('Tution_Fee')
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