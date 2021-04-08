

@extends('../layouts.app')

@section('content') 


<div class="card">
    <div class="card-body">
      <h4 class="card-title text-center" style="font-size:25px;">Edit Unit Information</h4>


        {!! Form::model($unit,['method'=>'Patch', 'action'=>['UnitController@update',$unit->id] ,'class'=>'forms-sample row', ]) !!}

        <div class="form-group col-md-6">

          {!! Form::label('name','Unit Name') !!}
          {!! Form::text('name', null,['class'=>'form-control', 'placeholder' => 'e.g. KG, ML', 'required' => 'required'] ) !!}



        
        </div>

    

        <div class="form-group col-md-12">

          {!! Form::submit('Change', ['class'=>'btn btn-success mr-2']) !!}
          
        </div>

        {!! Form::close() !!}

      </form>
        {!! Form::open(['method'=>'DELETE', 'action'=>['UnitController@destroy',$unit->id] ]) !!}

        

        {!! Form::submit('Delete', ['class'=>'btn btn-danger mr-2']) !!}

        {!! Form::close() !!}

    </div>
  </div>




@endsection