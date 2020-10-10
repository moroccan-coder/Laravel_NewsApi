<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $users = \App\User::paginate(env('AUTHORS_PER_PAGE'));
        return new \App\Http\Resources\UsersResource($users);
    }




    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function show($id)
    {
        //
        return new \App\Http\Resources\UserResource(\App\User::find($id));


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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }



    public function posts($id)
    {
       $user = \App\User::find($id);
       //paginate result to 5 item pare page
          // $posts = $user->posts()->paginate(5);

      // number in page from constant in .env file
      $posts = $user->posts()->paginate( env('POSTS_PER_PAGE') );
       return new \App\Http\Resources\AuthorPostsResource($posts);
    }




public function comments($id)
{
    $user = \App\User::find($id);
    $comments = $user->comments()->paginate(env('COMMENTS_PER_PAGE'));
    return new \App\Http\Resources\AuthorCommentsResource($comments);
}


}
