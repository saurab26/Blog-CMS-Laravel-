<?php

namespace App\Http\Controllers\Blogcontroller;
use App\Post;
use App\Category;
use App\User;
use App\Tag;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    protected $limit = 4;
    public function index()
    {
        

        $posts = Post::with('author','tags','category','comments')
                        ->latestFirst()
                        ->published()
                        ->filter(request()->only(['term','month','year']))
                        ->paginate($this->limit);
            
                            
        return view('blog.index',compact('posts'));
    }
    public function category(Category $category )
    {
        $categoryName = $category->title;
       

        $posts = $category->posts()
                          ->with('author','tags','comments')
                          ->latestFirst()
                          ->published()
                          ->paginate($this->limit); 
        return view('blog.index',compact('posts','categoryName'));
    }

    public function tag(Tag $tag )
    {
        $tagName = $tag->title;
       

        $posts = $tag->posts()
                          ->with('author','category','comments')
                          ->latestFirst()
                          ->published()
                          ->paginate($this->limit); 
        return view('blog.index',compact('posts','tagName'));
    }

    public function author(User $author)
    {
        $authorName = $author->name;
       

        $posts = $author->posts()
                          ->with('category','tags','comments')
                          ->latestFirst()
                          ->published()
                          ->paginate($this->limit); 
        return view('blog.index',compact('posts','authorName'));
    }

    public function show(Post $post)
    {
        $post->increment('view_count');

        $postComments = $post->comments()->paginate(3);

        return view('blog.show',compact('post','postComments'));
    }
}
