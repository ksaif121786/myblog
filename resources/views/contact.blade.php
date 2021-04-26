@extends('layouts.default')
@section('content')
		
		<!-- #masthead -->
		<div id="content" class="site-content">
			<div id="primary" class="content-area column full">
				<main id="main" class="site-main">
				<article id="post-39" class="post-39 page type-page status-publish hentry">
				<header class="entry-header">
				<h1 class="entry-title">Contact</h1>
				</header>
				<!-- .entry-header -->
				<div class="entry-content">
						
					<!-- BEGIN MAP -->
				<!-- 	<p><script src='https://maps.googleapis.com/maps/api/js?v=3.exp'></script>
					<div style='overflow:hidden;height:380px;width:100%;'>
					<div id='gmap_canvas' style='height:380px;width:100%;'></div>
					<div>embed google maps</a></div>
					<style>#gmap_canvas img{max-width:none!important;background:none!important}</style>
					</div> -->
					<!-- <p><script type='text/javascript'>function init_map(){var myOptions = {zoom:10,center:new google.maps.LatLng(3.4000221,-76.387969),mapTypeId: google.maps.MapTypeId.ROADMAP};map = new google.maps.Map(document.getElementById('gmap_canvas'), myOptions);marker = new google.maps.Marker({map: map,position: new google.maps.LatLng(3.4000221,-76.387969)});infowindow = new google.maps.InfoWindow({content:'<strong>Jane Photography</strong><br />Florida Beach<br />'});google.maps.event.addListener(marker, 'click', function(){infowindow.open(map,marker);});infowindow.open(map,marker);}google.maps.event.addDomListener(window, 'load', init_map);</script></p> -->
					<!-- END MAP -->
						
					<div class="wpcmsdev-columns">
						<div class="column column-width-one-half">
							<h4>Quick Contact</h4>	
							@if(session()->has('success'))
							<p class="" style="color:green;">{{ session()->get('success')}}</p>
							@endif					
							
							@if(session()->has('failed'))
							<p class="" style="color:red;">{{ session()->get('failed')}}</p>
							@endif		
							<form class="wpcf7" method="post" action="{{ url('contact-us')}}" id="contactform">
								<div class="form">
									@csrf

									<p><input type="text" name="name" placeholder="Name *">
                                     <span style="color: red;">{{ $errors->first('name')}}</span>
									</p>
									<p><input type="text" name="email" placeholder="E-mail Address *">
									 <span style="color: red;">{{ $errors->first('email')}}</span></p>
									<p><textarea name="message" rows="3" placeholder="Message *"></textarea>
									<span style="color: red;">{{ $errors->first('message')}}</span></p>

									<input type="submit" id="submit" class="clearfix btn" value="Send">

								</div>
							</form>
							<div class="done">								
								Your message has been sent. Thank you!
							</div>
							
						</div>
						<div class="column column-width-one-half">
							<h4>Find Us: (+91) 9753244000</h4>
							<p>
								If you want to hire me or have any feedback or questions about our service in general, please send us a message by completing our enquiry form. It’s best to call though, someone we’ll always be there for you.
							</p>
							<p>
								Monday – Friday: 9am to 5pm<br>
								Saturday: 10am to 2pm<br>
								Sunday: Closed
							</p>
						</div>
					</div>
				</div>
				<!-- .entry-content -->
				</article>
				</main>
				<!-- #main -->
			</div>
			<!-- #primary -->
		</div>
		<!-- #content -->
	</div>
	<!-- .container -->

@endsection