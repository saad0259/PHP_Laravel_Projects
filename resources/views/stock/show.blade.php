

@extends('../layouts.app')

@section('content') 


<div class="card">
    <div class="card-body">
      <h4 class="card-title text-center" style="font-size:25px;">Stock Information</h4>
     
        <div class="row">
            
          <div class="col-sm-4 mb-n1 font-weight-semibold my-2">Date:  </div>
          <div class="col-sm-4 my-2">{{$stock->date}}</div>
          <div class="col-sm-4"></div>

          <div class="col-sm-4 mb-n1 font-weight-semibold my-2">Dealer Name:  </div>
          <a class="col-sm-4 my-2" href="{{route('dealer.show', $stock->dealer->id)}}">{{$stock->dealer->name}}</a>
          <div class="col-sm-4"> </div>

          <div class="col-sm-4 mb-n1 font-weight-semibold my-2">Item:  </div>
          <a class="col-sm-4 my-2" href="{{route('subitem.show', $stock->subitem->id)}}">{{$stock->subitem->name}}</a>
          <div class="col-sm-4"> </div>

          <div class="col-sm-4 mb-n1 font-weight-semibold my-2">Available Stock:  </div>
          <div class="col-sm-4 my-2">{{$stock->available_stock}} {{$stock->unit->name}}</div>
          <div class="col-sm-4"></div>


          <div class="col-sm-4 mb-n1 font-weight-semibold my-2">Quantity Sold:  </div>
          <div class="col-sm-4 my-2">{{$stock->sold_quantity}} {{$stock->unit->name}}</div>
          <div class="col-sm-4"></div>

          <div class="col-sm-4 mb-n1 font-weight-semibold my-2">Sale Price:  </div>
          <div class="col-sm-4 my-2">{{$stock->sold_at}}</div>
          <div class="col-sm-4"></div>


          <div class="col-sm-4 mb-n1 font-weight-semibold my-2">Quantity Received:  </div>
          <div class="col-sm-4 my-2">{{$stock->receive_quantity}} {{$stock->unit->name}}</div>
          <div class="col-sm-4"></div>


          <div class="col-sm-4 mb-n1 font-weight-semibold my-2">Received Stock Price:  </div>
          <div class="col-sm-4 my-2">{{$stock->receive_at}}</div>
          <div class="col-sm-4"></div>

          <div class="col-sm-4 mb-n1 font-weight-semibold my-2">Government Price:  </div>
          <div class="col-sm-4 my-2">{{$stock->gov_price}}</div>
          <div class="col-sm-4"></div>



          <div class="col-sm-4 my-2 mb-n1 font-weight-semibold">
              
          <a href="{{route('stock.edit', $stock->id)}}" class="btn btn-success mr-2">Edit Information</a>

        </div>




        </div>

        
     
    </div>
  </div>




@endsection