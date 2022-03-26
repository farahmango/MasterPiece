@extends('layout')
@section('meta_desc','Messages')
@section('title','Messages')
@section('content')
<div class="container-fluid">




  <!-- DataTables Example -->
  <div class="card mb-3">
    <div class="card-header">
      <i class="fas fa-table"></i> Messages
    </div>
    <div class="card-body">
      <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
          <thead>
            <tr>
              <th>#</th>
              <th>Name</th>
              <th>Email</th>
              <th>Message</th>
            </tr>
          </thead>
          <tfoot>
            <tr>
              <th>#</th>
              <th>Name</th>
              <th>Email</th>
              <th>Message</th>
            </tr>
          </tfoot>
          <tbody>
              @foreach($data as $con)
              <tr>
                <td>{{$con->id}}</td>
                <td>{{$con->name}}</td>
                <td>{{$con->email}}</td>
                <td>{{$con->message}}</td>

              </tr>
              @endforeach
          </tbody>
        </table>
      </div>
    </div>
  </div>

</div>
<!-- /.container-fluid -->
@endsection
