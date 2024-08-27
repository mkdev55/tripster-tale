<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Services\ChatGPTService;
use Illuminate\Http\Request;

class GeneratePlanController extends Controller
{
    //

    public function index(){
        return view('services.generate-plan.index');
    }

    public function generate(Request $req, ChatGPTService $svc){

        $result = $svc
        ->start("
        I have the following information from the user:
        Place: $req->place
        Member Amount: $req->member_amount
        Budget: $req->budget
        Vacation Duration: $req->duration days
        Preferences: " . implode(', ', $req->preferences)."
        Transport: [no input provided]
        Using this information, please provide me with a detailed travel itinerary and plan that fits within the user's budget and preferences. The plan should include recommendations for activities, accommodations, and transportation options in Phnom Penh. Please also provide an estimated cost breakdown for the entire trip.

        note: please provide only in json format no need other format.
        ");

        return view('services.generate-plan.result',['result' => $result]);
    }

    public function result(){

        return view('services.generate-plan.result');
    }
}
