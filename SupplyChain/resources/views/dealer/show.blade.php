

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

          <div class="col-sm-4 my-2 mb-n1 font-weight-semibold">
              
          <a href="{{route('dealer.edit', $dealer->id)}}" class="btn btn-success mr-2">Edit Information</a>

        </div>




        </div>

        
     
    </div>
  </div>




@endsection