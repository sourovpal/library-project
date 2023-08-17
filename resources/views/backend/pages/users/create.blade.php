@extends('backend.layouts.master')

@section('content')
<div class="container-fluid" id="container-wrapper">
    <div class="card">
        <div class="card-header">
            Create A New User
        </div>
        <div class="card-body">
            <form action="{{route('admin.users.store')}}" method="POST">
                @csrf
                @include('backend.partials.messages')

                <div class="form-row">
                  <div class="form-group col-md-6 col-sm-6">
                    <label for="name" >User Name</label>
                    <input type="text" class="form-control" name="name" id="name" placeholder="Enter name">
                  </div>

                  <div class="form-group col-md-6 col-sm-6">
                    <label for="email" >Email Address</label>
                    <input type="email" class="form-control" name="email" id="email" placeholder="Enter email">
                  </div>
                </div>

                <div class="form-row">
                  <div class="form-group col-md-6 col-sm-6">
                    <label for="password" >Password</label>
                    <input type="password" class="form-control" name="password" id="password" placeholder="Enter password">
                  </div>

                  <div class="form-group col-md-6 col-sm-6">
                    <label for="password_confirmation" >Confirm Password</label>
                    <input type="password" class="form-control" name="password_confirmation" id="password_confirmation" placeholder="confirm password">
                  </div>
                </div>

                <div class="form-row">
                  <div class="form-group col-md-6 col-sm-6">
                    <label for="role" >Assign Role</label>
                    <select name="roles[]" id="roles" class="form-control select2" multiple>
                      @foreach ($roles as $role)
                          <option value="{{ $role->name }}">{{ $role->name }}</option>
                      @endforeach
                  </select>
                  </div>
                </div>

                <div class="form-group row">
                  <div class="col-sm-10">
                    <button type="submit" class="btn btn-primary">Create</button>
                  </div>
                </div>
            </form>
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