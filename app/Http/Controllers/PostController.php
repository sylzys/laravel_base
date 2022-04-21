<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller {

    /**
    * * Shows all posts
    * @return view 
    */

    public function index() {
        $posts = Post::all();
        return view( 'posts.index', compact( 'posts' ) );
    }

    /**
    * * Displays post content
    * @param int $id Post id
    * @return view 
    */
    public function show( $id ) {
        $post = Post::find( $id );
        return view( 'posts.show', compact( 'post' ) );
    }

    /**
    * * Displays form for creating new post (GET)
    * * or creates a post (POST)
    * @param Request $request
    * @return view 
    */
    public function create( Request $request ) {
        if ( $request->method() == 'GET' ) {
            return view( 'posts.create' );
        } else {
            $post = new Post;
            $post->title = $request->title;
            $post->body = $request->body;
            $post->save();
            return redirect()->route( 'posts.index' );
        }
    }
    /**
    * * Destroys a post
    * @param int $id Post id
    * @return view 
    */
    public function destroy( $id ) {
        $post = Post::find( $id );
        $post->delete();
        return redirect()->route( 'posts.index' );
    }
}
