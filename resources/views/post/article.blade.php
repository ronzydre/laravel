
<div class="col-md-6">
									<div class="texty-post">
										<div class="texty-post-img" cursor="pointer">
										@if(empty($post-> image))
										<img src="/images/{{$post -> tag}}.jpg" alt="tag default" />
										@endif
											<img src="/uploads/{{$post -> image}}" alt="{{$post -> image}}" />
											<a  title="" cursor="pointer"><img src="" alt="" /></li></a>
										</div>
										<div class="texty-post-detail">
										@if(count($post-> tags))
											<div class="categories">
											@foreach($post -> tags as $tag)
												<a href="/post/tags/{{$tag->name}}" title="">{{$tag-> name}}</a>
											@endforeach
											</div>
										@endif
											<h2><a href="post/{{$post -> id}}" title="">{{str_limit($post -> title, 47)}}</a></h2>
											<ul class="meta">
												<li><a  title="" cursor="pointer" >{{$post -> created_at -> toFormattedDateString()}}</a></li>
											</ul>
											<p>{{str_limit($post -> body, 70 )}}</p>
											<div class="post-info">
												<span><i class="fa fa-comments"></i>{{count($post-> comments)}}</span>
												<span>
													<i class="fa fa-share-alt"></i>
													<span class="share-link">
														<a class="facebook" href="#" title=""><i class="fa fa-facebook"></i></a> 
														<a class="twitter" href="#" title=""><i class="fa fa-twitter"></i></a> 
														<a class="dribbble" href="#" title=""><i class="fa fa-instagram"></i></a> 
													</span>
												</span>
											</div>
										</div>
									</div><!-- Texty Post -->
								</div>