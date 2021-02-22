<?php

namespace App\Http\Controllers;

use App\userreg;
use Illuminate\Http\Request;

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


    public function dueRecipt(){
        return view('due_recipt');
    }

    public function dueReciptCreate(Request $request){
        $userreg = new userreg;
        $userreg->user_id=$request->ref_id;
        $userreg->ref_name=$request->ref_name;
        $userreg->ref_mobile=$request->ref_cell_no;
        $userreg->ds_adhar=$request->adr_no;
        $userreg->ds_reg_name=$request->reg_no;
        $userreg->ds_name=$request->ds_name;
        $userreg->ds_dob=$request->dob;
        $userreg->ds_mobile=$request->cell_no;
        $userreg->ds_address=$request->address;
        $userreg->ds_state=$request->state;
        $userreg->ds_distict=$request->distict;
        $userreg->ds_email=$request->email;
        $userreg->ds_pincode=$request->pincode;
        $userreg->ds_acc_no=$request->ac_no;
        $userreg->ds_ifsc_code=$request->ifsc_code;
        $userreg->ds_pan_number=$request->pan_no;
        $userreg->ds_branch=$request->branch;
        $userreg->n_name=$request->n_name;
        $userreg->n_relationship=$request->n_relationship;
        $userreg->n_mobile=$request->n_mobile;
        $userreg->n_adhar=$request->n_aadhar;
        $userreg->n_address=$request->n_address;
        $userreg->save();
        return redirect()->back();
    }
}
