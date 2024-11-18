@extends('Admin.index')
 @section('title')
  Book
 @endsection

 @section('content')
     <div class="card mt-5">
         <div class="card-body">
             <form action="{{ route('book.store') }}" method="post" enctype="multipart/form-data">
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
                         <input type="text" class="form-control" id="email" name="email"
                             placeholder="Enter  email" style="font-size: 1.1rem;">
                             @error('email')
            <div class="text-danger">{{ $message }}</div>
                             @enderror
                     </div>
                     <div class="col-md-6">
                         <label for="room_id" class="form-label" style="font-size: 1.2rem;">Room</label>
                         <select name="room_id" id="room_id" class="form-control" style="font-size: 1.1rem;">
                             @foreach ($rooms as $room)
                                 <option value="{{ $room->id }}">{{ $room->name }}</option>
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