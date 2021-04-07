

@extends('../layouts.app')

@section('content') 

<div class="col-lg-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body" style="overflow: auto !important;">
        <h4 class="card-title">All Dealers</h4>
        <table class="table table-hover">
          <thead>
            <tr>
              <th>Name</th>
              <th>Owner</th>
              <th>CNIC</th>
              <th>Phone</th>
              <th>Address</th>
              <th>On Map</th>

            </tr>
          </thead>
          <tbody>

            @foreach ($dealers as $dealer)
            
            <tr>
              

              
                <td>  <a href="{{route('dealer.show', $dealer->id)}}">  {{$dealer->name}} <a> </td>
                <td>{{$dealer->owner}}</td>
                <td>{{$dealer->cnic}}</td>
                <td>{{$dealer->phone}}</td>
                <td>{{$dealer->address}}</td>
                <td>{{$dealer->longitude}}, {{$dealer->latitude}}</td>
                
                
                
              </tr>
           

                
            @endforeach

          </tbody>
        </table>
      </div>
    </div>
  </div>

@endsection