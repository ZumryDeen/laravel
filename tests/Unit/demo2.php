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
        $blogCount = PostModel::all();
        $this->assertCount(2,$blogCount);

    }
}
