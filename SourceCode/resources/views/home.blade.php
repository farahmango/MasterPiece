@extends('frontlayout')
@section('content')


  <!-- Start main-content -->
  <div class="main-content">

    <!-- Section: inner-header -->


    <section>
      <div class="container mt-5 mb-5">
        <div class="row multi-row-clearfix">
        @if(count($posts)>0)
				@foreach($posts as $post)
          <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
            <div class="courses maxwidth500 mb-30">
              <div class="courses-thumb">
                <img src="{{asset('imgs/thumb/'.$post->thumb)}}" class="img-fullwidth" alt="{{$post->title}}" width="100%" height="330vh">
              </div>
              <div class="header2 mb-3">
              <h5 class="card-title pt-3">{{$post->title}}</h5>
              <a class="text-link" href="{{url('post-detail/'.Str::slug($post->title).'/'.$post->id)}}" class="text-theme-colored font-13 font-weight-600"> Details →</a>
                  </div>
            </div>
            </div>
        @endforeach
        @else
        <p class="alert alert-danger">No posts Found</p>
        @endif


        </div>
      </div>
    </section>
  <!-- end main-content -->
  </div>




@endsection('content')
