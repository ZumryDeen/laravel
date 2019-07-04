<?php

namespace Tests\Feature;

use App\PostModel;
use phpDocumentor\Reflection\Types\Parent_;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class Blogtest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
protected $first,$second,$third;
/*    public function setUp()
    {

        Parent_::setUp();
        $this->artisan('migrate:refresh');
        $this->seed();
        $this->first = factory(PostModel::class)->create();
        $this->second=factory(PostModel::class)->create();


    }*/


    public function testAddblog()
    {

        $first = factory(PostModel::class)->create(
            [
              'title'=>'firstTitle',
                'title'=>'firstPosttestContent'

            ]
        );
        $second = factory(PostModel::class)->create(  [
            'title'=>'SecontTestTitle',
            'title'=>'SecontTestContent'

        ]);
        $blogCount = PostModel::all();
        $this->assertCount(61,$blogCount);

    }

/* Test post Exist*/
    public function testPostExsist(){

        $posts = PostModel::all();
        $this->assertCount(63,$posts);


    }

    /*Test add new post*/

    public function testNewpost(){
        $blog = new PostModel();
        $blog->title="3rd Test title";
        $blog->content="3rd test content";
        $blog->user_id=4;
        $blog->save();

      $this->assertCount(60,PostModel::all());

        
    }

    /* Test find post*/

    public function testFindblog(){

        $posts = PostModel::find(24);
        $this->assertEquals($posts->title,'Debitis incidunt est velit ipsa');
$this->assertDatabaseHas('post_models',['title'=>'Et natus dolorum quos qui quidem nobis.']);

    }


    /* Test Delete Blog*/

    public function testDeleteBlog(){

        $this->third->delete();
        $this->assertDatabaseMissing('post_models',['title'=>'3rd title']);
    }

}
