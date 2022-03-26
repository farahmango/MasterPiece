@extends('layout')
@section('meta_desc','All Comments')
@section('title','All Comments')
@section('content')
<div class="container-fluid">




  <!-- DataTables Example -->
  <div class="card mb-3">
    <div class="card-header">
      <i class="fas fa-table"></i> Comments
    </div>
    <div class="card-body">
      <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
          <thead>
            <tr>
              <th>#</th>
              <th>User</th>
              <th>Post</th>
              <th>Comment</th>
              <th>Action</th>
            </tr>
          </thead>
          <tfoot>
            <tr>
              <th>#</th>
              <th>User</th>
              <th>Post</th>
              <th>Comment</th>
              <th>Action</th>
            </tr>
          </tfoot>
          <tbody>
              @foreach($data as $comment)
              <tr>
                <td>{{$comment->id}}</td>
                <td>@if(!empty($comment->user_id)) {{$comment->user->email}} @endif</td>
                <td>{{$comment->post->title}}</td>
                <td>{{$comment->comment}}</td>

                <td>
                  <a onclick="return confirm('Are you sure you want to delete?')"  href="{{url('admin/comment/delete/'.$comment->id)}}"><i style="color:#E79800;" class="fa fa-trash" aria-hidden="true"></i></a>
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
