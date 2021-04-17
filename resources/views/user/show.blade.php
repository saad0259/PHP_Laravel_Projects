

@extends('../layouts.app')

@section('content') 


<div class="card">
    <div class="card-body">
      <h4 class="card-title text-center" style="font-size:25px;">Admin Information</h4>
     
        <div class="row">
          

            
            <div class="col-sm-12 my-3" style="width: 100%">

               

                    <img  style="height: 100px;width:100px;border-radius:50%;display: block;margin:0 auto" src="{{$user->image}}" alt="">
                

            </div>
            


            <div class="col-sm-4 mb-n1 font-weight-semibold my-2">Name:  </div>
            <div class="col-sm-4 my-2">{{$user->name}}</div>
            <div class="col-sm-4"></div>


            <div class="col-sm-4 my-2 mb-n1 font-weight-semibold">email:  </div>
            <div class="col-sm-4 my-2">{{$user->email}}</div>
            <div class="col-sm-4"></div>


            <div class="col-sm-4 my-2 mb-n1 font-weight-semibold">CNIC:  </div>
            <div class="col-sm-4 my-2">{{$user->created_at}}</div>
            <div class="col-sm-4"></div>



          <div class="col-sm-4 my-2 mb-n1 font-weight-semibold">
              
          <a href="{{route('user.edit', $user->id)}}" class="btn btn-success mr-2">Edit Information</a>

        </div>




        </div>

        
     
    </div>
  </div>




@endsection