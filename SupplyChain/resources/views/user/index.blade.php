

@extends('../layouts.app')

@section('content') 

<div class="col-lg-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body" style="overflow: auto !important;">
        <h4 class="card-title">All Admins</h4>
        <table class="table table-hover">
          <thead>
            <tr>
              <th>Name</th>
              <th>Image</th>
              <th>Username</th>
              <th>Created On</th>
              

            </tr>
          </thead>
          <tbody>

            @foreach ($users as $user)
            
            <tr>
              
                <td>  <a href="{{route('user.show', $user->id)}}">  {{$user->name}} <a> </td>
                <td><img src="{{$user->image}}" alt=""></td>
                <td>{{$user->username}}</td>
                <td>{{$user->created_at}}</td>
                
            </tr>
           

                
            @endforeach

          </tbody>
        </table>
      </div>
    </div>
  </div>

@endsection