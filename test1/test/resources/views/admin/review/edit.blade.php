delete
 @extends('Admin.index')
@section('title')
    Review
@endsection

@section('content')
    <div class="card mt-5">
        <div class="card-body">
            <form action="{{ route('review.update', $review->id) }}" method="post" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="row mb-3">
                    <div class="col-md-6">
                        <label for="comment" class="form-label" style="font-size: 1.2rem;">comment</label>
                        <input type="text" class="form-control" id="comment" name="comment" placeholder="Enter comment"
                            style="font-size: 1.1rem;" value="{{ $review->comment }}">
                            @error('comment')
            <div class="text-danger">{{ $message }}</div>
        @enderror
                    </div>
                    <div class="col-md-6">
                        <label for="father_id" class="form-label" style="font-size: 1.2rem;">father</label>
                        <select name="father_id" id="father_id" class="form-control" style="font-size: 1.1rem;">
                            <option value="{{ $review->father->id }}" selected>{{ $review->father->name }}</option>
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