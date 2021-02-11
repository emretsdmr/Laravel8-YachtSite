<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Yacht;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class YachtController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datalist=Yacht::all();
        return view('admin.yacht',['datalist'=> $datalist]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.yacht_add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data=new Yacht;
        $data->title = $request->input('title');
        $data->type = $request->input('type');
        $data->lengthoverall = $request->input('lengthoverall');
        $data->engine = $request->input('engine');
        $data->yearbuilt = $request->input('yearbuilt');
        $data->speed = $request->input('speed');
        $data->hull = $request->input('hull');
        $data->beam = $request->input('beam');
        $data->sails = $request->input('sails');
        $data->cabins = $request->input('cabins');
        $data->fuelcapacity = $request->input('fuelcapacity');
        $data->draft = $request->input('draft');
        $data->generator = $request->input('generator');
        $data->crew = $request->input('crew');
        $data->status = $request->input('status');
        $data->image=Storage::putFile('images',$request->file('image'));
        $data->save();
        return redirect()->route('admin_yachts');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Yacht  $yacht
     * @return \Illuminate\Http\Response
     */
    public function show(Yacht $yacht)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Yacht  $yacht
     * @return \Illuminate\Http\Response
     */
    public function edit(Yacht $yacht,$id)
    {
        $data=Yacht::find($id);
        return view('admin.yacht_edit',['data'=>$data]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Yacht  $yacht
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Yacht $yacht, $id)
    {
        $data=Yacht::find($id);
        $data->title = $request->input('title');
        $data->type = $request->input('type');
        $data->lengthoverall = $request->input('lengthoverall');
        $data->engine = $request->input('engine');
        $data->yearbuilt = $request->input('yearbuilt');
        $data->speed = $request->input('speed');
        $data->hull = $request->input('hull');
        $data->beam = $request->input('beam');
        $data->sails = $request->input('sails');
        $data->cabins = $request->input('cabins');
        $data->fuelcapacity = $request->input('fuelcapacity');
        $data->draft = $request->input('draft');
        $data->generator = $request->input('generator');
        $data->crew = $request->input('crew');
        $data->status = $request->input('status');
        if($request->file('image')!=null)
        {
            $data->image=Storage::putFile('images',$request->file('image'));
        }
        $data->save();
        return redirect()->route('admin_yachts');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Yacht  $yacht
     * @return \Illuminate\Http\Response
     */
    public function destroy(Yacht $yacht,$id)
    {
        $data=Yacht::find($id);
        $data->delete();
        return redirect()->route('admin_yachts');
    }
}
