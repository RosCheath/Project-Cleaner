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
                                <table class="table" id="myTable1">
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
                                    @foreach($approved as $approved)
                                        @can('cleaner_view',$approved)
                                        <tr>
                                            <td>
                                                <img src="{{$approved->user->image}}" alt="image" />
                                                <span class="pl-2">{{$approved->service->name}}</span>
                                            </td>
                                            <td> {{$approved->user->email}} </td>
                                            <td> {{$approved->telegram}} </td>
                                            <td> {{$approved->service->name}} </td>
                                            <td> {{$approved->location}}</td>
                                            <td> {{$approved->date}} </td>
                                            <td>
                                                <div class="badge badge-outline-success">{{$approved->status_type}}</div>
                                            </td>
                                        </tr>
                                        @endcan
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
