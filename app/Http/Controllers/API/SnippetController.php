<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Snippet;
use Auth;
use Illuminate\Http\Request;

class SnippetController extends Controller
{
	/**
	 * Display a listing of the resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function index()
	{
		$user = Auth::guard('api')->user();
	    $snippets = Snippet::where('user_id', $user->id)->get();
	    return $snippets;
	}

    public function store(Request $request) {
    	$snippet = new Snippet;
    	$snippet->user_id = Auth::guard('api')->user()->id;
    	$snippet->title = $request->title;
    	$snippet->body = $request->body;
    	$snippet->save();
    	return $snippet;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  
     * @param  int  
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
    	$snippet = Snippet::find($id);
    	$snippet->title = $request->title;
    	$snippet->body = $request->body;
    	$snippet->save();
        return $snippet;
    }
}
