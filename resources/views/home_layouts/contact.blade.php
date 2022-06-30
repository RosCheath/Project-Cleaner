@extends('welcome_home_layout')
@section('content')
@foreach($contactimage as $contactimage)
    <section class="hero-wrap hero-wrap-2" style="background-image: url('{{$contactimage->image}}');" data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text js-fullheight align-items-end justify-content-center">
                <div class="col-md-9 ftco-animate pb-5 text-center">
                    <h2 class="mb-0 bread">Blog</h2>
                    <p class="breadcrumbs"><span class="mr-2"><a href="{{route('home')}}">Home <i class="ion-ios-arrow-round-forward"></i></a></span> <span>Blog <i class="ion-ios-arrow-round-forward"></i></span></p>
                </div>
            </div>
        </div>
    </section>
@endforeach
    <section class="ftco-section ftco-degree-bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 ftco-animate">
                    <div class="row">
                        @foreach($blog as $blog)
                        <div class="col-md-12 d-flex ftco-animate">
                            <div class="blog-entry align-self-stretch d-md-flex">
                                <img href="#" class="block-20" src="{{$blog->image}}" style="width: 700px;height: 300px">
                                </img>
                                <div class="text d-block pl-md-4">
                                    <div class="meta mb-3">
                                        <div><a href="#">{{$blog->created_at}}</a></div>
                                    </div>
                                    <h3 class="heading"><a href="#">{{$blog->name}}</a></h3>
{{--                                    <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>--}}
                                    <p>{{$blog->title}}</p>
                                    <p><a href="#" class="btn btn-primary py-2 px-3">Read more</a></p>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>

                </div> <!-- .col-md-8 -->
                <div class="col-lg-4 sidebar ftco-animate">
                    <div class="sidebar-box bg-light">
                        <h4>Contact Us</h4>
                        <form action="{{route('user.contacts')}}" method="POST" class="search-form bg-light">
                            @csrf
                            <div class="form-group">
                                <span class="icon ion-ios-contacts"></span>
                                <input type="text" name="name" class="form-control" placeholder="Your Name">
                            </div>
                            <div class="form-group">
                                <span class="icon ion-ios-mail"></span>
                                <input type="email" name="email" class="form-control" placeholder="Your Email">
                            </div>
                            <div class="form-group">
                                <span class="icon ion-ios-send"></span>
                                <input type="text" name="telegram" class="form-control" placeholder="Telegram">
                            </div>
                            <div class="form-group">
                                <span class="icon ion-ios-text"></span>
                                <textarea type="text" name="message" class="form-control" placeholder="Title"></textarea>
                            </div>
                            <button type="submit" class="btn btn-primary">Send</button>
                        </form>
                    </div>

                </div>

            </div>
        </div>
    </section> <!-- .section -->
@endsection
