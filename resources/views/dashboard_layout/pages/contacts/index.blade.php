@extends('dashboard')
@section('content_dashboard')
    <!-- partial -->
    <div class="main-panel">
        <div class="content-wrapper">
            <div class="page-header">
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
                                        <th> Telegram </th>
                                        <th> Date Send </th>
                                        <th> Edit </th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($contact_admin as $contact)
                                    <tr>
                                        <td>
                                                <img src="https://play-lh.googleusercontent.com/xa2Jz8JUvubis7d92oPMu6vuBRKbphARTYwgNeJ3DEAwJbfKEze0xt7WlOL691AFWf8" />
                                            <span class="pl-2">{{$contact->name}}</span>
                                        </td>
                                        <td> {{$contact->email}} </td>
                                        <td> {{$contact->telegram}} </td>
                                        <td> {{$contact->created_at->format('Y-m-d')}} </td>
                                        <td>
                                            <a href="{{route('contact-admin.show',$contact->id)}}" class="btn btn-primary">Show</a>
                                        </td>
                                        <td> {{$contact->created_at->diffForHumans()}} </td>
                                    </tr>

                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            {{ $contact_admin->links() }}

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
