<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\Plan;

class PlanController extends Controller
{
    public function index(Plan $plan){
        
        $plans = $plan->all();
        //SELECT FROM * plans 
        return view('planos', ['plans'=>$plans]);
    }
}
