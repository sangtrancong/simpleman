<?php

namespace App\Http\Controllers\client;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Port;
use App\Models\PortRef;
use App\Models\Product;
use App\Models\VisitHistory;
use Carbon\Carbon;
use Illuminate\Http\Request;


class HomeController extends Controller
{
    public function __construct()
    {

        $today=Carbon::now()->toDateString();
        // dd($today);
        $getDateFromDB= VisitHistory::where('date','=',$today)->first();
        if($getDateFromDB!=null){
            visits('App\Models\Port')->increment();
            $count = visits('App\Models\Port')->period('day')->count();
            $getDateFromDB->count=$count;
            $getDateFromDB->save();
        }
        else{
             visits('App\Models\Port')->period('day')->reset();
             if (visits('App\Models\Port')->period('day')->count()===0) {
                visits('App\Models\Port')->increment();
             $count = visits('App\Models\Port')->period('day')->count();
             $visitHistory=new VisitHistory();
             $visitHistory->date=$today;
             $visitHistory->count=$count;
             $visitHistory->save();
             }

        }

        }

    public function index(){
        $hotContent=Port::where('status','<>',0)->orderby('status','DESC')->orderby('updated_at','DESC')->limit(3)->get();
        $arrHotContent=$hotContent->pluck('id')->toArray();
        // dd($arrHotContent);
        $healthContent=Port::where('status','<>',0)->where('category_id',config('global.Sức khỏe'))->whereNotIn('id',$arrHotContent)->orderby('status','DESC')->orderby('updated_at','DESC')->limit(10)->get();
        $eduContent=Port::where('status','<>',0)->where('category_id',config('global.Giáo dục'))->whereNotIn('id',$arrHotContent)->orderby('status','DESC')->orderby('updated_at','DESC')->limit(10)->get();
        return view('client.home')->with(['hotContent'=>$hotContent,'healthContent'=>$healthContent,'eduContent'=>$eduContent]);
    }
    public function about(){
        return view('client.about');
    }
    public function healthPort(){

        $list=Port::where('status','<>',0)->where('category_id',config('global.Sức khỏe'))->orderby('status','DESC')->orderby('updated_at','DESC')->paginate(7);
        $listPortRef=PortRef::where('status',1)->orderby('created_at','DESC')->limit(7)->get();
        return view('client.healthPort')->with(['list'=>$list,'listPortRef'=>$listPortRef]);
    }
    public function eduPort(){

        $list=Port::where('status','<>',0)->where('category_id',config('global.Giáo dục'))->orderby('status','DESC')->orderby('updated_at','DESC')->paginate(7);
        $listPortRef=PortRef::where('status',1)->orderby('created_at','DESC')->limit(7)->get();
        return view('client.healthPort')->with(['list'=>$list,'listPortRef'=>$listPortRef]);
    }
    public function blog(){

        $list=Port::where('status','<>',0)->where('category_id',config('global.Blog'))->orderby('status','DESC')->orderby('updated_at','DESC')->paginate(7);
        $listPortRef=PortRef::where('status',1)->orderby('created_at','DESC')->limit(7)->get();
        return view('client.blog')->with(['list'=>$list,'listPortRef'=>$listPortRef]);
    }
    public function portDetail($slug){
        try {

            $port=Port::where(['slug'=>$slug])->where('status','<>',0)->first();
            $categoryPort=$port->category_id;
            $portOther=Port::where(['category_id'=>$categoryPort])->where('status','<>',0)->where('id','<>',$port->id)->orderby('created_at','DESC')->limit(7)->get();
            return view('client.portDetail')->with(['port'=>$port,'portOther'=>$portOther]);
        } catch (\Throwable $th) {
            // report($th);
            // return false;
        }

    }
    public function product(Request $request){
        $product1=Product::where(['status'=>1])->orderby('created_at','DESC')->offset(0)->limit(4)->get();
        $product2=Product::where(['status'=>1])->orderby('created_at','DESC')->offset(4)->limit(4)->get();
        $product3=Product::where(['status'=>1])->orderby('created_at','DESC')->offset(8)->limit(4)->get();
        if($request->category==null||$request->category=='all'){
            $products=Product::where('status',1)->where('name','like','%' .$request->productName.'%')->orderby('created_at','DESC')->paginate(20);
            return view('client.product')->with(['products'=>$products,'product1'=>$product1,'product2'=>$product2,'product3'=>$product3]);
        }
        else{
            $products=Product::where(['status'=>1,'category_id'=>$request->category])->where('name','like','%' .$request->productName.'%')->orderby('created_at','DESC')->paginate(20);
            return view('client.product')->with(['products'=>$products,'product1'=>$product1,'product2'=>$product2,'product3'=>$product3]);
        }
    }
    public function autocompleteSearch(Request $request){
        $query = $request->get('query');
        $filterResult = Product::where('name', 'LIKE', '%'. $query. '%')->get();
        return response()->json($filterResult);
    }
    public function contact(){
        return view('client.contact');
    }
    public function policy(){
        return view('client.policy');
    }

}
