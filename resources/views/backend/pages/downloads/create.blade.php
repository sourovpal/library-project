@extends('backend.layouts.master')
@section('title')
Create Book
@endsection
@section('styles')
<style>
    .image-label-top{
        vertical-align: top;
    }
</style>
@endsection
@section('content')
<div class="subheader py-2 py-lg-6 subheader-solid" id="kt_subheader">
    <div class="container-fluid d-flex align-items-center justify-content-between flex-wrap flex-sm-nowrap">
      <!--begin::Info-->
      <div class="d-flex align-items-center flex-wrap mr-1">
        <!--begin::Page Heading-->
        <div class="d-flex align-items-baseline flex-wrap mr-5">
          <!--begin::Breadcrumb-->
          <ul class="breadcrumb breadcrumb-transparent font-weight-bold p-0 my-2 font-size-sm">
            <li class="breadcrumb-item">
              <a href="{{ route('admin.books.index') }}" class="text-muted">Manage Book</a>
            </li>
            <li class="breadcrumb-item active">
              <a href="{{ route('admin.books.create') }}" class="text-muted">Create Book</a>
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
<div class="container-fluid" id="container-wrapper">
<form class="form" action="{{route('admin.downloads.store')}}" method="POST" enctype="multipart/form-data">
  @csrf
@include('backend.partials.messages')
<div class="container">
  <div class="row justify-content-center">
      <div class="col-md-8">
          <div class="card">
              <div class="card-header">Add new book</div>

              <div class="card-body">

                  <form action="{{ route('admin.downloads.store') }}" method="POST" enctype="multipart/form-data">
                      @csrf

                      Title:
                      <br>
                      <input type="text" name="title" class="form-control">

                      <br>

                      Cover File:
                      <br>
                      <input type="text" name="cover" class="form-control">

                      <br><br>

                      <input type="submit" value="Create Download " class="btn btn-primary">

                  </form>

              </div>
          </div>
      </div>
  </div>
</div>
</form>
</div>
@endsection

@section('scripts')
<script>
var avatar1 = new KTImageInput('kt_image_1');


</script>
@endsection
