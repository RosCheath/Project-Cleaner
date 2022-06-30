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
                <form method="POST" action="{{ route('users.store') }}" enctype="multipart/form-data">
                @csrf</li>
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
                  <input type="text" class="form-control " name="name" id="name" placeholder="Name">

                </div>
                <div class="form-group">
                  <label for="exampleInputEmail3">Email address</label>
                  <input type="email" class="form-control " name="email" id="email" placeholder="Email">

                </div>
                  <div class="form-group">
                      <label for="date_of_birth">date</label>
                      <input type="date" class="form-control"  name="date_of_birth" id="date_of_birth" placeholder="Date of Birth">

                  </div>
                <div class="form-group">
                  <label for="exampleSelectGender">Gender</label>
                  <select class="form-control" name="sex" id="sex">
                    <option>Male</option>
                    <option>Female</option>
                  </select>
                </div>
                  <input type="file" class="image" name="image">

                <div class="form-group">
                  <label for="exampleInputCity1">Phone</label>
                  <input type="text" class="form-control"  name="phone" id="phone" placeholder="Phone Number">

                </div>
                  <div class="form-group">
                      <label for="exampleSelectGender">Role</label>
                      <select class="form-control" name="role" id="role">
                          <option value="User" @if(Auth::user()->role == "User") selected @endif>user</option>
                          <option value="Cleaner" @if(Auth::user()->role == "Cleaner") selected @endif>Cleaner</option>
                      </select>
                  </div>
                  <div class="form-group">
                      <label for="password">Password</label>
                      <input type="password" class="form-control" name="password" id="password" required autocomplete="new-password" placeholder="password">

                  </div>
                  <div class="form-group">
                      <label for="Confirm password">Confirm Password </label>
                      <input type="password" class="form-control" name="password_confirmation" id="password-confirm" required autocomplete="new-password" placeholder="Confirm Password">
                  </div>
                <button type="submit" class="btn btn-primary mr-2">Submit</button>
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
