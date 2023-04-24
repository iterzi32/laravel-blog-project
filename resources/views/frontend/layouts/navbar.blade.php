<nav class="navbar navbar-expand-lg navbar-light" id="mainNav">
    <div class="container px-4 px-lg-5">
        <a class="navbar-brand" href="{{route('frontend.index')}}">Ana Sayfa</a>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ms-auto py-4 py-lg-0">
                @foreach($pages as $page)
                    <li class="nav-item"><a class="nav-link px-lg-3 py-3 py-lg-4" href="{{route('page.show', $page->slug)}}">{{$page->title}}</a></li>
                @endforeach
                <li class="nav-item"><a class="nav-link px-lg-3 py-3 py-lg-4" href="{{route('contact.index')}}">İletişim</a></li>
            </ul>
        </div>
    </div>
</nav>
