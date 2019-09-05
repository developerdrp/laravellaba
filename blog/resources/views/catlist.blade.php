@extends('master')

@section('title')
Category List
@endsection

@section('maincontent')

    <div class="row">
    @foreach($post as $item)
      <div class="col-md-3">
     <h2> <a href="/details/{{$item->id}}">{{$item->heading}}</a></h2>

    
     
     <hr>
      {{ substr($item->details, 0, 500) }} </p>
      </div>
      @endforeach
    </div>

    @endsection