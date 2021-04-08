

@extends('../layouts.app')

@section('content') 


<div class="card">
    <div class="card-body">
      <h4 class="card-title text-center" style="font-size:25px;">Add New Subitem</h4>

  
        {!! Form::open(['method'=>'POST', 'action'=>'SubitemController@store' ,'class'=>'forms-sample row', ]) !!}

        <div class="form-group col-md-6">

          {!! Form::label('name','Subitem Name') !!}
          {!! Form::text('name', null,['class'=>'form-control', 'placeholder' => 'e.g. Brown Rice, Basmati Rice', 'required' => 'required'] ) !!}

        
        </div>


        <div class="form-group col-md-6">

            {!! Form::label('item_id','Item Name') !!}
            {{ Form::select('item_id', $items, null, ['class'=>'form-control', 'placeholder' => 'Please Select Item ...','required' => 'required']) }}
  
          
          </div>


        <div class="form-group col-md-6">

          
          {!! Form::label('grade','Grade (optional)') !!}
          {!! Form::text('grade', null,['class'=>'form-control', 'placeholder' => 'Grade e.g. 1,2'] ) !!}

          </div>


        <div class="form-group col-md-12">

          {!! Form::submit('Add', ['class'=>'btn btn-success mr-2']) !!}
  
        </div>

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

