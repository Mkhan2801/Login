<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class UserController extends Controller
{
    public function Index(){
        if(auth()->check()){
            $user = auth()->user();
      //  $post = $user->homefeed()->latest()->paginate(5);
        return view('profile',['posts'=> '$post']);
        }else{
            return view('home');
        }
    }

    public function singIn(Request $req ){
        $input = $req->validate([
            'loginusername' => 'required',
            'loginpassword' => 'required',
        ]);
        if(auth()->attempt(['username'=> $input['loginusername'],'password'=> $input['loginpassword']])){
            $req->session()->regenerate();
            $user = auth()->user();
            return redirect("/");
        }
        else
        {
            return redirect('/')->with('fail','Invaled username or password');
        }
    }

    public function singUp(Request $req ){
        $input = $req->validate([
            'username_singup' => ['required', 'min:3', 'max:20', Rule::unique('users','username')],
            'email_singup' => ['required', 'email', Rule::unique('users','email')],
            'password_singup' => ['required', 'min:8'],
        ]);
        $userData['password']=bcrypt($input['password_singup']);
        
        $userData['username'] = $input['username_singup'];
        $userData['email'] = $input['email_singup'];
        $user =  User::create($userData);
        auth()->login($user);
        return redirect('/');

    } 

    public function singOut(){
        auth()->logout();
        return redirect('/');
    }
 
    public function profileUpdate(){
        return view('profileUpdate');
    }

    public function post(Request $req){
        $input = $req->validate([
            'title' => 'required',
            'body' => 'required'
        ]);
        $input['title']= strip_tags($input['title']) ;
        $input['body']= strip_tags($input['body']) ;
        $input['user_id']= auth()->id();

        $newPost = Post::create($input);
        
        return redirect("/")->with('success', 'New post successfully created.');
    }

    public function deletePost(Post $post){
        if(auth()->user()->cannot('delete',$post)){
            return view('post',['post'=>$post])->with('errer','You cannot delete this post');
        }
        $post->delete();
        return redirect("/profile/{$post->user_id}/posts/");
    }

    public function updatePost(Post $post ,Request $req){
        $input = $req->validate([
            'title' => 'required',
            'body' => 'required'
        ]);
        $input['title']= strip_tags($input['title']) ;
        $input['body']= strip_tags($input['body']) ;
        $post->update($input);
        return redirect("/profile/{$post->user_id}/posts/");
    }

    public function avatar(){
        return view('avatar');
    }

    
    public function updateAvatar(Request $req){
        $req->validate(['avatar'=> 'required|image|max:3000']);
        $manager = new ImageManager(new Driver());

        $user = auth()->user();
        $filename = $user->id . "-" . uniqid() . ".jpg";
        $image = $manager->read($req->file("avatar"));
        $imageData = $image->cover(120,120)->toJpeg();
        Storage::put("public/avatars/" . $filename,$imageData);
        
        $oldAvatar = $user->avatar;
        $user->avatar = $filename;
        $user->save();
        if($oldAvatar != "fallback-avatar.jpg"){
        Storage::delete(str_replace("/storage/","/public/",$oldAvatar));
        }


        return redirect('/')->with('singIn',"Profile Avatar is Updated ");

    }
}
