

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
      <h4 class="card-title text-center" style="font-size:25px;">Edit Stock Entry</h4>

  
      {!! Form::model($data,['method'=>'Patch', 'action'=>['StockController@update',$data['stock']->id] ,'class'=>'forms-sample row', ]) !!}


        <div class="form-group col-md-6">

            {!! Form::label('dealer_id','Dealer Facility Name') !!}
            {{ Form::select('dealer_id', $data['dealers'], $data['stock']->dealer_id, ['class'=>'form-control', 'placeholder' => 'Please Select Dealer ...','required' => 'required']) }}
  
          
        </div>


        <div class="form-group col-md-6">

            {!! Form::label('subitem_id','Item Name') !!}
            {{ Form::select('subitem_id', $data['subitems'], $data['stock']->subitem_id, ['class'=>'form-control', 'placeholder' => 'Please Select Item ...','required' => 'required']) }}
  
          
        </div>

        

        <div class="form-group col-md-6">

            {!! Form::label('unit_id','Unit') !!}
            {{ Form::select('unit_id', $data['units'], $data['stock']->unit_id, ['class'=>'form-control', 'placeholder' => 'Please Select Unit ...','required' => 'required']) }}
  
          
        </div>


        <div class="form-group col-md-6">

          {!! Form::label('date','Date') !!}
          {!! Form::date('date', $data['stock']->date, ['class'=>'form-control', 'required' => 'required']) !!}
        
      </div>



        <div class="form-group col-md-6">
          
            {!! Form::label('receive_quantity','Received Stock') !!}
            {!! Form::number('receive_quantity', $data['stock']->receive_quantity, ['class' => 'form-control','min'=>1,'max'=>999999999, 'placeholder' => 'Stock received from supplier today', 'step' => '1']) !!}
  
        </div>

        <div class="form-group col-md-6">
          
            {!! Form::label('receive_at','Received Stock Price Per Unit') !!}
            {!! Form::number('receive_at', $data['stock']->receive_at, ['class' => 'form-control','min'=>1,'max'=>999999999, 'placeholder' => 'Price per unit of Received Stock', 'step' => '1']) !!}
  
        </div>


        <div class="form-group col-md-6">
          
            {!! Form::label('sold_quantity','Sold Stock Quantity') !!}
            {!! Form::number('sold_quantity', $data['stock']->sold_quantity, ['class' => 'form-control','min'=>1,'max'=>999999999, 'placeholder' => 'Quantity of Stock Sold Today', 'step' => '1']) !!}
  
        </div>

        <div class="form-group col-md-6">
          
            {!! Form::label('sold_at','Sold Stock Price Per Unit') !!}
            {!! Form::number('sold_at', $data['stock']->sold_at, ['class' => 'form-control','min'=>1,'max'=>999999999, 'placeholder' => 'Price per unit of Sold Stock', 'step' => '1']) !!}
  
        </div>

        <div class="form-group col-md-6">

          {!! Form::label('available_stock','Available Stock') !!}
          {!! Form::number('available_stock', $data['stock']->available_stock, ['class' => 'form-control','min'=>1,'max'=>999999999, 'placeholder' => 'Available Stock', 'step' => '1']) !!}

        </div>


               
        <div class="form-group col-md-6">
          
          {!! Form::label('gov_price','Government Price') !!}
          {!! Form::number('gov_price', $data['stock']->gov_price, ['class' => 'form-control','min'=>1,'max'=>999999999, 'placeholder' => 'Price per unit given by Government', 'step' => '1']) !!}

      </div>

        <div class="form-group col-md-12">

          {!! Form::submit('Change', ['class'=>'btn btn-success mr-2']) !!}
  
        </div>

      {!! Form::close() !!}


      {!! Form::open(['method'=>'DELETE', 'action'=>['StockController@destroy',$data['stock']->id] ]) !!}

        {!! Form::submit('Delete', ['class'=>'btn btn-danger mr-2']) !!}

        {!! Form::close() !!}
   
    </div>
  </div>

   


@endsection

