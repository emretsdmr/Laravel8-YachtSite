<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ImageUnderconstruct;
use App\Models\Yacht;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class UnderconsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datalist=Yacht::all();
        return view('admin.underconstruct',['datalist'=> $datalist]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($yacht_id)
    {
        $data=Yacht::find($yacht_id);
        $images=DB::table('image_underconstructs')->where('yacht_id','=',$yacht_id)->get();

        return view('admin.underconstruct_image',['data'=>$data,'images'=>$images]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request,$yacht_id)
    {
        $data=new ImageUnderconstruct();
        $data->title = $request->input('title');
        $data->yacht_id = $yacht_id;
        $data->image=Storage::putFile('images',$request->file('image'));
        $data->save();
        return redirect()->route('admin_undercons_add',['yacht_id'=>$yacht_id]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ImageUnderconstruct  $imageUnderconstruct
     * @return \Illuminate\Http\Response
     */
    public function show(ImageUnderconstruct $imageUnderconstruct)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ImageUnderconstruct  $imageUnderconstruct
     * @return \Illuminate\Http\Response
     */
    public function edit(ImageUnderconstruct $imageUnderconstruct)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ImageUnderconstruct  $imageUnderconstruct
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ImageUnderconstruct $imageUnderconstruct)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ImageUnderconstruct  $imageUnderconstruct
     * @return \Illuminate\Http\Response
     */
    public function destroy(ImageUnderconstruct $image,$id,$yacht_id)
    {
        $data=ImageUnderconstruct::find($id);
        $data->delete();
        return redirect()->route('admin_undercons_add',['yacht_id'=>$yacht_id]);
    }
}
