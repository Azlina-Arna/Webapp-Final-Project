<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Menu;
use App\Models\Cart;
use App\Models\Orders;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $data= Menu::all();
        return view('home',['menus'=>$data]);
    }
    function details($id)
    {
        $data = Menu::find($id);
        return view('detail', ['menu'=> $data]);
    }

    function addToCart(Request $req){
        $cart= new Cart;
        $cart->menu_id= $req->menu_id;
        $cart->save();
        return redirect('/home');
    }

    function cartlist(){
        $menus = DB::table('cart')
        ->join('menus','cart.menu_id','=','menus.id')
        ->select('menus.*','cart.id as cart_id')
        ->get();
        return view('cartlist',['menus'=>$menus]);
    }

    function removeCart($id){
        Cart::destroy($id);
        return redirect('cartlist');

    }

    public function orderspage(){
        $orders = DB::table('orders')
        ->select('orderID','orderDate','details')
        ->get();
        return view ('orderspage',['orders'=>$orders]);
    }

    public function destroyOrder($orderID){
        Orders::destroy($orderID);
        return redirect('orderspage');
    }
  
}
