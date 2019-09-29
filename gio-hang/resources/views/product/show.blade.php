@extends ('layouts.master')

@section('content')
    <div class="navbar">
        <a href="{{ route('cart.list') }}" class="btn btn-outline-primary">Xem giỏ hàng</a>
    </div>

    <div class="title m-b-md">
        Chi tiết sản phẩm
    </div>

    <div class="row">

        <!-- Kiểm tra biến $product được truyền sang từ ProductController -->
        <!-- Nếu biến $products không tồn tại thì hiển thị thông báo -->
        @if(!isset($product))
            <p class="text-danger">Không có sản phẩn nào.</p>
        @else

        @if (Session::has('success'))
            <div class="col-12 alert alert-success alert-block">
                <button type="button" class="close" data-dismiss="alert">×</button>
                <strong>{{ Session::get('success') }}</strong>
            </div>

        @endif

        <!-- Nếu biến $product tồn tại thì hiển thị sản phẩm -->
            <div class="col-12">
                <div class="card text-left" style="width: 100%;">
                    <div class="card-body">
                        <h5 class="card-title">{{ $product->name }}</h5>
                        <p class="card-text text-dark">${{ $product->price }}</p>

                        <!-- Nút XEM chuyển hướng người dùng quay lại trang danh sách sản phẩm -->
                        <a href="{{route('cart.add', $product->id)}}" class="btn btn-primary">Thêm vào giỏ hàng</a>
                        <a href="{{ route('product.list') }}" class="btn btn-primary">< Quay lại </a>
                    </div>
                </div>
            </div>
        @endif
    </div>
@endsection
