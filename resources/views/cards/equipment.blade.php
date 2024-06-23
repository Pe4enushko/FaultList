<div class="w-100 card bg-light" style="width:30%; min-width:480px">
    <div class="mx-0 row p-2 bg-primary">
        <form class="card-img-form float-left col-6"
         method="POST" action="{!!route('equipment.image.update', $item->id)!!}" enctype="multipart/form-data">
         @csrf
        
            <img    class="img-thumbnail w-100 m-2" style="object-fit:cover" 
                    src="{{ $item->image_path }}" alt="{{ $item->title }}">

            <input class="form-control m-2" name="image" type="file">
            <input class="form-control m-2" type="submit">
        </form>



        <a class="col-6" style="backdrop-filter: brightness(75%); border-radius: 10px" href="{{route('equipment.show', $item->id)}}">
        <div class="d-inline-block float-right p-3"> 
                <span class="text-center text-light p-2">
                    {{ $item->title }}
                </span>
            </div>
        </a>

    </div>

    <a href="{{route('faults.create',$item->id)}}" class="border-accent btn bg-accent text-light mx-2 mt-2">
        Добавить неисправность
    </a>

    <div class="p-3"> 
        <hr>
        <p class="accent">Описание:</p>
        {{ $item -> description }}
    </div>
    
    <div class="mx-2 mb-3">
        <hr>
        <p class="accent">Ошибки:</p>
        <div class="faults">
            @foreach($item->faults()->get() as $fault)
                <div> 
                    <a href="{{route('faults.show', $fault->id)}}">{{$fault->title}}</a>
                </div>
            @endforeach
        </div>
    </div>
</div>