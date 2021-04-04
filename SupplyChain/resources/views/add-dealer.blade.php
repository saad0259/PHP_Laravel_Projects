

@extends('layouts.app')

@section('content') 


<div class="card">
    <div class="card-body">
      <h4 class="card-title text-center" style="font-size:25px;">Add Dealer Information</h4>
      {{-- <p class="card-description"> Basic form elements </p> --}}
      <form class="forms-sample row">


        <div class="form-group col-md-6">
          <label for="exampleInputName1">Name</label>
          <input type="text" class="form-control" id="exampleInputName1" placeholder="Name">
        </div>


        <div class="form-group col-md-6">
          <label for="exampleInputEmail3">CNIC</label>
          <input type="text" class="form-control" id="exampleInputEmail3" placeholder="CNIC">
        </div>

        <div class="form-group col-md-6">
            <label for="exampleInputEmail3">Phone</label>
            <input type="text" class="form-control" id="exampleInputEmail3" placeholder="Phone">
          </div>


      


        <div class="form-group col-md-6">
          <label>Image (Optional)</label>
          <input type="file" name="img[]" class="file-upload-default">
          <div class="input-group col-xs-12">
            <input type="text" class="form-control file-upload-info" disabled placeholder="Upload Image">
            <span class="input-group-append">
              <button class="file-upload-browse btn btn-info" type="button">Upload</button>
            </span>
          </div>
        </div>

        <div class="form-group col-md-6">
          <label for="exampleInputCity1">Longitude</label>
          <input type="text" class="form-control" id="exampleInputCity1" placeholder="Longitude">
        </div>

        <div class="form-group col-md-6">
            <label for="exampleInputCity1">Latitude</label>
            <input type="text" class="form-control" id="exampleInputCity1" placeholder="Latitude">
          </div>
  

        <div class="form-group col-md-6">
          <label for="exampleTextarea1">Description (Optional)</label>
          <textarea class="form-control" placeholder="Description of Dealer" id="exampleTextarea1" rows="2"></textarea>
        </div>

        <div class="form-group col-md-12">
          <button type="submit" class="btn btn-success mr-2">Submit</button>
          <button class="btn btn-light">Cancel</button>
        </div>
      </form>
    </div>
  </div>




@endsection