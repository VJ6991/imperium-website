<div class="sidebar">
   <!-- CATAGORIES -->
   <section class="widget widget_categories">
      <h2 class="widget-title">categories</h2>
      <ul>
      @foreach( $categories as $category)
      <li class="cat-item cat-item-4">
         <a href="{{url('blog-news/category/'.$category->title)}}" class="text-capitalize ng-binding"> {{$category->title }}</a>
      </li>
      @endforeach 
   </section>
   <!-- RECENT POST -->
   <section class="widget widget-recent-post">
      <h2 class="widget-title color-black">Recent Posts</h2>
      <!-- RECENT POST START HERE -->
      @foreach ( $recentPosts as $rPost)
      <div class="media">
         @if($rPost->featuredImage != '/img/imageph.png' && $rPost->featuredImage != '')
         <div class="row">
            <div class="col-sm-4">
               <div class="medialeft">
                  <a href="#">
                  <img class="media-object" src="{{$rPost->featuredImage }}" alt="blog">
                  </a>
               </div>
            </div>
            @endif
            <div class="col-sm-8">
               <div class="mediabody recent">
                  <h2><a href="{{url('blog-news/post/'. Helper::slugify($rPost->title) .'-'. $rPost->_id )}}">{{$rPost->title}}</a></h2>
                  <span>{{Helper::dateFormat($rPost->createdAt)}}</span>
               </div>
            </div>
         </div>
      </div>
      @endforeach
   
   </section>

</div>
