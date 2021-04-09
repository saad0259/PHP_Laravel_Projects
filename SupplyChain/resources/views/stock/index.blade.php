

@extends('../layouts.app')

@section('content') 

<div class="col-lg-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body" style="overflow: auto !important;">
        <h4 class="card-title">All Stock Entries</h4>
        <table class="table table-hover">
          <thead>
            <tr>
              <th></th>
              <th>Date</th>
              <th>Dealer</th>
              <th>Item </th>
              <th>Available Stock</th>
              <th>Quantity Sold</th>
              <th>Sale Price</th>
              <th>Quantity Received</th>
              <th>Received Stock Price</th>
              <th>Government Price</th>

            </tr>
          </thead>
          <tbody>

            @foreach ($stocks as $stock)
            
            <tr>
              <td><a href="{{route('stock.show', $stock->id)}}" class="btn btn-primary">View</a></td>
              <td>{{$stock->date}}</td>  
              <td>  <a href="{{route('dealer.show', $stock->dealer->id)}}">  {{$stock->dealer->name}} <a> </td>
                <td><a href="{{route('subitem.show', $stock->subitem->id)}}">  {{$stock->subitem->name}} <a></td>
                <td>{{$stock->available_stock}} {{$stock->unit->name}}</td>
                <td>{{$stock->sold_quantity}} {{$stock->unit->name}}</td>
                <td>{{$stock->sold_at}}</td>
                <td>{{$stock->receive_quantity}} {{$stock->unit->name}}</td>
                <td>{{$stock->receive_at}}</td>
                <td>{{$stock->gov_price}}</td>
                
                
              </tr>
           

                
            @endforeach

          </tbody>
        </table>
      </div>
    </div>
  </div>

@endsection