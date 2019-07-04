<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\PostModel;
use Illuminate\Support\Facades\Session;

class PostCL extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct()
    {
        $this->middleware('auth',['except'=>['index','show']]);
    }


    public function index()
    {


     // 1. Retrive list of colums in a table
       $titles = DB::table('post_models')->pluck('title');

    // 2. retrive key and value pairs for array from table
        $titles = DB::table('post_models')->pluck('title','id');

        //3. split big date set into chunk
        DB::table('post_models')->orderBy('id')->chunk(2, function ($users) {
            foreach ($users as $user) {
              //  echo $user->title;

                return false;
            }
        });



 //$post = PostModel::all();

        $post =  DB::table('post_models')
            ->join('users','users.id','=','post_models.user_id')
            ->select('users.id','users.name','post_models.*')
            ->get();


      //  echo '<pre>'; print_r($postVar); echo '</pre>';exit;
Session::put('Remo','Lets learn Laravel');


/*        echo '<pre>'; print_r($titles); echo '</pre>';
exit;*/
        return view('post.posts')->with('postsArray',$post);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('post.postcreate');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        //die("icamae in stopre");

        $this->validate($request,['title'=>'required|min:5',
                        'content'=>'required'
        ]);



        $blog = new PostModel();
        $blog->user_id= auth()->user()->id;
        $blog->title=$request->input('title');
        $blog->content=$request->input('content');
        $blog->save();
        return redirect('blog')->with('info','Post created');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

        $blogs = PostModel::find($id);
//echo Session::get('Remo');
     //   exit;
        //die("imhere show" );
        return view('post.post')->with('posts',$blogs);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)


    {


        /*$blog = PostModel::find($id);*/
        $blog =   DB::table('post_models')->find($id);

        if(auth()->user()->id !==$blog->user_id){

            return redirect('login');
        }
        return view('post.edit')->with('postsArray',$blog);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request,['title'=>'required|min:5',
            'content'=>'required'
        ]);

        $blog = PostModel::find($id);
        $blog->title=$request->input('title');
        $blog->content=$request->input('content');
        $blog->save();
        return redirect('blog')->with('info','Post Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $blog = PostModel::find($id);
        $blog -> delete();
        return redirect('blog')->with('info','Post Deleted');
    }
}
