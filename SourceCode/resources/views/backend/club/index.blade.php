@extends('layout')
@section('content')
<div class="container-fluid">



  <!-- DataTables Example -->
  <div class="card mb-3">
    <div class="card-header">
      <i class="fas fa-table"></i> Clubs
      <a href="{{url('admin/club/create')}}" class="float-right btn btn-sm btn-dark">Add Data</a>
    </div>
    <div class="card-body">
      <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
          <thead>
            <tr>
              <th>#</th>
              <th>Title</th>
              <th>Detaile</th>
              <th>Image</th>
              <th>Action</th>
            </tr>
          </thead>
          <tfoot>
            <tr>
              <th>#</th>
              <th>Title</th>
              <th>Detaile</th>
              <th>Image</th>
              <th>Action</th>
            </tr>
          </tfoot>
          <tbody>
              @foreach($data as $cat)
              <tr>
                <td>{{$cat->id}}</td>
                <td>{{$cat->title}}</td>
                <td>{{$cat->detail}}</td>
                <td><img src="{{ asset('imgs').'/'.$cat->img }}" width="100" /></td>
                <td>
                  <a  href="{{url('admin/club/'.$cat->id.'/edit')}}"><i style="color: #E79800;" class="fas fa-edit"></i></a>
                  <a onclick="return confirm('Are you sure you want to delete?')"  href="{{url('admin/club/'.$cat->id.'/delete')}}"><i style="color:#E79800;" class="fa fa-trash" aria-hidden="true"></i></a>
                </td>
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
