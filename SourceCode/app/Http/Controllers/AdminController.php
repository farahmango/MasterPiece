<?php

namespace App\Http\Controllers;
use App\Models\Admin ;
use App\Models\Comment;
use App\Models\Contact;
use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    //login
   public function login(Request $request){

return view('backend.login');


}

//submit_login
public function submit_login(Request $request )
{

$request->validate([
'username'=>'required',
'password'=>'required',
]);

$userCheck=Admin::where(['username'=>$request->username,'password' => $request->password])->count();
if($userCheck>0){
    $adminData=Admin::where(['username'=>$request->username,'password' => $request->password])->first();
    session(['adminData'=>$adminData]);
    return redirect('admin/dashboard');
}else{
    return redirect('admin/login')->with('error','Invalid username/password!!');
}
}

//main_page
public function dashboard()
{
    $posts=Post::orderBy('id','desc')->get();
    return view('backend.dashboard',['posts'=>$posts]);}



// Show all users
function users(){
    $data=User::orderBy('id','desc')->get();
    return view('backend.user.index',['data'=>$data]);
}


function admins(){
    $data=Admin::orderBy('id','desc')->get();
    return view('backend.admin.index',['data'=>$data]);
}


//delete user
    public function delete_user($id)
    {
        User::where('id',$id)->delete();
        return redirect('admin/user');
    }


  // Show all comments
  function comments(){
    $data=Comment::orderBy('id','desc')->get();
    return view('backend.comment.index',['data'=>$data]);
}

public function delete_comment($id)
{
    Comment::where('id',$id)->delete();
    return redirect('/comment');
}



//logout
function logout(){
    session()->forget(['adminData']);
    return redirect('admin/login');
}

// Show all messages
function contact(){
    $data=Contact::orderBy('id','desc')->get();
    return view('backend.contact.index',['data'=>$data]);
}

}
