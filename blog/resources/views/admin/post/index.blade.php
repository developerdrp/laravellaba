@extends('admin.master')

@section('maincontent')

<div id="content-wrapper">

      <div class="container-fluid">

        <!-- Breadcrumbs-->
        <ol class="breadcrumb">
          <li class="breadcrumb-item">
            <a href="#">Dashboard</a>
          </li>
          <li class="breadcrumb-item active">Post</li>
        </ol>

        <style>
  .uper {
    margin-top: 40px;
  }
</style>
<div class="uper">
  @if(session()->get('success'))
    <div class="alert alert-success">
      {{ session()->get('success') }}  
    </div><br />
  @endif
  </div>

            <!-- DataTables Example -->
        <div class="card mb-3">
          <div class="card-header">
            <i class="fas fa-table"></i>
            All Post</div>
          <div class="card-body">
            <div class="table-responsive">

            @if(count($p)>=1)
              <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                  <tr>
                    <th>ID</th>
                    <th>Title</th>
                    <th>Heading</th>
                    <th>Status</th>
                    <th>Functions</th>
                  </tr>
                </thead>
                <tfoot>
                  <tr>
                     <th>ID</th>
                    <th>Title</th>
                    <th>Heading</th>
                    <th>Status</th>
                    <th>Functions</th>
                  </tr>
                </tfoot>
                <tbody>


              @foreach($p as $item)
                  <tr>
                    <td>{{$item->id}}</td>
                    <td>{{$item->title}}</td>
                    <td>{{$item->heading}}</td>
                    <td>{{$item->status}}</td>
                    <td>Edit | Delete </td>
                  </tr>
              @endforeach
                  
                  
                </tbody>
              </table>
              @else
              <h1>Sorry no data Found</h1>
              @endif
            </div>
          </div>
          <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
        </div>

      </div>
      <!-- /.container-fluid -->

      <!-- Sticky Footer -->
      <footer class="sticky-footer">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>Copyright © Your Website 2019</span>
          </div>
        </div>
      </footer>

    </div>
@endsection