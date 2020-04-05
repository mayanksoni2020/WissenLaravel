<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class WebController extends Controller
{
    public function submit(Request $request){
        // print_r($request->input());
        // $request->validate([
        //     "inputfname"=>"required|max:20",
        //     "inputlname"=>"required|max:20",
        //     "inputgender"=>"required",
        //     "inputemail"=>"required|email",
        //     "inputreg"=>"required|min:8",
        //     "inputphone"=>"required|min:10",
        //     "inputteam"=>"required|max:50"
        // ]);

        $validator = Validator::make($request->all(), [
            "inputfname"=>"required|max:20",
            "inputlname"=>"required|max:20",
            "inputgender"=>"required",
            "inputemail"=>"required|email",
            "inputreg"=>"required|min:8",
            "inputphone"=>"required|min:10",
            "inputteam"=>"required|max:50"
        ]);

        if($validator->fails()){
            return redirect('eventregistration')->with('alert', 'Please provide all the details correctly!');
        }
        else{
            $inputfname = $request->input('inputfname');
            $inputlname = $request->input('inputlname');
            $inputgender = $request->input('inputgender');
            $inputemail = $request->input('inputemail');
            $inputreg = $request->input('inputreg');
            $inputphone = $request->input('inputphone');
            $inputteam = $request->input('inputteam');
            $data = array("firstname"=>$inputfname,"lastname"=>$inputlname,"gender"=>$inputgender,"email"=>$inputemail,"registration_no"=>$inputreg,"phone_no"=>$inputphone,"team_name"=>$inputteam);
            DB::table('hacksafety')->insert($data);
            return redirect('eventregistration')->with('alert', 'Your response has been recorded successfully!');
        }
    }

}
