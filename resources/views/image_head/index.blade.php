@extends('dashboard')
@section('content_dashboard')



    <div class="main-panel">
        <div class="content-wrapper">
            <div class="page-header">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Tables</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Basic tables</li>
                    </ol>
                </nav>
            </div>
            @foreach($image_head as $imageHeads)
            <div class="card bg-dark text-black">
                <img class="card-img" src="{{$imageHeads->image}}" alt="Card image">
                <div class="card-img-overlay">
                    <h1 class="card-title text-dark">{{$imageHeads->name}}</h1>
                    <a href="{{route('image-head.edit',$imageHeads->id)}}" class="btn btn-primary">Edit</a>
                </div>
            </div>

            @endforeach
        </div>
    </div>


@endsection

