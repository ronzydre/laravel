<aside class="col-md-4 column sidebar">
						<div class="widget">
							<div class="tabs-widget">
								<ul class="nav nav-tabs" id="myTabs2"> 
									<li class="active"><a data-toggle="tab" href="#popular">Archives</a></li> 
								</ul>
								<div class="tab-content" id="myTabContent2"> 
									<div id="popular" class="tab-pane fade in active"> 
                                    @foreach($archives as $stats)
										<div class="tabs-posts">
											<div class="tab-post">
												<h5><a href="/?month={{$stats['month']}}&?year={{$stats['year']}}" title="">{{$stats['month'].' '. $stats['year']}}</a></h5>
											</div><!-- Tab Post -->
											
										</div><!-- Tabs Post -->
                                    @endforeach
									</div> 
								</div>
							</div><!-- Tabs Widget -->
						</div><!-- Widget -->	
						<div class="widget">
							<div class="widget-title"><h4>Tags</h4></div>
							<div class="tags">
							@foreach($tags as $tag)
								<a   href="/post/tags/{{$tag}}" title="">{{$tag}}</a>
							@endforeach
							</div>
						</div><!-- Widget -->	
						@if(isset($popular))
							<div class="widget">
							<div class="tabs-widget">
								<ul class="nav nav-tabs" id="myTabs"> 
									<li class="active"><a data-toggle="tab" href="#recent">Other Post</a></li> 
								</ul>
								<div class="tab-content" id="myTabContent"> 
									
									<div id="recent" class="tab-pane fade in active"> 
										<div class="tabs-posts">
										@foreach($popular as $populars)
											<div class="tab-post">
												<img src="/uploads/{{$populars -> image}}" alt="{{$populars -> image}}" />
												<h5><a href="/post/{{$populars -> id}}" >{{str_limit($populars -> title , 20)}}</a></h5>
												<span>{{$populars-> created_at -> toFormattedDateString()}}</span>
											</div><!-- Tab Post -->
										@endforeach
										</div><!-- Tabs Post -->
									</div>
								</div>
							</div><!-- Tabs Widget -->
						</div><!-- Widget -->
						@endif
					</aside>