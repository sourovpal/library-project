@extends('backend.layouts.master')
@section('title')
All Orders
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
            <a href="{{ route('admin.books.index') }}" class="text-muted">Manage Orders</a>
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
            <h4 class="header-title float-left">Manage Orders Request</h4>
              <table class="table">
                  <thead class="thead-light">
                      <tr>
                        <th>Sl</th>
                        <th>User Details</th>
                        <th>Book Details</th>
                        <th>Status</th>
                        <th>Return Date</th>
                        <th>Books</th>
                        <th>Action</th>
                      </tr>
                  </thead>
                  <tbody>
                      @foreach (App\Models\Order::orderBy('id', 'desc')->get() as $order)
                          <tr>
                              <td> {{$loop->index+1}} </td>
                              <td>
                                @php($user = App\User::find($order['user_id']))
                                Name: {{ $user->name }} <br/>
                                Email :{{  $user->email }} <br />
                                Phone Number :{{   $user->phone }}
                              </td>
                              <td>
                                @php($book = \App\Model\Book::where(['id' => $order->book_id])->first())
                                <span class="text-secondary">{{ $book->book_name ?? '' }}</span>
                                <br>
                                <span class="text-info"> {{ $book->writer_name ?? '' }}</span>
                                <br>
                                <span class="text-info"> Total Page: {{ $book->total_page ?? '' }}</span>
                              </td>
                              <td>
                                @if($order->status == 1)
                                <span class="badge badge-warning">Painding</span>
                                @elseif($order->status == 2)
                                <span class="badge badge-success">Approve</span>
                                @elseif($order->status == 3)
                                <span class="badge badge-warning">Return</span>
                                @elseif($order->status == 4)
                                <span class="badge badge-primary">Received</span>
                                @else
                                <span class="badge badge-danger">Cancle</span>
                                @endif
                              </td>
                              <td>{{date('d M, Y', strtotime($order->book_return))}}</td>
                              <td>{{$book->total_books}}/{{$book->current_total_books}}</td>
                              <td>
                                  <select class="form-control form-control-sm w-100" name="" onchange="window.location.href=`{{route('admin.orders.status')}}?id={{$order->id}}&book_id={{$book->id}}&status=${this.value}`">
                                    <option value="">Action</option>

                                    @if ($order->status == 1  || $order->status == 2)
                                      <option value="0">Cancle</option>
                                    @endif

                                    @if ($order->status == 1 || $order->status == 0)
                                      <option value="2">Approve</option>
                                    @endif
                                    {{-- <option value="3">Return Request</option> --}}
                                    @if ($order->status == 3)
                                      <option value="4">Receive</option>
                                    @endif
                                  </select>
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