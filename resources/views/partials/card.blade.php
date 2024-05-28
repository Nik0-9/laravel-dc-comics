@foreach($comics as $item)
    <div class="col-12 col-sm-6 col-md-4 col-lg-3">
        <img src="{{$item->image}}" alt="{{$item->title}}" class=" image-fluid w-100 ">
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
            <form action="{{route('comics.destroy', $item->id)}}" method="POST">
                @csrf
                @method('DELETE')
                <input type="submit" value="Rimuovi" class="btn btn-danger">
            </form>
            </div>
        </div>
    </div>
@endforeach