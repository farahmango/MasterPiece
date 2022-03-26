<?php

namespace App\Http\Controllers;
use App\Models\Club;
use App\Models\Post;
use App\Models\Provider;
use App\Models\Category;
use App\Models\Contact;


use App\Models\Comment;

use Illuminate\Http\Request;

class LandController extends Controller
{
    function index(Request $request ){
        $club=Club::all();
        $posts=Post::latest()->take(3)->get();
        $providers=Provider::all();
        return view('land',compact('club','posts','providers'));
    }
//club detail

function club_detail(Request $request,$slug,$clubId){
    Club::find($clubId);
    $detail=Club::find($clubId);
    return view('club-detail',['detail'=>$detail]);
}

//provider detail
function provider_detail(Request $request,$slug,$providerId){
    Provider::find($providerId);
    $detail=Provider::find($providerId);
    return view('provider-detail',['detail'=>$detail]);
}

//post detail
// Post Detail
function post_detail(Request $request,$slug,$postId){
//  post
    Post::find($postId)->increment('views');
    $detail=Post::find($postId);

    // cat
    $cats=Category::all();
//search
if($request->has('q')){
    $q=$request->q;
    $posts=Post::where('title','like','%'.$q.'%')->orderBy('id','desc');
}else{
    $posts=Post::orderBy('id','desc');
}
// recent post
  $posts2=Post::latest()->take(3)->get();


    return view('post-detail',compact('detail','posts','posts2','cats') );
}


// Save Comment
function save_comment(Request $request,$slug,$id){
    $request->validate([
        'comment'=>'required'
    ]);
    $data=new Comment;
    $data->user_id=$request->user()->id;
    $data->post_id=$id;
    $data->comment=$request->comment;
    $data->save();
    return redirect('post-detail/'.$slug.'/'.$id)->with('success','Comment has been submitted.');
}

 // All Categories
    function all_category(){
        $categories=Category::orderBy('id','desc')->paginate(5);
        return view('categories',['categories'=>$categories]);
    }
// All posts according to the category
function category(Request $request,$cat_slug,$cat_id){
    $category=Category::find($cat_id);
    $posts=Post::where('cat_id',$cat_id)->orderBy('id','desc')->paginate(10);
    return view('category',['posts'=>$posts,'category'=>$category]);
}


// contact form

function contact(Request $request){
    $request->validate([
        'name'=>'required',
        'email'=>'required',
        'message'=>'required',
    ]);




    $contact=new Contact;
    $contact->name=$request->name;

    $contact->email=$request->email;
    $contact->message=$request->message;
    $contact->save();

    return redirect('land')->with('success','Data has been added');

}

// all clubs

    function clubs(Request $request){
        $clubs=Club::orderBy('id','desc')->paginate(9);
        return view('club',['clubs'=>$clubs]);
    }


// all provider

function providers(Request $request){
    $pro=Provider::orderBy('id','desc')->paginate(4);
    return view('provider',['pro'=>$pro]);
}


}
