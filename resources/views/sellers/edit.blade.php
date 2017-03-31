@extends('layouts.dashboard')

@section('dashcontent')
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>
                <div class="panel-body">
                    @include('layouts.errors')
                    <form action="{{ url("/sellers/$seller->id") }}" enctype="multipart/form-data" method="POST">
                            {{method_field('PATCH') }}
                            @include('sellers.form')
                    </form>
                </div>
            </div>
@endsection
