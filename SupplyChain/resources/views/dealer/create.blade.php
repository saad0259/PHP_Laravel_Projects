

@extends('../layouts.app')

@section('content') 


<div class="card">
    <div class="card-body">
      <h4 class="card-title text-center" style="font-size:25px;">Add New Dealer</h4>
      {{-- <p class="card-description"> Basic form elements </p> --}}
      <form class="forms-sample row" enctype="multipart/form-data" method="POST"  action="/dealer"  >

        {{ csrf_field() }}
        <div class="form-group col-md-6">
          <label for="name">Facility Name</label>
          <input type="text" class="form-control" required id="name" name="name" placeholder="e.g. Welcome Fruit Shop">
        </div>

        <div class="form-group col-md-6">
            <label for="owner">Owner Name</label>
            <input type="text" class="form-control" required id="owner" name="owner" placeholder="Owner Name">
          </div>


        <div class="form-group col-md-6">
          <label for="cnic">CNIC</label>
          <input type="text" class="form-control" required id="cnic" name="cnic" placeholder="CNIC">
        </div>

        <div class="form-group col-md-6">
            <label for="phone">Phone</label>
            <input type="text" class="form-control" required id="phone" name="phone" placeholder="Phone">
          </div>


          <div class="form-group col-md-6">
            <label for="address">Address</label>
            <input type="text" class="form-control" required id="address" name="address" placeholder="Address">
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
          <label for="longitude">Longitude</label>
          <input type="text" class="form-control" id="longitude" name="longitude" placeholder="Longitude">
        </div>

        <div class="form-group col-md-6">
            <label for="latitude">Latitude</label>
            <input type="text" class="form-control" id="latitude" name="latitude" placeholder="Latitude">
          </div>
  

        {{-- <div class="form-group col-md-6">
          <label for="exampleTextarea1">Description (Optional)</label>
          <textarea class="form-control" placeholder="Description of Dealer" id="exampleTextarea1" rows="2"></textarea>
        </div> --}}

        <div class="form-group col-md-12">
          <button type="submit" class="btn btn-success mr-2">Submit</button>
          <button class="btn btn-light">Cancel</button>
        </div>
      </form>
    </div>
  </div>




@endsection