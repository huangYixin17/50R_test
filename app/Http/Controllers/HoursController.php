<?php

namespace App\Http\Controllers;

use App\Hours;
use App\Employee;
use App\Date;
use Illuminate\Http\Request;
use View;
class HoursController extends Controller
{
    //
    public function index(){
        $a = new Hours();

        return View::make('viewhours');
        /*$hours = Hours::all();
        echo $hours;   
        */
    }
    public function show(){
        $dates = Date::all();
        #$emps = Employee::all();
        
    return View::make('showhours',['dates' => $dates]);
    }

    public function delete(){
        
    }
    public function test(){
        $hours = Hours::all();
        $emps = Employee::all();
        $empid = Hours::find(1);
        echo $empid->date->employee_id;
        return View::make('showhours',['hours' => $hours],['emps'=>$emps],['emps'=>$emps]);
    }

}
