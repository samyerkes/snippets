<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Snippet;
use Auth;
use Illuminate\Http\Request;

class SnippetController extends Controller
{
    public function store(Request $request) {
    	$snippet = new Snippet;
    	$snippet->user_id = Auth::user()->id;
    	$snippet->title = $request->title;
    	$snippet->body = $request->body;
    	$snippet->save();
    	return $snippet;
    }
}
