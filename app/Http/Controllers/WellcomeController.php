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
        $dataTimeLunch = Customer::where('type', 1)->get()->groupBy('time_start')->toArray();
        $arrTimeStartLunch = ['11:30'=>'min_1'];
        $arrMaxTimeStartLunch = ['11:30'=>'20'];        //max time từng khung
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
        //get khung gio du thuyen
        $arrTimeChooseShip=[
                        'min_1' => ['time'=>'11:30 - 11:50', 'max' => '20'],
                        'min_2' => ['time'=>'12:00 - 12:20', 'max' => '20'],
                        'min_3' => ['time'=>'12:30 - 12:50', 'max' => '20'],
                        'min_4' => ['time'=>'03:00 - 03:20', 'max' => '20'],
                        'min_5' => ['time'=>'03:00 - 03:40', 'max' => '20'],
                        'min_6' => ['time'=>'03:50 - 04:10', 'max' => '20'],
                        'min_7' => ['time'=>'04:20 - 04:40', 'max' => '20'],
                        'min_8' => ['time'=>'04:50 - 05:00', 'max' => '20'],
                        'min_9' => ['time'=>'05:10 - 05:30', 'max' => '20'],
                        'min_10' => ['time'=>'05:50 - 06:10', 'max' => '20'],
        ];
        $dataTimeShip = Customer::where('type', 2)->get()->groupBy('time_end')->toArray();
        $arrTimeEndShip = ['11:50'=>'min_1', '12:20' => 'min_2', '12:50' => 'min_3', '03:20' => 'min_4', '03:40' => 'min_5', '04:10' => 'min_6', '04:40' => 'min_7', '05:00' => 'min_8', '05:30' => 'min_9', '06:10' => 'min_10'];
        foreach($arrTimeEndShip as $time => $id){
            if(array_key_exists($time , $dataTimeShip)){
                $t = count($dataTimeShip[$time]);
                $arrTimeChooseShip[$id]['rest'] = $arrTimeChooseShip[$id]['max'] - $t;
            }else{
                $arrTimeChooseShip[$id]['rest'] = $arrTimeChooseShip[$id]['max'];
            }
            if($arrTimeChooseShip[$id]['rest'] > 0){
                $arrTimeChooseShip[$id]['stt'] = 'Còn';
                $arrTimeChooseShip[$id]['flag'] = '1';
            }else{
                $arrTimeChooseShip[$id]['stt'] = 'HẾT';
                $arrTimeChooseShip[$id]['flag'] = '0';
            }
        }
        $arrTimeChooseShip1 = array_slice($arrTimeChooseShip, 0, 5);
        $arrTimeChooseShip2 = array_slice($arrTimeChooseShip, 5, 5);
        $codeArr = ['AAA', 'BBB', 'CCC'];
        return view('welcome', compact('codeArr', 'arrLunchTime', 'arrDataArea', 'arrTimeChooseShip1', 'arrTimeChooseShip2'));
    }
    public function lunch(Request $request)
    {
        $now = new DateTime();
        $arrArea = ['country_club'=>'country club', 'club_house'=>'club house', 'river_club'=>'river club'];
        $arrTimeStartLunch = ['min_1'=>'11:30'];
        $arrTimeEndLunch = ['min_1'=>'13:30'];
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
    public function ship(Request $request)
    {
        $now = new DateTime();
        $arrArea = ['princess'=>'Princess', 'fortis'=>'fortis'];
        $arrTimeStartLunch = ['min_1'=>'11:30', 'min_2' => '12:00', 'min_3' => '12:30', 'min_4' => '03:00', 'min_5' => '03:00', 'min_6' => '03:50', 'min_7' => '04:20', 'min_8' => '04:50', 'min_9' => '05:10', 'min_10' => '05:50'];
        $arrTimeEndLunch = ['min_1'=>'11:50', 'min_2' => '12:20', 'min_3' => '12:50', 'min_4' => '03:20', 'min_5' => '03:40', 'min_6' => '04:10', 'min_7' => '04:40', 'min_8' => '05:00', 'min_9' => '05:30', 'min_10' => '06:10'];
        $data['home_id'] = $request->codeId;
        $data['tel'] = $request->Tel;
        $data['amount'] = $request->Amount;
        $data['area'] = $arrArea[$request->Area];
        $data['time_start'] = $arrTimeStartLunch[$request->Time];
        $data['time_end'] = $arrTimeEndLunch[$request->Time];
        $data['date'] = $now->format('Y-m-d');
        $data['created_at'] = $now->format('Y-m-d H:i:s');
        $data['updated_at'] = $now->format('Y-m-d H:i:s');
        $data['type'] = 2;
        $newData = Customer::create($data);
        return ['id' => $newData->id, 'area_cuss' => $newData->area, 'start_cuss' => $newData->time_start, 'end_cuss' => $newData->time_end];
    }
}
