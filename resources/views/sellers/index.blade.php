@extends('layouts.dashboard')

@section('dashcontent')
            <div class="panel panel-default">
                <div class="panel-heading">
                  All Sellers
                  <a class="pull-right btn btn-primary btn-sm" href="{{url("/sellers/create")}}">Create New Seller</a>
                </div>
                <div class="panel-body">
                    <table class="table table-striped">
                       <thead>
                          <tr>
                             <th>Id</th>
                             <th>Name</th>
                             <th>Url</th>
                             <th>Address</th>
                             <th>Affilated Link</th>
                             <th>Remarks</th>
                             <th>Active</th>
                             <th>Logo</th>
                             <th>Actions</th>
                          </tr>
                       </thead>
                       <tbody>
                          @foreach($sellers as $seller)
                              <tr>
                                 <th scope="row">{{ $seller->id }}</th>
                                 <td>{{ $seller->name }}</td>
                                 <td>{{ $seller->url }}</td>
                                 <td>{{ $seller->address }}</td>
                                 <td>{{ $seller->affiliated_link }}</td>
                                 <td>{{ $seller->remarks }}</td>
                                 <td>{{ $seller->status }}</td>
                                 <td>{{ $seller->logo_image }}</td>
                                 <td>
                                     <a href="{{url("/sellers/$seller->id/edit")}}">Edit</a>
                                     <a href="{{url("/sellers/$seller->id/delete")}}">Delete</a>
                                 </td>
                              </tr>
                          @endforeach
                       </tbody>
                    </table>
                    {{ $sellers->links() }}
                </div>
            </div>
@endsection
