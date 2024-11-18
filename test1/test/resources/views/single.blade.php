@extends('layout.app')
@section('title', 'kid')
@section('content')
    <!-- Detail Start -->
    <div class="container py-5">
        <div class="row pt-5">
            <div class="col-lg-8">
                <div class="d-flex flex-column text-left mb-3">
                    <p class="section-title pr-5">
                        <span class="pr-2">Blog Detail Page</span>
                    </p>
                    <h1 class="mb-3">KidKinder</h1>
                    <div class="d-flex">
                        <p class="mr-3"><i class="fa fa-user text-primary"></i> Admin</p>
                        <p class="mr-3">
                            <i class="fa fa-folder text-primary"></i> Web Design
                        </p>
                        <p class="mr-3"><i class="fa fa-comments text-primary"></i> 15</p>
                    </div>
                </div>
                <div class="mb-5">
                    <img class="img-fluid rounded w-100 mb-4" src="img/detail.jpg" alt="Image" />
                    <p>
                        KidKinder is an educational platform or initiative designed to provide young children
                        with a safe, fun, and engaging learning environment. The platform focuses on early
                        childhood education, catering to kids in their formative years. KidKinder’s approach
                        combines interactive activities, games, and multimedia resources to encourage learning
                        through play, making education enjoyable for young learners.
                    </p>
                    @foreach ($blogs as $blog)
                        <div class="d-flex align-items-start mb-4">
                            <img class="img-fluid rounded w-50 mr-4"
                                src="{{ asset('Blog_image/attachments/Blog_attachments/' . $blog->image) }}"
                                alt="Image" />
                            <div>
                                <h2 class="mb-2">{{ $blog->name }}</h2>
                                <p>
                                    {{ $blog->description }}
                                </p>
                            </div>
                        </div>
                    @endforeach
                </div>



                <!-- Related Post -->
                <div class="mb-5 mx-n3">
                    <h2 class="mb-4 ml-3">Related Post</h2>
                    <div class="owl-carousel post-carousel position-relative">
                        @foreach ($blogs as $blog)
                            <div class="d-flex align-items-center bg-light shadow-sm rounded overflow-hidden mx-3">
                                <img class="img-fluid"
                                src="{{ asset('Blog_image/attachments/Blog_attachments/' . $blog->image) }}"
                                style="width: 80px; height: 80px" />
                                <div class="pl-3">
                                    <h5 class="">{{ $blog->name }}</h5>
                                    <div class="d-flex">
                                        <small class="mr-3"><i class="fa fa-user text-primary"></i> Admin</small>
                                        <small class="mr-3"><i class="fa fa-folder text-primary"></i> Web
                                            Design</small>
                                        <small class="mr-3"><i class="fa fa-comments text-primary"></i> 15</small>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>

                <!-- Comment List -->
                <div class="mb-5">
                    <h2 class="mb-4">{{ $numOfComment }} Comments</h2>
                    @foreach ($comments as $comment)
                        <div class="media mb-4">
                            <img src="img/user.jpg" alt="Image" class="img-fluid rounded-circle mr-3 mt-1"
                                style="width: 45px" />
                            <div class="media-body">
                                <h6>
                                    {{ $comment->name }} <small><i>{{ $comment->created_at }}</i></small>
                                </h6>
                                <p>
                                    {{ $comment->message }}
                                </p>
                                {{-- <button class="btn btn-sm btn-light">Reply</button> --}}
                            </div>
                        </div>
                    @endforeach

                </div>

                <!-- Comment Form -->
                <div class="bg-light p-5">
                    <h2 class="mb-4">Leave a comment</h2>
                    <form action="{{ route('comments') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="name">Name *</label>
                            <input type="text" class="form-control" id="name" name="name" />
                        </div>
                        <div class="form-group">
                            <label for="email">Email *</label>
                            <input type="email" class="form-control" id="email" name="email" />
                        </div>
                        <div class="form-group">
                            <label for="website">Website</label>
                            <input type="url" class="form-control" id="website" name="website" />
                        </div>

                        <div class="form-group">
                            <label for="message">Message *</label>
                            <textarea id="message" cols="30" rows="5" class="form-control" name="message"></textarea>
                        </div>
                        <div class="form-group mb-0">
                            <input type="submit" value="Leave Comment" class="btn btn-primary px-3" />
                        </div>
                    </form>
                </div>
            </div>

            <div class="col-lg-4 mt-5 mt-lg-0">
                <!-- Author Bio -->
                <div class="d-flex flex-column text-center bg-primary rounded mb-5 py-5 px-4">
                    <img src="img/user.jpg" class="img-fluid rounded-circle mx-auto mb-3" style="width: 100px" />
                    <h3 class="text-secondary mb-3">John Doe</h3>
                    <p class="text-white m-0">
                        Conset elitr erat vero dolor ipsum et diam, eos dolor lorem ipsum,
                        ipsum ipsum sit no ut est. Guber ea ipsum erat kasd amet est elitr
                        ea sit.
                    </p>
                </div>

                <!-- Search Form -->
                <div class="mb-5">
                    <form action="">
                        <div class="input-group">
                            <input type="text" class="form-control form-control-lg" placeholder="Keyword" />
                            <div class="input-group-append">
                                <span class="input-group-text bg-transparent text-primary"><i
                                        class="fa fa-search"></i></span>
                            </div>
                        </div>
                    </form>
                </div>

                <!-- Category List -->
                <div class="mb-5">
                    <h2 class="mb-4">Categories</h2>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item d-flex justify-content-between align-items-center px-0">
                            <a href="">Web Design</a>
                            <span class="badge badge-primary badge-pill">150</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center px-0">
                            <a href="">Web Development</a>
                            <span class="badge badge-primary badge-pill">131</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center px-0">
                            <a href="">Online Marketing</a>
                            <span class="badge badge-primary badge-pill">78</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center px-0">
                            <a href="">Keyword Research</a>
                            <span class="badge badge-primary badge-pill">56</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center px-0">
                            <a href="">Email Marketing</a>
                            <span class="badge badge-primary badge-pill">98</span>
                        </li>
                    </ul>
                </div>

                <!-- Single Image -->
                <div class="mb-5">
                    <img src="img/blog-1.jpg" alt="" class="img-fluid rounded" />
                </div>

                <!-- Recent Post -->
                <div class="mb-5">
                    <h2 class="mb-4">Recent Post</h2>
                    @foreach ($blogs as $blog)
                        <div class="d-flex align-items-center bg-light shadow-sm rounded overflow-hidden mb-3">
                            <img class="img-fluid"
                            src="{{ asset('Blog_image/attachments/Blog_attachments/' . $blog->image) }}"
                            style="width: 80px; height: 80px" />
                            <div class="pl-3">
                                <h5 class="">{{ $blog->name }}</h5>
                                <div class="d-flex">
                                    <small class="mr-3"><i class="fa fa-user text-primary"></i> Admin</small>
                                    <small class="mr-3"><i class="fa fa-folder text-primary"></i> Web Design</small>
                                    <small class="mr-3"><i class="fa fa-comments text-primary"></i> 15</small>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>

                <!-- Single Image -->
                <div class="mb-5">
                    <img src="img/blog-2.jpg" alt="" class="img-fluid rounded" />
                </div>

                <!-- Tag Cloud -->
                <div class="mb-5">
                    <h2 class="mb-4">Tag Cloud</h2>
                    <div class="d-flex flex-wrap m-n1">
                        <a href="" class="btn btn-outline-primary m-1">Design</a>
                        <a href="" class="btn btn-outline-primary m-1">Development</a>
                        <a href="" class="btn btn-outline-primary m-1">Marketing</a>
                        <a href="" class="btn btn-outline-primary m-1">SEO</a>
                        <a href="" class="btn btn-outline-primary m-1">Writing</a>
                        <a href="" class="btn btn-outline-primary m-1">Consulting</a>
                    </div>
                </div>

                <!-- Single Image -->
                <div class="mb-5">
                    <img src="img/blog-3.jpg" alt="" class="img-fluid rounded" />
                </div>

                <!-- Plain Text -->
                <div>
                    <h2 class="mb-4">Plain Text</h2>
                    KidKinder incorporates educational games, puzzles, and storytelling
                    to teach foundational skills such as reading, writing, numbers,
                    and problem-solving in an engaging way..
                </div>
            </div>
        </div>
    </div>
    @endsection
    <!-- Detail End -->