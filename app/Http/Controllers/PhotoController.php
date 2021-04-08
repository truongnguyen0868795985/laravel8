<?php

namespace App\Http\Controllers;

use App\Models\Photo;
use Illuminate\Http\Request;

class PhotoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $photos = Photo::all();
        return response()->json($photos);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $photo = new Photo();
        $photo->title = $request->params['title'];
        $photo->photo = $request->params['photo'];
        $photo->categoryId = $request->params['categoryId'];

        $photo->save();
        return $photo->id;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $photo = Photo::find($id);

        if(isset($photo)) return response($photo, 200);

        return response("Photo $id not found", 404);
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
        $photo = Photo::find($id);
        if(isset($photo)){
            $photo->title = $request->params['title'];
            $photo->photo = $request->params['photo'];
            $photo->categoryId = $request->params['categoryId'];

            $photo->save();
        }

        return response($photo, 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $photo = Photo::find($id);
        if(isset($photo)){
            $photo->delete();
        }

        return response()->json(array('success' => 'Delete photo success'));
    }
}
