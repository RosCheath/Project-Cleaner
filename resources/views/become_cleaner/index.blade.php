@extends('dashboard')
@section('content_dashboard')
    <!-- partial -->
    <div class="main-panel">
        <div class="content-wrapper">
            <div class="page-header">
                <h3 class="page-title"><a class="btn btn-primary" href="#"> Create Cleaner </a></h3>
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
                                        <th> Name </th>
                                        <th> Price </th>
                                        <th> Title 1 </th>
                                        <th> Title 2 </th>
                                        <th> Title 3 </th>
                                        <th> Title 4 </th>
                                        <th> Edit </th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($becom_cleaner as $com_cleaner)
                                        <tr>
                                            <td>
                                                <span class="pl-2">{{$com_cleaner->name}}</span>
                                            </td>
                                            <td> {{$com_cleaner->price}} </td>
                                            <td> {{$com_cleaner->title1}} </td>
                                            <td> {{$com_cleaner->title2}} </td>
                                            <td> {{$com_cleaner->title3}} </td>
                                            <td> {{$com_cleaner->title4}} </td>

                                            <td>
                                                <div class="dropdown">
                                                    <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuIconButton6" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                        <i class="mdi mdi-security"></i>
                                                    </button>
                                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuIconButton6">
                                                        <a class="dropdown-item" href="{{route('becom-cleaner.edit',$com_cleaner->id)}}">Edit</a>
                                                        <a class="dropdown-item" href="#">See Profile</a>
                                                        <form action="{{ route('becom-cleaner.destroy',$com_cleaner->id) }}" method="POST">
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
            {{ $becom_cleaner->links() }}
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
