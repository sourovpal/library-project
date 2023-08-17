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
            <a href="{{ route('admin.roles.index') }}" class="text-muted">All Roles</a>
          </li>
          <li class="breadcrumb-item active">
            <a href="{{ route('admin.roles.create') }}" class="text-muted">Create Role</a>
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
              Create A New Role.
          </div>
          <div class="card-body">
              <form action="{{route('admin.roles.store')}}" method="POST">
                  @csrf
                  @include('backend.partials.messages')

                  <div class="form-row">
                    <div class="form-group col-md-6">
                      <label for="name">Role Name</label>
                      <input type="text" class="form-control" name="name" id="name" placeholder="Enter Role Name">
                    </div>
                  </div>

                  <div class="form-group">
                    <label for="name" class="text-muted">Permissions</label>

                    <div class="form-check">
                        <input type="checkbox" class="form-check-input" id="checkPermissionAll" value="1">
                        <label class="form-check-label" for="checkPermissionAll">All</label>
                    </div>
                    <hr>

                    @php $i = 1; @endphp
                    @foreach ($permission_groups as $group)
                      <div class="row">
                        <div class="col-sm-3">
                          <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="{{ $i }}Management" value="{{$group->name}}" onclick="checkPermissionByGroup('role-{{ $i }}-management-checkbox', this)">
                            <label class="form-check-label" for="{{ $i }}Management">{{$group->name}}</label>
                          </div>
                        </div>

                        @php
                            $permissions = App\Models\Admin::getpermissionsByGroupName($group->name);
                            $j = 1;
                        @endphp

                        <div class="col-sm-9 role-{{ $i }}-management-checkbox">
                          @foreach ($permissions as $permission)
                            <div class="form-check">
                              <input class="form-check-input" name="permissions[]" type="checkbox" id="checkPermission{{$permission->id}}" value="{{$permission->name}}">
                              <label class="form-check-label" for="checkPermission{{$permission->id}}">{{$permission->name}}</label>
                            </div>
                            @php $j++; @endphp
                          @endforeach
                        </div>
                      </div>
                      @php $i++; @endphp
                    @endforeach
                  </div>

                  <div class="form-group row">
                    <div class="col-sm-10">
                      <button type="submit" class="btn btn-primary font-weight-bold btn-square">Create</button>
                    </div>
                  </div>
              </form>
          </div>
      </div>
  </div>
</div>
@endsection

@section('scripts')
     @include('backend.pages.roles.partials.scripts')
@endsection