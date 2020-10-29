<?php

namespace App\Http\Controllers;

use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;

use App\register;
use DB;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }

    public function listingPage(){
        $categories = DB::table('vehicle_category')->get();
        return view('listing_page',compact('categories'));
    }

    public function dueExpensePage(){
        return view('due_expense_page');

    }
    public function viewlistingPage(){

        $registers = Register::all();

        return view('view',compact('registers'));

    }
    public function dueRecipt(){
        return view('due_recipt');

    }

    public function createVehiclepage(Request $request){
        $return = null;
        if($request->type_id == 'category'){
            $return = DB::table('vehicle_brand')->where('category_id',$request->id)->orderBy('brand')->get();

        }else{
            $return = DB::table('vehicle_model')->where('brand_id',$request->id)->orderBy('model')->get();

        }
        return response()->json(['status' => '200',  'data' => $return]);

    }

    public function newRegistration(Request $request){
        // dd($request->all()  );
        $regstore = new register;
        $regstore->hp_number = $request->hp_number;
        $regstore->date= $request->date;
        $regstore->hire_name = $request->hire_name;
        $regstore->hire_address = $request->hire_address;
        $regstore->guarantor_name = $request->guarantor_name;
        $regstore->guarantor_address = $request->guarantor_address;
        $regstore->vehicle_category = $request->vehicle_category;
        $regstore->vehicle_vehicle = $request->vehicle_vehicle;
        $regstore->vehicle_model = $request->vehicle_model;
        $regstore->vehicle_number= $request->vehicle_number;
        $regstore->chassis_no= $request->chassis_no;
        $regstore->engine_number = $request->engine_number;
        $regstore->contract_period = $request->contract_period;
        $regstore->vehicle_cost = $request->vehicle_cost;
        $regstore->advance_amount = $request->advance_amount;
        $regstore->financial_charge = $request->financial_charge;
        $regstore->interest = $request->interest;
        $regstore->total_finance = $request->total_finance;
        $regstore->cost_difference = $request->cost_difference;
        $regstore->caution_deposit = $request->caution_deposit;
        $regstore->current_insurance = $request->current_insurance;
        $regstore->rto_expense = $request->rto_expense;
        $regstore->total_other = $request->total_other;
        $regstore->reg_date= $request->reg_date;
        $regstore->dealer_name = $request->dealer_name;
        $regstore->cheque_no= $request->cheque_no;
        $regstore->save();
        return redirect()->back() ; //->('msg','Row Inseted Successfully');
        // return view('new_regi');
    }
    public function dueReciptCreate(Request $request){
        dd($request->all()  );
        return view('new_regi');

    }


    public function script(){
        $dumps = array('Alpha', 'Fascino', 'Fascino 125', 'Ray', 'Ray Zr', 'Ray ZR 125', 'Ray-z');
        $count = 0;
        foreach($dumps as $dump){
            DB::table('vehicle_model')->insert(

                ['brand_id' => 20, 'model' => $dump]
            );
            $count++;
        }
        return 'Script Excuted'.$count;

    }

}
