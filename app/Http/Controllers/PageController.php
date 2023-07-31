<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use App\Models\News;
use App\Models\Page;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {
        $news = News::all();
        $employees = Employee::all();
//        dd($news);
        return view('index', compact('news', 'employees'));

    }
    public function about()
    {
        $employees = Employee::all();
//        dd($news);
        return view('about', compact('employees'));
    }
    public function service()
    {
        return view('service');
    }
    public function news1()
    {
        $news = News::all();
//        dd($news);
        return view('news1')->with('news', $news);
    }
    public function contact()
    {
        return view('contact');
    }

    public function view(Request $news1)
    {
        $news = News:: find($news1['news1']);
//        dd($news);
        $news->view_count += 1;
        $news->save();
        return view('view', compact('news'));
    }
}
