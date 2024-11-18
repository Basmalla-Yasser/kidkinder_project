delete
 @extends('Admin.index')
@section('title')
   Subjects
@endsection
@section('content')
    <div class="card mt-5">
        <div class="card-body">
            <form action="{{ route('subject.update', $subject->id) }}" method="post" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="row mb-3">
                    <div class="col-md-6">
                        <label for="name" class="form-label" style="font-size: 1.2rem;">name</label>
                        <input type="text" class="form-control" id="name" name="name" placeholder="Enter address"
                            style="font-size: 1.1rem;" value="{{ $subject->name }}">
                            @error('name')
            <div class="text-danger">{{ $message }}</div>
        @enderror
                    </div>
                    <div class="col-md-6">
                        <label for="duration" class="form-label" style="font-size: 1.2rem;">duration</label>
                        <input type="text" class="form-control" id="duration" name="duration"
                            placeholder="Enter  duration" style="font-size: 1.1rem;" value="{{ $subject->duration}}">
                            @error('duration')
            <div class="text-danger">{{ $message }}</div>
        @enderror
                    </div>
                    
                </div>
            
        </div>
    </div>
    <div class="modal-footer">
        <button type="submit" class="btn btn-primary">Edit</button>
        <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
    </div>
    </form>


    @endsection