@extends('welcome_home_layout')
@section('content')
{{--    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">--}}
{{--    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">--}}
    @foreach($bookingimage as $bookingimage)
        <section class="hero-wrap hero-wrap-2" style="background-image: url({{$bookingimage->image}});" data-stellar-background-ratio="0.5">
            <div class="overlay"></div>
            <div class="container">
                <div class="row no-gutters slider-text js-fullheight align-items-end justify-content-center">
                    <div class="col-md-9 ftco-animate pb-5 text-center">
                        <h2 class="mb-0 bread">Booking</h2>
                        <p class="breadcrumbs"><span class="mr-2"><a href="{{route('home')}}">Home <i class="ion-ios-arrow-round-forward"></i></a></span> <span>Services <i class="ion-ios-arrow-round-forward"></i></span></p>
                    </div>
                </div>
            </div>
        </section>
    @endforeach
    <div class="container mt-5 mb-5">
        <div class="d-flex justify-content-center row">
            <div class="col-md-8">
                <div class="p-2">
                    <h4>Booking cart</h4>
{{--                    <div class="d-flex flex-row align-items-center pull-right"><span class="mr-1">Sort by:</span><span class="mr-1 font-weight-bold">Price</span><i class="fa fa-angle-down"></i></div>--}}
                </div>
                @foreach($booking_1 as $booking)
                    @can('view', $booking)
                <div class="d-flex flex-row justify-content-between align-items-center p-2 bg-white mt-4 px-3 rounded">
                    <div class="mr-1">{{$booking->service->name}}</div>
                    <div class="d-flex flex-column align-items-center product-details"><span class="font-weight-bold">{{$booking->location}}</span>
                        <div class="d-flex flex-row product-desc">
                            <div class="size mr-1"><span class="text-grey">Status:</span><span class="font-weight-bold">&nbsp;{{$booking->status_type}}</span></div>
{{--                            <div class="color"><span class="text-grey">Color:</span><span class="font-weight-bold">&nbsp;Grey</span></div>--}}
                        </div>
                    </div>
                    <a class="d-flex flex-row align-items-center qty" href="{{route('invoice',$booking->id)}}"><i class="fa fa-minus text-danger"></i>
                        <h5 class="text-grey mt-1 mr-1 ml-1">invoice</h5><i class="fa fa-plus text-success"></i></a>
                    <div>
                        <h5 class="text-grey">${{$booking->service->price}}</h5>
                    </div>
                    <div class="d-flex align-items-center"><i class="fa fa-trash mb-1 text-danger"></i></div>
                </div>
                    @endcan
                @endforeach
                @foreach($booking_2 as $booking)
                    @can('view', $booking)
                        <div class="d-flex flex-row justify-content-between align-items-center p-2 bg-white mt-4 px-3 rounded">
                            <div class="mr-1">{{$booking->service->name}}</div>
                            <div class="d-flex flex-column align-items-center product-details"><span class="font-weight-bold">{{$booking->location}}</span>
                                <div class="d-flex flex-row product-desc">
                                    <div class="size mr-1"><span class="text-grey">Status:</span><span class="font-weight-bold">&nbsp;{{$booking->status_type}}</span></div>
                                    {{--                            <div class="color"><span class="text-grey">Color:</span><span class="font-weight-bold">&nbsp;Grey</span></div>--}}
                                </div>
                            </div>
                            <a class="d-flex flex-row align-items-center qty" href="{{route('invoice',$booking->id)}}"><i class="fa fa-minus text-danger"></i>
                                <h5 class="text-grey mt-1 mr-1 ml-1">invoice</h5><i class="fa fa-plus text-success"></i></a>
                            <div>
                                <h5 class="text-grey">${{$booking->service->price}}</h5>
                            </div>
                            <div class="d-flex align-items-center"><i class="fa fa-trash mb-1 text-danger"></i></div>
                        </div>
                    @endcan
                @endforeach
            </div>
        </div>
    </div>
@endsection
<style>
    @import url('https://fonts.googleapis.com/css2?family=Manrope:wght@200&display=swap');

    body {
        font-family: 'Manrope', sans-serif;
        background:#eee;
    }

    .size span {
        font-size: 11px;
    }

    .color span {
        font-size: 11px;
    }

    .product-deta {
        margin-right: 70px;
    }

    .gift-card:focus {
        box-shadow: none;
    }

    .pay-button {
        color: #fff;
    }

    .pay-button:hover {
        color: #fff;
    }

    .pay-button:focus {
        color: #fff;
        box-shadow: none;
    }

    .text-grey {
        color: #a39f9f;
    }

    .qty i {
        font-size: 11px;
    }
</style>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
