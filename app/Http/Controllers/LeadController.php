<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Lead;
class LeadController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $leads = Lead::all();

        return view('leads',compact('leads'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //validate the user input
            $request ->validate([
                'companyName' => 'required',
                'companyEmail' => 'required',
                'companyNumber' => 'required',


            ]);
        //create a new product
            //  Lead::create($request->all());

            $leads = new Lead;

            $leads->company_name = $request->input('companyName');
            $leads->company_email = $request->input('companyEmail');
            $leads->company_number = $request->input('companyNumber');
            $leads->status = $request->input('status');


            $leads->save();



        //redirect the user and send friendly message
            return redirect()->route('index.leads')->with('success','Lead Added Successfully!');



    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
