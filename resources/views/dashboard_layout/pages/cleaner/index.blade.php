@extends('dashboard')
@section('content_dashboard')
    <!-- partial -->
    <div class="main-panel">
        <div class="content-wrapper">
            <div class="page-header">z
                <h3 class="page-title"><a class="btn btn-primary" href="{{route('admin-cleaner.create')}}"> Create Cleaner </a></h3>
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
{{--                            <input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search for names.." title="Type in a name">--}}

                            <div class="input-group">
                                <div class="form-outline" >
                                    <input type="search" id="myInput" onkeyup="myFunction()" class="form-control" placeholder="Search for names.." />
                                </div>
                            </div>

                            <div class="table-responsive">
                                <table class="table" id="myTable">
                                    <thead>
                                    <tr>
                                        <th> Name </th>
                                        <th> Email </th>
                                        <th> Phone Number </th>
                                        <th> Sex </th>
                                        <th> Age </th>
                                        <th> Edit </th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($cleaner as $cleaners)
                                    <tr>
                                        <td>
                                                <img src="{{ $cleaners->image}}" />
                                            <span class="pl-2">{{$cleaners->name}}</span>
                                        </td>
                                        <td> {{$cleaners->email}} </td>
                                        <td> {{$cleaners->phone}} </td>
                                        <td> {{$cleaners->sex}} </td>
                                        <td> {{\Carbon\Carbon::parse($cleaners->date_of_birth)->diff(\Carbon\Carbon::now())->format('%Y years')}}</td> {{-- '%y years, %m months and %d days' --}}

                                        <td>
                                            <div class="dropdown">
                                                <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuIconButton6" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    <i class="mdi mdi-security"></i>
                                                </button>
                                                <div class="dropdown-menu" aria-labelledby="dropdownMenuIconButton6">
                                                    <a class="dropdown-item" href="{{route('admin-cleaner.edit',$cleaners->id)}}">Edit</a>
                                                    <a class="dropdown-item" href="#">See Profile</a>
                                                    <form action="{{ route('admin-cleaner.destroy',$cleaners->id) }}" method="POST">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" class="dropdown-item">Delete User</button>
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
            {{ $cleaner->links() }}

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
