@extends('layouts.app')

@section('content')



  <!-- Start main-content -->
  <div class="main-content" style="background-color:#fff;height:100vh">
    <!-- Section: home -->
    <section id="home" class="divider fullscreen bg-lighter">
      <div class="display-table">
        <div class="display-table-cell">
          <div class="container">
            <div class="row">
              <div class="col-md-6 col-md-push-3 " style="margin:auto">
                <div class="text-center mb-60"><a href="{{ url('land') }}" class=""><img alt="" src="imgs/Capture-removebg-preview.png" height="45vh" width="40%" style="margin: 20px 0 50px 0 ;"></a></div>
                <form method="POST" action="{{ route('register') }}" >
                        @csrf


                        <div class="icon-box mb-5 p-0">
                    <a href="#" class="icon icon-bordered icon-rounded icon-sm pull-left mb-0 mr-10">
                      <i class="pe-7s-users"></i>
                    </a>

                    <div class="header">
                    <h4 class=" mb-4 pt-3"> Register
                            </h4>
                    <h5 class=" pt-10 mt-0 mb-30" ><a style="text-decoration:none;color: gray;" href="{{url('login')}}">Do You have an Account? Login Now. </a></h5> <hr>
                    </div>
                  </div>


                        <div class="row">
                        <div class="form-group col-md-6">
                        <label>Name</label>


                                <input style="margin-bottom: 20px;" id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

                        </div>


                        <div class="form-group col-md-6">
                        <label> Email</label>


                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>
                        </div>
                        <div class="row">
                        <div class="form-group col-md-6">
                        <label> Password</label>


                                <input style="margin-bottom: 30px;" id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>


                        <div class="form-group col-md-6">
                      <label>Re-enter Password</label>


                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">

                        </div>
                        </div>
                            <div class="form-group mt-3">
                                <button type="submit" class="btn btn-dark btn-lg btn-block mt-15" style="width: 100%;font-size:15px">
                                    {{ __('Register') }}
                                </button>
                            </div>

                    </form>
                    </div>
            </div>
          </div>
        </div>
      </div>
    </section>

  <!-- end main-content -->
  </div>







@endsection
