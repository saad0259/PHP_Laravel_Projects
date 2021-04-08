

@extends('../layouts.app')

@section('content') 

<div class="col-lg-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body" style="overflow: auto !important;">
        <h4 class="card-title">All Items</h4>
        <table class="table table-hover">
          <thead>
            <tr>
              <th>Name</th>
              <th>type</th>

            </tr>
          </thead>
          <tbody>

            @foreach ($items as $item)
            
            <tr>
              

              
                <td>  <a href="{{route('item.show', $item->id)}}">  {{$item->name}} <a> </td>
                <td>{{$item->type}}</td>
                
                
                
                
              </tr>
           

                
            @endforeach

          </tbody>
        </table>
      </div>
    </div>
  </div>

@endsection