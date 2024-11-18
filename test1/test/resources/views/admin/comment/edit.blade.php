delete
 @extends('Admin.index')
@section('title')
   Comment
@endsection

@section('content')
    <div class="card mt-5">
        <div class="card-body">
            <form action="{{ route('comment.update', $comment->id) }}" method="post" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="row mb-3">
                    <div class="col-md-6">
                        <label for="name" class="form-label" style="font-size: 1.2rem;">name</label>
                        <input type="text" class="form-control" id="name" name="name" placeholder="Enter name"
                            style="font-size: 1.1rem;" value="{{ $comment->name }}">
                            @error('name')
            <div class="text-danger">{{ $message }}</div>
        @enderror
                    </div>
                    <div class="col-md-6">
                        <label for="email" class="form-label" style="font-size: 1.2rem;">email</label>
                        <input type="text" class="form-control" id="email" name="email" placeholder="Enter email"
                            style="font-size: 1.1rem;" value="{{ $comment->email }}">
                            @error('email')
            <div class="text-danger">{{ $message }}</div>
        @enderror
                    </div>
                    <div class="col-md-6">
                        <label for="website" class="form-label" style="font-size: 1.2rem;">website</label>
                        <input type="text" class="form-control" id="website" name="website" placeholder="Enter website"
                            style="font-size: 1.1rem;" value="{{ $comment->subject }}">
                            @error('website')
            <div class="text-danger">{{ $message }}</div>
        @enderror
                    </div>
                    <div class="col-md-6">
                        <label for="message" class="form-label" style="font-size: 1.2rem;">message</label>
                        <input type="text" class="form-control" id="message" name="message" placeholder="Enter message"
                            style="font-size: 1.1rem;" value="{{ $comment->message }}">
                            @error('message')
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