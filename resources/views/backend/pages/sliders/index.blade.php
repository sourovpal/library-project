@extends('backend.layouts.master')
@section('title')
All Slider
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
          <li class="breadcrumb-item active">
            <a href="{{ route('admin.sliders.index') }}" class="text-muted">All Sliders</a>
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
            <h4 class="header-title float-left">All Slider</h4>
            <p class="float-right mb-2">
                <a class="btn btn-primary font-weight-bold btn-square" href="{{ route('admin.sliders.create') }}">Create New Slider</a>
            </p>
              <table class="table">
                  <thead class="thead-light">
                      <tr>
                        <th>Sl</th>
                        <th>Image</th>
                        <th>Name</th>
                        <th>Writer Name</th>
                        <th>Action</th>
                      </tr>
                  </thead>
                  <tbody>
                      @foreach ($sliders as $slider)
                          <tr>
                              <td> {{$loop->index+1}} </td>
                              <td><img src='{{asset('')}}{{$slider->image}}' width="100px"></td>
                              <td> {{$slider->title}} </td>
                              <td>{{$slider->description}}</td>
                              <td>
                                  <a href=" {{ route('admin.sliders.edit', $slider->id) }} " class="btn btn-outline-primary font-weight-bold btn-square"><i class="fas fa-edit"></i></a>
                                  <a href="#deleteModal{{ $slider->id }} " data-toggle="modal" class="btn btn-outline-danger font-weight-bold btn-square"><i class="fa fa-trash"></i></a>
                                  {{-- Delete Modal --}}
                                  <div class="modal fade" id="deleteModal{{ $slider->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                  <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                      <form action=" {{ route('admin.sliders.destroy', $slider->id) }} " method="POST">

                                        @method('DELETE')
                                        @csrf

                                        <div class="modal-header">
                                          <h5 class="modal-title" id="exampleModalLabel">Are you sure to delete?</h5>
                                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                          </button>
                                        </div>
                                        <div class="modal-body">
                                                {{ $slider->title }}
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