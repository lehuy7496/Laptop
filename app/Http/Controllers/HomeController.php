<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use Session;
use Illuminate\Support\Facades\Redirect;
session_start();

class HomeController extends Controller
{
    public function index()
    {
    	$cate_product = DB::table('tbl_category_product')->where('category_status','0')->orderby('category_id','desc')->get();
        $brand_product = DB::table('tbl_brand')->where('brand_status','0')->orderby('brand_id','desc')->get();

    	// $list_product = DB::table('product')
    	// ->join('category_product','category_product.id','=','product.category_id')
    	// ->join('brand_product','brand_product.id','=','product.brand_id')
    	// ->orderby('product.id','desc')->get();
    	$all_product = DB::table('tbl_product')->where('product_status','0')->orderby('product_id','desc')->get();

    	// return view('pages.home')->with('cate_product',$cate_product)->with('brand_product',$brand_product)->with('all_product',$all_product);
        return view('pages.home')->with('category',$cate_product)->with('brand',$brand_product)->with('all_product',$all_product);
    }
}
