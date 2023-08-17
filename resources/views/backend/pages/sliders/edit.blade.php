@extends('backend.layouts.master')
@section('title')
Edit Slider
@endsection
@section('styles')
<style>
  .picture-label{
    vertical-align: top;
  }
</style>
@endsection
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
            <a href="{{ route('admin.sliders.index') }}" class="text-muted">All Slider</a>
          </li>
          <li class="breadcrumb-item active">
            <a href="{{ route('admin.sliders.edit',$sliders->id)}}" class="text-muted">Edit Slider</a>
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
              Edit Slider
          </div>
          <div class="card-body">
              <form action="{{route('admin.sliders.update', $sliders->id)}}" method="POST"  enctype='multipart/form-data'>
                  @method('PUT')
                  @csrf
                  @include('backend.partials.messages')

                  <div class="form-row">
                    <div class="form-group col-md-6 col-sm-6">
                      <label for="name" >Slider Title</label>
                      <input type="text" class="form-control" name="title" id="title" value="{{$sliders->title}}" placeholder="Enter slider">
                    </div>

                    <div class="form-group col-md-6 col-sm-6">
                      <label for="slider_image" class="picture-label" >Slider Picture</label>
                      <div class="image-input image-input-outline" id="kt_image_1">
                        <div class="image-input-wrapper" style="background-image: url({{asset('')}}{{$sliders->image}})"></div>
                
                        <label class="btn btn-xs btn-icon btn-circle btn-white btn-hover-text-primary btn-shadow" data-action="change" data-toggle="tooltip" title="" data-original-title="Change avatar">
                        <i class="fa fa-pen icon-sm text-muted"></i>
                        <input type="file" name="image" accept=".png, .jpg, .jpeg"/>
                        <input type="hidden" name="image_remove"/>
                        </label>
                
                        <span class="btn btn-xs btn-icon btn-circle btn-white btn-hover-text-primary btn-shadow" data-action="cancel" data-toggle="tooltip" title="Cancel avatar">
                        <i class="ki ki-bold-close icon-xs text-muted"></i>
                        </span>
                      </div>
                    </div>
                  </div>

                  <div class="form-row">
                    <div class="form-group col-md-6 col-sm-6">
                      <label for="description" >Slider Description</label>
                      <textarea name="description" class="form-control">{{$sliders->description}}</textarea>
                    </div>

                    <div class="form-group col-md-6 col-sm-6">

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
<script>
var avatar1 = new KTImageInput('kt_image_1');


</script>
@endsection
