

@extends('../layouts.app')

@section('content') 

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

<div class="card">
    <div class="card-body">
      <h4 class="card-title text-center" style="font-size:25px;">Edit Item Information</h4>


        {!! Form::model($item,['method'=>'Patch', 'action'=>['ItemController@update',$item->id] ,'class'=>'forms-sample row', ]) !!}


       

        {{-- <input type="hidden" name="_method" value="PUT"> --}}


        <div class="form-group col-md-6">

          {!! Form::label('name','Item Name') !!}
          {!! Form::text('name', null,['class'=>'form-control', 'placeholder' => 'e.g. Rice, Mango', 'required' => 'required'] ) !!}



        
        </div>

        <div class="form-group col-md-6">

          {!! Form::label('type','Item Type') !!}
          {!! Form::text('type', null,['class'=>'form-control', 'placeholder' => 'Type e.g. Grains, Fruit, Vegetable', 'required' => 'required'] ) !!}

          </div>


    

        <div class="form-group col-md-12">

          {!! Form::submit('Change', ['class'=>'btn btn-success mr-2']) !!}
          
        </div>

        {!! Form::close() !!}

      </form>
        {!! Form::open(['method'=>'DELETE', 'action'=>['ItemController@destroy',$item->id] ]) !!}

        

        {!! Form::submit('Delete', ['class'=>'btn btn-danger mr-2']) !!}

        {!! Form::close() !!}

    </div>
  </div>




@endsection