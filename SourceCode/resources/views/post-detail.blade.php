@extends('frontlayout')
@section('content')

<div class="main-content">


<!-- Section: Blog -->
<section>
  <div class="container mt-30 mb-30 pt-30 pb-30">
    <div class="row">
      <div class="col-sm-12 col-md-3 mt-5 ">
        <div class="sidebar sidebar-left mt-sm-30">
          <div class="header">
            <div class="search-form">
              <form action="{{url('/')}}">
                <div class="input-group">
                  <input type="text" name="q" placeholder="Click to Search" class="form-control search-input">
                  <span class="input-group-btn">
                  <button type="submit" class="btn search-button"><i class="fa fa-search"></i></button>
                  </span>
                </div>
              </form>
            </div>
          </div>
          <div class="header ">
            <h5 class=" mt-3 mb-3"><span style="color:#E79800">Categories</span></h5>
            @foreach($cats as $cat)

            <div class="latest-posts">
              <article class="post media-post clearfix pb-0 mb-10">
                <!-- <a class="post-thumb" href="#"><img src="{{ asset('imgs/'.$cat->image) }}" height="200vh" width="80%" alt=""></a> -->
                <div class="post-right">
                  <h6 class="post-title mt-0"><a href="{{url('category/'.Str::slug($cat->title).'/'.$cat->id)}}">{{$cat->title}}</a></h6>
                  <hr>
                </div>
              </article>
            </div>
            @endforeach
          </div>
          <div class="widget header">
            <h5 class=" mt-5 mb-3">Latest <span style="color:#E79800">Posts</span></h5>
            @foreach($posts2 as $post)
            <div class="latest-posts">
              <article class="post media-post clearfix pb-0 mb-10">
                <!-- <a class="post-thumb" href="#"><img src="{{ asset('imgs/thumb/'.$post->thumb) }}" height="100vh" width="50%" alt=""></a> -->
                <div class="post-right">
                  <h6 class="post-title mt-0"><a href="{{url('post-detail/'.Str::slug($post->title).'/'.$post->id)}}">{{$post->title}}</a></h6><hr>
                </div>
              </article>
            </div>
            @endforeach
          </div>
        </div>

      </div>
      <div class="col-md-9 blog-pull-right">
        <div class="blog-posts single-post">
          <article class="post clearfix mt-5">
            <div class="entry-header">
              <div class="post-thumb thumb"> <img src="{{ asset('imgs/full/'.$detail->full_img) }}" width='100%'height='500vh' alt="" class="img-responsive img-fullwidth"> </div>
            </div>
            <div class="header pt-10  pl-15">
              <h4 class="pt-3" style="font-weight:bold ;">{{ $detail->title }} </h4>
            </div>
            <div class="entry-meta pl-15 p-2">
            <span class="list-inline font-11 ">
                      <em> <em>
                      @if($detail->user_id==0)
                      <i style="color: #E79800;" class="fa fa-user text-gray mr-1"></i>By: Admin /
                    @else
                    <i style="color: #E79800;" class="fa fa-user text-gray mr-1"></i>By: {{$detail->user->name}} /
                    @endif
                    </em>  </em>
                      <em><i style="color: #E79800;" class="fa fa-comment mr-1" aria-hidden="true"></i>Comments:{{count($detail->comments)}} </em>
                   </span>
            </div>
            <div class="entry-content mt-10 p-3 bg-light">
              <p class="mb-15">{{$detail->detail}}</p>

            </div>
          </article>
          <div class="tagline p-0 pt-20 mt-5">
            <div class="row">
              <div class="col-md-8">
                <div class="tags">
                  <p class="mb-2"><i style="color: #E79800;" class="fa fa-tags text-theme-colored"></i> <span>Tags:</span> {{ $detail->tags }}</p>
                </div>
              </div>

            </div>
          </div>
          <div class="entry-content mt-10 p-2 mb-4 bg-light">
            <h5 class="comments-title">Comments</h5>
                <div class="col-12">
                @if(count($detail->comments)>0)

                @if($detail->comments)
							@foreach($detail->comments as $comment)
                <div class="media-body bg-white p-2 m-2" >
                    <h5 class="media-heading comment-heading">
                    @if($comment->user_id==0)
                    <h4>Admin Says:</h4>

                    @else
                    <h6>{{$comment->user->name}} Says: <span class="comment-date" style="color: gray;font-size:12px">  {{$comment->created_at}}</span> </h6>

                    @endif
                </h5>

                    <p >{{ $comment->comment }}</p>

                </div>
                @endforeach

                @endif
            @else
            <p class="alert alert-danger">No Comments Yet</p>


        @endif

                </div>
          </div>
          @auth
          <div class="comment-box">
            <div class="row">
              <div class="col-12 header">
                <h5>Leave a Comment</h5>
                <div class="row">
                  <form method="post" role="form" id="comment-form" action="{{url('save-comment/'.Str::slug($detail->title).'/'.$detail->id)}}"style="width:100%">
                  @csrf

                    <div class="col-12">
                      <div class="form-group">
                        <textarea name="comment" class="form-control" required name="contact_message2" id="contact_message2"  placeholder="Enter Message" rows="7"></textarea>
                      </div>
                      <div class="form-group">
                        <button type="submit" class="btn btn-dark btn-flat pull-right flip m-0" data-loading-text="Please wait...">Submit</button>
                      </div>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
          @endauth
        </div>
      </div>
    </div>
  </div>
</section>
<!-- end main-content -->
</div>







@endsection



