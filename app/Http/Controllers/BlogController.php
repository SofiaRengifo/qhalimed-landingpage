<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;
class BlogController extends Controller
{
    public function index(Request $request)
{
    $query = Blog::query();

    if ($request->filled('categoria')) {
        $query->whereIn('categoria', $request->categoria);
    }

    $blogs = $query->latest()->paginate(12)->withQueryString();

    return view('blog.blog', compact('blogs'));
}

public function detalle($id)
{
    $blog = Blog::findOrFail($id);
    return view('blog.detalle', compact('blog'));
}
public function inicio()
{
    $blogs = Blog::orderBy('created_at', 'desc')
                 ->take(7)
                 ->get();

    return view('inicio', compact('blogs'));
}
}
