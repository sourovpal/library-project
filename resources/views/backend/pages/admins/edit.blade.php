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
          <li class="breadcrumb-item">
            <a href="{{ route('admin.admins.index') }}" class="text-muted">All Admins</a>
          </li>
          <li class="breadcrumb-item active">
            <a href="#" class="text-muted">Edit Admin ({{$admin->name}})</a>
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
          <div class="card-header">
              Admin Edit {{$admin->name}}
          </div>
          <div class="card-body">
              <form action="{{route('admin.admins.update', $admin->id)}}" method="POST">
                  @method('PUT')
                  @csrf
                  @include('backend.partials.messages')

                  <div class="form-row">
                    <div class="form-group col-md-6 col-sm-6">
                      <label for="name" >Admin Name</label>
                      <input type="text" class="form-control" name="name" id="name" value=" {{ $admin->name }} ">
                    </div>

                    <div class="form-group col-md-6 col-sm-6">
                      <label for="username" >Username</label>
                      <input type="text" class="form-control" name="username" id="username" value=" {{ $admin->username }} ">
                    </div>
                  </div>

                  <div class="form-row">
                    <div class="form-group col-md-6 col-sm-6">
                      <label for="email" >Email Address</label>
                      <input type="email" class="form-control" name="email" id="email" value=" {{ $admin->email }} ">
                    </div>

                    <div class="form-group col-md-6 col-sm-6">
                      <label for="password" >Password</label>
                      <input type="password" class="form-control" name="password" id="password" placeholder="Enter password">
                    </div>
                  </div>

                  <div class="form-row">
                    <div class="form-group col-md-6 col-sm-6">
                      <label for="password_confirmation" >Confirm Password</label>
                      <input type="password" class="form-control" name="password_confirmation" id="password_confirmation" placeholder="confirm password">
                    </div>

                    <div class="form-group col-md-6 col-sm-6">
                      <label for="role" >Assign Role</label>
                    <select name="roles[]" id="roles" class="form-control select2" multiple>
                      @foreach ($roles as $role)
                          <option value="{{$role->name}}" {{ $admin->hasRole($role->name) ? 'selected' : '' }} >{{$role->name}}</option>
                      @endforeach
                    </select>
                    </div>
                  </div>

                  <div class="form-group row">
                    <div class="col-sm-10">
                      <button type="submit" class="btn btn-primary font-weight-bold btn-square">Update</button>
                    </div>
                  </div>
              </form>
          </div>
      </div>
  </div>
</div>
@endsection
@section('scripts')
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/js/select2.min.js"></script>
<script>
    $(document).ready(function() {
        $('.select2').select2();
    })
</script>
@endsection