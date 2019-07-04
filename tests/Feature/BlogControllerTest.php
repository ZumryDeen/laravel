<?php

namespace Tests\Feature;

use App\PostModel;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class BlogControllerTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testControllerStoreBlog()
    {

        $first = factory(PostModel::class)->create(
            [
                'title'=>'Post test 1 ',
                'title'=>'firstPosttestContent'

            ]
        );
        $second = factory(PostModel::class)->Make(  [
            'title'=>'Post test 2',
            'content'=>'SecontTestContent'

        ]);

        $this->blog = factory(PostModel::class)->Make(  [
            'title'=>'Post test 2',
            'content'=>'SecontTestContent'

        ]);

        $response = $this->actingAs($this->blog->user)->json('POST','/blog',[

            'title'=>'Post test 1 ',
            'content'=>'firstPosttestContent'
        ]);

        $response->assertStatus(302);
        $response->assertRedirect('blog');

    }


    public function testBlogCL()
    {

        $respond = $this->json('GET','/blog');
        $respond->assertStatus(200);
        $respond->assertRedirect('blog');


    }


}
