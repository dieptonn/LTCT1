<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Product;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class OrderManagementController extends Controller
{
    // public function listOrder()
    // {
    //     $orders = Order::join('product', 'orders.product_id', '=', 'product.product_id')
    //     ->get(['orders.*', "product.*"]);
    //     // return $orders;
    //     return view('front-end.order')->with('orders', $orders);

    // }
    public function listOrder(){
        $orders = Order::all();

        // $maneger_order = view('orders.order')->with('order',$order);
        return view('orders.order',[
            'orders'=> $orders
        ]);
    }

    // public function listOrderById($id)
    // {

    //     return "van duc";

    // }

    public function rateComment(){
        return view('rate_comment.rateComment');
    }

    public function rateCommentUpdate(Request $request, $orderId){
        
        $rate = $request['rate'];
        DB::table('orders')->where('orderId', $orderId)
        ->update(['rate'=> $rate]);
        // return "diep";
        // dd($orders->rate);
        $cmt = $request['comment'];
        DB::table('orders')->where('orderId', $orderId)
        ->update(['comment'=> $cmt]);
        return "successfull";
    }

    public function create()
    {
        return view('orders.create');
    }


    public function store(Request $request)
    {

        $this->validate(request(),[
            'id', 'order_id' => 'required', 'product_id', 'qty', 'amount', 'data', 'status'
        ]);

        $data = request()->all();

        $order = new Order();
        $order->order_id = $data['order_id'];
        $order->product_id = $data['product_id'];
        $order->qty = $data['qty'];
        $order->amount = $data['amount'];
        $order->data = $data['data'];
        $order->status = $data['status'];


        $order->save();

        // session()->flash('success', 'order created successfully.');

        return redirect('/listOrder');
    }


    public function deleteOrder($id){
        $orders = Order::all();
        foreach($orders as $order){
            if($order->order_id == $id){
                $data[] = $order;

            }
        }
        return $data;

        // session()->flash('success', 'Todo deleted successfully.');

        return redirect('/listOrder');
    }

    public function cholayhang(){
        $data = array();
        $orders = Order::join('product', 'orders.product_id', '=', 'product.product_id')
        ->get(['orders.*', "product.*"]);
        foreach($orders as $order){
            if($order->status == 0){
                $data[] = $order;
            }
        }
        $orders = $data;
        return view('front-end.order')->with('orders', $orders);
    }

    public function danggiao(){
        $data = array();
        $orders = Order::join('product', 'orders.product_id', '=', 'product.product_id')
        ->get(['orders.*', "product.*"]);
        foreach($orders as $order){
            if($order->status == 1){
                $data[] = $order;
            }
        }
        $orders = $data;
        return view('front-end.order')->with('orders', $orders);
    }

    public function dahuy(){
        $data = array();
        $orders = Order::join('product', 'orders.product_id', '=', 'product.product_id')
        ->get(['orders.*', "product.*"]);
        foreach($orders as $order){
            if($order->status == 2){
                $data[] = $order;
            }
        }
        $orders = $data;
        return view('front-end.order')->with('orders', $orders);
    }

    public function dagiao(){
        $data = array();
        $orders = Order::join('product', 'orders.product_id', '=', 'product.product_id')
        ->get(['orders.*', "product.*"]);
        foreach($orders as $order){
            if($order->status == 3){
                $data[] = $order;
            }
        }
        $orders = $data;
        return view('front-end.order')->with('orders', $orders);
    }

    public function trahang(){
        $data = array();
        $orders = Order::join('product', 'orders.product_id', '=', 'product.product_id')
        ->get(['orders.*', "product.*"]);
        foreach($orders as $order){
            if($order->status == 4){
                $data[] = $order;
            }
        }
        $orders = $data;
        return view('front-end.order')->with('orders', $orders);
    }

/*
    các API cần : Tính tiền từ SP08
                Thông tin Quảng cáo, khuyến mại SP19, SP12
                Thông tin bảo hành, đổi trả sản phẩm SP06, SP18
                Thông tin các sản phẩm trong giỏ hàng từ Quản lí giỏ hàng
                Tính phí ship từ SP09, SP10 quản lí giao hàng
                Module danh sách sản phẩm từ SP06, SP08 Quản lí sản phẩm
*/
}

