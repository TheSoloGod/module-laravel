<?php

namespace App\Http\Controllers;

use App\Cart;
use App\Http\Services\Intface\ProductServiceInterface;
use App\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class CartController extends Controller
{
    protected $productService;

    public function __construct(ProductServiceInterface $productService)
    {
        $this->productService = $productService;
    }

    public function index()
    {
        $cart = session()->get('cart');
        return view('cart.list', compact('cart'));
    }

    public function add($id)
    {
        if(session()->has('cart')){
            $oldCart = Session::get('cart');
        }else{
            $oldCart = null;
        }

        $cart = new Cart($oldCart);
        $product = $this->productService->getByID($id);
        $cart->addToCart($product);

        session()->put('cart', $cart);
        session()->flash('success', 'Thêm sản phẩm vào giỏ hàng thành công!');
        return back();
    }

    public function remove($id)
    {
        if (Session::has('cart')) {
            $oldCart = Session::get('cart');
            if (count($oldCart->items) > 0) {
                $cart = new Cart($oldCart);
                $cart->removeFromCart($id);
                Session::put('cart', $cart);
                Session::flash('success', 'Xóa sản phẩm khỏi giỏ hàng thành công');
            } else {
                Session::flash('delete_error', 'Bạn chưa mua sản phẩm nào');
            }
        } else {
            Session::flash('delete_error', 'Bạn chưa mua sản phẩm nào');
        }
        return redirect()->back();
    }

    public function update(Request $request, $id)
    {
        if (Session::has('cart')) {
            $oldCart = Session::get('cart');
            if (count($oldCart->items) > 0) {
                $cart = new Cart($oldCart);
                $cart->updateQuanlity($request, $id);
                Session::put('cart', $cart);
                Session::flash('success', 'Cập nhật thành công!');
            } else {
                Session::flash('delete_error', 'Bạn chưa mua sản phẩm nào');
            }
        } else {
            Session::flash('delete_error', 'Bạn chưa mua sản phẩm nào');
        }
        return redirect()->back();
    }

    public function ajax(Request $request)
    {
        if (Session::has('cart')) {
            $oldCart = Session::get('cart');
            $data= [];
            if (count($oldCart->items) > 0) {
                $cart = new Cart($oldCart);
                $cart->updateQuanlity($request, $request->id);
                Session::put('cart', $cart);

                $subTotal = $cart->items[$request->id]['price'];
                $priceTotal = $cart->totalPrice;
                $data = [
                    'subTotal' => $subTotal,
                    'priceTotal' => $priceTotal
                ];
            }
        }

        return $data;
    }
}
