 @extends('layout.master') 
 @section('title', 'Welcome| Bloombaz')

 @section('description', 'Bloombaz Home Page')
 
 @section('content')

	 <div class="col-md-8 ">
	
	 @if(isset($s) && !$_GET)
		<div class="col-md-12">
									<div class="texty-post">
										<div class="texty-post-img">
											<div class="carousel">
												<div class="carousel-img">
												@if(empty($s -> image))
												<img src="images/default.jpg" alt="default" /></div>
												@endif
												<img src="uploads/{{$s -> image}}" alt="uploads/{{$s -> image}}" /></div>
												<div class="carousel-img">
												@if(empty($s -> image_to))
												<img src="images/default2.jpg" alt="default2" /></div>
												@endif
												<img src="uploads/{{$s -> image_to}}" alt="uploads/{{$s -> image_to}}" /></div>
											</div>
											<a title=""><img src="" alt="" /></a>
										</div>
										<div class="texty-post-detail">
											<h2><a href="/post/{{$s->id}}" title="">{{$s -> title}}</a></h2>
											<ul class="meta">
												<li><a href="#" title="">{{$s -> created_at-> toFormattedDateString()}} </a></li>
											</ul>
											<p>{{str_limit($s-> body, 200)}}</p>
											<div class="post-info">
												<span><i class="fa fa-comments"></i>{{count($s-> comments)}}</span>
												
												<span>
													<i class="fa fa-share-alt"></i>
													<span class="share-link">
														<a class="facebook" href="#" title=""><i class="fa fa-facebook"></i></a> 
														<a class="twitter" href="#" title=""><i class="fa fa-twitter"></i></a> 
														<a class="pinterest" href="#" title=""><i class="fa fa-instagram"></i></a> 
													</span>
												</span>
											</div>
										</div>
									</div><!-- Texty Post -->
								</div>
@endif


	@foreach ($posts as $post)
	 @include('post.article')
	  @endforeach
	
	</div>
	



@endsection