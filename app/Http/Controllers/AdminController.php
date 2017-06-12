<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Menu;
use App\Product;
use Response;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;

class AdminController extends Controller
{
    public function Menu(){
		$menu = Menu::get();
        return view('admin.menu')->with(['Menu'=>$menu]);
    }

    public function MenuStore(Request $request){
    	$MName = $request->input('Name');
    	$id = Menu::create(['name' => $MName])->id;
    	return response()->json(['Name'=>$MName,'ID'=>$id,200]);
    }

    public function MenuDelete(Request $request){
    	$ID = $request->input('id');
    	Product::where('menu_id',$ID)->delete();
    	Menu::find($ID)->delete();
    	return response()->json(['mess'=>'successful',200]);
    }

    public function MenuEdit(request $request){
        $ID = $request->input('id');
        $Name = $request->input('name');
        Menu::find($ID)->update([
            'name'=>$Name
            ]);
        return response()->json(['mess'=>'successful',200]);
    }

    public function Product(){
    	$menu = Menu::get();
    	//$product = Product::get();
    	$product = DB::select('select product.*,menu.name as Mname from product inner join menu on menu.id = product.menu_id');
    	return view('admin.product')->with(['Product'=>$product,'Menu'=>$menu]);
    }

    public function ProductStore(Request $request){
    	$InputFile ="";
    	if ($request->hasFile('images')) {
    		$upfile = $request->file('images');
    		$fName = date("Ymdhis")."_".$upfile->getClientOriginalName();
			$path = Storage::putFileAs('public/images', $upfile, $fName);
			$url = Storage::url($path);
			$link = asset($url);

		    $InputFile = $link;
		}
    	$id = Product::create([
    		'menu_id'=>$request->input('menu_id'), 
    		'name'=>$request->input('name'), 
    		'description'=>$request->input('description'),
    		'images'=>$InputFile,
    		'star'=>0])->id;
    	return response()->json(['Mess'=>'Success','id'=>$id,'img'=>$InputFile,200]);
    }

    public function ProductEdit(Request $request){
    	$ID = $request->input('id');
    	$InputFile = "";
    	if ($request->hasFile('images')) {
    		$upfile = $request->file('images');
    		$fName = date("Ymdhis")."_".$upfile->getClientOriginalName();
			$path = Storage::putFileAs('public/images', $upfile, $fName);
			$url = Storage::url($path);
			$link = asset($url);
		    $InputFile = $link;
			Product::find($ID)->update([
			'menu_id'=>$request->input('menu_id'), 
    		'name'=>$request->input('name'), 
    		'description'=>$request->input('description'),
    		'images'=>$InputFile
			]);
		}else{
			Product::find($ID)->update([
			'menu_id'=>$request->input('menu_id'), 
    		'name'=>$request->input('name'), 
    		'description'=>$request->input('description')
			]);
		}

    	return response()->json(['Mess'=>'Success','img'=>$InputFile,200]);
    }

    public function ProductDelete(Request $request){
    	$ID = $request->input('id');
    	Product::find($ID)->delete();
    	return response()->json(['mess'=>'successful',200]);
    }

    public function SaveImage($fName){
		if($fName){
			$fName = date("Ymdhis")."_".$upfile->getClientOriginalName();
			$path = Storage::putFileAs('public/images', $upfile, $fName);
			$url = Storage::url($path);
			$link = asset($url);
			return $link;
		}
    }

    public function ProductStar(Request $request){
    	$ID = $request->input('id');
    	$Mode = $request->input('mode');
    	if($Mode == 1)
    		Product::find($ID)->update(['star'=>1]);
    	else
    		Product::find($ID)->update(['star'=>0]);
    	return response()->json(['mess'=>'successful',200]);
    }
}
