<?php
namespace App;

class Post
{

/* Get post */
    public function getPosts($Mysession)
    {

    if(!$Mysession->has('myposts')){

        $this->dummyData($Mysession);

    }
        return $Mysession->get('myposts');
    }

    /* Method Dummy data*/

    private function dummyData($session)
    {
        $posts = [['title' => 'dyn Post1', 'content' => 'conten 1'],
            ['title' => 'dyn Post2', 'content' => 'conten 2']
        ];

        $session->put('myposts',$posts);


    }



    /* Add post*/
    public function addPosts($session,$title,$content)
    {
        $posts =   $session->get('posts');
        array_push($posts,['title'=>$title,'contect'=>$content]);
        $session->put('posts',$posts);
    }


    /*Edit post*/
    public function editPosts($session,$id,$title,$content)
    {
        $posts = $session->get('posts');
        $posts[$id]=['title'=>$title,'contect'=>$content];


    }



    /* get post Byid*/

    public function getPostsById($session,$id)
    {
        echo "getPostsById";

        if(!$session->has('posts')){

            $this->dummyData($session);

        }


        return $session->get('posts');
    }



}


?>

