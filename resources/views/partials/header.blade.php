<header>
    <div class="container d-flex justify-content-between align-items-center">
        <div>
            <img src="{{Vite::asset('resources/img/dc-logo.png')}}" alt="logo" class="w-75 p-2">
        </div>
        <div id="nav-header">
            <ul class="d-flex">
                <li>
                    @foreach($nav_links as $item)
                        <a href="#" class="text-uppercase after ps-2">
                            {{$item}}
                        </a>
                    @endforeach
                </li>
            </ul>
        </div>
    </div>
</header>