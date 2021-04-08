

@extends('../layouts.app')

@section('content') 


<div class="card">
    <div class="card-body">
      <h4 class="card-title text-center" style="font-size:25px;">item Information</h4>
     
        <div class="row">
            
          <div class="col-sm-4 mb-n1 font-weight-semibold my-2">Item Name:  </div>
          <div class="col-sm-4 my-2">{{$item->name}}</div>
          <div class="col-sm-4"></div>


          <div class="col-sm-4 my-2 mb-n1 font-weight-semibold">Item Type:  </div>
          <div class="col-sm-4 my-2">{{$item->type}}</div>
          <div class="col-sm-4"></div>




          <div class="col-sm-4 my-2 mb-n1 font-weight-semibold">
              
          <a href="{{route('item.edit', $item->id)}}" class="btn btn-success mr-2">Edit Information</a>

        </div>




        </div>

        
     
    </div>
  </div>




@endsection