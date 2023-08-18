<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="{{asset('mdb.min.css')}}" rel="stylesheet"/>
</head>
<body>
<br><br><br>
    <section>
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="list-group list-group-light">
                        <a href="./" class="list-group-item list-group-item-action px-3 border-0 active">Dashboard</a>
                        <a href="./?action=book_list" class="list-group-item list-group-item-action px-3 border-0">Books List</a>
                        <a href="./" class="list-group-item list-group-item-action px-3 border-0">My Books</a>
                        <a href="{{route('user.logout')}}" class="list-group-item list-group-item-action px-3 border-0">Logout</a>
                    </div>
                </div>
                @if(request()->action == 'book_list')
                <div class="col-lg-9">
                    <h5 class="card-title">Books List</h5>
                    @if(\Session::has('success'))
                        <br>
                        <div class="alert alert-success" role="alert">
                            Successfully Added.
                        </div>
                    @endif
                    <div class="row">
                        @foreach (\App\Model\Book::orderBy('id', 'desc')->get() as $book)
                        <div class="col-lg-4 mt-3">
                            <div class="card">
                                <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
                                    <img src="{{asset('')}}{{$book->book_image}}" class="img-fluid" style="width:100%" />
                                    <a href="#!">
                                    <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                                    </a>
                                </div>
                                <div class="card-body">
                                    <h5 class="card-title">{{ $book->book_name ?? '' }}</h5>
                                    <h6 class="card-title">{{ $book->writer_name ?? '' }}</h6>
                                    <p class="card-text">{{ $book->description ?? '' }}</p>
                                    @if(\App\Models\Order::where('user_id', auth()->guard('web')->id())->where('book_id', $book->id)->where('status', 1)->first())
                                    <button class="btn btn-info">Painding</button>
                                    @else
                                    <a href="{{route('collect', $book->id)}}" class="btn btn-primary">Collect</a>
                                    @endif
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
                @else
                <div class="col-lg-9">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">My Books</h5>
                            <table class="table">
                                <thead>
                                    <tr>
                                    <th class="fw-bold" scope="col">#</th>
                                    <th class="fw-bold" scope="col">Cover</th>
                                    <th class="fw-bold" scope="col">Book Details</th>
                                    <th class="fw-bold" scope="col">Status</th>
                                    <th class="fw-bold" scope="col">Action</th>
                                    </tr>
                                </thead>
                                <tbody class="table-group-divider table-divider-color">
                                    @foreach (\App\Models\Order::where('user_id', auth()->guard('web')->id())->orderBy('id', 'desc')->get() as $order)
                                        @php($book = \App\Model\Book::where(['id' => $order->book_id])->first())
                                        <tr>
                                            <th scope="row">{{$loop->index + 1}}</th>
                                            <td>
                                                <img src='{{asset('')}}{{$book->book_image}}' width="80px">
                                            </td>
                                            <td>
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
                                                <span class="badge badge-primary">Library Received</span>
                                                @else
                                                <span class="badge badge-danger">Cancle</span>
                                                @endif
                                            </td>
                                            <td>
                                                <select class="form-control form-control-sm w-100" name="" onchange="window.location.href=`{{route('status')}}?order_id={{$order->id}}&status=${this.value}`">
                                                    <option value="">Action</option>
                                                    @if ($order->status == 0)
                                                    <option value="1">Collect</option>
                                                    @endif
                                                    @if ($order->status == 1)
                                                    <option value="0">Cancle</option>
                                                    @endif
                                                    @if ($order->status == 2)
                                                    <option value="3">Return Request</option>
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
                @endif
            </div>
        
        </div>
    </section>
</body>
</html>