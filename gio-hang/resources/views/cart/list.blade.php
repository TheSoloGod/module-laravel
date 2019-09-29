@extends ('layouts.master')

@section('content')
    <h1>{{ "Chi tiết giỏ hàng" }}</h1>

    @if (Session::has('success'))
        <div class="col-12 alert alert-success alert-block">
            <button type="button" class="close" data-dismiss="alert">×</button>
            <strong>{{ Session::get('success') }}</strong>
        </div>

    @endif
<div class="container">
    <div class="col-12 col-md-12 mt-2 border">
        <table id="cart" class="table table-hover">
            <thead>
            <tr>
                <th style="width:40%">Product</th>
                <th style="width:10%">Price</th>
                <th style="width:18%">Quantity</th>
                <th style="width:22%" class="text-center">Subtotal</th>
                <th style="width:10%"></th>
            </tr>
            </thead>

            <tbody>
            @if(Session::has('cart'))
                @foreach($cart->items as $product)
                    <tr>
                        <td data-th="Product">
                            <div class="row">
                                <div class="col-md-2 hidden-xs"><img src="https://www.image.ie/images/no-image.png"
                                                                     alt="..."
                                                                     class="img-responsive" width="100%"/></div>
                                <div class="col-md-10">
                                    <h4 class="nomargin">{{ $product['product']->name }}</h4>
                                </div>
                            </div>
                        </td>
                        <td data-th="Price">{{ '$' . $product['product']->price }}</td>
                        <div class="">
{{--                        <form action=" {{ route('cart.update', $product['product']->id) }}" method="post">--}}
{{--                            @csrf--}}
                            <td data-th="Quantity">
                                <span><button value="{{$product['product']->id}}" class="btn btn-light decrease_button">-</button></span>
                                <span><input id="qty_{{$product['product']->id}}" style="width: 40%; display: inline-block" type="number" class="form-control text-center" min="0" name="quantity" value="{{ $product['quantity'] }}"
                                    onchange=""
                                    ></span>
                                <span><button value="{{$product['product']->id}}" class="btn btn-light increase_button">+</button></span>
                            </td>
                            <td id="subtotal_{{$product['product']->id}}" data-th="Subtotal" class="text-center">${{ $product['price']}}</td>
{{--                            <td data-th="Subtotal" class="text-center">${{ $product['price']}}</td>--}}
                            <td class="actions" data-th="">
{{--                                <button class="btn btn-info btn-sm" type="submit"><i class="fa fa-refresh">F5</i></button>--}}
                                <a class="btn btn-danger btn-sm" href="{{ route('cart.remove', $product['product']->id) }}">Del<i class="fa fa-trash"></i></a>
                            </td>
{{--                        </form>--}}
                        </div>
                    </tr>
                @endforeach
            </tbody>

            <tfoot>
            <tr class="visible-xs">
                <td class="text-center"><strong>Tổng sản phẩm: {{ $cart->totalQuantity }} sản phẩm</strong></td>
                <td></td>
                <td></td>
                <td id="total_price" class="hidden-xs text-center"><strong>Tổng tiền: ${{ $cart->totalPrice }}</strong></td>
            </tr>
            <tr>
                <td><a href="{{ route('product.list') }}" class="btn btn-warning"><i class="fa fa-angle-left"></i> Continue Shopping</a>
                </td>
                <td colspan="2" class="hidden-xs"></td>

                <td><a href="#" class="btn btn-success btn-block">Checkout <i class="fa fa-angle-right"></i></a></td>
            </tr>
            </tfoot>
            @else
                <tr>
                    <td colspan="5" class="text-center"><p>{{ "Bạn chưa mua sản phẩm nào" }}</p></td>
                </tr>
            @endif

        </table>
    </div>
</div>
    <script>
        $(document).ready(function () {
            $('.decrease_button').click(function () {
                let id = $(this).val();
                let input_id = '#qty_' + $(this).val();
                let tempQty = $(input_id).val();
                if(tempQty > 0){
                    let newQty = $(input_id).val(tempQty-1);

                    $.ajax({
                        url: "http://127.0.0.1:8000/cart/update/ajax",
                        type: 'get',
                        data: {
                            id: id,
                            quantity: $(input_id).val()
                        },
                        success: function (result) {
                            $('#subtotal_' + id).html('$' + result['subTotal']);
                            $('#total_price').html('Tổng tiền: $' + result['priceTotal']);
                        }
                    // cach 2 thay cho success:
                    // }).done(function (result) {
                    //     $('#subtotal_' + id).html(result);
                    });
                }
            });

            $('.increase_button').click(function () {
                let id = $(this).val();
                let input_id = '#qty_' + $(this).val();
                let tempQty = Number($(input_id).val());
                let newQty = $(input_id).val(tempQty + 1);

                $.ajax({
                    url: "http://127.0.0.1:8000/cart/update/ajax",
                    type: 'get',
                    data: {
                        id: id,
                        quantity: $(input_id).val()
                    },
                    success: function (result) {
                        $('#subtotal_' + id).html('$' + result['subTotal']);
                        $('#total_price').html('Tổng tiền: $' + result['priceTotal']);
                    }
                    // cach 2 thay cho success:
                    // }).done(function (result) {
                    //     $('#subtotal_' + id).html(result);
                })
            });
        });
    </script>
    @endsection
