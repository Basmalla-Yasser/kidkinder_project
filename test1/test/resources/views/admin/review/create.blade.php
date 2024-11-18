@extends('Admin.index')
 @section('title')
     Review
 @endsection

 @section('content')
     <div class="card mt-5">
         <div class="card-body">
             <form action="{{ route('review.store') }}" method="post" enctype="multipart/form-data">
                 @csrf
                 <div class="row mb-3">
                     <div class="col-md-6">
                         <label for="comment" class="form-label" style="font-size: 1.2rem;">Comment</label>
                         <input type="text" class="form-control" id="comment" name="comment" placeholder="Enter comment"
                             style="font-size: 1.1rem;">
                             @error('comment')
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