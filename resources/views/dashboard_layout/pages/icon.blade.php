@extends('dashboard')
@section('content_dashboard')
  <!-- partial -->
  <div class="main-panel">
    <div class="content-wrapper">
      <div class="page-header">
        <h3 class="page-title"> Cleaner List </h3>
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Tables</a></li>
            <li class="breadcrumb-item active" aria-current="page">Cleaner List</li>
          </ol>
        </nav>
      </div>
      <div class="row ">
        <div class="col-12 grid-margin">
          <div class="card">
            <div class="card-body">
              <h4 class="card-title">Cleaner Status</h4>
              <div class="table-responsive">
                <table class="table">
                  <thead>
                    <tr>
                      <th>
                        <div class="form-check form-check-muted m-0">
                          <label class="form-check-label">
                            <input type="checkbox" class="form-check-input">
                          </label>
                        </div>
                      </th>
                      <th> Client Name </th>
                      <th> Client No </th>
                      <th> Phone Number </th>
                      <th> Types </th>
                      <th> Locations </th>
                      <th> Join Date </th>
                      <th> Edit </th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>
                        <div class="form-check form-check-muted m-0">
                          <label class="form-check-label">
                            <input type="checkbox" class="form-check-input">
                          </label>
                        </div>
                      </td>
                      <td>
                        <img src="{{asset('assets/dashboard/images/faces/face1.jpg')}}" alt="image" />
                        <span class="pl-2">Henry Klein</span>
                      </td>
                      <td> 02312 </td>
                      <td> 092290584 </td>
                      <td> User </td>
                      <td> PhnomPenh... </td>
                      <td> 04 Dec 2019 </td>
                      <td>
                      <div class="dropdown">
                        <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuIconButton6" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          <i class="mdi mdi-security"></i>
                        </button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuIconButton6">
                          <h6 class="dropdown-header">Settings</h6>
                          <a class="dropdown-item" href="#">Edit</a>
                          <a class="dropdown-item" href="#">See Profile</a>
                          <a class="dropdown-item" href="#">Delate User</a>
                          <div class="dropdown-divider"></div>
                          <a class="dropdown-item" href="#">Separated link</a>
                        </div>
                      </div>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <div class="form-check form-check-muted m-0">
                          <label class="form-check-label">
                            <input type="checkbox" class="form-check-input">
                          </label>
                        </div>
                      </td>
                      <td>
                        <img src="{{asset('assets/dashboard/images/faces/face2.jpg')}}" alt="image" />
                        <span class="pl-2">Estella Bryan</span>
                      </td>
                      <td> 02312 </td>
                      <td> 000000000 </td>
                      <td> User </td>
                      <td> PhnomPenh... </td>
                      <td> 04 Dec 2019 </td>
                      <td>
                      <div class="dropdown">
                        <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuIconButton6" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          <i class="mdi mdi-security"></i>
                        </button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuIconButton6">
                          <h6 class="dropdown-header">Settings</h6>
                          <a class="dropdown-item" href="#">Edit</a>
                          <a class="dropdown-item" href="#">See Profile</a>
                          <a class="dropdown-item" href="#">Delate User</a>
                          <div class="dropdown-divider"></div>
                          <a class="dropdown-item" href="#">Separated link</a>
                        </div>
                      </div>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <div class="form-check form-check-muted m-0">
                          <label class="form-check-label">
                            <input type="checkbox" class="form-check-input">
                          </label>
                        </div>
                      </td>
                      <td>
                        <img src="{{asset('assets/dashboard/images/faces/face5.jpg')}}" alt="image" />
                        <span class="pl-2">Lucy Abbott</span>
                      </td>
                      <td> 02312 </td>
                      <td> $14,500 </td>
                      <td> App design </td>
                      <td> PhnomPenh... </td>
                      <td> 04 Dec 2019 </td>
                      <td>
                      <div class="dropdown">
                        <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuIconButton6" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          <i class="mdi mdi-security"></i>
                        </button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuIconButton6">
                          <h6 class="dropdown-header">Settings</h6>
                          <a class="dropdown-item" href="#">Edit</a>
                          <a class="dropdown-item" href="#">See Profile</a>
                          <a class="dropdown-item" href="#">Delate User</a>
                          <div class="dropdown-divider"></div>
                          <a class="dropdown-item" href="#">Separated link</a>
                        </div>
                      </div>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <div class="form-check form-check-muted m-0">
                          <label class="form-check-label">
                            <input type="checkbox" class="form-check-input">
                          </label>
                        </div>
                      </td>
                      <td>
                        <img src="{{asset('assets/dashboard/images/faces/face3.jpg')}}" alt="image" />
                        <span class="pl-2">Peter Gill</span>
                      </td>
                      <td> 02312 </td>
                      <td> $14,500 </td>
                      <td> Development </td>
                      <td> Online Payment </td>
                      <td> 04 Dec 2019 </td>
                      <td>
                      <div class="dropdown">
                        <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuIconButton6" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          <i class="mdi mdi-security"></i>
                        </button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuIconButton6">
                          <h6 class="dropdown-header">Settings</h6>
                          <a class="dropdown-item" href="#">Edit</a>
                          <a class="dropdown-item" href="#">See Profile</a>
                          <a class="dropdown-item" href="#">Delate User</a>
                          <div class="dropdown-divider"></div>
                          <a class="dropdown-item" href="#">Separated link</a>
                        </div>
                      </div>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <div class="form-check form-check-muted m-0">
                          <label class="form-check-label">
                            <input type="checkbox" class="form-check-input">
                          </label>
                        </div>
                      </td>
                      <td>
                        <img src="{{asset('assets/dashboard/images/faces/face4.jpg')}}" alt="image" />
                        <span class="pl-2">Sallie Reyes</span>
                      </td>
                      <td> 02312 </td>
                      <td> $14,500 </td>
                      <td> Website </td>
                      <td> Credit card </td>
                      <td> 04 Dec 2019 </td>
                      <td>
                      <div class="dropdown">
                        <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuIconButton6" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          <i class="mdi mdi-security"></i>
                        </button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuIconButton6">
                          <h6 class="dropdown-header">Settings</h6>
                          <a class="dropdown-item" href="#">Edit</a>
                          <a class="dropdown-item" href="#">See Profile</a>
                          <a class="dropdown-item" href="#">Delate User</a>
                          <div class="dropdown-divider"></div>
                          <a class="dropdown-item" href="#">Separated link</a>
                        </div>
                      </div>
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-12 grid-margin stretch-card">
          <div class="card">
            <div class="card-body">
              <h4 class="card-title">Striped Table</h4>
              <p class="card-description"> Add class <code>.table-striped</code>
              </p>
              <div class="table-responsive">
                <table class="table table-striped">
                  <thead>
                    <tr>
                      <th> User </th>
                      <th> First name </th>
                      <th> Progress </th>
                      <th> Amount </th>
                      <th> Deadline </th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td class="py-1">
                        <img src="{{asset('assets/dashboard/images/faces-clipart/pic-1.png')}}" alt="image" />
                      </td>
                      <td> Herman Beck </td>
                      <td>
                        <div class="progress">
                          <div class="progress-bar bg-success" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                      </td>
                      <td> $ 77.99 </td>
                      <td> May 15, 2015 </td>
                    </tr>
                    <tr>
                      <td class="py-1">
                        <img src="{{asset('assets/dashboard/images/faces-clipart/pic-2.png')}}" alt="image" />
                      </td>
                      <td> Messsy Adam </td>
                      <td>
                        <div class="progress">
                          <div class="progress-bar bg-danger" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                      </td>
                      <td> $245.30 </td>
                      <td> July 1, 2015 </td>
                    </tr>
                    <tr>
                      <td class="py-1">
                        <img src="../../assets/images/faces-clipart/pic-3.png" alt="image" />
                      </td>
                      <td> John Richards </td>
                      <td>
                        <div class="progress">
                          <div class="progress-bar bg-warning" role="progressbar" style="width: 90%" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                      </td>
                      <td> $138.00 </td>
                      <td> Apr 12, 2015 </td>
                    </tr>
                    <tr>
                      <td class="py-1">
                        <img src="../../assets/images/faces-clipart/pic-4.png" alt="image" />
                      </td>
                      <td> Peter Meggik </td>
                      <td>
                        <div class="progress">
                          <div class="progress-bar bg-primary" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                      </td>
                      <td> $ 77.99 </td>
                      <td> May 15, 2015 </td>
                    </tr>
                    <tr>
                      <td class="py-1">
                        <img src="../../assets/images/faces-clipart/pic-1.png" alt="image" />
                      </td>
                      <td> Edward </td>
                      <td>
                        <div class="progress">
                          <div class="progress-bar bg-danger" role="progressbar" style="width: 35%" aria-valuenow="35" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                      </td>
                      <td> $ 160.25 </td>
                      <td> May 03, 2015 </td>
                    </tr>
                    <tr>
                      <td class="py-1">
                        <img src="../../assets/images/faces-clipart/pic-2.png" alt="image" />
                      </td>
                      <td> John Doe </td>
                      <td>
                        <div class="progress">
                          <div class="progress-bar bg-info" role="progressbar" style="width: 65%" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                      </td>
                      <td> $ 123.21 </td>
                      <td> April 05, 2015 </td>
                    </tr>
                    <tr>
                      <td class="py-1">
                        <img src="../../assets/images/faces-clipart/pic-3.png" alt="image" />
                      </td>
                      <td> Henry Tom </td>
                      <td>
                        <div class="progress">
                          <div class="progress-bar bg-warning" role="progressbar" style="width: 20%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                      </td>
                      <td> $ 150.00 </td>
                      <td> June 16, 2015 </td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- content-wrapper ends -->
    <!-- partial:../../partials/_footer -->
    @include('dashboard_layout.partials._footer')
    <!-- partial -->
  </div>
  @endsection   