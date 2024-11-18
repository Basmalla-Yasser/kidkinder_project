Eng Hussien Said: delete
 @extends('Admin.index')
@section('title')
    Galleries
@endsection

@section('content')
    <div class="card mt-5">
        <div class="card-body">
            <form action="{{ route('gallery.update', $gallery->id) }}" method="post" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="row mb-3">
                    <div class="col-md-6">
                        <label for="name" class="form-label" style="font-size: 1.2rem;">Name</label>
                        <input type="text" class="form-control" id="name" name="name" placeholder="Enter name"
                            style="font-size: 1.1rem;" value="{{ $gallery->name }}">
                            @error('name')
            <div class="text-danger">{{ $message }}</div>
        @enderror
                    </div>
                    <div class="col-md-6">
                        <label for="description" class="form-label" style="font-size: 1.2rem;">Description</label>
                        <input type="text" class="form-control" id="description" name="description"
                            placeholder="Enter  description" style="font-size: 1.1rem;" value="{{ $gallery->description }}">
                            @error('description')
            <div class="text-danger">{{ $message }}</div>
        @enderror
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-md-6">
                        <!-- الصورة الحالية -->
                        <img id="currentImage" style="width: 70px;"
                            src="{{ asset('Gallery_img/attachments/Gallery_attachments/' . $gallery->image) }}"
                            alt="not found"><br><br>

                        <label for="image" class="form-label">image</label>
                        <input type="file" accept="image/*" name="image" id="imageInput">

                        <!-- صورة المعاينة الجديدة -->
                        <img id="previewImage" style="width: 70px; display: none;" alt="preview">
                    </div>
                </div>
        </div>
    </div>
    <div class="modal-footer">
        <button type="submit" class="btn btn-primary">Edit</button>
        <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
    </div>
    </form>

    <script>
        document.getElementById('imageInput').addEventListener('change', function(event) {
            const file = event.target.files[0];
            if (file) {
                // إخفاء الصورة الحالية
                document.getElementById('currentImage').style.display = 'none';

                // إنشاء URL للصورة الجديدة
                const previewUrl = URL.createObjectURL(file);

                // عرض الصورة الجديدة في المعاينة
                const previewImage = document.getElementById('previewImage');
                previewImage.src = previewUrl;
                previewImage.style.display = 'block';
            }
        });
    </script>
    @endsection