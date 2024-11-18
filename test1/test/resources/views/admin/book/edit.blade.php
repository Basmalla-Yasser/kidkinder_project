delete
 @extends('Admin.index')
@section('title')
   Book
@endsection

@section('content')
    <div class="card mt-5">
        <div class="card-body">
            <form action="{{ route('book.update', $book->id) }}" method="post" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="row mb-3">
                    <div class="col-md-6">
                        <label for="name" class="form-label" style="font-size: 1.2rem;">Name</label>
                        <input type="text" class="form-control" id="name" name="name" placeholder="Enter name"
                            style="font-size: 1.1rem;" value="{{ $book->name }}">
                            @error('name')
            <div class="text-danger">{{ $message }}</div>
        @enderror
                    </div>
                    <div class="col-md-6">
                        <label for="email" class="form-label" style="font-size: 1.2rem;">Email</label>
                        <input type="text" class="form-control" id="email" name="email"
                            placeholder="Enter  email" style="font-size: 1.1rem;" value="{{ $book->email }}">
                            @error('email')
            <div class="text-danger">{{ $message }}</div>
        @enderror
                    </div>
                    <div class="col-md-6">
                        <label for="room_id" class="form-label" style="font-size: 1.2rem;">Room</label>
                        <select name="room_id" id="room_id" class="form-control" style="font-size: 1.1rem;">
                            <option value="{{ $book->room->id }}" selected>{{ $book->room->name }}</option>
                            @foreach ($rooms as $room)
                                <option value="{{ $room->id }}">{{ $room->name }}</option>
                            @endforeach
                        </select>

</div>
                </div>
              

               
    <div class="modal-footer">
        <button type="submit" class="btn btn-primary">Edit</button>
        <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
    </div>
    </form>

    @endsection