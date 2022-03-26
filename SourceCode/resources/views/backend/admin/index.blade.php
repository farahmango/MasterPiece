@extends('layout')
@section('meta_desc','All Admins')
@section('title','All Admins')
@section('content')
<div class="container-fluid">



  <!-- DataTables Example -->
  <div class="card mb-3">
    <div class="card-header">
      <i class="fas fa-table"></i> admins
    </div>
    <div class="card-body">
      <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
          <thead>
            <tr>
              <th>#</th>
              <th>Name</th>
            </tr>
          </thead>
          <tfoot>
            <tr>
              <th>#</th>
              <th>Name</th>
            </tr>
          </tfoot>
          <tbody>
              @foreach($data as $user)
              <tr>
                <td>{{$user->id}}</td>
                <td>{{$user->username}}</td>

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
