@extends('dashboard')
@section('content_dashboard')
    <!-- partial -->
    <div class="main-panel">
        <div class="content-wrapper">
            <div class="page-header">
                <h3 class="page-title"> Update Cleaner </h3>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                            <form method="POST" action="{{ route('admin-cleaner.update',$admin_cleaner->id)}}" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">update Cleaner</li>
                    </ol>
                </nav>
            </div>
z
            <div class="row">
                <div class="col-12 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Update Cleaner</h4>
                            <p class="card-description"> Update Cleaner </p>
                            <form class="forms-sample">
                                <div class="form-group">
                                    <label for="exampleInputName1">Name</label>
                                    <input type="text" class="form-control " name="name" value="{{$admin_cleaner->name}}" id="name" placeholder="Name">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail3">Email address</label>
                                    <input type="email" class="form-control " name="email" value="{{$admin_cleaner->email}}" id="email" placeholder="Email">
                                </div>
                                <div class="form-group">
                                    <label for="date_of_birth">date</label>
                                    <input type="date" class="form-control" name="date_of_birth" value="{{$admin_cleaner->date_of_birth}}" id="date_of_birth" placeholder="Date of Birth">

                                </div>
                                <div class="form-group">
                                    <label for="exampleSelectGender">Gender</label>
                                    <select class="form-control" name="sex" id="sex" value="{{ $admin_cleaner->sex }}">
                                        <option value="Female" @if($admin_cleaner->sex == "Female") selected @endif>Female</option>
                                        <option value="Male" @if($admin_cleaner->sex == "Male") selected @endif>Male</option>
                                    </select>
                                </div>
                                <input type="file" class="image" name="image" value="{{$admin_cleaner->image}}">
                                <div class="form-group">
                                    <label for="exampleInputCity1">Phone</label>
                                    <input type="text" class="form-control" name="phone" value="{{$admin_cleaner->phone}}" id="phone" placeholder="Phone Number">
                                </div>

                                <div class="form-group">
                                    <label for="exampleInputCity1">ID Cars</label>
                                    <input type="text" class="form-control" name="id_card" value="{{$admin_cleaner->id_card}}" id="id_card" placeholder="ID Card">
                                </div>

                                <div class="form-group">
                                    <label for="exampleInputCity1">Position</label>
                                    <input type="text" class="form-control" name="position" value="{{$admin_cleaner->position}}" id="position" placeholder="Position">
                                </div>

                                <div class="form-group">
                                    <label for="exampleSelectGender">Role</label>
                                    <select class="form-control" name="role" id="role" value="{{$admin_cleaner->role}}">
                                        <option value="Cleaner" @if($admin_cleaner->role == "Cleaner") selected @endif>Cleaner</option>
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label for="exampleSelectGender">Status</label>
                                    <select class="form-control" name="status" id="status" value="{{$admin_cleaner->status}}">
                                        <option value="low" @if($admin_cleaner->status == "low") selected @endif>Low</option>
                                        <option value="hight" @if($admin_cleaner->status == "hight") selected @endif>Hight</option>
                                    </select>
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
