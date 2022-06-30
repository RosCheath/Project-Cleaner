@extends('dashboard')
@section('content_dashboard')


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
        <form method="POST" action="{{route('image-head.update',$image_head->id)}}" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="exampleInputName1">Name</label>
                <input type="text" class="form-control " name="name" id="name" required placeholder="Name">
            </div>
        <input type="file" name="image" onchange="loadFile(event)">
        <img id="output"  width="800px" height="600px"/>

        <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
</div>

@endsection

<script>
    var loadFile = function(event) {
        var output = document.getElementById('output');
        output.src = URL.createObjectURL(event.target.files[0]);
        output.onload = function() {
            URL.revokeObjectURL(output.src) // free memory
        }
    };
</script>
