@extends('backend.layouts.master')
@section('title')
Create A Page
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
            <li class="breadcrumb-item active">
              <a href="{{ route('admin.web_pages.create') }}" class="text-muted">Create A Page</a>
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
<form class="form" action="{{route('admin.web_pages.store')}}" method="POST" enctype="multipart/form-data">
@csrf
@include('backend.partials.messages')
<div class="card">
 <div class="card-body">
  <div class="form-group row">
   <div class="col-lg-6">
    <label>Title:</label>
    <input type="text" name="title" class="form-control" placeholder="Enter Title" value=""/>
    <span class="form-text text-muted">Please enter your Title</span>
   </div>
  </div>
  <div class="form-group row">
   <div class="col-lg-10">
    <label>Description:</label>
    <div class="">
    <textarea name="description" class="form-control tinymce-editor"></textarea>
    </div>
    <span class="form-text text-muted">Please enter your description</span>
   </div>
  </div>
  <div class="form-group row">
   <div class="col-lg-6">
    <label class="image-label-top">Upload Cover Photo:</label>
    <div class="image-input image-input-outline" id="kt_image_1">
        <div class="image-input-wrapper" style="background-image: url(assets/media/users/100_1.jpg)"></div>

        <label class="btn btn-xs btn-icon btn-circle btn-white btn-hover-text-primary btn-shadow" data-action="change" data-toggle="tooltip" title="" data-original-title="Change avatar">
        <i class="fa fa-pen icon-sm text-muted"></i>
        <input type="file" name="image" accept=".png, .jpg, .jpeg"/>
        <input type="hidden" name="image_remove"/>
        </label>

        <span class="btn btn-xs btn-icon btn-circle btn-white btn-hover-text-primary btn-shadow" data-action="cancel" data-toggle="tooltip" title="Cancel avatar">
        <i class="ki ki-bold-close icon-xs text-muted"></i>
        </span>
        </div>
    <span class="form-text text-muted">Upload about us cover photo</span>
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

<script src="https://cdn.tiny.cloud/1/frupxz4oxkign3nous0a9ix4zry1co5balgegzoxlxmnhsvs/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
  
  <script>
    tinymce.init({
      selector: 'textarea',
      plugins: 'a11ychecker advcode casechange formatpainter linkchecker autolink lists checklist media mediaembed pageembed permanentpen powerpaste table advtable tinycomments tinymcespellchecker',
      toolbar: 'a11ycheck addcomment showcomments casechange checklist code formatpainter pageembed permanentpen table',
      toolbar_mode: 'floating',
      tinycomments_mode: 'embedded',
      tinycomments_author: 'Author name'
    });
  </script>
@endsection
