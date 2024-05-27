@foreach($comics as $item)
    <div class="col-12 col-sm-6 col-md-4 col-lg-3">
        <img src="{{$item->image}}" alt="{{$item->title}}" class=" image-fluid w-100 ">
        <div class="">
            <h5 class="text-uppercase pt-2">
                <a href="{{route('comics.show', $item->id)}}">
                    {{$item->title}}
                </a>
            </h5>
        </div>
    </div>
@endforeach