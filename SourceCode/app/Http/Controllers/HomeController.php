<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Category;
use App\Models\Comment;

class HomeController extends Controller
{
    //home post
    function index(Request $request){
    	// $posts=Post::orderBy('id','desc')->simplePaginate(1);
    	if($request->has('q')){
    		$q=$request->q;
    		$posts=Post::where('title','like','%'.$q.'%')->orderBy('id','desc')->paginate(10);
    	}else{
    		$posts=Post::orderBy('id','desc')->paginate(2);
    	}
        return view('home',['posts'=>$posts]);
    }

   // Post Detail
   function detail(Request $request,$slug,$postId){
    Post::find($postId)->increment('views');
    $detail=Post::find($postId);
    return view('detail',['detail'=>$detail]);
}

 // All Categories
 function all_category(Request $request){

    $categories=Category::orderBy('id','desc');
    return view('categories',['categories'=>$categories]);
}



// All posts according to the category
function category(Request $request,$cat_slug,$cat_id){
    $category=Category::find($cat_id);
    $posts=Post::where('cat_id',$cat_id)->orderBy('id','desc')->paginate(10);
    return view('category',['posts'=>$posts,'category'=>$category]);
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
    return redirect('detail/'.$slug.'/'.$id)->with('success','Comment has been submitted.');
}









}
