<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Symfony\Component\VarDumper\Cloner\Data;
use App\Date;

class DateController extends Controller
{
    //
    public function index(){ $a=new Date(); 
        //$dates = Date::all();
        //echo $dates;

        }
        //回找employee的Name
        /*$name = Date::find(1);
        echo $name->employee->Name;
        */
        //一對多找時數
        //$hour = Date::find(1)->hours;
        //echo $hour;
        //echo "123";
        //foreach ($hour as $hours){
            //echo $hours->Hours;
        //}
        public function delete(Request $request){
            $dates = Date::where('employee_id',$request->input('employee_id'))
            ->delete(['id'=>$request->input('id'),
	    'employee_id'=>$request->input('employee_id'),
	    'Date'=>$request->input('Date')]);
        }
}

