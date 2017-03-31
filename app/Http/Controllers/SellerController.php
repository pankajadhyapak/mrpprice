<?php

namespace App\Http\Controllers;

use App\Seller;
use Illuminate\Http\Request;

class SellerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sellers = \App\Seller::latest()->paginate(10);
        return view('sellers.index', compact('sellers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $seller = new \App\Seller;
        return view('sellers.create', compact('seller'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
                  "name" => "required",
                  "url" => "required|url",
                  "address" => "required",
                  "affiliated_link" => "required",
                  "remarks" => "required",
                  "status" => "required",
                  //"logo_image" => "required|image"
        ]);
        $data = $request->all();
        $data['logo_image'] = "test path";
        $data['user_id'] = auth()->id();
        \App\Seller::create($data);

        return redirect(url("/sellers"))->with("Seller Added Successfully");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Seller  $seller
     * @return \Illuminate\Http\Response
     */
    public function show(Seller $seller)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Seller  $seller
     * @return \Illuminate\Http\Response
     */
    public function edit(Seller $seller)
    {
        return view('sellers.edit', compact('seller'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Seller  $seller
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Seller $seller)
    {
        $seller->fill($request->all());
        $seller->save();
        return redirect(url("/sellers"));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Seller  $seller
     * @return \Illuminate\Http\Response
     */
    public function destroy(Seller $seller)
    {
        $seller->delete();
        return redirect(url("/sellers"));
    }
}
