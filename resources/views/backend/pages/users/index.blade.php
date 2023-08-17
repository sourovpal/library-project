@extends('backend.layouts.master')

@section('content')
<div class="container-fluid" id="container-wrapper">
    <div class="card">
        <div class="card-body">
          @include('backend.partials.messages')
          <h4 class="header-title float-left">Users List</h4>
          <p class="float-right mb-2">
              <a class="btn btn-primary text-white" href="{{ route('admin.users.create') }}">Create New User</a>
          </p>
            <table class="table">
                <thead class="thead-light">
                    <tr>
                      <th width="5%">Sl</th>
                      <th width="10%">Name</th>
                      <th width="20%">Email</th>
                      <th width="40%">Role</th>
                      <th width="15%">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($users as $user)
                        <tr>
                            <td> {{$loop->index+1}} </td>
                            <td> {{ $user->name }} </td>
                            <td> {{ $user->email }} </td>
                            <td>
                              @foreach ($user->roles as $role)
                                  <span class="badge badge-info mr-1">
                                      {{ $role->name }}
                                  </span>
                              @endforeach
                            </td>
                            <td>
                                <a href=" {{ route('admin.users.edit', $user->id) }} " class="btn btn-primary"><i class="fas fa-edit"></i></a>
                                <a href="#deleteModal{{ $user->id }} " data-toggle="modal" class="btn btn-danger"><i class="fa fa-trash"></i></a>
                                 {{-- Delete Modal --}}
                                <div class="modal fade" id="deleteModal{{ $user->id }}" tabindex="-1">
                                 <div class="modal-dialog" user="document">
                                   <div class="modal-content">
                                     <form action=" {{ route('admin.users.destroy', $user->id) }} " method="POST">

                                      @method('DELETE')
                                      @csrf

                                       <div class="modal-header">
                                         <h5 class="modal-title" id="exampleModalLabel">Are you sure to delete?</h5>
                                         <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                           <span aria-hidden="true">&times;</span>
                                         </button>
                                       </div>
                                       <div class="modal-body">
                                              {{ $user->name }}
                                       </div>
                                       <div class="modal-footer">
                                         <button type="submit" class="btn btn-danger">Yes Delete</button>
                                         <button type="button" class="btn btn-secondary" data-dismiss="modal">Canel</button>
                                       </div>
                                     </form>
                                   </div>
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
@endsection