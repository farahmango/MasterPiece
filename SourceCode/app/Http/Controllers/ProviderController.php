<?php

namespace App\Http\Controllers;
use App\Models\Category;
use App\Models\Club;
use App\Models\Provider;
use Illuminate\Http\Request;

class ProviderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {


        $data=Provider::all();
        return view('backend.provider.index',[
            'data'=>$data,
            'title'=>'All Provider',
            'meta_desc'=>'This is meta description for all providers'
        ]);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend/provider/add');
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

        $provider=new Provider;
        $provider->title=$request->title;
        $provider->detail=$request->detail;
        $provider->img=$reImage;

        $provider->save();

        return redirect('admin/provider/create')->with('success','Data has been added');
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
        $data=Provider::find($id);
        return view('backend.provider.edit',['data'=>$data]);
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

        if($request->hasFile('provider_image')){
            $image=$request->file('provider_image');
            $reImage=time().'.'.$image->getClientOriginalExtension();
            $dest=public_path('/imgs');
            $image->move($dest,$reImage);
        }else{
            $reImage=$request->provider_image;
        }

        $provider=Provider::find($id);
        $provider->title=$request->title;
        $provider->detail=$request->detail;
        $provider->img=$reImage;

        $provider->save();

        return redirect('admin/provider/'.$id.'/edit')->with('success','Data has been added');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Provider::where('id',$id)->delete();
        return redirect('admin/provider');
    }
}
