<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Menu;
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
     * @return \Illuminate\Http\Response
     */
    public function index(){
        return view('index');
    }

    public function about(){
        return view('about');
    }

    public function contact(){
        return view('contact');
    }

    public function csmh(){
        return view('csmh');
    }

    public function products(){
        $menu = Menu::get();
        $product = Product::paginate(20); 
        return view('product')->with(['Menu'=>$menu,'Product'=>$product]);
    }

    public function ShowProducts($id){
        $menu = Menu::get();
        $product = Product::find($id);
        $Cat = Menu::find($product->menu_id);
        return view('showproduct')->with(['Menu'=>$menu,'Product'=>$product,'Cat'=>$Cat]);
    }

    public function MenuShow($id){
        $menu = Menu::get();
        $Cat = Menu::find($id);
        $product = Product::where('menu_id',$id)->paginate(20);
        return view('categories')->with(['Menu'=>$menu,'Product'=>$product,'Cat'=>$Cat]);
    }

    public function ProdIndex(){
        $NewProd = Product::orderBy('created_at', 'desc')->take(8)->get();
        $StarProd = Product::orderBy('star', 'desc')->take(8)->get();
        return view('index')->with(['NewProd'=>$NewProd,'StarProd'=>$StarProd]);
    }
}
