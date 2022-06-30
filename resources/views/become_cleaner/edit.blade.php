@extends('dashboard')
@section('content_dashboard')
    <!-- partial -->
    <div class="main-panel">
        <div class="content-wrapper">
            <div class="page-header">
                <h3 class="page-title"> Add Cleaner </h3>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                            <form method="POST" action="{{ route('becom-cleaner.update',$becom_cleaner->id)}}" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">Form Add</li>
                    </ol>
                </nav>
            </div>

            <div class="row">
                <div class="col-12 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Create Users</h4>
                            <p class="card-description"> Create Users </p>
                            <form class="forms-sample">
                                <div class="form-group">
                                    <label for="exampleInputName1">Name</label>
                                    <input type="text" class="form-control " name="name" value="{{$becom_cleaner->name}}" id="name" placeholder="Name">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputName1">price</label>
                                    <input type="text" class="form-control " name="price" value="{{$becom_cleaner->price}}" id="price" placeholder="price">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail3">title1</label>
                                    <input type="text" class="form-control " name="title1" value="{{$becom_cleaner->title1}}" id="title1" placeholder="title1">
                                </div>
                                <div class="form-group">
                                    <label for="date_of_birth">title2</label>
                                    <input type="text" class="form-control" name="title2" value="{{$becom_cleaner->title2}}" id="title2" placeholder="title2">

                                </div>

                                <div class="form-group">
                                    <label for="exampleInputCity1">title3</label>
                                    <input type="text" class="form-control" name="title3" value="{{$becom_cleaner->title3}}" id="title4" placeholder="title4">
                                </div>

                                <div class="form-group">
                                    <label for="exampleInputCity1">title4</label>
                                    <input type="text" class="form-control" name="title4" value="{{$becom_cleaner->title4}}" id="title4" placeholder="title4">
                                </div>

                                <button type="submit" class="btn btn-primary mr-2">Update</button>
                                <button class="btn btn-dark">Cancel</button>
                            </form>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <!-- content-wrapper ends -->

        @include('dashboard_layout.partials._footer')
        <!-- partial -->
    </div>
    <!-- main-panel ends -->

@endsection
