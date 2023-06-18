<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    //customer create page
    public function create(){
        // take all data from database.
        // to array mean change to array format.
        // you can write all() or get().
        $posts=Post::orderBy('created_at','desc')->get()->toArray();
        //output with dd view
        // dd($posts[0]['title']);
        // dd($posts);
        return view('create',compact('posts'));
    }


    //post create
    public function postCreate(Request $request){
           
           $data= $this->getPostData($request);
           //create data into database
            Post::create($data);

            return redirect()->route('post#createPage');

            // redirect the createpage
            // return view('create');
            // return back();
            // return redirect('testing');// url
           // return redirect()->route('test');// name
    }



    // private function
    // get post data
    private function getPostData($request){
        // $response =[
        //         'title' =>$request->postTitle,
        //         'description'=>$request->postDescription
        //     ];
        //     return $response;


        return [
                'title' =>$request->postTitle,
                'description'=>$request->postDescription
            ];

         }


}
