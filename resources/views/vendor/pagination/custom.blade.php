
@if ($paginator->hasPages())
   <!--  <ul class="pager">
       
        @if ($paginator->onFirstPage())
            <li class="disabled"><span>← Previous</span></li>
        @else
            <li><a href="{{ $paginator->previousPageUrl() }}" rel="prev">← Previous</a></li>
        @endif -->


      
        <!-- @foreach ($elements as $element)
           
            @if (is_string($element))
                <li class="disabled"><span>{{ $element }}</span></li>
            @endif


           
            @if (is_array($element))
                @foreach ($element as $page => $url)
                    @if ($page == $paginator->currentPage())
                        <li class="active my-active"><span>{{ $page }}</span></li>
                    @else
                        <li><a href="{{ $url }}">{{ $page }}</a></li>
                    @endif
                @endforeach
            @endif
        @endforeach


        
        @if ($paginator->hasMorePages())
            <li><a href="{{ $paginator->nextPageUrl() }}" rel="next">Next →</a></li>
        @else
            <li class="disabled"><span>Next →</span></li>
        @endif
    </ul> -->


             <nav class="pagination">


        @foreach ($elements as $element)
           <!-- 
            @if (is_string($element))
                <li class="disabled"><span>{{ $element }}</span></li>
            @endif -->


           
            @if (is_array($element))
                @foreach ($element as $page => $url)
                    @if ($page == $paginator->currentPage())
                        <!-- <li class="active my-active"><span>{{ $page }}</span></li> -->
                        <span class="page-numbers current">{{$page}}</span>
                    @else
                     <a class="page-numbers" href="{{ $url }}">{{$page}}</a>
                        <!-- <li><a href="{{ $url }}">{{ $page }}</a></li> -->
                    @endif
                @endforeach
            @endif
        @endforeach

                
               
                 @if ($paginator->hasMorePages())
                <a class="next page-numbers" href="#">Next »</a>
                 @else
                <a class="next page-numbers disabledx" href="#">Next »</a>
                @endif
            </nav>
@endif 