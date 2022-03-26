@extends('frontlayout')
@section('content')

<!-- photos slider  -->

<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel" data-pause="false">
          <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
          </ol>
          <div class="carousel-inner">
            <div class="carousel-item active">
              <div class="banner" style="background-image: url('images/bg/bg1.png')" ></div>
              <div class="carousel-caption d-none d-md-block ">
              <div class="row justify-content-end ">
            <div class="col-8 ">
            <h1 class="pic1">BE A SKILLED </h1>
            <h2 class="pic2">HORSE <span id="word1">RIDER</span></h2>
            <h3 class="pic3">Basic Ranching and Outdoor Skills </h3>    </div>
        </div>
               </div>
            </div>
            <div class="carousel-item ">
              <div class="banner" style="background-image: url('images/bg/bg6.jpg')"></div>
              <div class="carousel-caption d-none d-md-block">
              <div class="row justify-content-center ">
    <div class="col-6 ">
    <h1 class="pic4"> LIVING IN THE <span style="color:#E79800">GREAT </span> OUTDOORS </h1>
        </div>
            </div>
              </div>
            </div>
            <div class="carousel-item ">
              <div class="banner" style="background-image: url('images/bg/bg8.jpg')"></div>
              <div class="carousel-caption d-none d-md-block">
              <div class="row justify-content-start ">
            <div class="col-12 ">
            <h1 class="pic7">BEST CENTER </h1>
                 <h2 class="pic8">HORSE<span id="word2">MAN </span></h2>
                   </div>
         </div>
               </div>
            </div>
          </div>
          <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>


        <!-- section about us  -->


        <div class="cont">
            <div class="container">
        <div class="section-content">
          <div class="row">
            <div class="col-md-6 header">
            <img src="images/bg/bg9.jpg" style="width:100% ;height:50vh">
              <h5 class="line-bottom-no-border mt-4">Who We Are?</h5>
              <p class="text-about">
              This site has been created to facilitate access to places specialized in training horse riding and places that sell horse supplies located in Jordan.
             They are displayed on this site in an easy and simple way to help the user access them in the shortest possible time.

              </p>

            </div>
            <div class="col-md-6">
              <div class="row">
                <div class="col-xs-12 col-sm-6 col-md-6">
                  <div class="icon-box iconbox-theme-colored p-0 mb-30 header">

                    <h5 class="icon-box-title m-0 mt-4">   <img src="images/bg/i1.png"  style="width:13%;height:5vh ">Sign in </h5>
                    <p class="text-about mb-2">
                    Log in to become a family member and have the ability to create a post, share it with others and comment on it.
                    </p>
                   <a class="text-link" href="{{ route('login') }}">Read More →</a>
                  </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-6">
                  <div class="icon-box iconbox-theme-colored p-0 mb-30 header">
                    <a href="#" class="icon icon-sm mb-0 mr-10 pull-left flip sm-pull-none mb-sm-15">
                      <i class="flaticon-horseman-horse-head-right-side-view-silhouette font-40"></i>
                    </a>
                    <h5 class="icon-box-title m-0 mt-4">  <img src="images/bg/i2.png"  style="width:15%;height:5vh"> Contact with us</h5>
                    <p class="text-about mb-2">
                    You can send us a message to tell us your opinion about the site and if you have other ideas to implement them.
                    </p>
                    <a class="text-link" href="#contact">Read More →</a>
                  </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-6">
                  <div class="icon-box iconbox-theme-colored p-0 mb-30 header">
                    <a href="#" class="icon icon-sm mb-0 mr-10 pull-left flip sm-pull-none mb-sm-15">
                      <i class="flaticon-horseman-national-september-11-memorial-museum font-40"></i>
                    </a>
                    <h5 class="icon-box-title m-0 mt-4"> <img src="images/bg/i3.png"  style="width:15%;height:5vh"> Clubs</h5>
                    <p class="text-about mb-2">
                    You can discover the horse clubs in Jordan and everything related to them in one place.
                     </p>
                    <a class="text-link" href="{{ url('all-club') }}">Read More →</a>
                  </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-6">
                  <div class="icon-box iconbox-theme-colored p-0 mb-30 header">
                    <a href="#" class="icon icon-sm mb-0 mr-10 pull-left flip sm-pull-none mb-sm-15">
                      <i class="flaticon-horseman-silhouette font-40"></i>
                    </a>
                    <h5 class="icon-box-title m-0 mt-4"> <img src="images/bg/i4.png"  style="width:15%;height:5vh">Providers</h5>
                    <p class="text-about mb-2">
                    You can discover the horse providers in Jordan and everything related to them in one place.
                     </p>
                    <a class="text-link" href="{{ url('all-provider') }}">Read More →</a>
                  </div>
                </div>
              </div>
              <div class="row mt-5 ">
                <div class="col-md-3 sm-text-center mb-sm-30 photo">
                  <a class="image-popup-vertical-fit" title="Title Here 1" href="images/about/lg1.jpg"><img class="img-fullwidth maxwidth500" src="images/about/sm1.jpg" alt=""></a>
                </div>
                <div class="col-md-3 sm-text-center mb-sm-30 photo">
                  <a class="image-popup-vertical-fit" title="Title Here 1" href="images/about/lg2.jpg"><img class="img-fullwidth maxwidth500" src="images/about/sm2.jpg" alt=""></a>
                </div>
                <div class="col-md-3 sm-text-center photo">
                  <a class="image-popup-vertical-fit" title="Title Here 1" href="images/about/lg3.jpg"><img class="img-fullwidth maxwidth500" src="images/about/sm3.jpg" alt=""></a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
            </div>

            <!-- section clubs  -->

            <div class="slider2">
       <h3 style="text-align:center" class=" pt-5 pb-4" > OUR <span style="color:#E79800">CLUBS</span> </h3>
        <div class="slider owl-carousel">
            @foreach($club as $val)
            <div class="card-club" >
                <div class="img">
        <img src="{{asset('imgs/'.$val->img)}}" height="50vh" width="50%" alt="">
        </div>
        <div class="content " >
                <div class="title  header">
                  <h5> {{ $val->title }}</h5>
                 </div>

        <a class="text-link" href="{{url('club-detail/'.Str::slug($val->title).'/'.$val->id)}}">Read More →</a>

        </div>
        </div>
        @endforeach

        </div>
        </div>


        <!-- section latest post  -->


<!-- section latest post  -->

<section id="blog">
      <div class="container-post">
        <div class="section-title text-center header">
          <div class="row">
            <div class="col-md-8 col-md-offset-2 blog ">
              <h3 class=" text-uppercase pb-4">Latest <span style="color:#E79800">Posts</span></h3>
            </div>
          </div>
        </div>
        <div class="section-content">
          <div class="row">
              @foreach($posts as $val2)
            <div class="col-xs-12 col-sm-6 col-md-4">
              <article class="post text-center clearfix bg-lighter mb-sm-30" >
                <div class="entry-header">
                  <div class="post-thumb thumb">
                    <img class="post-img" src="{{ asset('imgs/thumb/'.$val2->thumb) }}"  alt="" style="width:100%;height:40vh">
                  </div>
                </div>
                <div class="entry-content p-20">
                  <div class="entry-meta pt-3 pb-2 ">
                    <span class="list-inline font-11 ">
                      <em>
                      @if($val2->user_id==0)
                      <i class="fa fa-user text-gray mr-1"></i>By: Admin /
                    @else
                    <i class="fa fa-user text-gray mr-1"></i>By: {{$val2->user->name}} /
                    @endif
                    </em>
                      <em><i class="fa fa-comment mr-1"></i>Comments: {{count($val2->comments)}} </em>
                   </span>
                  </div>
                  <div class=" header">
                <h5> {{ $val2->title }}</h5>
            </div>
            <a class="text-link" href="{{url('post-detail/'.Str::slug($val2->title).'/'.$val2->id)}}">Read More →</a>
                </div>
              </article>
            </div>
            @endforeach

          </div>
        </div>
      </div>
    </section>


<!--section providers   -->

<div class="cont2">

<div class="slider2">
       <h3 class="pt-5 pb-4" style="text-align:center" > OUR <span style="color:#E79800">PROVIDERS</span> </h3>
        <div class="slider owl-carousel">
        @foreach($providers as $val)

            <div class="card-club" >
                <div class="img">
        <img src="{{asset('imgs/'.$val->img)}}" alt=""></div>
        <div class="content">
                <div class="title header">
                <h5> {{ $val->title }}</h5>
    </div>

    <a class="text-link" href="{{url('provider-detail/'.Str::slug($val->title).'/'.$val->id)}}">Read More →</a>

        </div>
        </div>
        @endforeach

    </div>
    </div>
</div>


<!-- Divider: Contact -->
<section id="contact" class="divider-contact " id="contact">
      <div class="container pt-60 pb-60 form-call">
        <div class="section-title text-center">
          <div class="row">
            <div class="col-md-8 col-md-offset-2 header form-call">
              <h3 class="text-uppercase  mb-4">Contact <span style="color:#E79800">US </span></h3>
            </div>
          </div>
        </div>
        <div class="row ">
          <div class="col-md-10 col-md-offset-1 form-call">
            <!-- Contact Form -->
            <form id="contact_form" name="contact_form" class="" action="{{url('land')}}" method="post" >
           @csrf
              <div class="row">
                <div class="col-sm-6">
                  <div class="form-group mb-30">
                    <input name="name" class="form-control" type="text" placeholder="Enter Name" required="">
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="form-group mb-30">
                    <input name="email" class="form-control required email" type="email" placeholder="Enter Email">
                  </div>
                </div>
              </div>


              <div class="form-group">
                <textarea name="message" class="form-control required" rows="5" placeholder="Enter Message"></textarea>
              </div>
              <div class="form-group">
                <input name="form_botcheck" class="form-control" type="hidden" value="" />
                <button type="submit" class="button2 text-uppercase " data-loading-text="Please wait...">Send your message</button>
              </div>
            </form>


          </div>
        </div>
      </div>
    </section>
@endsection
