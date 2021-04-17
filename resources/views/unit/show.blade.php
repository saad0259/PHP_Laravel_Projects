

@extends('../layouts.app')

@section('content') 


<div class="card">
    <div class="card-body">
      <h4 class="card-title text-center" style="font-size:25px;">Unit Information</h4>
     
        <div class="row">
            
          <div class="col-sm-4 mb-n1 font-weight-semibold my-2">Unit Name:  </div>
          <div class="col-sm-4 my-2">{{$unit->name}}</div>
          <div class="col-sm-4"></div>


          <div class="col-sm-4 my-2 mb-n1 font-weight-semibold">Created On:  </div>
          <div class="col-sm-4 my-2">{{$unit->owner}}</div>
          <div class="col-sm-4"></div>

          <div class="col-sm-4 my-2 mb-n1 font-weight-semibold">
              
          <a href="{{route('unit.edit', $unit->id)}}" class="btn btn-success mr-2">Edit Information</a>

        </div>




        </div>

        
     
    </div>
  </div>




@endsection