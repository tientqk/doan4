<?php

namespace App\Http\Controllers;
use App\Models\sanpham;
use Illuminate\Http\Request;
use App\Models\khachhang;
use App\Models\chitietdonhang;
use Cart;
class giohangController extends Controller
{
    public function Cart()
    {
        return view('site.index.cart.cart', $data);
    }
    public function AddCart(Request $request)
    {
        $product = sanpham::find($request->id_product);
        Cart::add(
            [
                'id' => $product->masp,
                'name' => $product->tensp,
                'qty' => $request->qty,
                'price' => $product->gia,
                'weight' => 0,
                'options' => ['img' => $product->hinhanh]
            ]
        );      
        return redirect()->route('listcart');
    }
    public function list()
    {
        return view('Home.Master.giohang');
    }
    public function UpdateCart($rowId, $qty)
    {
        Cart::update($rowId, $qty);
    }
    public function CheckOut(Request $request)
    {

        $data['cart'] = Cart::content();
        $data['total'] = str_replace(',', '', Cart::subtotal()) + 40000;
        return view('site.index.cart.checkout', $data);
    }
    public function CheckoutSuccess(Request $request)
    {
        $customer = new khachhang();
        $customer->name = $request->name;
        $customer->slug = Str::slug($request->name);
        $customer->address = $request->address;

        $customer->email = $request->email;
        $customer->phone = $request->phone;
        $customer->total = Cart::total(0, '', '');
        $customer->state = 0;
        if ($request->note) {
            $customer->note = $request->note;
        }
        $customer->save();
        foreach (Cart::content() as $product) {
            $order = new chitietdonhang();
            $order->name = $product->name;
            $order->price = $product->price;
            $order->quantity = $product->qty;
            $order->image = $product->options->img;
            $order->customer_id = $customer->id;
            $order->save();
            if ($product->options->attr) {
                foreach ($product->options->attr as $key => $value) {
                    $attr = new Attrs();
                    $attr->name = $key;
                    $attr->value = $value;
                    $attr->order_id = $order->id;
                    $attr->save();
                }
            }
        }


        $ord=Customers::find($customer->id)->OrderDetail;
        // Mail::send('site.index.cart.sendmailcart', $data=[
        //     'name'=> $request->name,
        //     'ord'=>$ord,
        //     'phone'=>$request->phone,
        //     'email'=>$request->email,
        //     'address'=>$request->address,
        //     'note'=>$request->note,
        //     'total'=>Cart::total(0, '', ''),
        //     'order_code'=>$order->id
        // ], function ($message) use ($request) {
        //     $message->from('ahihi@gmail.com', 'HuyVan');
        //     $message->to($request->email, $request->name);
        //     $message->subject('Xác nhận đơn hàng thành công');
        // });
        Cart::destroy();
        return view('site.index.cart.checkout_success',$data);
    }
    public function RemoveCart($id)
    {
        Cart::remove($id);
        return redirect()->back();
    }
    public function AddCartShop($slug)
    {
        $product = Products::where('slug', $slug)->first();
        $qty = 1;
        Cart::add([
            'id' => $product->product_code,
            'name' => $product->name,
            'qty' => $qty,
            'price' => $product->price,
            'weight' => 0,
            'options' => ['img' => $product->image]
        ]);
        return redirect()->back();
    }
    public function AddNumber(Request $request)
    {
        Cart::update($request->rowId, $request->quantity);
        return back();
    }
    public function CheckoutSuccessGet()
    {
        
        return redirect()->route('index');
    }
}