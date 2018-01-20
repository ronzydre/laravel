@extends('layout.master') 
@section('content')

				<div class="col-md-8 column">
					<div class="default-template">
						<div class="single-image">
							<img src="/uploads/{{$post-> image}}" alt="" />
							<ul class="short-info">
								<li><i class="fa fa-comments"></i> {{count($post-> comments)}}</li>
							</ul>
						</div>
						<!-- Single Image -->
						<div class="post-name">
							<h1>{{$post -> title}}</h1>
							<ul class="meta">
								<li>{{$post -> created_at -> toFormattedDateString()}}</li>
								<li><i class="fa fa-comments"></i> {{count($post -> comments)}}</li>
						<li>@if(count($post-> tags))
							
							@foreach($post -> tags as $tag)
								<a href="/post/tags/{{$tag->name}}" title="">{{$tag-> name}}</a>
							@endforeach
							
						@endif</li>
							</ul>
						</div>
						
						<!-- Post Name --><p>{{$post-> body}}</p>
						<div class="image-grids">
								<div class="row">
									<div class="col-md-6"><div class="image-grid"><img src="/uploads/{{$post-> image_to}}" alt="{{$post-> image_to}}" /></div></div>
									<div class="col-md-6"><div class="image-grid"></div></div>
								</div>
							</div><!-- Image Grids -->
							<div class="footer-links">
								<a   title="" href="#" class="twitter hovered"><i class="fa fa-twitter"></i><span>Twitter</span></a>
								<a   title="" href="#" class="google-plus"><i class="fa fa-instagram"></i><span> Instagram</span></a>
								<a   title="" href="#" class="facebook"><i class="fa fa-facebook"></i><span>Facebook</span></a>
							</div><!-- Social Links  -->
							
							@if(isset($foot))		
						
								<div class="related-posts">
								<h4 class="simple-heading">RELATED POSTS</h4>
								<div class="related-carousel">
								@foreach($foot as $foots)
									<div class="related-post">
										<img src="/uploads/{{$foots-> image_to}}" alt="{{$foots-> image_to}}" />
										<div class="related-post-name">
											<h4><a href="{{$foots-> id}}">{{str_limit($foots -> title , 20)}}</a></h4>
											<ul class="meta">
												<li ><a  >{{$foots-> created_at-> toFormattedDateString()}}</a></li>
											</ul>
										</div>
									</div><!-- Related Post -->
								@endforeach
								</div><!-- Related Carousel -->
							</div><!-- Related Posts -->
							@endif
							
							
		
						
						<!-- Image Grids -->
						<div class="post-comments">
							<span class="comments-title"><i class="fa fa-comments"></i> ALL Comment(s) ({{count($post-> comments)}})</span>
							<ul>
								@foreach($post-> comments as $comment)
								<li>
									<div class="comment">

										<img src="/images/user.png" alt="user" />
										<div class="comment-detail">
											<h4><a href="#" title="">{{$comment -> name}}
											@if(empty($comment-> name))
											Anonymous
											@endif
											</a></h4>
											<p>{{$comment -> body}}</p>
											<strong><a   class="reply" title="">
												{{$comment-> created_at->diffForHumans()}}
												</a></strong>
										</div>
									</div>
									<!-- Comment -->
								</li>
								@endforeach

							</ul>
						</div>
						<!-- Post Comments -->

						<div class="comment-form">
							<h4 class="simple-heading">LEAVE A COMMENT</h4>
							<form action="/post/{{$post-> id}}/comments" method="POST">
								{{ csrf_field() }}
								<div class="row">
									<div class="col-md-12">
										<div class="field">
											<label>Name *</label><input placeholder="Name" name="name" id="name" maxlength= "14"/>
										</div>
										<div class="field">
											<label>Comment *</label><textarea placeholder="Enter Your Comment" name="body" maxlength="500" id="body"></textarea>
										</div>
										<!-- Field -->
									</div>
									<div class="col-md-12"><button type="submit" class="btn">Send</button></div>
								</div>
							</form>
						</div>
						@include('layout.error')
						<!-- Comment Form -->

						
						<!-- Social Links  -->
					</div>
				</div>
		

@endsection
