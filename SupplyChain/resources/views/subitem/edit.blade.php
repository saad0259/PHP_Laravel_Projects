

@extends('../layouts.app')

@section('content') 


<div class="card">
    <div class="card-body">
      <h4 class="card-title text-center" style="font-size:25px;">Edit Subitem Information</h4>


        {!! Form::model($data,['method'=>'Patch', 'action'=>['SubitemController@update',$data['subitem']->id] ,'class'=>'forms-sample row', ]) !!}


       

        <div class="form-group col-md-6">

            {!! Form::label('name','Subitem Name') !!}
            {!! Form::text('name', $data['subitem']->name,['class'=>'form-control', 'placeholder' => 'e.g. Brown Rice, Basmati Rice', 'required' => 'required'] ) !!}
  
          
          </div>
  
  
          <div class="form-group col-md-6">
  
              {!! Form::label('item_id','Item Name') !!}
              {{ Form::select('item_id', $data['items'], $data['subitem']->item_id, ['class'=>'form-control', 'placeholder' => 'Please Select Item ...','required' => 'required']) }}
    
            </div>
  
  
          <div class="form-group col-md-6">
  
            
            {!! Form::label('grade','Grade (optional)') !!}
            {{-- {!! Form::text('grade', $data['subitem']->grade,['class'=>'form-control', 'placeholder' => 'Grade e.g. 1,2'] ) !!} --}}
            {!! Form::number('grade', $data['subitem']->grade, ['class' => 'form-control','min'=>1,'max'=>5, 'placeholder' => 'Grade e.g. 1-5', 'step' => '1']) !!}
            </div>


    

        <div class="form-group col-md-12">

          {!! Form::submit('Change', ['class'=>'btn btn-success mr-2']) !!}
          
        </div>

        {!! Form::close() !!}

      </form>
        {!! Form::open(['method'=>'DELETE', 'action'=>['SubitemController@destroy',$data['subitem']->id] ]) !!}

        

        {!! Form::submit('Delete', ['class'=>'btn btn-danger mr-2']) !!}

        {!! Form::close() !!}

    </div>
  </div>




@endsection