@extends('backend.layouts.master')
@section('title')
All Books
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
            <a href="{{ route('admin.downloads.index') }}" class="text-muted">Manage Books</a>
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
    <div class="container">
      <div class="row justify-content-center">
          <div class="col-md-8">
              <div class="card">
                  <div class="card-header">Books list</div>
  
                  <div class="card-body">
  
                      <a href="{{ route('admin.downloads.create') }}" class="btn btn-primary">Add new Download</a>
                      <br /><br />
  
                      <table class="table">
                          <tr>
                              <th>Title</th>
                              <th>Download file</th>
                          </tr>
                          @forelse ($downloads as $book)
                              <tr>
                                  <td>{{ $book->title }}</td>
                                  <td><a href="{{ route('admin.downloads.download', $book->uuid) }}">{{ $book->cover }}</a></td>
                              </tr>
                          @empty
                              <tr>
                                  <td colspan="2">No books found.</td>
                              </tr>
                          @endforelse
                      </table>
  
                  </div>
              </div>
          </div>
      </div>
  </div>
  </div>
</div>
@endsection