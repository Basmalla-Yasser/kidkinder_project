delete
 @extends('Admin.index')
@section('title')
    Kid
@endsection

@section('content')
    <div class="card mt-5">
        <div class="card-body">
            <form action="{{ route('kid.update', $kid->id) }}" method="post" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="row mb-3">
                    <div class="col-md-6">
                        <label for="name" class="form-label" style="font-size: 1.2rem;">name</label>
                        <input type="text" class="form-control" id="name" name="name" placeholder="Enter name"
                            style="font-size: 1.1rem;" value="{{ $kid->name }}">
                            @error('name')
            <div class="text-danger">{{ $message }}</div>
        @enderror
                    </div>
                    <div class="col-md-6">
                        <label for="age" class="form-label" style="font-size: 1.2rem;">age</label>
                        <input type="text" class="form-control" id="age" name="age" placeholder="Enter age"
                            style="font-size: 1.1rem;" value="{{ $kid->age }}">
                            @error('age')
            <div class="text-danger">{{ $message }}</div>
        @enderror
                    </div>
                    <div class="col-md-6">
                        <label for="hobby" class="form-label" style="font-size: 1.2rem;">hobby</label>
                        <input type="text" class="form-control" id="hobby" name="hobby" placeholder="Enter hobby"
                            style="font-size: 1.1rem;" value="{{ $kid->hobby }}">
                            @error('hobby')
            <div class="text-danger">{{ $message }}</div>
        @enderror
                    </div>
                    <div class="col-md-6">
                        <label for="address" class="form-label" style="font-size: 1.2rem;">address</label>
                        <input type="text" class="form-control" id="address" name="address" placeholder="Enter address"
                            style="font-size: 1.1rem;" value="{{ $kid->address }}">
                            @error('address')
            <div class="text-danger">{{ $message }}</div>
        @enderror
                    </div>





                    <div class="col-md-6">
                        <label for="father_id" class="form-label" style="font-size: 1.2rem;">father</label>
                        <select name="father_id" id="father_id" class="form-control" style="font-size: 1.1rem;">
                            <option value="{{ $kid->father->id }}" selected>{{ $kid->father->name }}</option>
                            @foreach ($fathers as $father)
                                <option value="{{ $father->id }}">{{ $father->name }}</option>
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