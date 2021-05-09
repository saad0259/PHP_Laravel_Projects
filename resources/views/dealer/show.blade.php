

@extends('../layouts.app')

@section('content') 


<div class="card">
    <div class="card-body">
      <h4 class="card-title text-center" style="font-size:25px;">Dealer Information</h4>
     
        <div class="row">
            
          <div class="col-sm-4 mb-n1 font-weight-semibold my-2">Facility Name:  </div>
          <div class="col-sm-4 my-2">{{$dealer->name}}</div>
          <div class="col-sm-4"></div>


          <div class="col-sm-4 my-2 mb-n1 font-weight-semibold">Owner Name:  </div>
          <div class="col-sm-4 my-2">{{$dealer->owner}}</div>
          <div class="col-sm-4"></div>


          <div class="col-sm-4 my-2 mb-n1 font-weight-semibold">CNIC:  </div>
          <div class="col-sm-4 my-2">{{$dealer->cnic}}</div>
          <div class="col-sm-4"></div>



          <div class="col-sm-4 my-2 mb-n1 font-weight-semibold">Phone:  </div>
          <div class="col-sm-4 my-2">{{$dealer->phone}}</div>
          <div class="col-sm-4"></div>


          <div class="col-sm-4 my-2 mb-n1 font-weight-semibold">Address:  </div>
          <div class="col-sm-4 my-2">{{$dealer->address}}</div>
          <div class="col-sm-4"></div>

          

          <div class="form-group col-md-12">

            <div id="map" style="height: 400px;"></div>
  
            <script>
  
              var map;
              var previousMarker;
              function initMap() {
                const myLatlng = { lat: {{$dealer->latitude}}, lng: {{$dealer->longitude}} };
                const map = new google.maps.Map(document.getElementById("map"), {
                  zoom: 15,
                  center: myLatlng,
                });
                const marker0 = new google.maps.Marker({
                      position: myLatlng,
                      map: map,
                    });
                
              }
  
            </script>
  
  
  
  
          </div>

          <div class="col-sm-4 my-2 mb-n1 font-weight-semibold">
              
          <a href="{{route('dealer.edit', $dealer->id)}}" class="btn btn-success mr-2">Edit Information</a>

        </div>




      </div>


      @foreach ($dealer->stocks() as $dealer)
            
            <tr>
              

              
                <td>  <a href="">  hello <a> </td>
              
               
                
                
                
              </tr>
           

                
            @endforeach
        
     
    </div>
  </div>




@endsection


@section('custom_js') 

<script src="https://maps.googleapis.com/maps/api/js?key={{env('GOOGLE_MAP_API_KEY')}}&callback=initMap&libraries=&v=weekly" async></script>

@endsection