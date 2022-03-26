@extends('frontlayout')
@section('content')
 <!-- Start main-content -->
 <div class="main-content">

<!-- Section: inner-header -->


<!-- Section: Experts Details -->
<section>
  <div class="container">
    <div class="section-content">
      <div class="row">
        <div class="col-md-4">
          <div class="thumb mt-5" >
            <img src="{{ asset('imgs/'.$detail->img) }}" style="height: 50vh; width:100%"  alt="" he>
          </div>
        </div>
        <div class="col-md-8 header">
          <h4 class="mt-5" style="color: #E79800;">{{$detail->title}}</h4>
          <p>{{$detail->detail}}</p>
        </div>
      </div>
      <div class="row mt-30">
        <div class="col-md-4 header">
          <h5 class="line-bottom mt-4"><span style="color:#E79800">About:</span></h5>
          <div class="volunteer-address">

                <div class="bg-light media border-bottom  mb-20">
                  <div class="media-left">

                  </div>
                  <div class="media-right">
                  <i style="color: #E79800;" class="fa fa-phone" aria-hidden="true"></i>  {{ $detail->contact }} <br>
                   <a style="color: black;text-decoration:none" target="blank" href="{{$detail->link}}"> <i style="color: #E79800;" class="fa fa-link" aria-hidden="true" > </i>  Website</a>

                </div>


                </div>

          </div>
        </div>
        <div class="col-md-8 header mt-4">
          <h5 class="line-bottom"><span style="color:#E79800">Find Location:</span></h5>

          <!-- Google Map HTML Codes -->
          <iframe src="{{ $detail->location }}" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
    </div>
  </div>
</section>
<!-- end main-content -->
</div>

@endsection
