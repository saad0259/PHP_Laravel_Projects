<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateDealerRequest;
use Illuminate\Http\Request;
use App\Models\Dealer;

class DealerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dealers=Dealer::latestcreated(); // latestcreated() is a custom queryScope

        return view('dealer.index',compact('dealers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dealer.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateDealerRequest $request)
    {
        

        // $this->validate($request,[

        //     'name'=>'required|max:75',
        //     'owner'=>'required|max:50',
        //     'cnic'=>'required|max:13|min:13',
        //     'phone'=>'required|max:11|min:11',
        //     'address'=>'required|max:100',
        //     'longitude'=>'required',
        //     'latitude'=>'required'



        // ]);


        Dealer::create($request->all());
        return redirect('/dealer');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $dealer=Dealer::findOrFail($id);
        return view('dealer.show',compact('dealer'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $dealer=Dealer::findOrFail($id);
        
        return view('dealer.edit',compact('dealer'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(CreateDealerRequest $request, $id)
    {
        $dealer=Dealer::findOrFail($id);
        $dealer->update($request->all());
        return view('dealer.show',compact('dealer'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $dealer=Dealer::findOrFail($id);

        $dealer->delete();

        return redirect('/dealer');
    }
}
