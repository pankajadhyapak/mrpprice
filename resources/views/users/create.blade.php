@extends('layouts.dashboard')

@section('dashcontent')
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>
                <div class="panel-body">
                    @include('layouts.errors')
                    <form action="{{ url("/users") }}" enctype="multipart/form-data" method="POST">
                        @include('users.form')
                    </form>
                </div>
            </div>
@endsection
