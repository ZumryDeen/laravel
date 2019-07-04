<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;
use Illuminate\Session\Store;

class PostsController extends Controller
{
    //
    public function welcome(){

        return view('welcomeDemo',['name'=>'deen']);

    }
/* Get post */
    public function getPosts(Store $session){
        $postObj = new Post();
        $posts = $postObj->getPosts($session);

        print_r($posts);

        return view('post.post',['postsArray'=>$posts]);
    }


    /* get post by ID*/
    public function getPostsById(Store $session,$id){
        $postObj = new Post();
        $posts = $postObj->getPostsById($session,$id);
        return view('post.post',['postsArray'=>$posts]);
    }


/* Add post */

public function create(){

    return view('post.postcreate');
}

    public function AddPosts(Store $session,Request $request){
        $postObj = new Post();
        $posts = $postObj->addPosts($session,$request->input('title'),$request->input('content'));
        return redirect()->route('posts.post')->with('info','Post Created Successfully!');
    }



    /* edit post*/

    public function editPost(Store $session,$id){


        echo '<pre>';
       // print_r($session);
        echo '</pre>';
        echo $id;

        $postObj = new Post();
         $posts = $postObj->getPostsById($session,$id);

print_r($posts);

        return view('post.edit',['postsArray'=>$posts,'postId'=>$id]);
    }


    public function UpdatePosts( $session,Request $request){
        $postObj = new Post();
        $posts = $postObj->editPosts($session,$request->input('id'),$request->input('title'),$request->input('content'));
        return redirect()->route('posts.post')->with('info','Post Updated Success!');
    }

}

