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
        //get so luong khung gio
        $dataTimeLunch = Customer::get()->groupBy('time_start')->toArray();
        $arrTimeStartLunch = ['11:30'=>'min_1', '12:00' => 'min_2', '12:30' => 'min_3', '13:00' => 'min_4'];
        $arrMaxTimeStartLunch = ['11:30'=>'20', '12:00' => '20', '12:30' => '20', '13:00' => '20'];        //max time từng khung
        $countTimeLunch = array();
        foreach($arrTimeStartLunch as $time => $id){
            $arrLunchTime[$id]['max'] = $arrMaxTimeStartLunch[$time];
            if (array_key_exists($time , $dataTimeLunch)) {
                $arrLunchTime[$id]['rest'] = $arrMaxTimeStartLunch[$time] - count($dataTimeLunch[$time]);
            }else{
                $arrLunchTime[$id]['rest'] = $arrMaxTimeStartLunch[$time];
            }
        }
        // get khu vuc
        $dataArea = Customer::get()->groupBy('area')->toArray();
        $arrCharArea = ['country club'=>'area1', 'club house'=>'area2', 'river club'=>'area3'];
        $dataMaxArea = ['country club'=>'10', 'club house' => '10', 'river club' => '10'];
        foreach($arrCharArea as $time => $id){
            $arrDataArea[$id]['max'] = $dataMaxArea[$time];
            if (array_key_exists($time , $dataArea)) {
                $arrDataArea[$id]['rest'] = $dataMaxArea[$time] - count($dataArea[$time]);
            }else{
                $arrDataArea[$id]['rest'] = $dataMaxArea[$time];
            }
        }

        $codeArr = ['AAA', 'BBB', 'CCC'];
        return view('welcome', compact('codeArr', 'arrLunchTime', 'arrDataArea'));
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
