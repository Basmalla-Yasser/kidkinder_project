@extends('layout.app')
@section('title','kid')
@section('content')
<!-- Team Start -->
<div class="container-fluid pt-5">
      <div class="container">
        <div class="text-center pb-2">
          <p class="section-title px-5">
            <span class="px-2">Our Teachers</span>
          </p>
          <h1 class="mb-4">Meet Our Teachers</h1>
        </div>
        <div class="row">
          @foreach($teachers as $teacher)
          <div class="col-md-6 col-lg-3 text-center team mb-5">
            <div
              class="position-relative overflow-hidden mb-4"
              style="border-radius: 100%"
            >
              <img class="/img-fluid w-100"src="{{ asset('Teacher_img/attachments/Teacher_attachments/' . $teacher->image) }}" alt="" />
              <div
                class="team-social d-flex align-items-center justify-content-center w-100 h-100 position-absolute"
              >
                <a
                  class="btn btn-outline-light text-center mr-2 px-0"
                  style="width: 38px; height: 38px"
                  href="{{$teacher->twitter}}"
                  ><i class="fab fa-twitter"></i
                ></a>
                <a
                  class="btn btn-outline-light text-center mr-2 px-0"
                  style="width: 38px; height: 38px"
                  href="{{$teacher->facebook}}"
                  ><i class="fab fa-facebook-f"></i
                ></a>
                <a
                  class="btn btn-outline-light text-center px-0"
                  style="width: 38px; height: 38px"
                  href="{{$teacher->linkedin}}"
                  ><i class="fab fa-linkedin-in"></i
                ></a>
              </div>
            </div>
            <h4>{{$teacher->name}}</h4>
            <i>{{$teacher->subject->name}}</i>
          </div>
          @endforeach
      
        </div>
      </div>
    </div>
    <!-- Team End -->
@endsection