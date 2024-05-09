<?php

namespace App\Http\Controllers;
use Carbon\Carbon;
use Illuminate\Http\Request;

// use Illuminate\Support\Facades\DB;
use App\Models\Subscription;

class PlanController extends Controller
{
    public function store(Request $request){
        echo "<pre>";
        $currentDate = Carbon::now();
        $endDate = $currentDate->addDays(28);
        $formattedEndDate = $endDate->format('Y-m-d');
        print_r($request->all());
        $Subscription=new Subscription;
        $Subscription->c_id=6;
        $Subscription->plan_id=3  ;
        $Subscription->purchase_date=date('Y-m-d');
        $Subscription->purchase_end_date=$formattedEndDate;
        $Subscription->save();
    }
}
