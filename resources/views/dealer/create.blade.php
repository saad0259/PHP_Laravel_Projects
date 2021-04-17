

@extends('../layouts.app')

@section('custom_style') 

@endsection





@section('content') 

@if (count($errors)>0)

<div class="alert alert-danger">

  <ul>
  @foreach ($errors->all() as $error)
  
  
  <li>
    {{$error}}
  </li>



  @endforeach
  </ul>
</div>
  
@endif

<div class="card">
    <div class="card-body">
      <h4 class="card-title text-center" style="font-size:25px;">Add New Dealer</h4>

        {!! Form::open(['method'=>'POST', 'action'=>'DealerController@store' ,'class'=>'forms-sample row', ]) !!}


        {{-- {{ csrf_field() }} --}}
        <div class="form-group col-md-6">

          {!! Form::label('name','Facility Name') !!}
          {!! Form::text('name', null,['class'=>'form-control', 'placeholder' => 'e.g. Welcome Fruit Shop','required'=>'required'] ) !!}

        </div>



        <div class="form-group col-md-6">


            {!! Form::label('owner','Owner Name') !!}
            {!! Form::text('owner', null,['class'=>'form-control', 'placeholder' => 'Owner Name','required'=>'required'] ) !!}


          </div>



        <div class="form-group col-md-6">



          {!! Form::label('cnic','CNIC') !!}
          {!! Form::number('cnic', null,['class'=>'form-control', 'placeholder' => 'CNIC e.g. 3660123456791', 'step'=>'1','required'=>'required', 'min'=>3600000000000,'max'=>3699999999999] ) !!}

       
        </div>

        <div class="form-group col-md-6">

          
          {!! Form::label('phone','Phone') !!}
          {!! Form::number('phone', null,['class'=>'form-control', 'placeholder' => 'Phone e.g. 3012345678', 'step'=>'1','required'=>'required', 'min'=>3000000000,'max'=>3999999999] ) !!}


          </div>


          <div class="form-group col-md-6">

            {!! Form::label('address','Address') !!}
            {!! Form::text('address', null,['class'=>'form-control', 'placeholder' => 'Address','required'=>'required'] ) !!}

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


        <div class="form-group col-md-12">

          <div id="map" style="height: 400px;"></div>

          <script>

            var map;
            var previousMarker;
            function initMap() {
              const myLatlng = { lat: 30.049382740318542, lng: 72.36107569589637 };
              const map = new google.maps.Map(document.getElementById("map"), {
                zoom: 15,
                center: myLatlng,
              });
              const marker0 = new google.maps.Marker({
                    position: myLatlng,
                    map: map,
                  });
            
              // Configure the click listener.
              map.addListener("click", (mapsMouseEvent) => {
                // Close the current InfoWindow.

                if (marker0)
                marker0.setMap(null);
                
                if (previousMarker)
                  previousMarker.setMap(null);
                  
                placeMarker(mapsMouseEvent.latLng, map);


              });
              
            }

              function placeMarker(position, map) {

                document.getElementById("latitude").value = position.lat().toPrecision(11);
                document.getElementById("longitude").value = position.lng().toPrecision(11);

                  previousMarker = new google.maps.Marker({
                      position: position,
                      map: map
                  });
                  map.setPosition(position);
              }
          </script>




        </div>


        
        <div class="form-group col-md-6">
          {!! Form::label('latitude','Latitude') !!}
          {!! Form::number('latitude', null,['class'=>'form-control', 'id'=>'latitude', 'placeholder' => 'Latitude', 'step'=>'any','required'=>'required'] ) !!}


        </div>


        <div class="form-group col-md-6">

            {!! Form::label('longitude','Longitude') !!}
            {!! Form::number('longitude', null,['class'=>'form-control','id'=>'longitude', 'placeholder' => 'longitude', 'step'=>'any','required'=>'required'] ) !!}
  
        </div>

        <div class="form-group col-md-12">

          {!! Form::submit('Add', ['class'=>'btn btn-success mr-2']) !!}
                    
        </div>

      {!! Form::close() !!}
   
    </div>
  </div>



  

   



@endsection






@section('custom_js') 

<script src="https://maps.googleapis.com/maps/api/js?key={{env('GOOGLE_MAP_API_KEY')}}&callback=initMap&libraries=&v=weekly" async></script>

@endsection