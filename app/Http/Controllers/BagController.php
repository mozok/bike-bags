<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Bag;
use App\Http\Resources\Bag as BagResource;

class BagController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //Get bags
        $bags = Bag::paginate(10);

        // Return collection of bags as a resource
        return BagResource::collection($bags);
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
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $bag = $request -> isMethod('put') ? Bag::findOrFail($request->bag_id) : new Bag;

        $bag->id = $request->input('bag_id');
        $bag->title = $request->input('title');
        $bag->body = $request->input('body');
        $bag->images = $request->input('images');

        if ($bag -> save()) {
            return new BagResource($bag);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // Get Single bag
        $bag = Bag::findOrFail($id);

        return new BagResource($bag);
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
        $bag = Bag::findOrFail($id);

        if ($bag->delete()) {
            return new BagResource($bag);
        }
        
    }
}
