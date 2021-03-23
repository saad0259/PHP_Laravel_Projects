

@extends('layouts.app')

@section('content') 


<div class="card">
    <div class="card-body">
      <h4 class="card-title text-center" style="font-size:25px;">Add Stock Information</h4>
      {{-- <p class="card-description"> Basic form elements </p> --}}
      <form class="forms-sample row">


        <div class="form-group col-md-6">
          <label for="exampleInputName1">Dealer/ Owner</label>
          <input type="text" class="form-control" id="exampleInputName1" placeholder="Dealer/Owner">
        </div>


        <div class="form-group col-md-6">
          <label for="exampleInputEmail3">Sub Item</label>
          <input type="text" class="form-control" id="exampleInputEmail3" placeholder="SubItem (e.g. Basmati Rice)">
        </div>

        <div class="form-group col-md-6">
            <label for="exampleInputEmail3">Date</label>
            <input type="date" class="form-control" id="exampleInputEmail3" placeholder="Email">
        </div>

        <div class="form-group col-md-6">
            <label for="exampleInputEmail3">Available Stock</label>
            <input type="text" class="form-control" id="exampleInputEmail3" placeholder="Available Stock">
        </div>

        <div class="form-group col-md-6">
            <label for="exampleInputEmail3">Stock Recieved Today</label>
            <input type="text" class="form-control" id="exampleInputEmail3" placeholder="Stock Recieved Today">
        </div>
      
        <div class="form-group col-md-6">
            <label for="exampleInputEmail3">Advance Booking</label>
            <input type="text" class="form-control" id="exampleInputEmail3" placeholder="Advance Booking Today">
        </div>

        <div class="form-group col-md-6">
            <label for="exampleInputEmail3">Sold Today</label>
            <input type="text" class="form-control" id="exampleInputEmail3" placeholder="Sold Today">
        </div>

        <div class="form-group col-md-6">
            <label for="exampleInputEmail3">Unit</label>
            <input type="text" class="form-control" id="exampleInputEmail3" placeholder="Measuring Unit (e.g. KG, Liter)">
        </div>

       
        <div class="form-group col-md-12">
          <button type="submit" class="btn btn-success mr-2">Submit</button>
          <button class="btn btn-light">Cancel</button>
        </div>
      </form>
    </div>
  </div>




@endsection