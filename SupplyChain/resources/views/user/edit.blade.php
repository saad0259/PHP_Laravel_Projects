

@extends('../layouts.app')

@section('content') 


<div class="card">
    <div class="card-body">
      <h4 class="card-title text-center" style="font-size:25px;">Edit Admin Info</h4>

        {!! Form::model($user,['method'=>'Patch', 'action'=>['UserController@update',$user->id] ,'class'=>'forms-sample row','files'=>true ]) !!}


        <div class="form-group col-md-12">
          
            {!! Form::label('image','Image') !!}
            {!! Form::file('image',['class'=>'form-control']) !!}
  
        </div>

        <div class="form-group col-md-6">

          {!! Form::label('name','Name') !!}
          {!! Form::text('name', null,['class'=>'form-control', 'placeholder' => 'Name'] ) !!}

        </div>



        <div class="form-group col-md-6">

            {!! Form::label('username','Username') !!}
            {!! Form::text('username', null,['class'=>'form-control', 'placeholder' => 'Username'] ) !!}
         
        </div>



        <div class="form-group col-md-6">

          {!! Form::label('password','Password') !!}
          {!! Form::password('password', ['class' => 'form-control', 'placeholder' => 'Password']) !!}

        </div>

        <div class="form-group col-md-12">

          {!! Form::submit('Change', ['class'=>'btn btn-success mr-2']) !!}
          
        </div>
        {!! Form::close() !!}

        {!! Form::open(['method'=>'DELETE', 'action'=>['UserController@destroy',$user->id] ]) !!}
        {!! Form::submit('Delete', ['class'=>'btn btn-danger mr-2']) !!}
        {!! Form::close() !!}
      
   
    </div>
  </div>

    @if (count($errors)>0)

    <div class="alert alert-danger">

      <ul>
      @foreach ($errors->all() as $error)
      
      
      <li>
        {{$error}}
      </li>



      @endforeach
      </ul>
    </div>
      
    @endif




@endsection

