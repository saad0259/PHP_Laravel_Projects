

@extends('layouts.app')

@section('content') 


<div class="card">
    <div class="card-body">
      <h4 class="card-title text-center" style="font-size:25px;">Add SubItem Information</h4>
      {{-- <p class="card-description"> Basic form elements </p> --}}
      <form class="forms-sample row">


        <div class="form-group col-md-6">
          <label for="exampleInputName1">Name</label>
          <input type="text" class="form-control" id="exampleInputName1" placeholder="Name">
        </div>


        <div class="form-group col-md-6">
          <label for="exampleInputEmail3">Grade (Optional)</label>
          <input type="text" class="form-control" id="exampleInputEmail3" placeholder="Grade/Quality">
        </div>

        <div class="form-group col-md-6">
            <label for="exampleInputEmail3">Parent Item</label>
            <input type="text" class="form-control" id="exampleInputEmail3" placeholder="Parent Item (e.g. Rice, Oil)">
          </div>


      


        
        
        <div class="form-group col-md-12">
          <button type="submit" class="btn btn-success mr-2">Submit</button>
          <button class="btn btn-light">Cancel</button>
        </div>
      </form>
    </div>
  </div>




@endsection