<!DOCTYPE html>
<html lang="en-US">
<?php
  \DB::table('visiters')->insert(['ip'=>$_SERVER['SERVER_ADDR']]);
?>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Matchtech</title>
<link rel='stylesheet' href='{{ url("public/client/css/woocommerce-layout.css")}}' type='text/css' media='all'/>
<link rel='stylesheet' href='{{ url("public/client/css/woocommerce-smallscreen.css")}}' type='text/css' media='only screen and (max-width: 768px)'/>
<link rel='stylesheet' href='{{ url("public/client/css/woocommerce.css")}}' type='text/css' media='all'/>
<link rel='stylesheet' href='{{ url("public/client/css/font-awesome.min.css")}}' type='text/css' media='all'/>
<link rel='stylesheet' href='{{ url("public/client/css/style.css")}}' type='text/css' media='all'/>
<link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Oswald:400,500,700%7CRoboto:400,500,700%7CHerr+Von+Muellerhoff:400,500,700%7CQuattrocento+Sans:400,500,700' type='text/css' media='all'/>
<link rel='stylesheet' href='{{ url("public/client/css/easy-responsive-shortcodes.css")}}' type='text/css' media='all'/>
</head>
<body class="home page page-template page-template-template-portfolio page-template-template-portfolio-php">
<div id="page">
	<div class="container">
		<header id="masthead" class="site-header">
		<div class="site-branding">
			<h1 class="site-title"><a href="{{ url('/')}}" rel="home">Matchtech</a></h1>
			<h2 class="site-description">Welcome in blogging</h2>
		</div>
		<nav id="site-navigation" class="main-navigation">
		<button class="menu-toggle">Menu</button>
		<a class="skip-link screen-reader-text" href="#content">Skip to content</a>
		<div class="menu-menu-1-container">
			<ul id="menu-menu-1" class="menu">

				<li><a href="{{ url('/')}}">Home</a></li>
				<?php
                     $category = App\Models\Category::where('status',1)->where('is_deleted',0)->get();
                     // print_r($category); die;

                     foreach($category as $row){
				?>
				
				<li><a href="{{ url('/article').'/'.$row->slug.'/'.$row->id}}">{{ $row->name 
				}}</a></li>
               <?php }?>
				

				<!-- <li><a href="#">Pages</a>
				<ul class="sub-menu">
					<li><a href="{{ url('article-details')}}">Portfolio Item</a></li>
					<li><a href="blog-single.html">Blog Article</a></li>
					<li><a href="shop-single.html">Shop Item</a></li>
					<li><a href="portfolio-category.html">Portfolio Category</a></li>
				</ul>
				</li> -->
				<li><a href="{{ url('contact-us')}}">Contact us</a></li>
				<li><a href="{{ url('about-us')}}">About</a></li>
			</ul>
		</div>
		</nav>
		</header>
		<!-- #masthead -->