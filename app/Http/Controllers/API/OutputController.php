<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Output;
use Auth;
use Illuminate\Http\Request;

class OutputController extends Controller
{
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $output = new Output;
        $output->user_id = Auth::user()->id;
        $output->snippet_id = $request->snippet_id;
        $output->body = $request->body;
        $output->save();
        return $output;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
