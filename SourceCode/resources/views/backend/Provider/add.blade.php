
@extends('layout')
@section('content')
        <div class="container-fluid">




          <!-- DataTables Example -->
          <div class="card mb-3">
            <div class="card-header">
              <i class="fas fa-table"></i> Add Provider
              <a href="{{url('admin/provider')}}" class="float-right btn btn-sm btn-dark">All Data</a>
            </div>
            <div class="card-body">
              <div class="table-responsive">

                @if($errors)
                  @foreach($errors->all() as $error)
                    <p class="text-danger">{{$error}}</p>
                  @endforeach
                @endif

                @if(Session::has('success'))
                <p class="text-success">{{session('success')}}</p>
                @endif

                <form method="post" action="{{url('admin/provider')}}" enctype="multipart/form-data">
                  @csrf
                  <table class="table table-bordered">
                      <tr>
                          <th>Title</th>
                          <td><input type="text" name="title" class="form-control" /></td>
                      </tr>
                      <tr>
                          <th>Detail</th>
                          <td><input type="text" name="detail" class="form-control" /></td>
                      </tr>
                      <tr>
                          <th>Image</th>
                          <td><input type="file" name="img" /></td>
                      </tr>
                      <tr>
                          <td colspan="2">
                              <input type="submit" class="btn btn-dark" />
                          </td>
                      </tr>
                  </table>
                </form>
              </div>
            </div>
          </div>

        </div>
        <!-- /.container-fluid -->
@endsection
