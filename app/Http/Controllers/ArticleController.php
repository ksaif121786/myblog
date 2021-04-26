<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
        //
        $article = Article::find(base64_decode($id));

        $recent_posts = Article::where('category_id',$article->category_id)
        ->where('id','!=',$article->id)
        ->where('status',1)
        ->where('is_deleted',0)
        ->latest()->limit(7)->get();

        return view('article-details',compact('article','recent_posts'));
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
     * @param  \App\Models\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function show(Article $article,$slug,$category_id)
    {
        //
        $article = Article::where('category_id',$category_id)
        ->where('status',1)
        ->where('is_deleted',0)
        ->get();

         $recent_posts = Article::where('category_id',$category_id)
        ->where('status',1)
        ->where('is_deleted',0)
        ->latest()->limit(7)->get();

        return view('blog',compact('article','recent_posts'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function edit(Article $article)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Article $article)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function destroy(Article $article)
    {
        //
    }
}
