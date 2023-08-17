@extends('backend.layouts.master')

@section('content')
<!--begin::Subheader-->
<div class="subheader py-2 py-lg-6 subheader-solid" id="kt_subheader">
  <div class="container-fluid d-flex align-items-center justify-content-between flex-wrap flex-sm-nowrap">
    <!--begin::Info-->
    <div class="d-flex align-items-center flex-wrap mr-1">
      <!--begin::Page Heading-->
      <div class="d-flex align-items-baseline flex-wrap mr-5">
        <!--begin::Breadcrumb-->
        <ul class="breadcrumb breadcrumb-transparent font-weight-bold p-0 my-2 font-size-sm">
          <li class="breadcrumb-item active">
            <a href="{{ route('admin.roles.index') }}" class="text-muted">All Roles</a>
          </li>
        </ul>
        <!--end::Breadcrumb-->
      </div>
      <!--end::Page Heading-->
    </div>
    <!--end::Info-->
  </div>
</div>
<!--end::Subheader-->
<div class="d-flex flex-column-fluid">
  <div class="container-fluid" id="container-wrapper">
      <div class="card">
          <div class="card-body">
            @include('backend.partials.messages')
            <h4 class="header-title float-left">Roles List</h4>
            <p class="float-right mb-2">
                <a class="btn btn-primary font-weight-bold btn-square" href="{{ route('admin.roles.create') }}">Create New Role</a>
            </p>
              <table class="table">
                  <thead class="thead-light">
                      <tr>
                        <th width="5%">Sl</th>
                        <th width="10%">Name</th>
                        <th width="60%">Permissions</th>
                        <th width="15%">Action</th>
                      </tr>
                  </thead>
                  <tbody>
                      @foreach ($roles as $role)
                          <tr>
                              <td> {{$loop->index+1}} </td>
                              <td> {{ $role->name }} </td>
                              <td>
                                @foreach ($role->permissions as $perm)
                                    <span class="label label-danger label-pill label-inline mr-1 mb-1">
                                        {{ $perm->name }}
                                    </span>
                                @endforeach
                              </td>
                              <td>
                                  <a href=" {{ route('admin.roles.edit', $role->id) }} " class="btn btn-outline-primary font-weight-bold btn-square"><i class="fas fa-edit"></i></a>
                                  <a href="#deleteModal{{ $role->id }} " data-toggle="modal" class="btn btn-outline-danger font-weight-bold btn-square"><i class="fa fa-trash"></i></a>
                                  {{-- Delete Modal --}}
                                  <div class="modal fade" id="deleteModal{{ $role->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                  <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                      <form action=" {{ route('admin.roles.destroy', $role->id) }} " method="POST">

                                        @method('DELETE')
                                        @csrf

                                        <div class="modal-header">
                                          <h5 class="modal-title" id="exampleModalLabel">Are you sure to delete?</h5>
                                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                          </button>
                                        </div>
                                        <div class="modal-body">
                                                {{ $role->name }}
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
</div>
@endsection