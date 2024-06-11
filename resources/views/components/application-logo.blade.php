<a href="{{ route('home') }}">
    @if($option && $option->site_logo)
        <div class="site__logo">
            <img class="border--rounded" src="{{ $option->faviconUrl() }}" alt="">
        </div>
    @else
        <svg class="icon icon--dark" xmlns="http://www.w3.org/2000/svg" width="30" height="30"
             viewBox="0 0 68 68">
            <path
                d="M38.7113 45.4466L67.7316 16.3267L51.8726 0.413254L22.8534 29.5321L22.8532 0.400201L0.424805 0.400024V45.82C0.424805 49.8009 2.00075 53.619 4.806 56.4342L11.901 63.5543C14.7068 66.3698 18.5123 67.9517 22.4804 67.9517L67.7466 67.9512L67.7468 45.4464L38.7113 45.4466Z"></path>
        </svg>
    @endif

</a>
