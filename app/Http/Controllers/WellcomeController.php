<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Customer;
use \Datetime;
use DB;

class WellcomeController extends Controller
{
    public function index()
    {
        $codeArr = ['AAA', 'BBB', 'CCC'];
        return view('welcome', compact('codeArr'));
    }
    public function lunch(Request $request)
    {
        $now = new DateTime();
        $arrArea = ['country_club'=>'country club', 'club_house'=>'club house', 'river'=>'river club'];
        $arrTimeStartLunch = ['min_1'=>'11:30', 'min_2' => '12:00', 'min_3' => '12:30', 'min_4' => '13:00'];
        $arrTimeEndLunch = ['min_1'=>'11:50', 'min_2' => '12:20', 'min_3' => '12:50', 'min_4' => '13:30'];
        $data['home_id'] = $request->codeId;
        $data['tel'] = $request->Tel;
        $data['amount'] = $request->Amount;
        $data['area'] = $arrArea[$request->Area];
        $data['time_start'] = $arrTimeStartLunch[$request->Time];
        $data['time_end'] = $arrTimeEndLunch[$request->Time];
        $data['date'] = $now->format('Y-m-d');
        $data['created_at'] = $now->format('Y-m-d H:i:s');   
        $data['updated_at'] = $now->format('Y-m-d H:i:s'); 
        $data['type'] = 1;
        $newData = Customer::create($data);
        return ['id' => $newData->id, 'area_cuss' => $newData->area, 'start_cuss' => $newData->time_start, 'end_cuss' => $newData->time_end];
    }
}
