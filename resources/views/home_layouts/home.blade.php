@extends('welcome_home_layout')
@section('content')
@foreach($homeimage as $homeimage)
    <section class="hero-wrap js-fullheight" style="background-image: url({{$homeimage->image}});" data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text js-fullheight justify-content-center align-items-center">
                <div class="col-lg-12 ftco-animate d-flex align-items-center">
                    <div class="text text-center">
                        <span class="subheading">Welcome to Claner</span>
                        <h1 class="mb-4">{{$homeimage->name}}</h1>
                        <p><a href="#" class="btn btn-primary btn-outline-primary px-4 py-2">Book now</a></p>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endforeach

    <section class="services-section ftco-section">
        <div class="container">
            <div class="row justify-content-center pb-3">
                <div class="col-md-10 heading-section text-center ftco-animate">
                    <span class="subheading">Services &amp; Pricing</span>
                    <h2 class="mb-4">Services Menu &amp; Prices</h2>
                    <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia</p>

                </div>
            </div>
            <div class="container mt-5 mb-5">
                <div class="row g-2">
                    @foreach($home_service1 as $home_service1)
                    <div class="col-md-6">
                        <div class="card bg-white p-3 px-4 d-flex justify-content-center">

                            <h5 class="mb-0">{{$home_service1->name}}</h5> <span class="price">${{$home_service1->price}}</span>
                            <div class="mt-4">
                                <div class="d-flex justify-content-between align-items-center"> <span>All features</span> <span>1 Minute trigger</span> </div>
                                <div class="d-flex justify-content-between align-items-center"> <span>5000 interactions</span> <span>Remove branding</span> </div>
                                <div class="d-flex justify-content-between align-items-center"> <span>15 bots</span> <span>Priority support</span> </div>
                            </div>

                            <div class="mt-4"> <button class="btn btn-danger"  type="button" data-toggle="modal" data-target="#exampleModal1">Buy Service</button> </div>
                        </div>
                    </div>
                        <div class="modal fade" id="exampleModal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
                                <div class="modal-content ">
                                    <div class="container ftco-relative ">
                                        <div class="row justify-content-center pb-3">
                                            <div class="col-md-10 heading-section text-center ftco-animate">

                                                <h2 class="mb-4">Booking Service</h2>
                                                <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia</p>
                                            </div>
                                        </div>
                                        <h3 class="vr">Call Us: 012-3456-7890</h3>
                                        <div class="row justify-content-center">
                                            <div class="col-md-10 ftco-animate">
                                                <form class="appointment-form" method="post" action="{{ route('booking.store')}}">
                                                    @csrf

                                                    <div class="row">
                                                        <div class="col-sm-12">
                                                            <div class="form-group">
                                                                <input type="text" class="form-control" name="location" id="location" placeholder="Location">
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-6">
                                                            <div class="form-group">
                                                                <input type="text" class="form-control" name="telegram" id="telegram" placeholder="Telegram Phone">
                                                            </div>
                                                        </div>
                                                        <input type="hidden" class="form-control" name="service_id" id="service_id" value="{{$home_service1->id = '1'}}">
                                                    </div>
                                                    <div class="form-group">
                                                        <input type="submit" value="Booking Now" class="btn btn-primary">
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach

                        @foreach($home_service2 as $home_service2)
                            <div class="col-md-6">
                                <div class="card bg-white p-3 px-4 d-flex justify-content-center">

                                    <h5 class="mb-0">{{$home_service2->name}}</h5> <span class="price">${{$home_service2->price}}</span>
                                    <div class="mt-4">
                                        <div class="d-flex justify-content-between align-items-center"> <span>All features</span> <span>1 Minute trigger</span> </div>
                                        <div class="d-flex justify-content-between align-items-center"> <span>5000 interactions</span> <span>Remove branding</span> </div>
                                        <div class="d-flex justify-content-between align-items-center"> <span>15 bots</span> <span>Priority support</span> </div>
                                    </div>

                                    <div class="mt-4"> <button class="btn btn-danger"  type="button" data-toggle="modal" data-target="#exampleModal2">Buy Service</button> </div>
                                </div>
                            </div>
                            <div class="modal fade" id="exampleModal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
                                    <div class="modal-content ">
                                        <div class="container ftco-relative ">
                                            <div class="row justify-content-center pb-3">
                                                <div class="col-md-10 heading-section text-center ftco-animate">

                                                    <h2 class="mb-4">Booking Service</h2>
                                                    <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia</p>
                                                </div>
                                            </div>
                                            <h3 class="vr">Call Us: 012-3456-7890</h3>
                                            <div class="row justify-content-center">
                                                <div class="col-md-10 ftco-animate">
                                                    <form class="appointment-form" method="post" action="{{ route('booking.store')}}">
                                                        @csrf

                                                        <div class="row">
                                                            <div class="col-sm-12">
                                                                <div class="form-group">
                                                                    <input type="text" class="form-control" name="location" id="location" placeholder="Location">
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-6">
                                                                <div class="form-group">
                                                                    <input type="text" class="form-control" name="telegram" id="telegram" placeholder="Telegram Phone">
                                                                </div>
                                                            </div>
                                                                <input type="hidden" class="form-control" name="service_id" id="service_id" value="2">
                                                        </div>
                                                        <div class="form-group">
                                                            <input type="submit" value="Booking Now" class="btn btn-primary">
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                </div>
            </div>


        </div>
    </section>

    <section class="ftco-section ftco-booking bg-light">
        <div class="container ftco-relative">
            <div class="row justify-content-center pb-3">
                <div class="col-md-10 heading-section text-center ftco-animate">
                    <span class="subheading">Booking</span>
                    <h2 class="mb-4">Make an Appointment</h2>
                    <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia</p>
                </div>
            </div>
            <h3 class="vr">Call Us: 012-3456-7890</h3>
            <div class="row justify-content-center">
                <div class="col-md-10 ftco-animate">
                    <form action="#" class="appointment-form">
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <input type="text" class="form-control" id="appointment_name" placeholder="Name">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <input type="text" class="form-control" id="appointment_email" placeholder="Email">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <input type="text" class="form-control appointment_date" placeholder="Date">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <input type="text" class="form-control appointment_time" placeholder="Time">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <div class="select-wrap">
                                        <div class="icon"><span class="ion-ios-arrow-down"></span></div>
                                        <select name="" id="" class="form-control">
                                            <option value="">Professional Makeup</option>
                                            <option value="">Manicure Pedicure</option>
                                            <option value="">Body Treatment</option>
                                            <option value="">Haircut &amp; Coloring</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <input type="text" class="form-control" id="phone" placeholder="Phone">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <textarea name="" id="" cols="30" rows="7" class="form-control" placeholder="Message"></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <input type="submit" value="Make an Appointment" class="btn btn-primary">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-section ftco-team">
        <div class="container-fluid px-md-5">
            <div class="row justify-content-center pb-3">
                <div class="col-md-10 heading-section text-center ftco-animate">
                    <span class="subheading">Artistic Director</span>
                    <h2 class="mb-4">Our Services Provider</h2>
                    <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia</p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 ftco-animate">
                    <div class="carousel-team owl-carousel">
                        @foreach($cleaner_company as $cleaner_company)
                        <div class="item">
                            <a href="#" class="team text-center">
                                <div class="img" style="background-image: url({{$cleaner_company->image}});"></div>
                                <h2>{{$cleaner_company->name}}</h2>
                                <span class="position">{{$cleaner_company->position}}</span>
                            </a>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-section ftco-no-pt ftco-no-pb">
        <div class="container">
            <div class="row no-gutters justify-content-center mb-5 pb-2">
                <div class="col-md-6 text-center heading-section ftco-animate">
                    <span class="subheading">Gallery</span>
                    <h2 class="mb-4">Our gallery</h2>
                    <p>Separated they live in. A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
                </div>
            </div>
        </div>
        <div class="container-fluid p-0">
            <div class="row no-gutters">
                <div class="col-md-6 col-lg-3 ftco-animate">
                    <div class="project">
                        <img src="assets/home/images/work-1.jpg" class="img-fluid" alt="Colorlib Template">
                        <div class="text">
                            <span>TeamCleaning</span>
                            <h3><a href="project.html">Housekeeper</a></h3>
                        </div>
                        <a href="assets/home/images/work-1.jpg" class="icon image-popup d-flex justify-content-center align-items-center">
                            <span class="icon-expand"></span>
                        </a>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 ftco-animate">
                    <div class="project">
                        <img src="assets/home/images/work-2.jpg" class="img-fluid" alt="Colorlib Template">
                        <div class="text">
                            <span>TeamCleaning</span>
                            <h3><a href="project.html">Housekeeper</a></h3>
                        </div>
                        <a href="assets/home/images/work-2.jpg" class="icon image-popup d-flex justify-content-center align-items-center">
                            <span class="icon-expand"></span>
                        </a>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 ftco-animate">
                    <div class="project">
                        <img src="assets/home/images/work-3.jpg" class="img-fluid" alt="Colorlib Template">
                        <div class="text">
                            <span>TeamCleaning</span>
                            <h3><a href="project.html">Housekeeper</a></h3>
                        </div>
                        <a href="assets/home/images/work-3.jpg" class="icon image-popup d-flex justify-content-center align-items-center">
                            <span class="icon-expand"></span>
                        </a>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 ftco-animate">
                    <div class="project">
                        <img src="assets/home/images/work-4.jpg" class="img-fluid" alt="Colorlib Template">
                        <div class="text">
                            <span>TeamCleaning</span>
                            <h3><a href="project.html">Housekeeper</a></h3>
                        </div>
                        <a href="assets/home/images/work-4.jpg" class="icon image-popup d-flex justify-content-center align-items-center">
                            <span class="icon-expand"></span>
                        </a>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 ftco-animate">
                    <div class="project">
                        <img src="assets/home/images/work-5.jpg" class="img-fluid" alt="Colorlib Template">
                        <div class="text">
                            <span>TeamCleaning</span>
                            <h3><a href="project.html">Housekeeper</a></h3>
                        </div>
                        <a href="assets/home/images/work-5.jpg" class="icon image-popup d-flex justify-content-center align-items-center">
                            <span class="icon-expand"></span>
                        </a>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 ftco-animate">
                    <div class="project">
                        <img src="assets/home/images/work-6.jpg" class="img-fluid" alt="Colorlib Template">
                        <div class="text">
                            <span>Housekeeper</span>
                            <h3><a href="project.html">Model</a></h3>
                        </div>
                        <a href="assets/home/images/work-6.jpg" class="icon image-popup d-flex justify-content-center align-items-center">
                            <span class="icon-expand"></span>
                        </a>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 ftco-animate">
                    <div class="project">
                        <img src="assets/home/images/work-7.jpg" class="img-fluid" alt="Colorlib Template">
                        <div class="text">
                            <span>Housekeeper</span>
                            <h3><a href="project.html">Housekeeper</a></h3>
                        </div>
                        <a href="assets/home/images/work-7.jpg" class="icon image-popup d-flex justify-content-center align-items-center">
                            <span class="icon-expand"></span>
                        </a>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 ftco-animate">
                    <div class="project">
                        <img src="assets/home/images/work-8.jpg" class="img-fluid" alt="Colorlib Template">
                        <div class="text">
                            <span>Housekeeper</span>
                            <h3><a href="project.html">Housekeeper</a></h3>
                        </div>
                        <a href="assets/home/images/work-8.jpg" class="icon image-popup d-flex justify-content-center align-items-center">
                            <span class="icon-expand"></span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="testimony-section bg-light">
        <div class="container">
            <div class="row ftco-animate justify-content-center">
                <div class="col-md-6 col-lg-5 d-flex">
                    <div class="testimony-img" style="background-image: url(assets/home/images/testimony-img.jpg);"></div>
                </div>
                <div class="col-md-6 col-lg-7 py-5 pl-md-5">
                    <div class="py-md-5">
                        <div class="heading-section ftco-animate">
                            <span class="subheading">Testimony</span>
                            <h2 class="mb-0">Happy Customer</h2>
                        </div>
                        <div class="carousel-testimony owl-carousel ftco-animate">
                            <div class="item">
                                <div class="testimony-wrap pb-4">
                                    <div class="text">
                                        <p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                                    </div>
                                    <div class="d-flex">
                                        <div class="user-img" style="background-image: url(assets/home/images/stylist-1.jpg)">
                                        </div>
                                        <div class="pos ml-3">
                                            <p class="name">Jeff Nucci</p>
                                            <span class="position">Housekeeper</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="testimony-wrap pb-4">
                                    <div class="text">
                                        <p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                                    </div>
                                    <div class="d-flex">
                                        <div class="user-img" style="background-image: url(assets/home/images/stylist-2.jpg)">
                                        </div>
                                        <div class="pos ml-3">
                                            <p class="name">Jeff Nucci</p>
                                            <span class="position">Housekeeper</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="testimony-wrap pb-4">
                                    <div class="text">
                                        <p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                                    </div>
                                    <div class="d-flex">
                                        <div class="user-img" style="background-image: url(assets/home/images/stylist-3.jpg)">
                                        </div>
                                        <div class="pos ml-3">
                                            <p class="name">Jeff Nucci</p>
                                            <span class="position">Housekeeper</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="testimony-wrap pb-4">
                                    <div class="text">
                                        <p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                                    </div>
                                    <div class="d-flex">
                                        <div class="user-img" style="background-image: url(assets/home/images/stylist-4.jpg)">
                                        </div>
                                        <div class="pos ml-3">
                                            <p class="name">Jeff Nucci</p>
                                            <span class="position">Housekeeper</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="testimony-wrap pb-4">
                                    <div class="text">
                                        <p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                                    </div>
                                    <div class="d-flex">
                                        <div class="user-img" style="background-image: url(assets/home/images/stylist-5.jpg)">
                                        </div>
                                        <div class="pos ml-3">
                                            <p class="name">Jeff Nucci</p>
                                            <span class="position">Housekeeper</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<!--js not workimg in this page, corect it in home asset at js in file main.js   -->
@endsection
