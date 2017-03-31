@extends('layouts.dashboard')

@section('dashcontent')
            <div class="panel panel-default">
                <div class="panel-heading">
                  All Users
                  <a class="pull-right btn btn-primary btn-sm" href="{{url("/users/create")}}">Create New User</a>

                </div>
                <div class="panel-body">
                    <table class="table table-striped">
                       <thead>
                          <tr>
                             <th>Id</th>
                             <th>Name</th>
                             <th>Email</th>
                             <th>Active</th>
                             <th>Last Updated</th>
                             
                             <th>Actions</th>
                          </tr>
                       </thead>
                       <tbody>
                          @foreach($users as $user)
                              <tr>
                                 <th scope="row">{{ $user->id }}</th>
                                 <td>{{ $user->name }}</td>
                                 <td>{{ $user->email }}</td>
                                 <td>{{ $user->active }}</td>
                                 <td>{{ $user->updated_at }}</td>
                                 <td>
                                     <a href="{{url("/users/$user->id/edit")}}">Edit</a>
                                     <a style="color: red" href="{{url("/users/$user->id/delete")}}">Delete</a>
                                 </td>
                              </tr>
                          @endforeach
                       </tbody>
                    </table>
                    {{ $users->links() }}
                </div>
            </div>
@endsection
