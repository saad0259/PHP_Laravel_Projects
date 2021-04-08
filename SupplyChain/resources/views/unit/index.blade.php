

@extends('../layouts.app')

@section('content') 

<div class="col-lg-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body" style="overflow: auto !important;">
        <h4 class="card-title">All Units</h4>
        <table class="table table-hover">
          <thead>
            <tr>
              <th>Name</th>
              <th>Created On</th>
            </tr>
          </thead>
          <tbody>

            @foreach ($units as $unit)
            
            <tr>
              

              
                <td>  <a href="{{route('unit.show', $unit->id)}}">  {{$unit->name}} <a> </td>
                <td>{{$unit->created_at}}</td>
                
                
                
              </tr>
           

                
            @endforeach

          </tbody>
        </table>
      </div>
    </div>
  </div>

@endsection