<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Hello</div>
                <div class="card-body">

                    {!! $user->name !!}
                    <br>
                    {!! $location !!}
                    <br>
                    {!! $telegram !!}
                    <br>
                    {!! $date !!}
                    <br>
                    {!! $time !!}
                    <br>

                    <hr>
                    Your Booking has {{$status_type}} !!
                </div>
            </div>
        </div>
    </div>
</div>
