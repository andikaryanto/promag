@if ($paginator->hasPages())
    <ul class="pagination">
        @if (!$paginator->onFirstPage())
             <li class="page-item"><a class="page-link" href="{{ $paginator->toArray()['first_page_url'] }}">
                <
            </a></li>
                    @endif
         @foreach ($elements as $element)
            {{-- "Three Dots" Separator --}}
            @if (is_string($element))

                {{-- <li class="disabled"><span>{{ $element }}</span></li> --}}
            @endif

            {{-- Array Of Links --}}
            @if (is_array($element))
                @foreach ($element as $page => $url)
                    @if ($page == $paginator->currentPage())
                          <li class="page-item active"><a class="page-link" href="#">{{ $page }}</a></li>
                    @else
                        <li class="page-item"><a class="page-link" href="{{ $url }}">{{ $page }}</a></li>
                    @endif
                @endforeach
            @endif
        @endforeach
        @if($paginator->currentPage() != $paginator->lastPage())
            <li class="page-item"><a class="page-link" href="{{ $paginator->nextPageUrl() }}">
                >
            </a></li>
               
        @endif
        
    </ul>


   
@endif
