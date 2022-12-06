<?php

namespace App\Http\Controllers;
use App\Models\Guide;
use App\Models\Review;
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;

class ReviewController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($guide_id)
    {

        $user = Auth::check();
        $reviews = Guide::find($guide_id);
        $reviews->review; 
        dd($user);
        return view('pages.comment', compact('reviews'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    // public function create()
    // {
        
    // }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $review = new Review;
        $review->guide_id = 1;
        $review->name = $request->name;
        $review->email = $request->email;
        $review->rating = $request-> rating;
        $review->content = $request->msg;
        $review->save();
        return redirect('/1/review/');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $review = Review::find($id);
        return view('pages.detail', compact('review'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $review = Review::find($id);
        return view('pages.edit', compact('review'));
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
        $review = Review::find($id);
        $review->guide_id = 1;
        $review->name = $request->name;
        $review->email = $request->email;
        $review->rating = $request-> rating;
        $review->content = $request->msg;
        $review->save();
        return redirect('/1/review/');
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
        $review = Review::find($id);
        $review->delete();
        return redirect('/1/review/');
    }

    
}
