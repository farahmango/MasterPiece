<?php

namespace App\Http\Controllers;
use App\Models\Category;
use App\Models\Club;
use Illuminate\Http\Request;

class ClubController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data=Club::all();
        return view('backend.club.index',[
            'data'=>$data,
            'title'=>'All Club',
            'meta_desc'=>'This is meta description for all categories'
        ]);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend/club/add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'title'=>'required'
        ]);
        // Post Full Image
        if($request->hasFile('img')){
            $image=$request->file('img');
            $reImage=time().'.'.$image->getClientOriginalExtension();
            $dest=public_path('/imgs');
            $image->move($dest,$reImage);
        }else{
            $reImage=$request->img;
        }

        $club=new Club;
        $club->title=$request->title;
        $club->detail=$request->detail;
        $club->img=$reImage;

        $club->save();

        return redirect('admin/club/create')->with('success','Data has been added');
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
        $data=Club::find($id);
        return view('backend.club.edit',['data'=>$data]);
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
        $request->validate([
            'title'=>'required'
        ]);

        if($request->hasFile('club_image')){
            $image=$request->file('club_image');
            $reImage=time().'.'.$image->getClientOriginalExtension();
            $dest=public_path('/imgs');
            $image->move($dest,$reImage);
        }else{
            $reImage=$request->cat_image;
        }

        $club=Club::find($id);
        $club->title=$request->title;
        $club->detail=$request->detail;
        $club->img=$reImage;
        $club->save();

        return redirect('admin/club/'.$id.'/edit')->with('success','Data has been added');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Club::where('id',$id)->delete();
        return redirect('admin/club');
    }
}
