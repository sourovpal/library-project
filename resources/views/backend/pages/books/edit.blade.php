@extends('backend.layouts.master')
@section('title')
Edit Book
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
              <a href="{{ route('admin.books.edit', $book->id) }}" class="text-muted">Edit Book</a>
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
<form class="form" action="{{route('admin.books.update', $book->id)}}" method="POST" enctype="multipart/form-data">
  @method('PUT')
  @csrf
@include('backend.partials.messages')
<div class="card">
 <div class="card-body">
  <div class="form-group row">
   <div class="col-lg-6">
    <label>Book Name:</label>
    <input type="text" name="book_name" class="form-control" placeholder="Enter Book name" value="{{$book->book_name}}"/>
    <span class="form-text text-muted">Please enter your full name</span>
   </div>
   <div class="col-lg-6">
    <label>Writer Name:</label>
    <input type="text" name="writer_name" class="form-control" placeholder="Enter writer name" value="{{$book->writer_name}}"/>
    <span class="form-text text-muted">Please enter your contact number</span>
   </div>
  </div>
  <div class="form-group row">
   <div class="col-lg-6">
    <label>Book Description:</label>
    <div class="input-group">
    <textarea name="book_description" rows="5" class="form-control" >{{$book->book_description}}</textarea>
    </div>
    <span class="form-text text-muted">Please enter your book description</span>
   </div>
   <div class="col-lg-6">
    <label>Total Page:</label>
    <div class="input-group">
     <input type="text" name="total_page" class="form-control" placeholder="Enter total number of page" value="{{$book->total_page}}"/>
     <div class="input-group-append"><span class="input-group-text"><i class="la la-bookmark-o"></i></span></div>
    </div>
    <span class="form-text text-muted">Please enter total number of page</span>
   </div>
  </div>
  <div class="form-group row">
   <div class="col-lg-6">
    <label class="image-label-top">Book Cover Photo:</label>
    <div class="image-input image-input-outline" id="kt_image_1">
        <div class="image-input-wrapper" style="background-image: url({{asset('')}}{{$book->book_image}})"></div>

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
   <div class="col-lg-6">
    <label>Book URL:</label>
    <div class="input-group">
     <input type="text" name="book_url" class="form-control" placeholder="Enter Book Url" value="{{$book->book_url}}"/>
     <div class="input-group-append"><span class="input-group-text"><i class="la la-bookmark-o"></i></span></div>
    </div>
    <span class="form-text text-muted">Please enter Book Url</span>
   </div>
  </div>
 </div>
 <div class="card-footer">
  <div class="row">
   <div class="col-lg-6">
    <button type="submit" class="btn btn-primary mr-2">Update</button>
    <button type="reset" class="btn btn-secondary">Cancel</button>
   </div>
   <div class="col-lg-6 text-lg-right">
    <a href="#deleteModal{{ $book->id }} " data-toggle="modal" type="button" class="btn btn-danger font-weight-bold btn-square"><i class="fa fa-trash"></i>Delete</a>
   </div>
  </div>
 </div>
</div>
</form>
</div>
   {{-- Delete Modal --}}
   <div class="modal fade" id="deleteModal{{ $book->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <form action=" {{ route('admin.books.destroy', $book->id) }} " method="POST">

            @method('DELETE')
            @csrf

            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Are you sure to delete?</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                    {{ $book->book_name }}
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-danger">Yes Delete</button>
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Canel</button>
            </div>
            </form>
        </div>
    </div>
</div>
@endsection

@section('scripts')
<script>
var avatar1 = new KTImageInput('kt_image_1');


</script>
@endsection
