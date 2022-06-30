@extends('dashboard')
@section('content_dashboard')
    <!-- partial -->
    <div class="main-panel">
        <div class="content-wrapper">
            <div class="page-header">
                <h3 class="page-title"><a class="btn btn-primary" href="{{route('blog.create')}}"> Add Services </a></h3>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Service</li>
                    </ol>
                </nav>
            </div>
            <body>
            <div class="row row-cols-1 row-cols-md-3">
                @foreach($blog as $blog)
                    <div class="col mb-4">
                        <div class="card h-100">
                            <img src="{{ $blog->image}}" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h2 class="card-title">{{$blog->name}}</h2>
                                <p class="card-text">{{$blog->title}}</p>
                            </div>
                            <div class="card-footer">
                                <a href="{{route('blog.edit',$blog->id)}}" class="btn btn-primary">Edit</a>
                                <button type="button" class="btn btn-success">Show</button>
                                <form action="{{ route('blog.destroy',$blog->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn float-right"
                                            onclick="return confirm('Are you sure you want to Delete?');"
                                            id="btnDelete">
                                        Delete</button>
                                </form>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

@endsection
