<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get( '/api/_debugbar/assets/stylesheets', '\Barryvdh\Debugbar\Controllers\AssetController@css' );
Route::get( '/api/_debugbar/assets/javascript', '\Barryvdh\Debugbar\Controllers\AssetController@js' );

Route::get('welcome','PostsController@welcome');


Route::get('/', function () {
   // return view('welcome', ['name' => 'Deeno', 'status' => ['Completed', 'pending'], 'data' => array('title' => 'Iphone6', 'discription' => 'Awsome'), 'country' => 'srilanka']);

     return "hellow";

});

// ->name(about_url) this is alies for /about so we can use this on menu bar URL

Route::get('/about', function () {
    return view('about');
})->name('about_url');


Route::get('/service', function () {
    return view('service');
});

// use match fucntion for check the submit mehtods Ex : post,get

Route::match(['GET', 'POST'], 'myurl/submit', function () {
    return "form submited";
});

// if just needs to pass call viwe we can use viwe routes

//2.1  view('nameoftheURL','viewfile',array)
Route::view('contact', 'contact_tpl', ['concattData' => ['Deen', 'zumry@gmail.com', '0773664237']]);

// 2.2 if set of Url comes and a common main URL we case use prefix to groupe it
Route::prefix('posts')->group(function () {

  // post 1
    $post1 = new stdClass();
    $post1->id = 1;
    $post1->title = 'Hangout';
    $post1->desc = 'i cant cnontrole my self';

    //psot2
    $post2 = new stdClass();
    $post2->id = 2;
    $post2->title = 'study';
    $post2->desc = 'i need time';

    // adding post to array
    $Allposts = [$post1, $post2];


/* Route::get('', function () use ($Allposts) {
        return view('post.post', ['postdataArr' => $Allposts]);
    });

 Route::get('', function () use ($Allposts) {
        return view('post.post', ['postdataArr' => $Allposts]);
    });*/



    Route::get('','PostsController@getPosts');
    /* creating */
    Route::get('/create', function () {
        return view('post.postcreate');
    });
    Route::post('/create', function () {
        return view('post.postcreate');
    });
    /* edit post */
    Route::get('/edit/{id}','PostsController@editPost');
  /*  Route::get('/edit/{id}', function (\Illuminate\Http\Request $request,$id)  {
        return "<h1> post view for id $id</h1> " . $request->fullUrl();
    });*/
    Route::post('/edit', function (\Illuminate\Http\Request $request,$id)  {
        return "<h1> post view for id </h1> " . $request->fullUrl();
    });


    // 1. adding post

    Route::post('/add', function (\Illuminate\Http\Request $request) use($Allposts) {
        //1.1 validating


        $request->validate([
            'id'=>'required',
            'title'=>'required',

        ]);


        // 1. creat a std class
        $Newpostobj = new stdClass();

         //2 assing post values to obj
         $Newpostobj->id=$request->input('id');
         $Newpostobj->title=$request->input('title');
         $Newpostobj->desc=$request->input('desc');

        $Allposts[]=$Newpostobj;

        return view('post.post', ['postdataArr' => $Allposts]);

        /* accesing post veraible input
         * return "Post added" . $requestObj->input('title');
         * */

        // 1.return "All post variable  : ". print_r($requestObj->all());
        // 2. return "Path : ". $requestObj->path();
        // 3.return "URL : ". $requestObj->url();
        // 4.return "Full URL : ". $requestObj->fullurl();
        // 5.return "Mathod: ". $requestObj->method();
        // 6. reqest query  $requestObj->query('queryname');

    });
});

// to get auto rote add this root on web.php
Route::resource('blog','PostCL');

Route::resource('deen','Testcontroller');

// 2.3 route with pass parameter


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

