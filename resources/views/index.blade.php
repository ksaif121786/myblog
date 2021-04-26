@extends('layouts.default')
@section('content')
		<div id="content" class="site-content">
			<div id="primary" class="content-area column full">
				<main id="main" class="site-main">
				<div class="grid portfoliogrid">
				    
				    @if(count($article) > 0)
				    @foreach($article as $row)
					<article class="hentry">
					<header class="entry-header">
					<div class="entry-thumbnail">
						<a href="{{ url('article-details/'.base64_encode($row->id)) }}"><img src="{{ url('public/images/article/'.$row->image)}}" class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt="p1"/></a>
					</div>
					<h2 class="entry-title"><a href="{{ url('article-details/'.base64_encode($row->id)) }}" rel="bookmark">{{ $row->title}}</a></h2>
					<a class='portfoliotype' href='{{ url("article/".$row->category->slug."/".$row->category->id)}}'>{{ $row->category->name}}</a>
					<!-- <a class='portfoliotype' href='portfolio-category.html'>woman</a>
					<a class='portfoliotype' href='portfolio-category.html'>yellow</a> -->
					</header>
					</article>
					@endforeach
					@endif
					
					
					
				</div>
				<!-- .grid -->
				 {{ $article->links('vendor.pagination.custom') }}
<!-- 				<nav class="pagination">
				<span class="page-numbers current">1</span>
				<a class="page-numbers" href="#">2</a>
				<a class="next page-numbers" href="#">Next »</a>
				</nav> -->
				<br/>
				
				</main>
				<!-- #main -->
			</div>
			<!-- #primary -->
		</div>
		<!-- #content -->
	</div>
	<!-- .container -->
	@endsection