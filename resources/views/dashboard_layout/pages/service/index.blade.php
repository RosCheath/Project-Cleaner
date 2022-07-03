@extends('dashboard')
@section('content_dashboard')
    <!-- partial -->
    <div class="main-panel">
        <div class="content-wrapper">
            <div class="page-header">
                <h3 class="page-title"><a class="btn btn-primary" href="{{route('service.create')}}"> Add Services </a></h3>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Service</li>
                    </ol>
                </nav>
            </div>
            <body>
            <div class="row row-cols-1 row-cols-md-3">
                @foreach($service as $service)
                <div class="col mb-4">

                    <div class="card h-100">
                        <img src="{{ $service->image}}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h2 class="card-title">{{$service->name}}</h2>
                            <h5 class="card-title">${{$service->price}}</h5>
                            <p class="card-text">{{$service->title}}</p>
                        </div>
                        <div class="card-footer">
                            <a href="{{route('service.edit',$service->id)}}" class="btn btn-primary">Edit</a>
                            <a href="{{route('service.show',$service->id)}}" class="btn btn-success">Show</a>
                            <form action="{{ route('service.destroy',$service->id) }}" method="POST">
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

            <div class="row ">
                <div class="col-12 grid-margin">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Soft Delete</h4>
                            {{--                            <input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search for names.." title="Type in a name">--}}

                            <div class="input-group">
                                <div class="form-outline" >
                                    <input type="search" id="myInput11" onkeyup="myFunction1()" class="form-control" placeholder="Search for names.." />
                                </div>
                            </div>

                            <div class="table-responsive">
                                <table class="table" id="myTable">
                                    <thead>
                                    <tr>
                                        <th> Image </th>
                                        <th> Name </th>
                                        <th> Price </th>
                                        <th> Edit </th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($onlySoftDeleted as $SoftDeleted)
                                        <tr>
                                            <td>
                                                <img src="{{ $SoftDeleted->image}}" />
                                            </td>
                                            <td> {{$SoftDeleted->name}} </td>
                                            <td> {{$SoftDeleted->price}} </td>

                                            <td>

                                            </td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
@endsection
