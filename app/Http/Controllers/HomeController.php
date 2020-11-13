<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// use App\User;
use DB;
use Yajra\Datatables\Datatables;

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
        return view('home');
    }

    public function getData(){
        $customers = DB::table('customers')->select(['id', 'tel', 'home_id', 'amount', 'time_start','time_end','date', 'area','type', 'is_check'])->orderByDesc('id');

    return Datatables::of($customers)
        ->editColumn('type', function ($customer) {
            if($customer->type == 1){
                return "Suất ăn";
            }else{
                return 'Du thuyền';
            }
            
        })
        ->editColumn('is_check', function ($customer) {
            if($customer->is_check == 1){
                return "<input type='checkbox' class='handle-checked' checked name='id' value='".$customer->is_check."'>";
            }else{
                return "<input type='checkbox' class='handle-checked' name='id' value='".$customer->is_check."'>";
            }
            
        })->rawColumns(['is_check'])
        ->editColumn('time', function ($customer) {
            return $customer->time_start."-".$customer->time_end;
            
        })
        ->make();
    }


    public function QRcode(){
        return view('qr_code');
    }

    public function getInfo(Request $request){
        $customer = DB::table('customers')->where('id', $request->id)->first();

        if($customer){
            $type=$customer->type==1?"Suất ăn":"Du thuyền";
            $data = "<p><span>Mã căn hộ: </span><strong>".$customer->home_id."</strong></p>";
            $data .= "<p><span>Điện thoại: </span><strong>".$customer->tel."</strong></p>";
            $data .= "<p><span>Số lượng: </span><strong>".$customer->amount."</strong></p>";
            $data .= "<p><span>Thời gian: </span><strong>".$customer->time_start." - ".$customer->time_end."</strong></p>";
            $data .= "<p><span>Ngày: </span><strong>".$customer->date."</strong></p>";
            $data .= "<p><span>Khu vực/Du thuyền: </span><strong>".$customer->area."</strong></p>";
            $data .= "<p><span>Phân loại: </span><strong>".$type."</strong></p>";
            return $data;
        }else{
            return "QR code không hợp lệ hoặc không tồn tại";
        }
        
    }
}
