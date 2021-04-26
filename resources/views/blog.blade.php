@extends('layouts.default')
@section('content')
		<!-- #masthead -->
		<div id="content" class="site-content">
			<div id="primary" class="content-area column two-thirds">
				<main id="main" class="site-main" role="main">
				<div class="grid bloggrid">
				
				@if(count($article) > 0)
				@foreach($article as $row)
					<article>
					<header class="entry-header">
					<h1 class="entry-title"><a href="{{ url('article-details/'.base64_encode($row->id))}}" rel="bookmark">{{ $row->title }}</a></h1>
					<div class="entry-meta">
						<span class="posted-on"><time class="entry-date published">{{ Carbon\Carbon::parse($row->created_at)->format('d F Y')}}</time></span>						
						<span class="comments-link"><a href="javascript:void(0)">Published</a></span>
					</div>
					<div class="entry-thumbnail">						
						<img src="{{ url('public/images/article/'.$row->image)}}" alt="">
					</div>
					</header>
					<div class="entry-summary">
						<p>
							When Mary Lennox was sent to Manor to live with her uncle everybody said she was the most disagreeablelooking child ever seen. It was true, too. She had a little thin face and a little thin body, thin light hair and a sour expression. Her hair was yellow, and her face was yellow because she <a class="more-link" href="blog-single.html">Read more</a>
						</p>
					</div>
					<footer class="entry-footer">
					<span class="cat-links">
					Posted in <a href="#" rel="category tag">audio</a>, <a href="#" rel="category tag">embed</a>, <a href="#" rel="category tag">media</a>
					</span>
					</footer>
					</article>
					@endforeach
					@endif
					
										
					
				</div>
				<div class="clearfix">
				</div>
				<nav class="pagination"></nav>
				</main>
				<!-- #main -->
			</div>
			<!-- #primary -->
			
			<div id="secondary" class="column third">
				<div id="sidebar-1" class="widget-area" role="complementary">
				
					<aside id="text-5" class="widget widget_text">
					<h4 class="widget-title">About Me</h4>
					<div class="textwidget">
						<p>
							<img src="{{ url('public/images/admin.jpg')}}" class="alignleft" style="width:80px;border-radius:50%;margin-bottom:0;"> I'm a professional photographer for 10 years. It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.
						</p>
					</div>
					</aside>
					
				    <aside id="recent-posts-2" class="widget widget_recent_entries">
					<h4 class="widget-title">Recent Posts</h4>
					<ul>
						@if(count($recent_posts)>0)
						@foreach($recent_posts as $row)
						<li>
						<a href="{{ url('article-details/'.base64_encode($row->id)) }}">{{ $row->title }}</a>
						</li>
						@endforeach
						@endif
						
					</ul>
					</aside>
					
					<!-- <aside id="text-6" class="widget widget_text">
					<h4 class="widget-title">Like us on Facebook</h4>
					<div class="textwidget">
						<iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2Fwowthemesnet-562560840468823%2F&amp;tabs=timeline&amp;width=340&amp;height=380&amp;small_header=false&amp;adapt_container_width=true&amp;hide_cover=false&amp;show_facepile=false&amp;appId=365036103630036" width="340" height="380" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowtransparency="true">
						</iframe>
					</div>
					</aside>
					
					<aside id="recent-comments-2" class="widget widget_recent_comments">
					<h4 class="widget-title">Recent Comments</h4>
					<ul id="recentcomments">
						<li class="recentcomments"><span>ThemePush</span> on <a href="blog-single.html">Male T-Shirt</a></li>
						<li class="recentcomments"><span>ThemePush</span> on <a href="blog-single.html">Male T-Shirt</a></li>
						<li class="recentcomments"><span><a href="#" rel="external nofollow" class="url">Mr WordPress</a></span> on <a href="blog-single.html">Thanks for watching!</a></li>
						<li class="recentcomments"><span>Maria</span> on <a href="blog-single.html">Gray Blouse</a></li>
						<li class="recentcomments"><span>Maria</span> on <a href="blog-single.html">Retro Dress</a></li>
					</ul>
					</aside>
	 -->				
					<!-- <aside id="text-7" class="widget widget_text">
					<h4 class="widget-title">Follow us</h4>
					<div class="textwidget">
						
						<script src="https://apis.google.com/js/platform.js" async="" defer="" gapi_processed="true"></script>
						
						<div id="___page_0" style="text-indent: 0px; margin: 0px; padding: 0px; border-style: none; float: none; line-height: normal; font-size: 1px; vertical-align: baseline; display: inline-block; width: 300px; height: 377px; background: transparent;">
							<iframe frameborder="0" hspace="0" marginheight="0" marginwidth="0" scrolling="no" style="position: static; top: 0px; width: 300px; margin: 0px; border-style: none; left: 0px; visibility: visible; height: 377px;" tabindex="0" vspace="0" width="100%" id="I0_1460806394603" name="I0_1460806394603" src="https://apis.google.com/u/0/_/widget/render/page?usegapi=1&amp;href=%2F%2Fplus.google.com%2Fu%2F0%2F110916582192388695332&amp;rel=publisher&amp;origin=http%3A%2F%2Fwww.themepush.com&amp;gsrc=3p&amp;ic=1&amp;jsh=m%3B%2F_%2Fscs%2Fapps-static%2F_%2Fjs%2Fk%3Doz.gapi.en.5rbYCKK8ELg.O%2Fm%3D__features__%2Fam%3DAQ%2Frt%3Dj%2Fd%3D1%2Frs%3DAGLTcCNt4tfE4T2zmac5ke0V9FW49A3yCA#_methods=onPlusOne%2C_ready%2C_close%2C_open%2C_resizeMe%2C_renderstart%2Concircled%2Cdrefresh%2Cerefresh%2Conload&amp;id=I0_1460806394603&amp;parent=http%3A%2F%2Fwww.themepush.com&amp;pfname=&amp;rpctoken=19037393" data-gapiattached="true" title="+Badge">
							</iframe>
						</div>
					</div>
					</aside> -->
					
				</div>
				<!-- .widget-area -->
			</div>
			<!-- #secondary -->
		</div>
		<!-- #content -->
	</div>
	<!-- .container -->
@endsection