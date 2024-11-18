Eng Hussien Said: delete
 @extends('Admin.index')
@section('title')
    Teachers
@endsection

@section('content')
    <div class="card mt-5">
        <div class="card-body">
            <form action="{{ route('teacher.update', $teacher->id) }}" method="post" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="row mb-3">
                    <div class="col-md-6">
                        <label for="name" class="form-label" style="font-size: 1.2rem;">Name</label>
                        <input type="text" class="form-control" id="name" name="name" placeholder="Enter name"
                            style="font-size: 1.1rem;" value="{{ $teacher->name }}">
                            @error('name')
            <div class="text-danger">{{ $message }}</div>
        @enderror
                    </div>
                    <div class="col-md-6">
                        <label for="email" class="form-label" style="font-size: 1.2rem;">email</label>
                        <input type="text" class="form-control" id="email" name="email" placeholder="Enter email"
                            style="font-size: 1.1rem;" value="{{ $teacher->email }}">
                            @error('email')
            <div class="text-danger">{{ $message }}</div>
        @enderror
                    </div>
                    <div class="col-md-6">
                        <label for="twitter" class="form-label" style="font-size: 1.2rem;">twitter</label>
                        <input type="text" class="form-control" id="twitter" name="twitter" placeholder="Enter name"
                            style="font-size: 1.1rem;" value="{{ $teacher->twitter }}">
                            @error('twitter')
            <div class="text-danger">{{ $message }}</div>
        @enderror
                    </div>
                    <div class="col-md-6">
                        <label for="linkedin" class="form-label" style="font-size: 1.2rem;">linkedin</label>
                        <input type="text" class="form-control" id="linkedin" name="linkedin" placeholder="Enter linkedin"
                            style="font-size: 1.1rem;" value="{{ $teacher->linkedin }}">
                            @error('linkedin')
            <div class="text-danger">{{ $message }}</div>
        @enderror
                    </div>
                    <div class="col-md-6">
                        <label for="facebook" class="form-label" style="font-size: 1.2rem;">facebook</label>
                        <input type="text" class="form-control" id="facebook" name="facebook" placeholder="Enter facebook"
                            style="font-size: 1.1rem;" value="{{ $teacher->facebook }}">
                            @error('facebook')
            <div class="text-danger">{{ $message }}</div>
        @enderror
                    </div>
                    <div class="col-md-6">
                        <label for="subject_id" class="form-label" style="font-size: 1.2rem;">subject</label>
                        <select name="subject_id" id="subject_id" class="form-control" style="font-size: 1.1rem;">
                            <option value="{{ $teacher->subject->id }}" selected>{{ $teacher->subject->name }}</option>
                            @foreach ($subjects as $subject)
                                <option value="{{ $subject->id }}">{{ $subject->name }}</option>
                            @endforeach
                        </select>

                        </div>
                   
                </div>
                <div class="row mb-3">
                    <div class="col-md-6">
                        <!-- الصورة الحالية -->
                        <img id="currentImage" style="width: 70px;"
                            src="{{ asset('Teacher_img/attachments/Teacher_attachments/' . $teacher->image) }}"
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