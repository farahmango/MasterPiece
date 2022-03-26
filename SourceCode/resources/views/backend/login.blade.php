<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Admin Login</title>
    <link rel="icon" href="../../images/bg/favicon.png"  type="image/x-icon">

    <!-- Bootstrap core CSS-->
    <link href="{{asset('backend')}}/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template-->
    <link href="{{asset('backend')}}/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

    <!-- Custom styles for this template-->
    <link href="{{asset('backend')}}/css/sb-admin.css" rel="stylesheet">
    <link rel="stylesheet" href="../../style/nav.css" />
  </head>

  <body class="">
<div class="cont5">
    <div class="container ">
      <div class="card card-login mx-auto mt-3">
        <div class="card-header">Admin Login</div>
        <div class="card-body">

          <form method="post">
            @csrf
            <label for="inputEmail">Username</label>
            <div class="form-group">
              <div class="form-label-group">
                <input type="text" id="inputEmail" class="form-control" name="username" placeholder="Username" />

              </div>

            </div>
            <div class="form-group">
            <label for="inputPassword">Password</label>
              <div class="form-label-group">
                <input type="password" id="inputPassword" class="form-control" name="password" placeholder="Password" />

              </div>
            </div>
            @if($errors)
            @foreach($errors->all() as $error)
            <p class="text-danger">{{$error}}</p>
            @endforeach

          @endif
          @if(Session::has('error'))
          <p class="text-danger">{{session('error')}}</p>
          @endif

            <input type="submit" class="btn btn-dark btn-block" />
          </form>
        </div>
      </div>
    </div>

</div>
    <!-- Bootstrap core JavaScript-->
    <script src="{{asset('backend')}}/vendor/jquery/jquery.min.js"></script>
    <script src="{{asset('backend')}}/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="{{asset('backend')}}/vendor/jquery-easing/jquery.easing.min.js"></script>

  </body>

</html>
