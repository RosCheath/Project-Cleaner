@extends('welcome_home_layout')
@section('content')
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
<link rel="stylesheet" href="booking.css">
<div class="wrap cf">
{{--    <h1 class="projTitle">Responsive Table<span>-Less</span> Shopping Cart</h1>--}}
    <div class="heading cf">
        <h1>My Cart</h1>
        <a href="services" class="continue">Continue Booking</a>
    </div>
    <div class="cart">
        <ul class="cartWrap">
            @foreach($booking_1 as $booking)
                @can('view', $booking)
            <li class="items even">
                <div class="infoWrap">
                    <div class="cartSection">

{{--                        <img src="{{$booking->service->image}}" alt="" class="itemImg" />--}}
                        <p class="itemNumber">#QUE-007544-002</p>
                        <h3>{{$booking->service->name}}</h3>

                        <p> <a placeholder="3"/> {{$booking->date}} </p>

                        <p class="stockStatus1">{{$booking->status_type}}</p>
                    </div>
                        <p>{{$booking->service->price}} $</p>
                    <div class="removeWrap">
                        <a href="{{route('invoice',$booking->id)}}" class="remove">Invoice</a>

                    </div>
                </div>
            </li>
                @endcan
                @endforeach
        </ul>
    </div>


{{--    <div class="subtotal cf">--}}
{{--            <li class="totalRow"><span class="label">Total</span><span class="value">$35.00</span></li>--}}
{{--    </div>--}}
{{--    <br>--}}
    <div class="cart">
        <ul class="cartWrap">
            @foreach($booking_2 as $booking)
                @can('view', $booking)
                    <li class="items even">
                        <div class="infoWrap">
                            <div class="cartSection">

                                {{--                        <img src="{{$booking->service->image}}" alt="" class="itemImg" />--}}
                                <p class="itemNumber">#QUE-007544-002</p>
                                <h3>{{$booking->service->name}}</h3>

                                <p> <a placeholder="3"/> {{$booking->date}} </p>

                                <p class="stockStatus">{{$booking->status_type}}</p>
                            </div>

                            <div class="removeWrap">
                                <p>{{$booking->service->price}} $</p>
                                <a href="{{route('invoice',$booking->id)}}" class="remove">Invoice</a>

                            </div>
                        </div>
                    </li>
                @endcan
            @endforeach
        </ul>
    </div>

</div>

<script>
    // Remove Items From Cart
    $('a.remove').click(function(){
        event.preventDefault();
        $( this ).parent().parent().parent().hide( 400 );

    })

    // Just for testing, show all items
    $('a.btn.continue').click(function(){
        $('li.items').show(400);
    })

</script>
@endsection
