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
            <h1>BLOGS</h1>
            <div class="breadcroumb">
               <a href="{{ url('') }}">Home</a> &gt;
               <span class="current">BLOGS</span>
            </div>
         </div>
      </div>
   </div>
</div>
<!-- END PAGE TITLE -->
<section class="service-area section-big section-padding">
   <!-- MAIN CONTENT START HERE -->
   <div class="body-content">
   <!-- BLOG START -->
   <div id="blog" class="lite-blog-content-area">
      <div class="container">
         <div class="row">
            <!-- SINGLE POST START -->
            <div class="col-md-8">
               <article class="single-blog-post">
                  <div class="singlepost">
                     @if($post->featuredImage != '/img/imageph.png' && $post->featuredImage != '')
                     <div class="blog-img">
                        <img src="{{$post->featuredImage}}" class="img-responsive" alt="blog">
                     </div>
                     @endif
                     <div class="blog-content">
                        <h3><a href="#">{{$post->title}}</a></h3>
                        <div class="blogmeta"> 
                           <span>{{Helper::dateFormat($post->createdAt)}} by  {{$user->profile->firstName}}</span>
                        </div>
                        <div class="entry-content blogcont">
                           <p>{!!$post->body!!}</p>
                        </div>
                        <div class="post-meta-data">
                           <div class="row">
                              <div class="col-md-5">
                                 <span class="title-info">SHARE</span>
                                 <div class="social">
                                    <a class="customer share smedial flink" href="http://www.facebook.com/sharer.php?u={{url('blog-news/post/'. Helper::slugify($post->title) .'-'. $post->_id )}}" title="Facebook share"><i class="fa fa-facebook "></i></a>
                                    <a class="customer share smedial ftweet" href="http://twitter.com/share?url={{url('blog-news/post/'. Helper::slugify($post->title) .'-'. $post->_id )}}&text={{$post->title}}" title="Twitter share"><i class="fa fa-twitter"></i></a>
                                    <a class="customer share  smedial gplus" href="https://plus.google.com/share?url={{url('blog-news/post/'. Helper::slugify($post->title) .'-'. $post->_id )}}" title="Google Plus Share"><i class="fa fa-google-plus"></i></a>
                                    <a class="customer share smedial flinkden" href="http://www.linkedin.com/shareArticle?mini=true&url={{url('blog-news/post/'. Helper::slugify($post->title) .'-'. $post->_id )}}" title="linkedin Share"><i class="fa fa fa-linkedin"></i></a>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <!-- AUTHOR -->
                     <!-- <div class="author-meta">
                        <div class="media">
                        
                         <div class="media-left blog-author">
                           <a href="#">
                             @if($user->profile->profilePic && $user->profile->profilePic != '/img/noAvatar.png')
                              <img src='{{$user->profile->profilePic}}' class='media-object img-circle'>
                               
                             @endif
                            
                           </a>
                         </div>
                         <div class="media-body">
                           <span class="media-heading"><a href="#">{{ucwords($user->profile->firstName)}} {{ucwords($user->profile->lastName ? $user->profile->lastName : '')}}</a></span>
                        
                           <p>
                             <span class="media-heading">@if($user->profile->phone)
                               {{$user->profile->phone}}
                             @endif</span>
                           </p>
                         </div>
                        </div>
                        </div> -->
               </article>
               </div>
               <div class="col-md-4"> 
                  @include('blog.sidebar')
               </div>
            </div>
         </div>
      </div>
   </div>
</section>
@stop
