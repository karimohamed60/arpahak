<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Image;
use Illuminate\Http\Request;

class ImageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $images = Image::where('confirmed','=',1)->get();
        return view('gallery',compact('images'));
    }

    public function acceptedImages(){
        $accepted_images = Image::where('confirmed','=',1)->get();
        return view('admin.pages.images.accepted',compact('accepted_images'));
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('users.pages.images.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
           'title'=>'required|string',
           'image'=>'required',
           'price'=>'nullable|numeric|min:0',
        ]);

        $data = new Image();
        $data->title = $request->title;
        $data->user_id = auth()->user()->id;
        $data->price = $request->price ?? 0;
        if($request->file('image')){
            $file= $request->file('image');
            $filename= date('YmdHi').$file->getClientOriginalName();
            $file-> move(public_path('public/Image'), $filename);
            $data['image']= $filename;
        }
        $data->save();

        if($data->save()){
            return redirect()->back()->with('success','تم إرسال الصورة للمختصين للمراجعة.');

        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Image  $image
     * @return \Illuminate\Http\Response
     */
    public function show(Image $image)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Image  $image
     * @return \Illuminate\Http\Response
     */
    public function edit(Image $image)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Image  $image
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Image $image)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Image  $image
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Image::where('id','=', $id) -> delete();
        session() -> flash('success', trans('تم حذف الصورة'));
        return redirect() -> route('confirm.images');
    }
}
