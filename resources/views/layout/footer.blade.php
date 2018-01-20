<footer class="dark">
		<div class="block blackish">
			<div class="parallax" data-velocity="-.1" style="background: rgba(0, 0, 0, 0) url(/images/parallax2.jpg) no-repeat 50% 0;"></div>
			<div class="container">
				<div class="row">
					<div class="col-md-6">
						<div class="widget">
							<div class="about-widget">
								<div class="about-logo"><img src="/images/logo.png" alt="" /></div>
								<p>Website Builder is a big library of pre-designed web elements which help you create website in few minutes. Each and every design element was designed for retina ready display on all kind of devices.</p>
								
								<div class="simple-social-links">
									<a href="#" title=""><i class="fa fa-facebook"></i></a>
									<a href="#" title=""><i class="fa fa-twitter"></i></a>
									<a href="#" title=""><i class="fa fa-instagram"></i></a>
									
								</div>
							</div><!-- About Widget -->
						</div><!-- Widget -->
					</div>		
					
					@if(isset($foot))
					<div class="col-md-6">
						<div class="widget">
							<div class="widget-title"><h4>Latest Posts.</h4></div>
							<div class="latest-posts">
						
								@foreach($foot as $foots)
								<div class="small-post">
									<img src="/uploads/{{$foots-> image}}" alt="{{$foots-> image}}" />
									<div class="small-post-name">
										<h4><a href="/post/{{$foots-> id}}" title="">{{$foots-> title}}</a></h4>
										<ul>
											<li>{{$foots->created_at ->diffForHumans()}} </li>
											<li><a href="#" title="">{{count($foots-> comments)}} <i class="fa fa-comments"></i></a></li>
										</ul>
									</div>
								</div><!-- Small Post -->
								@endforeach
							</div><!-- Latest Posts -->
						</div>
					</div>
					@endif
				</div>
			</div>
		</div>
	</footer><!-- Footer -->


	<div class="bottom-footer">
		<div class="container">
			<p><span>&copy;RBD</span></p>
			<ul>
				<li><a href="/" title="">Home</a></li>
				<li><a href="/contact" title="">Contact</a></li>
			</ul>
		</div>
	</div><!-- Bottom Footer -->


</div>	
	<script src="/js/jquery.min.js" type="text/javascript"></script>
	<script src="/js/bootstrap.min.js" type="text/javascript"></script>
	<script src="/js/enscroll-0.5.2.min.js"></script>
	<script src="/js/owl.carousel.min.js"></script>
	<script type="text/javascript" src="/js/jquery.scrolly.js"></script>
	<script type="text/javascript" src="/js/jquery.poptrox.min.js"></script>
	<script src="/js/script.js" type="text/javascript"></script>
	<script type="text/javascript">
	
		jQuery(document).ready(function() {
		"use strict";

	        /* ============ Author Post Carousel ================*/
			$('.author-post-carousel').owlCarousel({
				autoplay:true,
				autoplayTimeout:2500,
				smartSpeed:2000,
				autoplayHoverPause:true,
				loop:true,
				dots:false,
				nav:true,
				margin:0,
				mouseDrag:true,
				singleItem:true,
				autoHeight:true,
				items:1,
				animateIn: 'bounceInDown',			
				animateOut: 'bounceOutDown'				
			});	 
			

	        /* ============ Latest Articles Carousel ================*/
			$('.related-carousel').owlCarousel({
				autoplay:true,
				autoplayTimeout:2500,
				smartSpeed:2000,
				autoplayHoverPause:true,
				loop:false,
				dots:false,
				nav:true,
				margin:30,
				mouseDrag:true,
				autoHeight:true,
				items:2,
				responsive:{
					1200:{items:2},
					980:{items:2},
					768:{items:2},
					480:{items:2},
					0:{items:1}
				}
			});
			
	        /* ============ Photos Carousel ================*/
			$('.photos-carousel').owlCarousel({
				autoplay:true,
				autoplayTimeout:2500,
				smartSpeed:2000,
				autoplayHoverPause:true,
				loop:true,
				dots:false,
				nav:true,
				margin:0,
				mouseDrag:true,
				singleItem:true,
				autoHeight:true,
				items:1
			});	   

	        /* ============  Carousel ================*/
			$('.carousel').owlCarousel({
				autoplay:true,
				autoplayTimeout:2500,
				smartSpeed:2000,
				autoplayHoverPause:true,
				loop:true,
				dots:true,
				nav:false,
				margin:0,
				mouseDrag:true,
				singleItem:true,
				items:1,
				autoHeight:true
			});	   

	        /* ============ Megamenu Carousel ================*/
			$('.mega-carousel').owlCarousel({
				autoplay:true,
				autoplayTimeout:2500,
				smartSpeed:2000,
				autoplayHoverPause:true,
				loop:true,
				dots:false,
				nav:true,
				margin:10,
				mouseDrag:true,
				autoHeight:true,
				items:3
			});	
 
        });
	</script>

	