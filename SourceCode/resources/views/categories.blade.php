@extends('frontlayout')
@section('title','All Categories')
@section('content')

<div class="main-content">

    <section>
      <div class="container mt-5 mb-5">
        <div class="row multi-row-clearfix">
        @if(count($categories)>0)
				@foreach($categories as $category)
          <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
            <div class="courses maxwidth500 mb-30 " style="width:100%">
              <div class="courses-thumb" >
                <img src="{{asset('imgs/'.$category->image)}}" class="img-fullwidth" alt="{{$category->title}}" width="100%" height="330vh">
              </div>
              <div class="header2  ">
              <h5 class="pt-2">{{$category->title}}</h5>
              </div>
              <div class="header2">
              <a class="text-link" href="{{url('category/'.Str::slug($category->title).'/'.$category->id)}}" > Details →</a>
              </div>

                      </div>
          </div>
        @endforeach
        @else
            <p class="alert alert-danger">No Category Found</p>
            @endif



        </div>
      </div>
    </section>
  <!-- end main-content -->
  </div>


@endsection('content')
