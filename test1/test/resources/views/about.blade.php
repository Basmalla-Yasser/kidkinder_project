@extends('layout.app')
@section('title','kid')
@section('content')
<div class="container-fluid py-5">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-lg-5">
            <img
              class="/img-fluid rounded mb-5 mb-lg-0"
              src="/img/about-1.jpg"
              alt=""
            />
          </div>
          <div class="col-lg-7">
            <p class="section-title pr-5">
              <span class="pr-2">Learn About Us</span>
            </p>
            <h1 class="mb-4">Best School For Your Kids</h1>
            <p>
             
          KidKinder is an innovative educational system designed
                        specifically for kindergartens, aiming to enhance the learning
                        experience for young children by providing an interactive and engaging environment.
                        The system focuses on offering advanced educational tools that combine educational games
            </p>
            <div class="row pt-2 pb-4">
              <div class="col-6 col-md-4">
                <img class="img-fluid rounded" src="img/about-2.jpg" alt="" />
              </div>
              <div class="col-6 col-md-8">
                <ul class="list-inline m-0">
                  <li class="py-2 border-top border-bottom">
                    <i class="fa fa-check text-primary mr-3"></i>Labore eos amet
                    dolor amet diam
                  </li>
                  <li class="py-2 border-bottom">
                    <i class="fa fa-check text-primary mr-3"></i>Etsea et sit
                    dolor amet ipsum
                  </li>
                  <li class="py-2 border-bottom">
                    <i class="fa fa-check text-primary mr-3"></i>Diam dolor diam
                    elitripsum vero.
                  </li>
                </ul>
              </div>
            </div>
            <a href="" class="btn btn-primary mt-2 py-2 px-4">Learn More</a>
          </div>
        </div>
      </div>
    </div>
    <!-- About End -->

    <!-- Facilities Start -->
    
    <div class="container-fluid pt-5">
      <div class="container pb-3">
        <div class="row">
        @foreach($galleries as $gallery)
          <div class="col-lg-4 col-md-6 pb-1">
            <div
              class="d-flex bg-light shadow-sm border-top rounded mb-4"
              style="padding: 30px"
            >
              <i
                class="flaticon-050-fence h1 font-weight-normal text-primary mb-3"
              ></i>
              <div class="pl-4">
                <h4>{{$gallery->name}}</h4>
                <p class="m-0">
                 {{$gallery->description}}
                </p>
              </div>
            </div>
          </div>
          @endforeach
        </div>
      </div>
    </div>
    
    <!-- Facilities Start -->
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

