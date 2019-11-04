<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\District;
use App\ Area;

class AreaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $areas = Area::latest()->get();
        
        $areas = Area::paginate(10);
        return view('backend.Area.index',compact('areas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
      $districts = District::all();
      return view('backend.Area.create',compact('districts'));
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


        $arr = new Area();
        $arr->district_id=$request->input("district_id");
        $arr->name = $request->input("name");
        
        $arr->save();

       // Alert::message('Sucessfull inserted new District');
        return redirect()->route('admin.area.index')->with('success','Successfully Inserted New Area!');
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

         $areas = Area::find($id);
          $districts= District::all();
       
        

        return view('backend.Area.edit',compact('areas','districts'));
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

         $areas = Area::find($id);
        $areas->name = $request->name;
        $areas->district_id=$request->district_id;
        $areas->save();
        return redirect()->route('admin.area.index')->with('success','Successfully Updated Area!');
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

        $area = Area::find($id);
        //dd($id);
        $area->delete();
        return redirect()->route('admin.area.index')->with('warning','Successfully Deleted Area!');
    }
}
