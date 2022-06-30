@extends('dashboard')
@section('content_dashboard')
    <!-- partial -->
    <div class="main-panel">
        <div class="content-wrapper">
            <div class="page-header">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Service</li>
                    </ol>
                </nav>
            </div>
            <body>
                    <div class="col mb-4">
                        <div class="card h-100">
                            <img src="{{ $service->image}}" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h2 class="card-title">{{$service->name}}</h2>
                                <h5 class="card-title">${{$service->price}}</h5>
                                <p class="card-text">{{$service->title}}</p>
                            </div>
                        </div>
                    </div>



@endsection
