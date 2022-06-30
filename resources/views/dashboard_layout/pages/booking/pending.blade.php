@extends('dashboard')
@section('content_dashboard')

  <!-- partial -->
  <div class="main-panel">
    <div class="content-wrapper">
      <div class="page-header">
        <h3 class="page-title"> Basic Tables </h3>
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Tables</a></li>
            <li class="breadcrumb-item active" aria-current="page">Basic tables</li>
          </ol>
        </nav>
      </div>
      <div class="row ">
        <div class="col-12 grid-margin">
          <div class="card">
            <div class="card-body">
              <h4 class="card-title">Book Status</h4>
                <div class="input-group">
                    <div class="form-outline" >
                        <input type="search" id="myInput" onkeyup="myFunction()" class="form-control" placeholder="Search for names.." />
                    </div>
                </div>
              <div class="table-responsive">
                <table class="table" id="myTable">
                  <thead>
                    <tr>
                      <th> Client Name </th>
                      <th> Email </th>
                      <th> Telegram </th>
                      <th> Service </th>
                      <th> Locations </th>
                      <th> Book Date </th>
                      <th> Book Status </th>
                    </tr>
                  </thead>
                  <tbody>
                  @foreach($pending as $pending)
                    <tr>

                      <td>
                        <img src="{{$pending->user->image}}" alt="image" />
                        <span class="pl-2">{{$pending->service->name}}</span>
                      </td>
                      <td> {{$pending->user->email}} </td>
                      <td> {{$pending->telegram}} </td>
                      <td> {{$pending->service->name}} </td>
                      <td> {{$pending->location}}</td>
                      <td> {{$pending->date}} </td>
                      <td>
{{--                          <div class="badge badge-outline-warning">{{$pending->status_type}}</div>--}}
                          <div class="dropdown">
                              <button class="badge badge-outline-warning dropdown-toggle" type="button" id="dropdownMenuIconButton6" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                  <a>{{$pending->status_type}}</a>
                              </button>
                              <div class="dropdown-menu" aria-labelledby="dropdownMenuIconButton6">
                                  <form method="POST" action="{{ route('pending.update',$pending->id)}}" enctype="multipart/form-data">
                                      @csrf
                                      @method('PUT')
                                      <input type="hidden" class="form-control " name="status_type" value="Approved" id="name" placeholder="Name">
                                      <input type="hidden" class="form-control" name="location" id="location" value="{{$pending->location}}" placeholder="Location">
                                      <input type="hidden" class="form-control" name="telegram" id="telegram" value="{{$pending->telegram}}" placeholder="Telegram Phone">
                                      <input type="hidden" class="form-control" value="{{$pending->date}}" name="date" placeholder="Date">
                                      <input type="hidden" name="user_id" value="{{$pending->user_id}}">
                                      <input type="hidden" name="service_id" value="{{$pending->service_id}}">
                                      <input type="hidden" name="status_type" value="Approved">
                                      <input type="hidden" class="form-control" value="{{$pending->time}}" name="time" placeholder="Time">
                                      <input type="hidden" class="form-control" value="{{$pending->service->id}}" name="time" placeholder="Time">
                                      <button type="submit" class="dropdown-item">Approved</button>
                                  </form>
                              </div>
                          </div>
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
    </div>
    <!-- content-wrapper ends -->
    <!-- partial:../../partials/_footer -->
    @include('dashboard_layout.partials._footer')
    <!-- partial -->
  </div>
  <!-- main-panel ends -->

@endsection
<script>
    function myFunction() {
        var input, filter, table, tr, td, i, txtValue;
        input = document.getElementById("myInput");
        filter = input.value.toUpperCase();
        table = document.getElementById("myTable");
        tr = table.getElementsByTagName("tr");
        for (i = 0; i < tr.length; i++) {
            td = tr[i].getElementsByTagName("td")[0];
            if (td) {
                txtValue = td.textContent || td.innerText;
                if (txtValue.toUpperCase().indexOf(filter) > -1) {
                    tr[i].style.display = "";
                } else {
                    tr[i].style.display = "none";
                }
            }
        }
    }
</script>
