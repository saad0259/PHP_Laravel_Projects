

@extends('../layouts.app')

@section('content') 


<div class="card">
    <div class="card-body">
      <h4 class="card-title text-center" style="font-size:25px;">Edit Dealer Information</h4>
      {{-- <p class="card-description"> Basic form elements </p> --}}
      <form class="forms-sample row" enctype="multipart/form-data" method="POST"  action="/dealer/{{$dealer->id}}">

        {{ csrf_field() }}

        <input type="hidden" name="_method" value="PUT">


        <div class="form-group col-md-6">
          <label for="exampleInputName1">Facility Name</label>
          <input type="text" class="form-control" required id="name" name="name" value="{{$dealer->name}}" placeholder="e.g. Welcome Fruit Shop">
        </div>

        <div class="form-group col-md-6">
            <label for="exampleInputName1">Owner Name</label>
            <input type="text" class="form-control" required id="owner" name="owner" value="{{$dealer->owner}}" placeholder="Owner Name">
          </div>


        <div class="form-group col-md-6">
          <label for="exampleInputEmail3">CNIC</label>
          <input type="text" class="form-control" required id="cnic" name="cnic" value="{{$dealer->cnic}}" placeholder="CNIC">
        </div>

        <div class="form-group col-md-6">
            <label for="exampleInputEmail3">Phone</label>
            <input type="text" class="form-control" required id="phone" name="phone" value="{{$dealer->phone}}" placeholder="Phone">
          </div>


          <div class="form-group col-md-6">
            <label for="exampleInputEmail3">Address</label>
            <input type="text" class="form-control" required id="address" name="address" value="{{$dealer->address}}" placeholder="Address">
          </div>


      


        {{-- <div class="form-group col-md-6">
          <label>Image (Optional)</label>
          <input type="file" name="img[]" class="file-upload-default">
          <div class="input-group col-xs-12">
            <input type="text" class="form-control file-upload-info" disabled placeholder="Upload Image">
            <span class="input-group-append">
              <button class="file-upload-browse btn btn-info" type="button">Upload</button>
            </span>
          </div>
        </div> --}}

        <div class="form-group col-md-6">
          <label for="exampleInputCity1">Longitude</label>
          <input type="text" class="form-control" id="longitude" name="longitude" value="{{$dealer->longitude}}" placeholder="Longitude">
        </div>

        <div class="form-group col-md-6">
            <label for="exampleInputCity1">Latitude</label>
            <input type="text" class="form-control" id="latitude" name="latitude" value="{{$dealer->latitude}}" placeholder="Latitude">
          </div>
  

        {{-- <div class="form-group col-md-6">
          <label for="exampleTextarea1">Description (Optional)</label>
          <textarea class="form-control" placeholder="Description of Dealer" id="exampleTextarea1" rows="2"></textarea>
        </div> --}}

        <div class="form-group col-md-12">
          <button type="submit" class="btn btn-success mr-2">Submit</button>
          
          
        </div>

        
      </form>
      <form method="POST" action="/dealer/{{$dealer->id}}">
        {{ csrf_field() }}

        <input type="hidden" name="_method" value="DELETE">
        <button type="submit" class="btn btn-danger">Delete</button>
      </form>
    </div>
  </div>




@endsection