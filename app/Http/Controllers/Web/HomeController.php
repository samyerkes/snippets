<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\Snippet;
use Auth;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (Auth::guest()) {
            return view('home');
        }
        $user = Auth::user();
        $snippets = $user->snippets->sortBy('title');
        return view('snippets.index', compact('snippets'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $snippet = Snippet::find($id);
        return view('snippets.show', compact('snippet'));
    }
}
