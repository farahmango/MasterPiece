@extends('frontlayout')
@section('content')



<div class="main-content">

    <section>
      <div class="container mt-5 mb-5">
        <div class="row multi-row-clearfix">
				@foreach($clubs as $club)
          <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
            <div class="courses maxwidth500 mb-30 ">
              <div class="courses-thumb  ">
                <img src="{{asset('imgs/'.$club->img)}}" class="img-fullwidth" alt="{{$club->title}}" width="100%" height="330vh">
              </div>
              <div class="header2   ">
              <h5 class="pt-3">{{$club->title}}</h5>
              </div>
              <div class="header2 pb-5">
              <a class="text-link" href="{{url('club-detail/'.Str::slug($club->title).'/'.$club->id)}}">Read More →</a>
              </div>

                      </div>

          </div>
        @endforeach

        </div>
            {{$clubs->links()}}

      </div>
    </section>
  <!-- end main-content -->
  </div>


@endsection('content')
