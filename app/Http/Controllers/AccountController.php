<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Account;
use App\Models\Money;
use App\Models\Plan;

class AccountController extends Controller
{
    public function login(){
        return view('auth/login');
    }
    
    public function logout(){
        return view('logout');
    }
    
    
    //Account
    public function account_info(){
        $accounts=Account::all();
        return view('account_info',compact('account'));
    }

    public function account_create(){
        return view('account_create');
    }
    
    public function account_confirm(Request $request){
        
        return view('account_confirm');
    }
    public function account_register(Request $request){
        $account=new Account;
        $account->code=$request->code;
        $account->name=$request->name;
        $account->password=$request->password;
        $account->save();
        return view('account_register');
    }
    
    public function account_edit($account_id){
        $account_edit=Account::find($account_id);
        return view('account_edit');
    }
    
    public function account_update(Request $request,$account_id){
        $account_update=Account::find($account_id);
        $account_update->code=$request->code;
        $account_update->name=$request->name;
        $account_update->password=$request->password;
        $account_update->save();
        return view('account_update');
    }
    
    
    //Money
    public function money_list(){
        $money=Money::all();
        dd($money);
        return view('money_list', compact('money'));
    }
    public function money_add(){
        return view('money_add');
    }
    public function money_add_complete(Request $request){
        $money=new Money;
        $money->month=$request->month;
        $money->day=$request->day;
        $money->usage_id=$request->usage_id;
        $money->money=$request->money;
        $money->comment=$request->comment;
        $money->save();
        return view('money_add_complete');
    }
    public function money_edit($money_id){
        $money=Money::find($money_id);
        
        return view('money_edit',compact('money'));
    }
    public function money_update(Request $request,$money_id){
        $money_update=Money::find($money_id);
        $money_update->month=$request->month;
        $money_update->day=$request->day;
        $money_update->usage_id=$request->usage_id;
        $money_update->money=$request->money;
        $money_update->comment=$request->comment;
        $money_update->save();
        return view('money_update');
    }
    public function money_delete(Request $request){
        $money_delete=Money::find($request->money_id);
        $money_delete->delete();
        return view('money_delete');
    }

    //Plan
    public function plan_list(){
        $plans=Plan::where('id',1)->first();
        return view('plan_list',compact('plans'));
    }
    public function plan_create(){
        return view('plan_create');
    }
    
    public function plan_create_complete(Request $request){
        $plan=new Plan;
        $plan->utility=$request->utility;
        $plan->food=$request->food;
        $plan->housing=$request->housing;
        $plan->daily_necessity=$request->daily_necessity;
        $plan->transport=$request->transport;
        $plan->medical=$request->medical;
        $plan->other=$request->other;
        $plan->save();
        return view('plan_create_complete');
    }
    
    public function plan_edit($plan_id){
        $plan_edit=Plan::find($plan_id);
        return view('plan_edit',compact('plan_edit'));
    }
    
    public function plan_update(Request $request,$plan_id){
        $plan=Plan::find($plan_id);
        $plan->utility=$request->utility;
        $plan->food=$request->food;
        $plan->housing=$request->housing;
        $plan->daily_necessity=$request->daily_necessity;
        $plan->transport=$request->transport;
        $plan->medical=$request->medical;
        $plan->other=$request->other;
        $plan->save();
        return view('plan_update');
    }
    
    //Graph
    public function graph(){
        return view('graph');
    }
    
}
