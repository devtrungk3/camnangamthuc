<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comments;
use App\Models\Recipes;
use App\Models\Categories;
use App\Models\Categories_properties;

class CommentsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $comments = Comments::orderBy('created_at','DESC')->paginate(10);
        $recipes = Recipes::orderBy('created_at','DESC')->get();
        return view('admin.page.comments.index',compact('recipes'));
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $recipes = Recipes::find($id);
        $user = Comments::all();
        $comments = Comments::where('id_recipes',$recipes->id)->get();
        return view('admin.page.comments.show',compact('recipes','comments','user'));
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
    public function update(Request $request, Comments $comments)
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
        Comments::find($id)->delete();
        return redirect()->back()->with('success','Xóa thành công');
    }

    
    // public function trolai($id){
    //     $comments = Comments::find($id);
        
    //     $comments->trangthai = 1;
    //     $comments->save();
    //     return redirect()->back()->with('success','Bình luận đã trở lại bình thường');
    // }
}
