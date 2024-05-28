@foreach($comics as $item)
    <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-3">
        <a href="{{route('comics.show', $item->id)}}">
            <img src="{{$item->image}}" alt="{{$item->title}}" class=" image-fluid w-100 ">

        </a>
        <div class="">
            <h5 class="text-uppercase pt-2">
                <a href="{{route('comics.show', $item->id)}}">
                    {{$item->title}}
                </a>
            </h5>

            <div class="d-flex justify-content-between mb-3">
            <a href="{{route('comics.edit', $item->id)}}" class="btn btn-primary">
                Modifica
            </a>
            </div>
        </div>
    </div>
@endforeach