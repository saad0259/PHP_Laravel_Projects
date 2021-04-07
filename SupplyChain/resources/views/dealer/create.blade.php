

@extends('../layouts.app')

@section('content') 


<div class="card">
    <div class="card-body">
      <h4 class="card-title text-center" style="font-size:25px;">Add New Dealer</h4>

      {{-- <form class="forms-sample row" enctype="multipart/form-data" method="POST"  action="/dealer"  > --}}

        {!! Form::open(['method'=>'POST', 'action'=>'DealerController@store' ,'class'=>'forms-sample row', ]) !!}


        {{-- {{ csrf_field() }} --}}
        <div class="form-group col-md-6">

          {!! Form::label('name','Facility Name') !!}
          {!! Form::text('name', null,['class'=>'form-control', 'placeholder' => 'e.g. Welcome Fruit Shop'] ) !!}

          {{-- <label for="name">Facility Name</label>
          <input type="text" class="form-control" required id="name" name="name" placeholder="e.g. Welcome Fruit Shop">
        --}}
        </div>



        <div class="form-group col-md-6">


            {!! Form::label('owner','Owner Name') !!}
            {!! Form::text('owner', null,['class'=>'form-control', 'placeholder' => 'Owner Name'] ) !!}


            {{-- <label for="owner">Owner Name</label>
            <input type="text" class="form-control" required id="owner" name="owner" placeholder="Owner Name">
          --}}
         
          </div>



        <div class="form-group col-md-6">



          {!! Form::label('cnic','CNIC') !!}
          {!! Form::text('cnic', null,['class'=>'form-control', 'placeholder' => 'CNIC e.g. 3660123456791'] ) !!}



          {{-- <label for="cnic">CNIC</label>
          <input type="text" class="form-control" required id="cnic" name="cnic" placeholder="CNIC e.g. 3660123456791">
        --}}
       
        </div>

        <div class="form-group col-md-6">

          
          {!! Form::label('phone','Phone') !!}
          {!! Form::text('phone', null,['class'=>'form-control', 'placeholder' => 'Phone e.g. 03012345678'] ) !!}



            {{-- <label for="phone">Phone</label>
            <input type="text" class="form-control" required id="phone" name="phone" placeholder="Phone"> --}}


          </div>


          <div class="form-group col-md-6">

            {!! Form::label('address','Address') !!}
            {!! Form::text('address', null,['class'=>'form-control', 'placeholder' => 'Address'] ) !!}
  


            {{-- <label for="address">Address</label>
            <input type="text" class="form-control" required id="address" name="address" placeholder="Address"> --}}


          </div>


      


        {{-- <div class="form-group col-md-6">
          <label>Image (Optional)</label>
          <input type="file" name="img[]" class="file-upload-default">
          <div class="input-group col-xs-12">
            <input type="text" class="form-control file-upload-info" disabled placeholder="Upload Image">
            <span class="input-group-append">
              <button class="file-upload-browse btn btn-info" type="button">Upload</button>
            </span>
          </div>
        </div> --}}

        <div class="form-group col-md-6">

            {!! Form::label('longitude','Longitude') !!}
            {!! Form::text('longitude', null,['class'=>'form-control', 'placeholder' => 'longitude'] ) !!}
  



          {{-- <label for="longitude">Longitude</label>
          <input type="text" class="form-control" id="longitude" name="longitude" placeholder="Longitude"> --}}


        </div>

        <div class="form-group col-md-6">
          {!! Form::label('latitude','Latitude') !!}
          {!! Form::text('latitude', null,['class'=>'form-control', 'placeholder' => 'Latitude'] ) !!}



            {{-- <label for="latitude">Latitude</label>
            <input type="text" class="form-control" id="latitude" name="latitude" placeholder="Latitude"> --}}
          </div>
  

        {{-- <div class="form-group col-md-6">
          <label for="exampleTextarea1">Description (Optional)</label>
          <textarea class="form-control" placeholder="Description of Dealer" id="exampleTextarea1" rows="2"></textarea>
        </div> --}}

        <div class="form-group col-md-12">

          {!! Form::submit('Add', ['class'=>'btn btn-success mr-2']) !!}


          {{-- <button type="submit" class="btn btn-success mr-2">Submit</button> --}}
          
        </div>


      {{-- </form> --}}
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