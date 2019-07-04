<?php

namespace Tests\Unit;

use App\PostModel;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class demo2 extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function testAddblog()
    {

        $first = factory(PostModel::class)->create(
            [
                'title'=>'firstTitle',
                'content'=>'firstPosttestContent'

            ]
        );
        $second = factory(PostModel::class)->create(  [
            'title'=>'SecontTestTitle',
            'content'=>'SecontTestContent'

        ]);

        $third = factory(PostModel::class)->create(  [
            'title'=>'3rd title',
            'content'=>'3rd post'

        ]);

        $blogCount = PostModel::all();
        $this->assertCount(3,$blogCount);

    }

    /* Test post Exist*/
    public function testPostExsist(){

        $posts = PostModel::all();
        $this->assertCount(3,$posts);


    }


    /* Test find post*/

    public function testFindblog(){

        $posts = PostModel::find(1);
        $this->assertEquals($posts->title,'firstTitle');
        $this->assertDatabaseHas('post_models',['title'=>'firstTitle']);

    }

    public function testDeleteBlog(){

        $this->third->delete();
        $this->assertDatabaseMissing('post_models',['title'=>'3rd title']);
    }

}
