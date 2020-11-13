<?php

namespace App\Http\Controllers;
use App\Models\Code;
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
        $customers = DB::table('customers')->select(['id', 'tel', 'home_id', 'amount', 'time_start','time_end','date', 'area','type', 'status'])->orderByDesc('id');
    return Datatables::of($customers)
        ->editColumn('type', function ($customer) {
            if($customer->type == 1){
                return "Suất ăn";
            }else{
                return 'Du thuyền';
            }
            
        })
        ->editColumn('status', function ($customer) {
            if($customer->status >= 1){
                return "<input type='checkbox' disabled data-myval='1' id='".$customer->id."' class='handle-checked' checked name='id' value='".$customer->status."'>";
            }else{
                return "<input type='checkbox' data-myval='0' id='".$customer->id."'  class='handle-checked' name='id' value='".$customer->status."'>";
            }
            
        })->rawColumns(['status'])
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
            DB::table('customers')->where('id', $request->id)->update(["status"=>$customer->status+1]);
            $type=$customer->type==1?"Suất ăn":"Du thuyền";
            if($customer->status >= 1){
                $data = "<h1 style='text-align:center; color:red'>ĐÃ QUÉT LẦN ".($customer->status+1)."</h1>";
            }else{
                $data = "";
            }
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

    public function updateStatus(Request $request)
    {
        $customer = DB::table('customers')->where('id', $request->id)->first();
        if($customer){
            DB::table('customers')->where('id', $request->id)->update(["status"=>$customer->status+1]);
            $data['stt'] = true;
            return $data;
        }else{
            return "Check-in không thành công.";
        }
    }

    public function showCode()
    {
        return view('code');
    }
    public function getCode(Request $request)
    {
        $codes = Code::get();
        
        return Datatables::of($codes)
        ->editColumn('edit', function ($code) {
                return "<a  type='submit'  class='edit-code' data-value='".$code->id."'> Edit </a>";
            
        })
        ->editColumn('delete', function ($code) {
            return "<a type='submit' class='del-code' name='id' data-value='".$code->id."'> Xóa </a>";
        
        })->rawColumns(['delete', 'edit'])
        ->make();
    }
    public function deleteCode(Request $request)
    {
        $code = Code::find($request->id);
        if($code){
            $code->delete();
        }
    }
    public function createCode(Request $request){
        $data['code_number'] = $request->code_number;
        $data['name_customer'] = $request->name_customer;
        $data['no'] = $request->no;
        $data['notice'] = $request->notice;
        if($data['code_number'] == '' || $data['name_customer'] == '' || $data['no'] ==""){
            return "Vui lòng nhập thông tin";
        }else{
            $code = DB::table('codes')->insert($data);
            return ['success'=>true];
        }
    }

    public function getEditCode(Request $request)
    {
        $code = Code::find($request->id);
        if($code){
            return ['id' => $code->id, 'code_number' => $code->code_number,'name_customer' => $code->name_customer,'no' => $code->no, 'notice' => $code->notice];
        }
    }

    public function updateCode(Request $request)
    {
        $code = Code::find($request->id_edit);
        if($code){
            $data['code_number'] = $request->code_number_edit;
            $data['name_customer'] = $request->name_customer_edit;
            $data['no'] = $request->no_edit;
            $data['notice'] = $request->notice_edit;
            if($data['code_number'] == '' || $data['name_customer'] == '' || $data['no'] ==""){
                return "Vui lòng nhập thông tin";
            }else{
                $code = DB::table('codes')->where('id', $request->id_edit)->update($data);
                return ['success'=>true];
            }
        }else{
            return "Đã có lỗi, vui lòng reload lại trang.";
        }
        
    }
}
