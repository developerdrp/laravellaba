@extends('master')
@section('title')
Details of 
@endsection

@section('maincontent')

    <div class="row">
    @foreach($details as $item)
      <div class="col-md-12">
     <h2> {{$item->heading}}</h2>
     <p> {{$item->details}} </p>
      </div>
      @endforeach
    </div>

    @endsection