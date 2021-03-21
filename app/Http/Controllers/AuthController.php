<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller {
    public function reg(Request $request){
        $firstname=$request->input('firstname');
        $lastname=$request->input('lastname');
        return view('/Welcome1',['firstname'=> $firstname]);
    }
}

?>