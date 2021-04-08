

@extends('../layouts.app')

@section('content') 


<div class="card">
    <div class="card-body">
      <h4 class="card-title text-center" style="font-size:25px;">Add New Stock Entry</h4>

  
        {!! Form::open(['method'=>'POST', 'action'=>'StockController@store' ,'class'=>'forms-sample row', ]) !!}


        <div class="form-group col-md-6">

            {!! Form::label('dealer_id','Dealer Facility Name') !!}
            {{ Form::select('dealer_id', $dealers, null, ['class'=>'form-control', 'placeholder' => 'Please Select Dealer ...','required' => 'required']) }}
  
          
        </div>


        <div class="form-group col-md-6">

            {!! Form::label('subitem_id','Item Name') !!}
            {{ Form::select('subitem_id', $subitems, null, ['class'=>'form-control', 'placeholder' => 'Please Select Item ...','required' => 'required']) }}
  
          
        </div>

        <div class="form-group col-md-6">

            {!! Form::label('unit_id','Unit') !!}
            {{ Form::select('unit_id', $units, null, ['class'=>'form-control', 'placeholder' => 'Please Select Item ...','required' => 'required']) }}
  
          
        </div>


        <div class="form-group col-md-6">
          
            {!! Form::label('receive_quantity','Received Stock') !!}
            {!! Form::number('receive_quantity', null, ['class' => 'form-control', 'placeholder' => 'Stock received from supplier today', 'step' => '1']) !!}
  
        </div>

        <div class="form-group col-md-6">
          
            {!! Form::label('receive_at','Received Stock Price Per Unit') !!}
            {!! Form::number('receive_at', null, ['class' => 'form-control', 'placeholder' => 'Price per unit of Received Stock', 'step' => '1']) !!}
  
        </div>


        <div class="form-group col-md-6">
          
            {!! Form::label('sold_quantity','Sold Stock Quantity') !!}
            {!! Form::number('sold_quantity', null, ['class' => 'form-control', 'placeholder' => 'Quantity of Stock Sold Today', 'step' => '1']) !!}
  
        </div>

        <div class="form-group col-md-6">
          
            {!! Form::label('sold_at','Sold Stock Price Per Unit') !!}
            {!! Form::number('sold_at', null, ['class' => 'form-control', 'placeholder' => 'Price per unit of Sold Stock', 'step' => '1']) !!}
  
        </div>

        <div class="form-group col-md-6">
          
            {!! Form::label('gov_price','Government Price') !!}
            {!! Form::number('gov_price', null, ['class' => 'form-control', 'placeholder' => 'Price per unit given by Government', 'step' => '1']) !!}
  
        </div>



        <div class="form-group col-md-6">

          
          {!! Form::label('available_stock','Available Stock') !!}
          {!! Form::number('available_stock', null, ['class' => 'form-control', 'placeholder' => 'Available Stock', 'step' => '1']) !!}

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

