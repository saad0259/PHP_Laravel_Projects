

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


      <div class="mt-5 pt-5" style="overflow: auto !important;">

      <h2>Recent Stocks of Dealer</h2>
      
      <table class="table table-hover" >
          <thead>
            <tr>
            <th></th>
              <th>Date</th>
              <th>Item </th>
              <th>Available Stock</th>
              <th>Quantity Sold</th>
              <th>Sale Price</th>
              <th>Government Price</th>
            

            </tr>
          </thead>
          <tbody>

            @foreach ($dealer->stocks as $stock)
            <tr>
              

              
            <td><a href="{{route('stock.show', $stock->id)}}" class="btn btn-primary">View</a></td>
              <td>{{$stock->date}}</td>  
                <td><a href="{{route('subitem.show', $stock->subitem->id)}}">  {{$stock->subitem->name}} <a></td>
                <td>{{$stock->available_stock}} ({{$stock->unit->name}})</td>
                <td>{{$stock->sold_quantity}} ({{$stock->unit->name}})</td>
                <td>{{$stock->sold_at}}</td>
                <td>{{$stock->gov_price}}</td>
               
                
                
                
              </tr>
           

                
            @endforeach

          </tbody>
        </table>
      
      
      </div>
        
     
    </div>
  </div>




@endsection


@section('custom_js') 

<script src="https://maps.googleapis.com/maps/api/js?key={{env('GOOGLE_MAP_API_KEY')}}&callback=initMap&libraries=&v=weekly" async></script>

@endsection