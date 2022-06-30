@extends('dashboard')
@section('content_dashboard')
    <!-- partial -->
    <div class="main-panel">
        <div class="content-wrapper">
            <div class="page-header">
                <h3 class="page-title"> Add Users </h3>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                            <form method="POST" action="{{ route('pending.update',$pending->id)}}" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">Form Add</li>
                    </ol>
                </nav>
            </div>
            @if ($message = Session::get('success'))
                <div class="alert alert-success">
                    <p>{{ $message }}</p>
                </div>
            @endif
            <div class="row">
                <div class="col-12 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Create Users</h4>
                            <p class="card-description"> Create Users </p>
                            <form class="forms-sample">
                                <div class="form-group">
                                    <label for="exampleInputName1">Name</label>
                                    <input type="text" class="form-control " name="status_type" value="Approved" id="name" placeholder="Name">
                                </div>


                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <input type="text" class="form-control" name="location" id="location" value="{{$pending->location}}" placeholder="Location">
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <input type="text" class="form-control" name="telegram" id="telegram" value="{{$pending->telegram}}" placeholder="Telegram Phone">
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <input type="date" class="form-control" value="{{$pending->date}}" name="date" placeholder="Date">
                                        </div>
                                    </div>
                                    <input type="hidden" name="user_id" value="{{$pending->user_id}}">
                                    <input type="hidden" name="service_id" value="{{$pending->service_id}}">
                                    <input type="hidden" name="status_type" value="Approved">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <input type="time" class="form-control" value="{{$pending->time}}" name="time" placeholder="Time">
                                        </div>
                                    </div>
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <div class="select-wrap">
                                                <div class="icon"><span class="ion-ios-arrow-down"></span></div>
                                                <select name="service_id" id="service_id" class="form-control">
                                                        <option value="{{$pending->service->id}}">{{$pending->service->name}}</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
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
