delete
 @extends('Admin.index')
@section('title')
    Rooms
@endsection
@section('content')
    <div class="card mt-5">
        <div class="card-body">
            <form action="{{ route('room.update', $room->id) }}" method="post" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="row mb-3">
                    <div class="col-md-6">
                        <label for="number_of_seats" class="form-label" style="font-size: 1.2rem;">number_of_seats</label>
                        <input type="text" class="form-control" id="number_of_seats" name="number_of_seats" placeholder="Enter number_of_seats"
                            style="font-size: 1.1rem;" value="{{ $room->number_of_seats }}">
                            @error('number_of_seats')
            <div class="text-danger">{{ $message }}</div>
        @enderror
                    </div>
                    <div class="col-md-6">
                        <label for="age_of_kids" class="form-label" style="font-size: 1.2rem;">age_of_kids</label>
                        <input type="text" class="form-control" id="age_of_kids" name="age_of_kids"
                            placeholder="Enter  age_of_kids" style="font-size: 1.1rem;" value="{{ $room->age_of_kids}}">
                            @error('age_of_kids')
            <div class="text-danger">{{ $message }}</div>
        @enderror
                 
                    </div>
                    <div class="col-md-6">
                        <label for="description" class="form-label" style="font-size: 1.2rem;">description</label>
                        <input type="text" class="form-control" id="description" name="description"
                            placeholder="Enter  description" style="font-size: 1.1rem;" value="{{ $room->description }}">
                            @error('description')
            <div class="text-danger">{{ $message }}</div>
        @enderror
                 
                    </div>
                    <div class="col-md-6">
                        <label for="name" class="form-label" style="font-size: 1.2rem;">name</label>
                        <input type="text" class="form-control" id="name" name="name"
                            placeholder="Enter  name" style="font-size: 1.1rem;" value="{{ $room->name }}">
                            @error('name')
            <div class="text-danger">{{ $message }}</div>
        @enderror
                 
                    </div>
                    <div class="col-md-6">
                        <label for="class_time" class="form-label" style="font-size: 1.2rem;">class_time</label>
                        <input type="text" class="form-control" id="class_time" name="class_time" placeholder="Enter class_time"
                            style="font-size: 1.1rem;" value="{{ $room->class_time }}">
                            @error('class_time')
            <div class="text-danger">{{ $message }}</div>
        @enderror
                    </div>
                    <div class="col-md-6">
                        <label for="Tution_Fee" class="form-label" style="font-size: 1.2rem;">Tution_Fee</label>
                        <input type="text" class="form-control" id="Tution_Fee" name="Tution_Fee" placeholder="Enter Tution_Fee"
                            style="font-size: 1.1rem;" value="{{ $room->Tution_Fee }}">
                            @error('Tution_Fee')
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