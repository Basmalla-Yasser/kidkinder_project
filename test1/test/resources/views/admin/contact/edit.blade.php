delete
 @extends('Admin.index')
@section('title')
    Contact
@endsection

@section('content')
    <div class="card mt-5">
        <div class="card-body">
            <form action="{{ route('contact.update', $contact->id) }}" method="post" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="row mb-3">
                    <div class="col-md-6">
                        <label for="name" class="form-label" style="font-size: 1.2rem;">name</label>
                        <input type="text" class="form-control" id="name" name="name" placeholder="Enter name"
                            style="font-size: 1.1rem;" value="{{ $contact->name }}">
                            @error('name')
            <div class="text-danger">{{ $message }}</div>
        @enderror
                    </div>
                    <div class="col-md-6">
                        <label for="email" class="form-label" style="font-size: 1.2rem;">email</label>
                        <input type="text" class="form-control" id="email" name="email" placeholder="Enter email"
                            style="font-size: 1.1rem;" value="{{ $contact->email }}">
                            @error('email')
            <div class="text-danger">{{ $message }}</div>
        @enderror
                    </div>
                    <div class="col-md-6">
                        <label for="subject" class="form-label" style="font-size: 1.2rem;">subject</label>
                        <input type="text" class="form-control" id="subject" name="subject" placeholder="Enter subject"
                            style="font-size: 1.1rem;" value="{{ $contact->subject }}">
                            @error('subject')
            <div class="text-danger">{{ $message }}</div>
        @enderror
                    </div>
                    <div class="col-md-6">
                        <label for="message" class="form-label" style="font-size: 1.2rem;">message</label>
                        <input type="text" class="form-control" id="message" name="message" placeholder="Enter message"
                            style="font-size: 1.1rem;" value="{{ $contact->message }}">
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