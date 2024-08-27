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

        $json = $this->formatChat($req);
        return view('services.generate-plan.result',['result' => $json]);
    }

    public function result(){

        return view('services.generate-plan.result');
    }
    public function new(Request $req){

        $json = $this->formatChat($req);
        return view('services.generate-plan.result',['result' => $json]);
    }

    private function formatChat(Request $req){
        $svc = new ChatGPTService();

        $content = $svc
        ->start("
        I have the following information from the user:
        Place: $req->place
        Member Amount: $req->member_amount
        Budget: $req->budget
        Vacation Duration: $req->duration days
        Preferences: " . implode(', ', $req->preferences)."
        Transport: [no input provided]

        please find the above criteria and response result like this and make it compatible for integrate with coding json format. make sure to have the correct duration of vacation and make sure source are correct.
        {
            place: {name only},
            total: {value}$
            days: {
                'day': 'day1'
                'hotel': {name only}
                'restaurant': {name only}
                'tourist_area': {name only}
                'transportation': {name only}
            }
        }
        ");

        $data = json_decode($content,true);
        if(!isset($data['days']['day'])){
            // sleep(3);
            // $this->formatChat($req);
        }
        return $data;
    }
}

// {
//     place: {name only},
//     total: {value}$
//     days: {
//         'day': 'day1'
//         'hotel': {name only}
//         'restaurant': {name only}
//         'tourist_area': {name only}
//         'transportation': {name only}
//     }
// }
