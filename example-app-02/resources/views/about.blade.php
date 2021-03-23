@extends('layouts.app')

@section('content')

<h1>This is About Page </h1>

@if (count($course))
<ul>
@foreach ($course as $subject)
    <li>{{$subject}}</li>
@endforeach
</ul>

@endif


@endsection


@section('footer')

<h2>Fotoer</h2>

{{-- <script>alert('Hello from footer')</script> --}}

@endsection
