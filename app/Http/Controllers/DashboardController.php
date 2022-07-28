<?php

namespace App\Http\Controllers;
use App\Models\Lead;


use Illuminate\Http\Request;

class DashboardController extends Controller
{
    //
    public function index(){

        $leads = Lead::all();

        //total leads
        $totalLeads = 0;

        foreach($leads as $lead){
            $totalLeads+=1;
        }

        //Active Leads
        $activeLeads = 0;


        foreach($leads as $lead){

            if($lead->status == 1){
                $activeLeads+=1;
            }

        }

        //In-active Leads
        $inActiveLeads = 0;


        foreach($leads as $lead){

            if($lead->status == 0){
                $inActiveLeads+=1;
            }

        }


        //printing the lead data to the table
        $leads = Lead::latest()->paginate(6);

        return view('starter',compact('leads','totalLeads','activeLeads','inActiveLeads'))->with(request()->input('page'));


    }
}
