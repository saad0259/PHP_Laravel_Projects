

@extends('../layouts.app')

@section('content') 


<div class="card">
    <div class="card-body">
      <h4 class="card-title text-center" style="font-size:25px;">Edit Dealer Information</h4>


        {!! Form::model($dealer,['method'=>'Patch', 'action'=>['DealerController@update',$dealer->id] ,'class'=>'forms-sample row', ]) !!}


       

        <input type="hidden" name="_method" value="PUT">


        <div class="form-group col-md-6">

          {!! Form::label('name','Facility Name') !!}
          {!! Form::text('name', null,['class'=>'form-control', 'placeholder' => 'e.g. Welcome Fruit Shop', 'required' => 'required'] ) !!}



        
        </div>

        <div class="form-group col-md-6">

          {!! Form::label('owner','Owner Name') !!}
          {!! Form::text('owner', null,['class'=>'form-control', 'placeholder' => 'Owner Name', 'required' => 'required'] ) !!}

          </div>


        <div class="form-group col-md-6">

          {!! Form::label('cnic','CNIC') !!}
          {!! Form::text('cnic', null,['class'=>'form-control', 'placeholder' => 'CNIC e.g. 3660123456791', 'required' => 'required'] ) !!}


        
        </div>

        <div class="form-group col-md-6">

          {!! Form::label('phone','Phone') !!}
          {!! Form::text('phone', null,['class'=>'form-control', 'placeholder' => 'Phone e.g. 03012345678', 'required' => 'required'] ) !!}

         
          </div>


          <div class="form-group col-md-6">

            {!! Form::label('address','Address') !!}
            {!! Form::text('address', null,['class'=>'form-control', 'placeholder' => 'Address', 'required' => 'required'] ) !!}
  

         
          </div>


      



        <div class="form-group col-md-6">

          {!! Form::label('longitude','Longitude') !!}
          {!! Form::text('longitude', null,['class'=>'form-control', 'placeholder' => 'longitude', 'required' => 'required'] ) !!}


        </div>

        <div class="form-group col-md-6">

          {!! Form::label('latitude','Latitude') !!}
          {!! Form::text('latitude', null,['class'=>'form-control', 'placeholder' => 'Latitude', 'required' => 'required'] ) !!}

          </div>
  

    

        <div class="form-group col-md-12">

          {!! Form::submit('Change', ['class'=>'btn btn-success mr-2']) !!}
          
        </div>

        {!! Form::close() !!}

      </form>
        {!! Form::open(['method'=>'DELETE', 'action'=>['DealerController@destroy',$dealer->id] ]) !!}


        {!! Form::submit('Delete', ['class'=>'btn btn-danger mr-2']) !!}

        {!! Form::close() !!}

    </div>
  </div>



  @if (count($errors)>0)
  <div class='alert alert-danger'>
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