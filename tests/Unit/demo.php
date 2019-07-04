<?php

namespace Tests\Feature;

use App\PostModel;
use phpDocumentor\Reflection\Types\Parent_;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class Blogtest extends TestCase
{

    /* Test post Exist*/
    public function testPostExsist(){

        $posts = PostModel::all();
        $this->assertCount(142,$posts);


    }



    /* Test find post*/

    public function testFindblog(){

        $posts = PostModel::find(24);
        $this->assertEquals($posts->title,'Debitis incidunt est velit ipsa');
        $this->assertDatabaseHas('post_models',['title'=>'Et natus dolorum quos qui quidem nobis.']);

    }




}
