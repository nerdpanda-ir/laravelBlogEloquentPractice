@extends('layouts.mdb')
@section('body')


    <!-- Navigation -->
    <header>

        <!-- Navbar -->
        <nav class="navbar fixed-top navbar-expand-lg navbar-light scrolling-navbar white">
            <div class="container-fluid justify-content-center align-items-center">

                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent-4"
                        aria-controls="navbarSupportedContent-4" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-center" id="navbarSupportedContent-4">
                    <ul class="navbar-nav">
                        <li class="nav-item dropdown ml-4 mb-0">
                            <a class="nav-link dropdown-toggle waves-effect waves-light font-weight-bold" id="navbarDropdownMenuLink"
                               data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> HOMEPAGE
                            </a>
                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                                <a class="dropdown-item waves-effect waves-light" href="../homepage/v-1.html">V1</a>
                                <a class="dropdown-item waves-effect waves-light" href="../homepage/v-2.html">V2</a>
                                <a class="dropdown-item waves-effect waves-light" href="../homepage/v-3.html">V3</a>
                                <a class="dropdown-item waves-effect waves-light" href="../homepage/v-4.html">V4</a>
                                <a class="dropdown-item waves-effect waves-light" href="../homepage/v-5.html">V5</a>
                                <a class="dropdown-item waves-effect waves-light" href="../homepage/v-6.html">V6</a>
                                <a class="dropdown-item waves-effect waves-light" href="../homepage/v-7.html">V7</a>
                            </div>
                        </li>
                        <li class="nav-item dropdown ml-4  mb-0">
                            <a class="nav-link dropdown-toggle waves-effect waves-light font-weight-bold"
                               id="navbarDropdownMenuLink-2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> POST
                                PAGE </a>
                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink-2">
                                <a class="dropdown-item waves-effect waves-light" href="../postpage/v-1.html">V1</a>
                                <a class="dropdown-item waves-effect waves-light" href="../postpage/v-2.html">V2</a>
                                <a class="dropdown-item waves-effect waves-light" href="../postpage/v-3.html">V3</a>
                                <a class="dropdown-item waves-effect waves-light" href="../postpage/v-4.html">V4</a>
                            </div>
                        </li>
                        <li class="nav-item dropdown ml-4  mb-0">
                            <a href="#" class="nav-link dropdown-toggle waves-effect waves-light font-weight-bold"
                               id="navbarDropdownMenuLink-3" data-toggle="dropdown" aria-haspopup="true"
                               aria-expanded="false">ABOUT</a>
                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink-3">
                                <a class="dropdown-item waves-effect waves-light" href="../author page/v-1.html">V1</a>
                                <a class="dropdown-item waves-effect waves-light" href="../author page/v-2.html">V2</a>
                                <a class="dropdown-item waves-effect waves-light" href="../author page/v-3.html">V3</a>
                            </div>
                        </li>
                        <li class="nav-item ml-4 mb-0">
                            <a class="nav-link waves-effect waves-light font-weight-bold" href="#">CONTACT
                                <span class="sr-only">(current)</span>
                            </a>
                        </li>
                    </ul>
                </div>

                <ul class="navbar-nav ml-auto nav-flex-icons">
                    <li class="nav-item">
                        <a class="nav-link waves-effect waves-light">
                            <i class="fab fa-twitter"></i>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link waves-effect waves-light">
                            <i class="fab fa-google-plus-g"></i>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link waves-effect waves-light">
                            <i class="fab fa-linkedin-in"></i>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link waves-effect waves-light">
                            <i class="fab fa-instagram"></i>
                        </a>
                    </li>

                </ul></div>

        </nav>
        <!-- Navbar -->

        <!-- Intro Section -->
        <div class="view jarallax" data-jarallax='{"speed": 0.2}'
             style="background-image: url(https://mdbootstrap.com/img/Photos/Others/nature1.jpg); background-repeat: no-repeat; background-size: cover; background-position: center center;">
            <div class="mask rgba-black-light">
                <div class="container h-100 d-flex justify-content-center align-items-center">
                    <div class="row pt-5 mt-3">
                        <div class="col-md-12">
                            <div class="text-center">
                                <h1 class="h1-reponsive white-text text-uppercase font-weight-bold mb-3 wow fadeInDown"
                                    data-wow-delay="0.3s">
                                    <strong>welcome on my blog</strong>
                                </h1>
                                <hr class="hr-light mt-4 wow fadeInDown" data-wow-delay="0.4s">
                                <h5 class="text-uppercase mb-4 white-text wow fadeInDown" data-wow-delay="0.4s">
                                    <strong>Travel & photography</strong>
                                </h5>
                                <a class="btn btn-outline-white wow fadeInDown" data-wow-delay="0.4s">my travels</a>
                                <a class="btn btn-outline-white wow fadeInDown" data-wow-delay="0.4s">About me</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Intro -->

    </header>
    <!-- Navigation -->

    <!-- Main layout -->
    <main>

        <div class="container mt-5 pt-3">

            <div class="row">

                <!-- Main listing -->
                <div class="col-lg-8 col-12 mx-lg-4">

                    <!-- Section: Classic blog listing -->
                    <section class="classic-blog-listing">
                        @forelse($articles as $article)
                            <!-- Grid row -->
                                <div class="row mb-5">

                                    <!-- Grid column -->
                                    <div class="col-md-12">
                                        <!--Carousel Wrapper-->
                                        @php
                                            /** @var \Illuminate\Database\Eloquent\Collection $images*/
                                            $images = $article->images;
                                        @endphp
                                        @if($images->isEmpty())
                                            <!-- Image -->
                                                <div class="view overlay z-depth-1 mb-3">
                                                    <img src="https://mdbootstrap.com/img/Photos/Horizontal/City/8-col/img%20%2859%29.jpg"
                                                         class="img-fluid">
                                                    <a href="#!">
                                                        <div class="mask rgba-white-slight"></div>
                                                    </a>
                                                </div>
                                        @else
                                            <div id="carousel-example-{{$loop->index}}z" class="carousel slide carousel-fade" data-ride="carousel">
                                           <!--Indicators-->
                                           <ol class="carousel-indicators">
                                               @for($counter = 0 ; $counter<$images->count();$counter++)
                                                   <li data-target="#carousel-example-{{$loop->index}}z" data-slide-to="{{$counter}}" {!! (($counter==0) ? 'class="active"' : '') !!} ></li>
                                               @endfor
                                           </ol>
                                           <!--/.Indicators-->
                                           <!--Slides-->
                                           <div class="carousel-inner" role="listbox">
                                               @foreach($images as $image)
                                                    <!--First slide-->
                                                        <div class="carousel-item {!! (($loop->index==0) ? 'active' : '') !!}">
                                                            <img class="d-block w-100" src="{!! $image->thumbnail !!}"
                                                                 alt="{{$image->alt}}">
                                                        </div>
                                                        <!--/First slide-->
                                               @endforeach
                                           </div>
                                           <!--/.Slides-->
                                           <!--Controls-->
                                           <a class="carousel-control-prev" href="#carousel-example-{!! $loop->index !!}z" role="button" data-slide="prev">
                                               <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                               <span class="sr-only">Previous</span>
                                           </a>
                                           <a class="carousel-control-next" href="#carousel-example-{!! $loop->index !!}z" role="button" data-slide="next">
                                               <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                               <span class="sr-only">Next</span>
                                           </a>
                                           <!--/.Controls-->
                                       </div>
                                            <!--/.Carousel Wrapper-->
                                        @endif


                                        <!-- Excerpt -->
                                        <a href="" class="cyan-text">
                                            <p class="text-center font-weight-bold gold-text mt-4"> Nerd Panda </p>
                                        </a>

                                        <h2 class="text-center font-weight-bold dark-grey-text pb-3">
                                            <strong>{{ $article->title }}</strong>
                                        </h2>

                                        <p class="dark-grey-text">
                                            {{ $article->summary }}
                                        </p>

                                        <div class="text-center pb-2">
                                            @php
                                                $slug = str_replace(' ','-',$article->slug);
                                            @endphp
                                            <a href="{!! route('article',[$article->id,$slug]) !!}" class="btn btn-transparent btn-sm font-weight-bold btn-rounded dark-grey-text">Read more</a>
                                        </div>

                                        <!-- Post data -->
                                        <div class="post-data mt-3 pt-3 grey-text">
                                            <h6>By
                                                <a href="#!" class="gold-text">{!! $article->author->name !!}</a> on {!! $article->published_at !!} --- {!! now()->timestamp(strtotime($article->published_at))->ago() !!}
                                                <a href="#!" class="dark-grey-text">
                                                    <i class="far fa-comments pr-2 pl-3"></i>{!! $article->comments_count_id !!}</a>
                                            </h6>
                                        </div>

                                    </div>
                                    <!-- Grid column -->

                                </div>
                                <!-- Grid row -->
                        @empty
                            <section class="alert alert-danger text-center"> <h3>no found any Article</h3></section>
                        @endforelse

                    </section>
                    <!-- Section: Classic blog listing -->

                    <!-- Pagination dark grey -->

                    <nav class="mb-5 pb-2">
                        {{ $articles->links() }}
                    </nav>
                    <!-- Pagination dark grey -->

                </div>
                <!-- Main listing -->

                <!-- Sidebar -->
                <div class="col-lg-3 col-12 px-4 blue-grey lighten-5">

                    <!-- Author -->
                    <section class="mb-4">

                        <hr class="mt-4">
                        <p class="font-weight-bold dark-grey-text text-center spacing">
                            <strong>ABOUT ME</strong>
                        </p>
                        <hr>

                        <!-- Avatar -->
                        <div class="flex-center mt-4">
                            <img src="https://mdbootstrap.com/img/Photos/Avatars/img (33).jpg" class="img-fluid img-author z-depth-1">
                        </div>

                        <!-- Description -->
                        <p class="mt-3 dark-grey-text font-small text-center">
                            <em>Hello, I'm Martha. I've 23 years old and my biggest passion is photography. I love travel
                                around the world and take photos of wild animals, landscapes and local people.</em>
                        </p>

                        <ul class="list-unstyled circle-icons flex-center">
                            <!-- Facebook -->
                            <li>
                                <a class="fb-ic">
                                    <i class="fab fa-facebook-f"> </i>
                                </a>
                            </li>
                            <!-- Twitter -->
                            <li>
                                <a class="tw-ic">
                                    <i class="fab fa-twitter"> </i>
                                </a>
                            </li>
                            <!-- Google + -->
                            <li>
                                <a class="gplus-ic">
                                    <i class="fab fa-google-plus-g"> </i>
                                </a>
                            </li>
                        </ul>

                    </section>
                    <!-- Author -->

                    <!-- Title -->
                    <hr>
                    <p class="font-weight-bold dark-grey-text text-center spacing">
                        <strong>POPULAR POSTS</strong>
                    </p>
                    <hr>

                    <!-- Popular posts -->
                    <section class="mb-5">

                        <!-- Grid row -->
                        <div class="row mt-4">

                            <!-- Grid column -->
                            <div class="col-md-6 col-lg-12">

                                <!-- Image -->
                                <div class="view overlay z-depth-1">
                                    <img src="https://mdbootstrap.com/img/Photos/Horizontal/City/8-col/img%20%2857%29.jpg"
                                         class="img-fluid" alt="Post">
                                    <a href="#!">
                                        <div class="mask rgba-white-slight"></div>
                                    </a>
                                </div>

                                <!-- Post data -->
                                <div class="text-center mt-3">
                                    <p class="mb-1 font-weight-bold">
                                        <a href="#!" class="text-hover">This is news title</a>
                                    </p>
                                    <p class="font-small grey-text">
                                        <em>July 22, 2017</em>
                                    </p>

                                </div>
                            </div>
                            <!-- Grid column -->

                            <!-- Second column -->
                            <div class="col-md-6 col-lg-12">

                                <!-- Image -->
                                <div class="view overlay z-depth-1">
                                    <img src="https://mdbootstrap.com/img/Photos/Horizontal/Nature/8-col/img%20%28131%29.jpg"
                                         class="img-fluid" alt="Post">
                                    <a href="#!">
                                        <div class="mask rgba-white-slight"></div>
                                    </a>
                                </div>

                                <!-- Post data -->
                                <div class="text-center mt-3">
                                    <p class="mb-1 font-weight-bold">
                                        <a href="#!" class="text-hover">This is news title</a>
                                    </p>
                                    <p class="font-small grey-text">
                                        <em>July 22, 2017</em>
                                    </p>

                                </div>

                            </div>
                            <!-- Second column -->

                            <!-- Third column -->
                            <div class="col-md-6 col-lg-12">

                                <!-- Image -->
                                <div class="view overlay z-depth-1">
                                    <img src="https://mdbootstrap.com/img/Photos/Horizontal/Nature/8-col/img%20%28120%29.jpg"
                                         class="img-fluid" alt="Post">
                                    <a href="#!">
                                        <div class="mask rgba-white-slight"></div>
                                    </a>
                                </div>

                                <!-- Post data -->
                                <div class="text-center mt-3">
                                    <p class="mb-1 font-weight-bold">
                                        <a href="#!" class="text-hover">This is news title</a>
                                    </p>
                                    <p class="font-small grey-text">
                                        <em>July 22, 2017</em>
                                    </p>

                                </div>

                            </div>
                            <!-- Third column -->

                            <!-- Fourth column -->
                            <div class="col-md-6 col-lg-12">

                                <!-- Image -->
                                <div class="view overlay z-depth-1">
                                    <img src="https://mdbootstrap.com/img/Photos/Horizontal/Nature/8-col/img%20%28121%29.jpg"
                                         class="img-fluid" alt="Post">
                                    <a href="#!">
                                        <div class="mask rgba-white-slight"></div>
                                    </a>
                                </div>

                                <!-- Post data -->
                                <div class="text-center mt-3">
                                    <p class="mb-1 font-weight-bold">
                                        <a href="#!" class="text-hover">This is news title</a>
                                    </p>
                                    <p class="font-small grey-text">
                                        <em>July 22, 2017</em>
                                    </p>

                                </div>

                            </div>
                            <!-- Fourth column -->

                        </div>
                        <!-- Grid row -->

                    </section>
                    <!-- Popular posts -->

                    <!-- Title -->
                    <hr>
                    <p class="font-weight-bold dark-grey-text text-center spacing">
                        <strong>NEWSLETTER</strong>
                    </p>
                    <hr>

                    <!-- Newsletter -->
                    <section class="mb-5">

                        <!-- Grid row -->
                        <div class="row mt-4">

                            <!-- Grid column -->
                            <div class="col-md-12">

                                <div class="input-group md-form form-sm form-3 pl-0">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text white black-text" id="basic-addon9">@</span>
                                    </div>
                                    <input type="text" class="form-control mt-0 black-border rgba-white-strong" placeholder="Username"
                                           aria-describedby="basic-addon9">
                                </div>

                                <button type="button" class="btn btn-grey btn-block mt-4">Sign up</button>

                            </div>
                            <!-- Grid column -->

                        </div>
                        <!-- Grid row -->

                    </section>
                    <!-- Newsletter -->

                    <!-- Title -->
                    <hr>
                    <p class="font-weight-bold dark-grey-text text-center spacing">
                        <strong>RECENT POSTS</strong>
                    </p>
                    <hr>

                    <!-- Section: Recent posts -->
                    <section class="mb-5">

                        <div class="post-border">

                            <!-- Grid row -->
                            <div class="row mt-4">

                                <!-- Grid column -->
                                <div class="col-5">

                                    <!-- Image -->
                                    <div class="view overlay z-depth-1 mb-3">
                                        <img src="https://mdbootstrap.com/img/Photos/Horizontal/Nature/4-col/img%20%28125%29.jpg"
                                             class="img-fluid" alt="Post">
                                        <a>
                                            <div class="mask rgba-white-slight"></div>
                                        </a>
                                    </div>

                                </div>
                                <!-- Grid column -->

                                <!-- Second column -->
                                <div class="col-7 mb-1">

                                    <!-- Post data -->
                                    <div class="">
                                        <p class="mb-1">
                                            <a href="#!" class="text-hover font-weight-bold">This is news title</a>
                                        </p>
                                        <p class="font-small grey-text">
                                            <em>July 22, 2017</em>
                                        </p>

                                    </div>

                                </div>
                                <!-- Second column -->

                            </div>
                            <!-- Grid row -->

                        </div>

                        <div class="post-border">

                            <!-- Grid row -->
                            <div class="row">

                                <!-- Grid column -->
                                <div class="col-5">

                                    <!-- Image -->
                                    <div class="view overlay z-depth-1 mb-3">
                                        <img src="https://mdbootstrap.com/img/Photos/Horizontal/Nature/4-col/img%20%28132%29.jpg"
                                             class="img-fluid" alt="Post">
                                        <a>
                                            <div class="mask rgba-white-slight"></div>
                                        </a>
                                    </div>

                                </div>
                                <!-- Grid column -->

                                <!-- Second column -->
                                <div class="col-7 mb-1">

                                    <!-- Post data -->
                                    <div class="">
                                        <p class="mb-1">
                                            <a href="#!" class="text-hover font-weight-bold">This is news title</a>
                                        </p>
                                        <p class="font-small grey-text">
                                            <em>July 22, 2017</em>
                                        </p>

                                    </div>

                                </div>
                                <!-- Second column -->

                            </div>
                            <!-- Grid row -->

                        </div>

                        <div class="post-border">

                            <!-- Grid row -->
                            <div class="row">

                                <!-- Grid column -->
                                <div class="col-5">

                                    <!-- Image -->
                                    <div class="view overlay z-depth-1 mb-3">
                                        <img src="https://mdbootstrap.com/img/Photos/Horizontal/Nature/4-col/img%20%28126%29.jpg"
                                             class="img-fluid" alt="Post">
                                        <a>
                                            <div class="mask rgba-white-slight"></div>
                                        </a>
                                    </div>

                                </div>
                                <!-- Grid column -->

                                <!-- Second column -->
                                <div class="col-7 mb-1">

                                    <!-- Post data -->
                                    <div class="">
                                        <p class="mb-1">
                                            <a href="#!" class="text-hover font-weight-bold">This is news title</a>
                                        </p>
                                        <p class="font-small grey-text">
                                            <em>July 22, 2017</em>
                                        </p>

                                    </div>

                                </div>
                                <!-- Second column -->

                            </div>
                            <!-- Grid row -->

                        </div>

                        <div class="post-border">

                            <!-- Grid row -->
                            <div class="row">

                                <!-- Grid column -->
                                <div class="col-5">

                                    <!-- Image -->
                                    <div class="view overlay z-depth-1 mb-3">
                                        <img src="https://mdbootstrap.com/img/Photos/Horizontal/Nature/4-col/img%20%28130%29.jpg"
                                             class="img-fluid" alt="Post">
                                        <a>
                                            <div class="mask rgba-white-slight"></div>
                                        </a>
                                    </div>

                                </div>
                                <!-- Grid column -->

                                <!-- Second column -->
                                <div class="col-7 mb-1">

                                    <!-- Post data -->
                                    <div class="">
                                        <p class="mb-1">
                                            <a href="#!" class="text-hover font-weight-bold">This is news title</a>
                                        </p>
                                        <p class="font-small grey-text">
                                            <em>July 22, 2017</em>
                                        </p>
                                    </div>

                                </div>
                                <!-- Second column -->

                            </div>
                            <!-- Grid row -->

                        </div>

                        <div class="post-border">

                            <!-- Grid row -->
                            <div class="row">

                                <!-- Grid column -->
                                <div class="col-5">

                                    <!-- Image -->
                                    <div class="view overlay z-depth-1 mb-3">
                                        <img src="https://mdbootstrap.com/img/Photos/Horizontal/Nature/4-col/img%20%28133%29.jpg"
                                             class="img-fluid" alt="Post">
                                        <a>
                                            <div class="mask rgba-white-slight"></div>
                                        </a>
                                    </div>

                                </div>
                                <!-- Grid column -->

                                <!-- Second column -->
                                <div class="col-7 mb-1">

                                    <!-- Post data -->
                                    <div class="">
                                        <p class="mb-1">
                                            <a href="#!" class="text-hover font-weight-bold">This is news title</a>
                                        </p>
                                        <p class="font-small grey-text">
                                            <em>July 22, 2017</em>
                                        </p>

                                    </div>

                                </div>
                                <!-- Second column -->

                            </div>
                            <!-- Grid row -->

                        </div>

                        <div class="post-border">

                            <!-- Grid row -->
                            <div class="row">

                                <!-- Grid column -->
                                <div class="col-5">

                                    <!-- Image -->
                                    <div class="view overlay z-depth-1 mb-3">
                                        <img src="https://mdbootstrap.com/img/Photos/Horizontal/Nature/4-col/img%20%28122%29.jpg"
                                             class="img-fluid" alt="Post">
                                        <a>
                                            <div class="mask rgba-white-slight"></div>
                                        </a>
                                    </div>

                                </div>
                                <!-- Grid column -->

                                <!-- Second column -->
                                <div class="col-7 mb-1">

                                    <!-- Post data -->
                                    <div class="">
                                        <p class="mb-1">
                                            <a href="#!" class="text-hover font-weight-bold">This is news title</a>
                                        </p>
                                        <p class="font-small grey-text">
                                            <em>July 22, 2017</em>
                                        </p>

                                    </div>

                                </div>
                                <!-- Second column -->

                            </div>
                            <!-- Grid row -->

                        </div>

                    </section>
                    <!-- Section: Recent posts -->

                    <!-- Title -->
                    <hr>
                    <p class="font-weight-bold dark-grey-text text-center spacing">
                        <strong>FEATURED POSTS</strong>
                    </p>
                    <hr>

                    <!-- Featured posts -->
                    <section class="mb-5">

                        <!-- Grid row -->
                        <div class="row mt-4">
                            <!-- Grid column -->
                            <div class="col-md-12">

                                <!-- Carousel Wrapper -->
                                <div id="carousel-example-4" class="carousel slide carousel-fade z-depth-1-half" data-ride="carousel">
                                    <!-- Indicators -->
                                    <ol class="carousel-indicators">
                                        <li data-target="#carousel-example-4" data-slide-to="0" class="active"></li>
                                        <li data-target="#carousel-example-4" data-slide-to="1"></li>
                                        <li data-target="#carousel-example-4" data-slide-to="2"></li>
                                    </ol>
                                    <!-- Indicators -->

                                    <!-- Slides -->
                                    <div class="carousel-inner" role="listbox">
                                        <!-- First slide -->
                                        <div class="carousel-item active">
                                            <!-- Mask color -->
                                            <div class="view">
                                                <img src="https://mdbootstrap.com/img/Photos/Horizontal/Nature/8-col/img%20(126).jpg"
                                                     class="img-fluid" alt="">
                                                <a href="#!">
                                                    <div class="mask flex-center rgba-stylish-strong"></div>
                                                </a>
                                            </div>
                                            <!-- Caption -->
                                            <div class="carousel-caption">
                                                <div class="animated fadeInDown">
                                                    <h4 class="h4-responsive">
                                                        <a href="#!" class="white-text font-weight-bold">Your health</a>
                                                    </h4>
                                                    <p>
                                                        <a href="#!" class="white-text">Lorem ipsum</a>
                                                    </p>
                                                </div>
                                            </div>
                                            <!-- Caption -->
                                        </div>
                                        <!-- First slide -->

                                        <!-- Second slide -->
                                        <div class="carousel-item">
                                            <!-- Mask color -->
                                            <div class="view">
                                                <img src="https://mdbootstrap.com/img/Photos/Horizontal/Nature/8-col/img%20(128).jpg"
                                                     class="img-fluid" alt="">
                                                <a href="#!">
                                                    <div class="mask flex-center rgba-black-light"></div>
                                                </a>
                                            </div>
                                            <!-- Caption -->
                                            <div class="carousel-caption">
                                                <div class="animated fadeInDown">
                                                    <h4 class="h4-responsive">
                                                        <a href="#!" class="white-text font-weight-bold">News title</a>
                                                    </h4>
                                                    <p>
                                                        <a href="#!" class="white-text">Lorem ipsum</a>
                                                    </p>
                                                </div>
                                            </div>
                                            <!-- Caption -->
                                        </div>
                                        <!-- Second slide -->

                                        <!-- Third slide -->
                                        <div class="carousel-item">
                                            <!-- Mask color -->
                                            <div class="view">
                                                <img src="https://mdbootstrap.com/img/Photos/Horizontal/Nature/8-col/img%20(133).jpg"
                                                     class="img-fluid" alt="">
                                                <a href="#!">
                                                    <div class="mask flex-center rgba-black-light"></div>
                                                </a>
                                            </div>
                                            <!-- Caption -->
                                            <div class="carousel-caption">
                                                <div class="animated fadeInDown">
                                                    <h4 class="h4-responsive">
                                                        <a href="#!" class="white-text font-weight-bold">News title</a>
                                                    </h4>
                                                    <p>
                                                        <a href="#!" class="white-text">Lorem ipsum</a>
                                                    </p>
                                                </div>
                                            </div>
                                            <!-- Caption -->
                                        </div>
                                        <!-- Third slide -->
                                    </div>
                                    <!-- Slides -->

                                    <!-- Controls -->
                                    <a class="carousel-control-prev" href="#carousel-example-4" role="button" data-slide="prev">
                                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                        <span class="sr-only">Previous</span>
                                    </a>
                                    <a class="carousel-control-next" href="#carousel-example-4" role="button" data-slide="next">
                                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                        <span class="sr-only">Next</span>
                                    </a>
                                    <!-- Controls -->
                                </div>
                                <!-- Carousel Wrapper -->

                            </div>
                            <!-- Grid column -->
                        </div>
                        <!-- Grid row -->

                    </section>
                    <!-- Featured posts -->

                    <!-- Title -->
                    <hr>
                    <p class="font-weight-bold dark-grey-text text-center spacing">
                        <strong>ARCHIVE</strong>
                    </p>
                    <hr>

                    <!-- Archive -->
                    <section class="archive mb-5">

                        <!-- Grid row -->
                        <div class="row">

                            <!-- Grid column -->
                            <div class="col-md-12 text-center">

                                <!-- List -->
                                <ul class="list-unstyled mt-3">
                                    <li>
                                        <h6 class="font-weight-normal">
                                            <a href="#!" class="dark-grey-text">August 2016</a>
                                        </h6>
                                    </li>
                                    <li>
                                        <h6 class="font-weight-normal">
                                            <a href="#!" class="dark-grey-text">July 2016</a>
                                        </h6>
                                    </li>
                                    <li>
                                        <h6 class="font-weight-normal">
                                            <a href="#!" class="dark-grey-text">June 2016</a>
                                        </h6>
                                    </li>
                                    <li>
                                        <h6 class="font-weight-normal">
                                            <a href="#!" class="dark-grey-text">May 2016</a>
                                        </h6>
                                    </li>
                                    <li>
                                        <h6 class="font-weight-normal">
                                            <a href="#!" class="dark-grey-text">April 2016</a>
                                        </h6>
                                    </li>
                                    <li>
                                        <h6 class="font-weight-normal">
                                            <a href="#!" class="dark-grey-text">March 2016</a>
                                        </h6>
                                    </li>
                                    <li>
                                        <h6 class="font-weight-normal">
                                            <a href="#!" class="dark-grey-text">Febuary 2016</a>
                                        </h6>
                                    </li>
                                </ul>
                                <!-- List -->

                            </div>
                            <!-- Grid column -->

                        </div>
                        <!-- Grid row -->

                    </section>
                    <!-- Archive -->

                    <!-- Title -->
                    <hr>
                    <p class="font-weight-bold dark-grey-text text-center spacing">
                        <strong>FOLLOW ME</strong>
                    </p>
                    <hr>

                    <!-- Instagram -->
                    <section class="my-4">

                        <div class="row">
                            <div class="col-md-12">

                                <div id="mdb-lightbox-ui"></div>

                                <div class="mdb-lightbox">

                                    <figure class="col-md-6">
                                        <a href="https://mdbootstrap.com/img/Photos/Others/square/1.jpg" data-size="1600x1600">
                                            <img src="https://mdbootstrap.com/img/Photos/Others/square/1.jpg" class="img-fluid">
                                        </a>
                                    </figure>

                                    <figure class="col-md-6">
                                        <a href="https://mdbootstrap.com/img/Photos/Others/square/2.jpg" data-size="1600x1600">
                                            <img src="https://mdbootstrap.com/img/Photos/Others/square/2.jpg" class="img-fluid" />
                                        </a>
                                    </figure>

                                    <figure class="col-md-6">
                                        <a href="https://mdbootstrap.com/img/Photos/Others/square/3.jpg" data-size="1600x1600">
                                            <img src="https://mdbootstrap.com/img/Photos/Others/square/3.jpg" class="img-fluid" />
                                        </a>
                                    </figure>

                                    <figure class="col-md-6">
                                        <a href="https://mdbootstrap.com/img/Photos/Others/square/4.jpg" data-size="1600x1600">
                                            <img src="https://mdbootstrap.com/img/Photos/Others/square/4.jpg" class="img-fluid" />
                                        </a>
                                    </figure>

                                    <figure class="col-md-6">
                                        <a href="https://mdbootstrap.com/img/Photos/Others/square/5.jpg" data-size="1600x1600">
                                            <img src="https://mdbootstrap.com/img/Photos/Others/square/5.jpg" class="img-fluid" />
                                        </a>
                                    </figure>

                                    <figure class="col-md-6">
                                        <a href="https://mdbootstrap.com/img/Photos/Others/square/7.jpg" data-size="1600x1600">
                                            <img src="https://mdbootstrap.com/img/Photos/Others/square/7.jpg" class="img-fluid" />
                                        </a>
                                    </figure>

                                </div>

                            </div>

                        </div>
                        <!-- Grid row -->

                    </section>
                    <!-- Instagram -->

                </div>
                <!-- Sidebar -->

            </div>

        </div>

    </main>
    <!-- Main layout -->

    <!-- Footer -->
    <footer class="page-footer stylish-color-dark text-center text-md-left mt-4 pt-4">

        <!-- Footer Links -->
        <div class="container">

            <!-- Footer links -->
            <div class="row text-center text-md-left mt-3 pb-3">

                <!-- First column -->
                <div class="col-md-3 col-lg-3 col-xl-3 mx-auto mt-3">
                    <h6 class="text-uppercase mb-4 font-weight-bold">About me</h6>
                    <p>Here you can use rows and columns here to organize your footer content. Lorem ipsum dolor sit amet,
                        consectetur adipisicing elit.</p>
                </div>
                <!-- First column -->

                <hr class="w-100 clearfix d-md-none">

                <!-- Second column -->
                <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mt-3">
                    <h6 class="text-uppercase mb-4 font-weight-bold">Category</h6>
                    <p>
                        <a href="#!">Lifestyle</a>
                    </p>
                    <p>
                        <a href="#!">Travel</a>
                    </p>
                    <p>
                        <a href="#!">Work</a>
                    </p>
                    <p>
                        <a href="#!">Fashion</a>
                    </p>
                </div>
                <!-- Second column -->

                <hr class="w-100 clearfix d-md-none">

                <!-- Third column -->
                <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mt-3">
                    <h6 class="text-uppercase mb-4 font-weight-bold">Useful links</h6>
                    <p>
                        <a href="#!">Collaboriation</a>
                    </p>
                    <p>
                        <a href="#!">Media about me</a>
                    </p>
                    <p>
                        <a href="#!">Newsletter</a>
                    </p>
                    <p>
                        <a href="#!">Help</a>
                    </p>
                </div>
                <!-- Third column -->

                <hr class="w-100 clearfix d-md-none">

                <!-- Fourth column -->
                <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mt-3">
                    <h6 class="text-uppercase mb-4 font-weight-bold">Contact</h6>
                    <p>
                        <i class="fas fa-home mr-3"></i> New York, NY 10012, US</p>
                    <p>
                        <i class="fas fa-envelope mr-3"></i> info@example.com</p>
                    <p>
                        <i class="fas fa-phone mr-3"></i> + 01 234 567 88</p>
                    <p>
                        <i class="fas fa-print mr-3"></i> + 01 234 567 89</p>
                </div>
                <!-- Fourth column -->

            </div>
            <!-- Footer links -->

            <hr>

            <div class="row py-3 d-flex align-items-center">

                <!-- Grid column -->
                <div class="col-md-7 col-lg-8">

                    <!-- Copyright -->
                    <p class="text-center text-md-left grey-text">
                        © 2019 Copyright: <a href="https://mdbootstrap.com/education/bootstrap/" target="_blank"> MDBootstrap.com
                        </a>
                    </p>
                    <!-- Copyright -->

                </div>
                <!-- Grid column -->

                <!-- Grid column -->
                <div class="col-md-5 col-lg-4 ml-lg-0">

                    <!-- Social buttons -->
                    <div class="social-section text-center text-md-left">
                        <ul class="list-unstyled list-inline">
                            <li class="list-inline-item mx-0">
                                <a class="btn-floating btn-sm rgba-white-slight mr-xl-4">
                                    <i class="fab fa-facebook-f"></i>
                                </a>
                            </li>
                            <li class="list-inline-item mx-0">
                                <a class="btn-floating btn-sm rgba-white-slight mr-xl-4">
                                    <i class="fab fa-twitter"></i>
                                </a>
                            </li>
                            <li class="list-inline-item mx-0">
                                <a class="btn-floating btn-sm rgba-white-slight mr-xl-4">
                                    <i class="fab fa-google-plus-g"></i>
                                </a>
                            </li>
                            <li class="list-inline-item mx-0">
                                <a class="btn-floating btn-sm rgba-white-slight mr-xl-4">
                                    <i class="fab fa-linkedin-in"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <!-- Social buttons -->

                </div>
                <!-- Grid column -->

            </div>

        </div>

    </footer>
    <!-- Footer -->


    @endsection
@push('css')
    <style type="text/css">
        html,
        body,
        header,
        .jarallax {
            height: 600px;
            min-height: 600px;
        }

        @media (max-width: 740px) {

            html,
            body,
            header,
            .jarallax {
                height: 100%;
                min-height: 100%;
            }
        }

        @media (min-width: 800px) and (max-width: 850px) {

            html,
            body,
            header,
            .jarallax {
                height: 100%;
                min-height: 100%;
            }
        }

        @media (min-width: 1020px) and (max-width: 1500px) {

            html,
            body,
            header,
            .jarallax {
                height: 460px;
                min-height: 460px;
            }
        }

    </style>
@endpush
@section('jsFooter')
    @parent
    <!-- Custom scripts -->
    <script type="text/javascript">
        // Animation
        new WOW().init();

        // MDB Lightbox Init
        $(function () {
            $("#mdb-lightbox-ui").load("../../mdb-addons/mdb-lightbox-ui.html");
        });

    </script>
@endsection
