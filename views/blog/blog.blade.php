@extends('layouts.app')
@section('meta')
  {!!Helper::setMetaTags($meta)!!}
@stop
@section('content')

 
<!-- Inner Page Header serction start here -->
<div class="lite-breadcroumb-area innerbanner" id="blogbanner">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1>Blog and News</h1>
                    <div class="breadcroumb">
                    <a href="{{ url('') }}">Home</a> &gt;
                        <span class="current">BLOGS</span>
                    </div>
                </div>
            </div>
        </div>
    </div>



  <!-- MAIN CONTENT START HERE -->
  <section class="service-area section-big section-padding">
    <!-- BLOG START -->
    <div id="blog" class="lite-blog-content-area">
      <div class="container">

        <div class="row">
          <!-- SINGLE POST START -->
           @if(count($blogs)==0)
           <div class="col-md-8"> 
  
                  <div class="heading">
                     <h1>No posts found!</h1>
                  </div>
          </div>
           @endif

          <div class="col-md-8"> 
             @if(!empty(Input::get('q')))
                <p class=" section-supporting-text font-primary "> Search posts for  <b> &#8220;{{ Input::get('q')}}&#8221;</b></p> 

              @endif
             
              @foreach ( $blogs as $post)
              <div class="singlepost">
                  @if($post->featuredImage != '/img/imageph.png' && $post->featuredImage != '')
                  <div class="blog-img">
                      <a href="#">
                        <img src="{{$post->featuredImage }}" class="img-responsive" alt="blog" />
                      </a>
                    </div>
                  @endif

<div class="blog-content">
                  <h3><a href="{{url('blog-news/post/'. Helper::slugify($post->title) .'-'. $post->_id )}}">{{$post->title}}</a></h3>



                  <div class="blogmeta"> <span>{{Helper::dateFormat($post->createdAt)}} by  {{$post->user->profile->firstName}}</span>

</div>



                  <div class="entry-content">
                    <p>
                      {{Helper::limit_words(strip_tags($post->body) , 40) }}
                    </p>
                    <a href="{{url('blog-news/post/'. Helper::slugify($post->title) .'-'. $post->_id )}}" class="read-more-btn">Read More</a>
                  </div>
                </div>

                </div>
              @endforeach
          </div>






          <div class="col-md-4"> 
            @include('blog.sidebar')
          </div>
          
          <!-- /.END SINGLE POST -->
          <!-- PAGINATION -->
        
        <!-- /.END PAGINATION -->
        </div>
      </div>
    </div>

  </section>

 
@endsection