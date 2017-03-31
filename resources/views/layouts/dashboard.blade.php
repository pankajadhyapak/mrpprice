@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-2" >

                <ul class="nav nav-pills nav-stacked" style="background: #fff">
                  <li role="presentation"><a href="{{url("/sellers")}}">Sellers</a></li>
                  <li role="presentation"><a href="{{url("/users")}}">Users</a></li>
                </ul>
            </div> 
            <div class="col-md-10">
                @yield('dashcontent')
            </div> 
        </div>
    </div>
@endsection
