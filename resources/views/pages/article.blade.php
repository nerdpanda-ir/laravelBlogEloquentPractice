@extends('layouts.mdb')
@section('body')
    <!-- Main Navigation -->
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
                               id="navbarDropdownMenuLink-4" data-toggle="dropdown" aria-haspopup="true"
                               aria-expanded="false">ABOUT</a>
                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink-4">
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

            </div>

        </nav>
        <!-- Navbar -->

        <section>
            <div class="">
                <img src="https://mdbootstrap.com/img/Photos/Others/nature4.jpg" style="width: 100%">
            </div>
        </section>

    </header>
    <!-- Main Navigation -->

    <!-- Main Layout -->
    <main>

        <div class="container-fluid mt-md-0 mt-5 mb-5">

            <!-- Grid row -->
            <div class="row" style="margin-top: -100px;">

                <!-- Grid column -->
                <div class="col-md-12 px-lg-5">
                    <!-- Card -->
                    <div class="card pb-5 mx-md-3">
                        <div class="card-body">

                            <div class="container">
                                @php
                                    /** @var \Illuminate\Database\Eloquent\Collection $images*/
                                    $images = $articleItem->images;
                                @endphp
                                @if($images->count()==1)
                                    <div class="col-md-12 my-4">
                                        <img src="{!! $images->first()->thumbnail !!}" class="w-100 img-fluid z-depth-1 rounded-0" alt="{{$images->first()->alt}}">
                                    </div>
                                @elseif($images->count()>=2)
                                <!--Carousel Wrapper-->
                                    <div id="carousel-article-images" class="carousel slide carousel-fade" data-ride="carousel">
                                        <!--Indicators-->
                                        <ol class="carousel-indicators">
                                            @for($counter = 0 ; $counter<=$images->count()-1;$counter++)
                                                <li data-target="#carousel-article-images" data-slide-to="{!! $counter !!}" {!! (($counter==0)? 'class="active"' : '') !!}></li>
                                            @endfor

                                        </ol>
                                        <!--/.Indicators-->
                                        <!--Slides-->
                                        <div class="carousel-inner" role="listbox">
                                            @foreach($images as $image)
                                                <!--First slide-->
                                                    <div class="carousel-item {!! (($loop->index==0)  ? 'active' : '')!!}">
                                                        <img class="d-block w-100" src="{!! $image->thumbnail !!}"
                                                             alt="{!! $image->alt !!}">
                                                    </div>
                                            @endforeach
                                            <!--/First slide-->
                                        </div>
                                        <!--/.Slides-->
                                        <!--Controls-->
                                        <a class="carousel-control-prev" href="#carousel-article-images" role="button" data-slide="prev">
                                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                            <span class="sr-only">Previous</span>
                                        </a>
                                        <a class="carousel-control-next" href="#carousel-article-images" role="button" data-slide="next">
                                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                            <span class="sr-only">Next</span>
                                        </a>
                                        <!--/.Controls-->
                                    </div>
                                    <!--/.Carousel Wrapper-->
                                @endif
                                <!-- Section heading -->
                                <h1 class="text-center h1 pt-4 mb-3">
                                    <strong>{{$articleItem->title}}</strong>
                                </h1>

                                <div class="row">
                                    <div class="col-md-12 col-xl-12 d-flex justify-content-center">
                                        <p class="font-small dark-grey-text mb-1">
                                            <strong>Author:</strong> {{$articleItem->author->name}}</p>
                                        <p class="font-small grey-text mb-0 ml-3">
                                            <i class="far fa-clock-o dark-grey-text"></i> {{$articleItem->published_at}} --- {{ now()->timestamp(strtotime($articleItem->published_at))->ago() }}</p>

                                        <a href="#!" class="dark-grey-text">
                                            <i class="far fa-comments pr-2 pl-3"></i>
                                            {!! $articleItem->comments_count_id !!}
                                        </a>
                                    </div>
                                </div>

                                <!-- Grid row -->
                                <div class="row pt-lg-5 pt-3">

                                    <!-- Grid column -->
                                    <div class="col-md-12 col-xl-12">
                                        <form>




                                            <!-- Grid row -->
                                            <div class="row my-5">
                                                {{$articleItem->body}}


                                            </div>
                                            <!-- Grid row -->
                                            <!-- Main wrapper -->
                                            <div class="comments-list text-center text-md-left">
                                                <div class="text-center my-5">
                                                    <h3 class="font-weight-bold">Author
                                                    </h3>
                                                </div>
                                                <!-- First row -->
                                                <div class="row mb-5">
                                                    <!-- Image column -->

                                                        @php
                                                            /** @var \Illuminate\Database\Eloquent\Collection $authorThumbnails*/
                                                            $authorThumbnails =$articleItem
                                                                                ->author
                                                                                ->thumbnails;
                                                        @endphp
                                                        @if($authorThumbnails->isEmpty())
                                                                <img class="w100 avatar avatar-img" src="{!! asset('assets/nerdPanda/img/defualt2.png') !!}" alt="{{$articleItem->author->name}}">
                                                        @elseif($authorThumbnails->count()==1)
                                                            <div class="row">
                                                                <!-- Image column -->
                                                                <div class="col-sm-2 col-12 mb-3">
                                                                    <img src="{!! $authorThumbnails->first()->thumbnail !!}" alt="{{$articleItem->author->name}}" class="avatar rounded-circle z-depth-1-half">
                                                                </div>
                                                                <!-- Image column -->


                                                            </div>

                                                        @else
                                                        <div class="col-sm-2 col-12 mb-3">
                                                        <!--Carousel Wrapper-->
                                                            <div id="carousel-author" class="carousel slide carousel-fade w-100 h-100" data-ride="carousel">

                                                                <!--Slides-->
                                                                <div class="carousel-inner w-100 h-100" role="listbox">
                                                                    <!--First slide-->
                                                                    @foreach($authorThumbnails as $authorThumbnail)
                                                                        <div class="carousel-item {{(($loop->index==0) ? 'active' : '')}} w-100 h-100">
                                                                            <img class=" rounded-circle z-depth-1-half d-block w-100 h-100" src="{!! $authorThumbnail->thumbnail !!}"
                                                                                 alt="{{$articleItem->author->name}}">
                                                                        </div>
                                                                    @endforeach

                                                                    <!--/First slide-->
                                                                </div>
                                                                <!--/.Slides-->
                                                                <!--Controls-->
                                                                <a class="carousel-control-prev" href="#carousel-author" role="button" data-slide="prev">
                                                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                                                    <span class="sr-only">Previous</span>
                                                                </a>
                                                                <a class="carousel-control-next" href="#carousel-author" role="button" data-slide="next">
                                                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                                                    <span class="sr-only">Next</span>
                                                                </a>
                                                                <!--/.Controls-->
                                                            </div>
                                                            <!--/.Carousel Wrapper-->
                                                        </div>
                                                        @endif

                                                    <!-- Image column -->

                                                    <!-- Content column -->
                                                    <div class="col-sm-10 col-12">
                                                        <a>
                                                            <h5 class="user-name font-weight-bold">{{$articleItem->author->name}}</h5>
                                                        </a>
                                                        <div class="card-data">
                                                            <ul class="list-unstyled">
                                                                <li class="comment-date font-small">
                                                                    <i class="far fa-clock-o"></i> {{$articleItem->author->created_at}} ---- {{now()->timestamp(strtotime($articleItem->author->created_at))->ago()}}</li>
                                                            </ul>
                                                        </div>
                                                        <p class="dark-grey-text article">
                                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci blanditiis commodi deserunt ea eaque id iure libero minus molestias nisi, nostrum perspiciatis quas, quia sequi soluta, tempora vitae voluptas voluptates.
                                                        </p>
                                                    </div>
                                                    <!-- Content column -->
                                                </div>
                                                <!-- First row -->
                                            </div>
                                            <!-- Main wrapper -->
                                            <hr class="mt-5">

                                            <!-- Comments -->
                                            <section>

                                                <!-- Main wrapper -->
                                                <div class="comments-list text-center text-md-left">
                                                    <div class="text-center my-5">
                                                        <h3 class="font-weight-bold">Comments
                                                            <span class="badge indigo">{!! $articleItem->comments_count_id !!}</span>
                                                        </h3>
                                                    </div>

                                                    @php
                                                        /** @var \Illuminate\Database\Eloquent\Collection $comments*/
                                                        $comments = $articleItem->comments;
                                                    @endphp
                                                    @forelse($comments as $comment)
                                                        @php
                                                            /** @var \App\Models\User $writer*/
                                                            $writer = $comment->writer;
                                                            /** @var \Illuminate\Database\Eloquent\Collection $writerThumbnails*/
                                                            $writerThumbnails = $writer->thumbnails;
                                                        @endphp
                                                        <!-- Second row -->
                                                            <div class="row mb-5">
                                                                <!-- Image column -->
                                                                <div class="col-sm-2 col-12 mb-3">
                                                                    @if($writerThumbnails->isEmpty())
                                                                        <img src="{!! asset('assets/nerdPanda/img/defualt2.png') !!}"
                                                                         class="avatar rounded-circle z-depth-1-half" alt="sample image">
                                                                    @elseif($writerThumbnails->count()==1)
                                                                        <img src="{!! $writerThumbnails->first()->thumbnail !!}"
                                                                             class="avatar rounded-circle z-depth-1-half" alt="sample image">
                                                                    @else
                                                                    <!--Carousel Wrapper-->
                                                                        <div id="carousel-comment-{!! $loop->index !!}z" class="carousel slide carousel-fade" data-ride="carousel">
                                                                            <!--Slides-->
                                                                            <div class="carousel-inner" role="listbox">
                                                                                @foreach($writerThumbnails as $writerThumbnail)
                                                                                        <!--First slide-->
                                                                                            <div class="carousel-item {!! (($loop->index==0) ? 'active' : '') !!}">
                                                                                            <img class="d-block w-100" src="{!! $writerThumbnail->thumbnail !!}"
                                                                                                 alt="{{$writer->name}}">
                                                                                        </div>
                                                                                        <!--/First slide-->
                                                                                @endforeach
                                                                            </div>
                                                                            <!--/.Slides-->
                                                                            <!--Controls-->
                                                                            <a class="carousel-control-prev" href="#carousel-comment-{!! $loop->index !!}z" role="button" data-slide="prev">
                                                                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                                                                <span class="sr-only">Previous</span>
                                                                            </a>
                                                                            <a class="carousel-control-next" href="#carousel-comment-{!! $loop->index !!}z" role="button" data-slide="next">
                                                                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                                                                <span class="sr-only">Next</span>
                                                                            </a>
                                                                            <!--/.Controls-->
                                                                        </div>
                                                                        <!--/.Carousel Wrapper-->
                                                                    @endif

                                                                </div>
                                                                <!-- Image column -->

                                                                <!-- Content column -->
                                                                <div class="col-sm-10 col-12 mb-3">
                                                                    <a>
                                                                        <h5 class="user-name font-weight-bold">{{$writer->name}}</h5>
                                                                    </a>
                                                                    <div class="card-data">
                                                                        <ul class="list-unstyled">
                                                                            <li class="comment-date font-small">
                                                                                <i class="far fa-clock-o"></i> {{ $comment->created_at }} --- {!! now()->timestamp(strtotime($comment->created_at))->ago()!!}</li>
                                                                        </ul>
                                                                    </div>
                                                                    <p class="dark-grey-text article">
                                                                        {{$comment->comment}}
                                                                    </p>
                                                                </div>
                                                                <!-- Content column -->
                                                            </div>
                                                            <!-- Second row -->
                                                    @empty
                                                        <section class="alert-info alert text-center">
                                                            کامنتی وجود ندارد برای نمایش
                                                            شما اولین نفری باشید که کامنت میگذارید
                                                        </section>
                                                    @endforelse
                                                </div>
                                                <!-- Main wrapper -->

                                            </section>
                                            <!-- Comments -->
                                            <hr>


                                        </form>

                                    </div>
                                    <!-- Grid column -->

                                </div>
                                <!-- Grid row -->

                            </div>
                            <!-- Grid column -->

                        </div>
                        <!-- Grid row -->

                    </div>
                    <!-- Card -->
                </div>
                <!-- Grid column -->
            </div>
            <!-- Grid row -->
        </div>

    </main>
    <!-- Main Layout -->

    <!-- Footer -->
    <footer class="page-footer stylish-color mt-0 pt-0 text-center text-md-left">

        <!-- Footer Links -->
        <div class="container">

            <!-- First row -->
            <div class="row">

                <!-- First column -->
                <div class="col-md-12 py-4">

                    <div class="footer-socials mb-5 flex-center">

                        <!-- Facebook -->
                        <a class="fb-ic">
                            <i class="fab fa-facebook-f fa-lg white-text mr-md-5 mr-3 fa-lg"> </i>
                        </a>
                        <!-- Twitter -->
                        <a class="tw-ic">
                            <i class="fab fa-twitter fa-lg white-text mr-md-5 mr-3 fa-lg"> </i>
                        </a>
                        <!-- Google + -->
                        <a class="gplus-ic">
                            <i class="fab fa-google-plus-g fa-lg white-text mr-md-5 mr-3 fa-lg"> </i>
                        </a>
                        <!-- Linkedin -->
                        <a class="li-ic">
                            <i class="fab fa-linkedin-in fa-lg white-text mr-md-5 mr-3 fa-lg"> </i>
                        </a>
                        <!-- Instagram -->
                        <a class="ins-ic">
                            <i class="fab fa-instagram fa-lg white-text mr-md-5 mr-3 fa-lg"> </i>
                        </a>
                        <!-- Pinterest -->
                        <a class="pin-ic">
                            <i class="fab fa-pinterest fa-lg white-text fa-lg"> </i>
                        </a>
                    </div>
                </div>
                <!-- First column -->
            </div>
            <!-- First row -->
        </div>
        <!-- Footer Links -->

        <!-- Copyright -->
        <div class="footer-copyright text-center py-3">
            <div class="container-fluid">
                © 2019 Copyright: <a href="https://mdbootstrap.com/education/bootstrap/" target="_blank"> MDBootstrap.com </a>
            </div>
        </div>
        <!-- Copyright -->

    </footer>
    <!-- Footer -->

@endsection
