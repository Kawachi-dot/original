<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Account;
use App\Models\Money;
use App\Models\Plan;

class AccountController extends Controller
{
    public function login(){
        return view('');
    }
    
    //Account
    public function account_create(){
        return view('');
    }
    
    public function account_create_complete(Request $request){
        $account=new Account;
        $account->code=$request->code;
        $account->name=$request->name;
        $account->password=$request->password;
        $account->save();
        return view('');
    }
    
    public function account_edit($user_id){
        $account_edit=Account::find($user_id);
        return view('');
    }
    
    public function account_update(Request $request){
        $account_update=Account::find($user_id);
        $account_update->code=$request->code;
        $account_update->name=$request->name;
        $account_update->password=$request->password;
        $account_update->save();
        return view('');
    }
    
    public function login(){
        return view();
    }
    
    public function login(){
        return view();
    }
    public function login(){
        return view();
    }
    public function login(){
        return view();
    }
    public function login(){
        return view();
    }
    public function login(){
        return view();
    }
    public function login(){
        return view();
    }
    public function login(){
        return view();
    }
    public function login(){
        return view();
    }
    public function login(){
        return view();
    }
}
