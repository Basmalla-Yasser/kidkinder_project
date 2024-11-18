@extends('layout.app')
@section('title', 'kid')
@section('content')
    <!-- بداية المعرض -->
    <div class="container-fluid pt-5 pb-3">
        <div class="container">
            <div class="text-center pb-2">
                <p class="section-title px-5">
                    <span class="px-2">Our Gallery</span>
                </p>
                <h1 class="mb-4">Our Kids School Gallery</h1>
            </div>
            <div class="row">
                <div class="col-12 text-center mb-2">
                    <ul class="list-inline mb-4" id="portfolio-flters">
                        <li class="btn btn-outline-primary m-1 active" data-filter="*">
                            all
                        </li>
                        @foreach ($galleries as $gallery)
                            <li class="btn btn-outline-primary m-1" data-filter=".{{ Str::slug($gallery->name) }}">
                                {{ $gallery->name }}
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
            <!-- وضع جميع عناصر المعرض في صف واحد -->
            <div class="row portfolio-container">
                @foreach ($galleries as $gallery)
                    <div class="col-lg-4 col-md-6 mb-4 portfolio-item {{ Str::slug($gallery->name) }}">
                        <div class="position-relative overflow-hidden mb-2">
                            <img class="img-fluid w-100"
                            src="{{ asset('Gallery_img/attachments/Gallery_attachments/' . $gallery->image) }}"
                                alt="" />
                            <div class="portfolio-btn bg-primary d-flex align-items-center justify-content-center">
                                <a href="img/portfolio-1.jpg" data-lightbox="portfolio">
                                    <i class="fa fa-plus text-white" style="font-size: 60px"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    @endsection