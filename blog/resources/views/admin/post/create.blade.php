@extends('admin.master')
@section('maincontent')


<style>
  .uper {
    margin-top: 40px;
  }
</style>
<div class="card uper">
  <div class="card-header">
    Add Category
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
      <form method="post" action="{{ route('post.store') }}">
          <div class="form-group">
              @csrf
              <label for="name">Post Category:</label>
              <select class="form-control" name="categories_id"/>
              @foreach($cat as $item)
              <option value="{{ $item->id }}">{{ $item->name }}</option>
              @endforeach
              </select>
          </div>
          <div class="form-group">
              <label for="title">Post Title:</label>
              <input type="text" class="form-control" name="title"/>
          </div>
          <div class="form-group">
              <label for="keyword">Post Keyword:</label>
              <input type="text" class="form-control" name="keyword"/>
          </div>

          <div class="form-group">
              <label for="description">Post Description:</label>
              <input type="text" class="form-control" name="description"/>
          </div>

          <div class="form-group">
              <label for="title">Post Heading:</label>
              <input type="text" class="form-control" name="heading"/>
          </div>

          <div class="form-group">
              <label for="title">Post Title:</label>
              <textarea name="details" class="form-control" rows=5 cols=35></textarea>
          </div>
          <div class="form-group">
              <label for="status">Status:</label>
                <select name="status">
                   <option value=1>Active</option>
                   <option value=0>Disable</option>
                </select>
          </div>
          <button type="submit" class="btn btn-primary">Add</button>
      </form>
  </div>
</div>

@endsection