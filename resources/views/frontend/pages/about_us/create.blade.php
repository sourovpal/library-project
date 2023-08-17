@extends('backend.layouts.master')
@section('title')
Create About Us
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
<form class="form" action="{{route('admin.a.store')}}" method="POST" enctype="multipart/form-data">
@csrf
@include('backend.partials.messages')
<div class="card">
 <div class="card-body">
  <div class="form-group row">
   <div class="col-lg-6">
    <label>Book Name:</label>
    <input type="text" name="book_name" class="form-control" placeholder="Enter Book name"/>
    <span class="form-text text-muted">Please enter your full name</span>
   </div>
   <div class="col-lg-6">
    <label>Writer Name:</label>
    <input type="text" name="writer_name" class="form-control" placeholder="Enter writer name"/>
    <span class="form-text text-muted">Please enter your contact number</span>
   </div>
  </div>
  <div class="form-group row">
   <div class="col-lg-6">
    <label>Book Description:</label>
    <div class="input-group">
    <textarea name="book_description" rows="5" class="form-control"></textarea>
    </div>
    <span class="form-text text-muted">Please enter your book description</span>
   </div>
   <div class="col-lg-6">
    <label>Total Page:</label>
    <div class="input-group">
     <input type="text" name="total_page" class="form-control" placeholder="Enter total number of page"/>
     <div class="input-group-append"><span class="input-group-text"><i class="la la-bookmark-o"></i></span></div>
    </div>
    <span class="form-text text-muted">Please enter total number of page</span>
   </div>
  </div>
  <div class="form-group row">
   <div class="col-lg-6">
    <label class="image-label-top">Book Cover Photo:</label>
    <div class="image-input image-input-outline" id="kt_image_1">
        <div class="image-input-wrapper" style="background-image: url(assets/media/users/100_1.jpg)"></div>

        <label class="btn btn-xs btn-icon btn-circle btn-white btn-hover-text-primary btn-shadow" data-action="change" data-toggle="tooltip" title="" data-original-title="Change avatar">
        <i class="fa fa-pen icon-sm text-muted"></i>
        <input type="file" name="book_image" accept=".png, .jpg, .jpeg"/>
        <input type="hidden" name="book_image_remove"/>
        </label>

        <span class="btn btn-xs btn-icon btn-circle btn-white btn-hover-text-primary btn-shadow" data-action="cancel" data-toggle="tooltip" title="Cancel avatar">
        <i class="ki ki-bold-close icon-xs text-muted"></i>
        </span>
        </div>
    <span class="form-text text-muted">Please select user group</span>
   </div>
  </div>
 </div>
 <div class="card-footer">
  <div class="row">
   <div class="col-lg-6">
    <button type="submit" class="btn btn-primary mr-2">Create</button>
    <button type="reset" class="btn btn-secondary">Cancel</button>
   </div>
   <div class="col-lg-6 text-lg-right">
    
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
