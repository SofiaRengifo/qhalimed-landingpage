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

    $blogs = $query->latest()->paginate(9)->withQueryString();

    return view('blog.blog', compact('blogs'));
}

public function detalle($id)
{
    $blog = Blog::findOrFail($id);
    return view('blog.detalle', compact('blog'));
}
public function inicio()
{
    // Trae los 3 primeros blogs más recientes
    $blogs = Blog::orderBy('created_at', 'desc')
                 ->take(3)
                 ->get();

    return view('inicio', compact('blogs'));
}
}
