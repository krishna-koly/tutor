<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\District;
//use App\Providers\SweetAlertServiceProvider;
use Alert;

class DistrictController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response

     */

    public function index()
    {
        //
        $districts = District::all();
        $districts = District::paginate(10);

        return view('backend.district.index', compact('districts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('backend.District.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //

        $validate = $request->validate(
            [
                'name' => 'required|min:1',
                
                
            ]
        );



        $arr = new District();
        $arr->name = $request->input("name");
        
        $arr->save();

       // Alert::message('Sucessfull inserted new District');
        return redirect()->route('admin.district.index')->with('success','Successfully Inserted New District!');
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
        $district = District::find($id);
        return view('backend.district.edit', compact('district'));
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

        $district = District::find($id);
        $district->name = $request->name;
        $district->save();
        return redirect()->route('admin.district.index')->with('success','Successfully Updated District!');
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

        $district = District::find($id);
        //dd($id);
        $district->delete();
        return redirect()->route('admin.district.index')->with('warning','Successfully Deleted!');
                       
    }
}
