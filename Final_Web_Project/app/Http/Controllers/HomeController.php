<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Menu;

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

    public function orders(){
        return view('orders');
    }

    public function destroy($orderID){
        $orders= Orders::fine($orderID);
        $orders->delete();
        return view('orders');
    }
  
}
