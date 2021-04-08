

@extends('../layouts.app')

@section('content') 

<div class="col-lg-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body" style="overflow: auto !important;">
        <h4 class="card-title">All Subitems</h4>
        <table class="table table-hover">
          <thead>
            <tr>
              <th>Name</th>
              <th>Item Name</th>
              <th>Grade</th>

            </tr>
          </thead>
          <tbody>

            @foreach ($subitems as $subitem)
            
            <tr>
              

              
                <td>  <a href="{{route('subitem.show', $subitem->id)}}">  {{$subitem->name}} <a> </td>
                <td><a href="{{route('item.show', $subitem->item->id)}}">  {{$subitem->item->name}} <a></td>
                <td>{{$subitem->grade}}</td>
                
              </tr>
           

                
            @endforeach

          </tbody>
        </table>
      </div>
    </div>
  </div>

@endsection