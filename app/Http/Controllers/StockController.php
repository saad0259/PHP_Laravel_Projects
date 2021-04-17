<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Subitem;
use App\Models\Unit;
use App\Models\Dealer;
use App\Models\Stock;
use App\Http\Requests\CreateStockRequest;


class StockController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $stocks=Stock::paginate(10);
        return view('stock.index',compact('stocks'));
        //return $stocks;
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $subitems=Subitem::all()->sortBy('name', SORT_NATURAL | SORT_FLAG_CASE)->pluck('name', 'id');
        $dealers=Dealer::all()->sortBy('name', SORT_NATURAL | SORT_FLAG_CASE)->pluck('name', 'id');
        $units=Unit::all()->sortBy('name', SORT_NATURAL | SORT_FLAG_CASE)->pluck('name', 'id');
        return view('stock.create',compact('subitems','dealers','units'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateStockRequest $request)
    {
        Stock::create($request->all());
        return redirect('/stock');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $stock=Stock::findOrFail($id);
        return view('stock.show',compact('stock'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $stock=Stock::findOrFail($id);
        $subitems=Subitem::all()->sortBy('name', SORT_NATURAL | SORT_FLAG_CASE)->pluck('name', 'id');
        $dealers=Dealer::all()->sortBy('name', SORT_NATURAL | SORT_FLAG_CASE)->pluck('name', 'id');
        $units=Unit::all()->sortBy('name', SORT_NATURAL | SORT_FLAG_CASE)->pluck('name', 'id');

        $data['subitems']=$subitems;
        $data['dealers']=$dealers;
        $data['units']=$units;
        $data['stock']=$stock;

        return view('stock.edit',compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(CreateStockRequest $request, $id)
    {
        $stock=Stock::findOrFail($id);
        $stock->update($request->all());
        return view('stock.show',compact('stock'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $stock=Stock::findOrFail($id);

        $stock->delete();

        return redirect('/stock');
    }
}
