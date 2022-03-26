@extends('frontlayout')
@section('content')



<div class="main-content">

    <section>
      <div class="container mt-5 mb-5">
        <div class="row multi-row-clearfix">
				@foreach($pro as $val)
          <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
            <div class="courses maxwidth500 mb-30 " style="width: 100%;">
              <div class="courses-thumb  ">
                <img src="{{asset('imgs/'.$val->img)}}" class="img-fullwidth" alt="{{$val->title}}" width="100%" height="330vh">
              </div>
              <div class="header2   ">
              <h5 class="pt-3">{{$val->title}}</h5>
              </div>
              <div class="header2 pb-5">
              <a class="text-link" href="{{url('provider-detail/'.Str::slug($val->title).'/'.$val->id)}}">Read More →</a>
              </div>

                      </div>

          </div>
        @endforeach


                <div class="page">
                      {{$pro->links()}}
                </div>

        </div>
      </div>
    </section>
  <!-- end main-content -->
  </div>


@endsection('content')
