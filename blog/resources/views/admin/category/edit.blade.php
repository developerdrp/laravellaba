@extends('admin.master')
@section('maincontent')


<style>
  .uper {
    margin-top: 40px;
  }
</style>
<div class="card uper">
  <div class="card-header">
    Edit Category
  </div>
  <div class="card-body">
    @if ($errors->any())
      <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
        </ul>
      </div><br />
    @endif
    <form method="post" action="{{ route('category.update', $cats->id) }}">
        @method('PATCH')
        @csrf
          <div class="form-group">
              
              <label for="name">Category Name:</label>
              <input type="text" class="form-control" name="name" value="{{ $cats->name }}"/>
          </div>
          <div class="form-group">
              <label for="description">Category Description:</label>
              <input type="text" class="form-control" name="description" value="{{ $cats->description }}"/>
          </div>
          <div class="form-group">
              <label for="status">Status:</label>
                <input type="number" name="status" value="{{ $cats->status }}"> 
          </div>
          <button type="submit" class="btn btn-primary">Edit</button>
      </form>
  </div>
</div>



@endsection