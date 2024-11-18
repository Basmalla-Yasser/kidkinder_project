delete
 @extends('Admin.index')
@section('title')
   Newsletter
@endsection

@section('content')
    <div class="card mt-5">
        <div class="card-body">
            <form action="{{ route('newsletter.update', $newsletter->id) }}" method="post" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="row mb-3">
                    <div class="col-md-6">
                        <label for="name" class="form-label" style="font-size: 1.2rem;">Name</label>
                        <input type="text" class="form-control" id="name" name="name" placeholder="Enter name"
                            style="font-size: 1.1rem;" value="{{ $newsletter->name }}">
                            @error('name')
            <div class="text-danger">{{ $message }}</div>
        @enderror
                    </div>
                    <div class="col-md-6">
                        <label for="email" class="form-label" style="font-size: 1.2rem;">Email</label>
                        <input type="text" class="form-control" id="email" name="email"
                            placeholder="Enter  email" style="font-size: 1.1rem;" value="{{ $newsletter->email }}">
                            @error('email')
            <div class="text-danger">{{ $message }}</div>
        @enderror
                    </div>
                </div>
              

               
    <div class="modal-footer">
        <button type="submit" class="btn btn-primary">Edit</button>
        <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
    </div>
    </form>

    @endsection