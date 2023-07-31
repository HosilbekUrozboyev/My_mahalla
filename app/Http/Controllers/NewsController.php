<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $news =News::orderBy('id', 'DESC')->get();
//        $news = News::all();
//        dd($news);
        return view('admin_panel/news/index')->with('news', $news);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
//        dd($request);

        $request->validate([
            'title' => 'required',
            'short_content' => 'required',
            'contents' => 'required',
            'photo' => 'nullable | image | max:2048',
        ]);
//        dd($request);

        $name = $request->file('photo')->getClientOriginalName();
        $path = $request->file('photo')->storeAs('news_photos', $name);

        News::create([
            'title' => $request->title,
            'short_content' => $request->short_content,
            'content' => $request->contents,
            'photo' => 'storage/' . $path,
        ]);
        return redirect()->route('news.index')->with('success', 'News created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Models\News $news
     * @return \Illuminate\Http\Response
     */
    public function show(News $news)
    {

        return view('admin_panel/news/index');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Models\News $news
     * @return \Illuminate\Http\Response
     */
    public function edit(News $news)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\News $news
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, News $news)
    {
        $request->validate([
            'title' => 'required',
            'short_content' => 'required',
            'contents' => 'required',
            'photo' => 'required|image|max:2048',
        ]);

        $name = $request->file('photo')->getClientOriginalName();
        $path = $request->file('photo')->storeAs('news_photos', $name);

        $news->title = $request->title;
        $news->short_content = $request->short_content;
        $news->content = $request->contents;
        $news->photo = 'storage/' . $path;
        $news->save();

        return redirect()->route('news.index')->with('success', 'News updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Models\News $news
     * @return \Illuminate\Http\Response
     */
    public function destroy(News $news)
    {
//        dd($news);
        $news->delete();
        return redirect()->back()->with('success', 'Muvaffaqiyatli o\'chirildi');
    }
}
