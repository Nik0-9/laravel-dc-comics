<footer id="footer-top">
    <div class="container d-flex justify-content-between align-items-center">
        @foreach($footer_nav as $link)
            <div>
                <img src="{{Vite::asset($link['icon'])}}" alt="icona">
                <a href="#" class="text-uppercase">{{$link['text']}}</a>
            </div>
        @endforeach
    </div>
</footer>