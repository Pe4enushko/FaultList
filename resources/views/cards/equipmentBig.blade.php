<div class="card bg-light">
    <div style="width:100%; height: 20em; background: rgba(0,0,0,.5) url({{$item->image_path}}) no-repeat center; object-fit: fill; background-size: 100%; background-blend-mode: darken;">    
        <h1 style="text-transform: uppercase" class="text-center text-light p-2 h-100 align-items-center justify-content-center row">
            {{ $item->title }}
        </h1>
    </div>
    
    <form class="card-img-form float-left"
     method="POST" action="{!!route('equipment.image.update', $item->id)!!}" enctype="multipart/form-data">
     @csrf
        <input class="form-control m-2" name="image" type="file">
        <input class="form-control m-2" type="submit" value="Отправить новую картинку">
    </form>
    
    <a href="{{route('faults.create',$item->id)}}" class="border-accent btn bg-accent text-light mx-2 mt-2">
        Добавить неисправность
    </a>

    <div class="p-3"> 
        <hr>
        <h2 class="accent">Описание:</h2>
        {{ $item -> description }}
    </div>
    
    <div class="p-3">
        <hr>
        <h2 class="accent">Ошибки:</h2>
        <div class="faults-big">
            @foreach($item->faults()->get() as $fault)
                <div> 
                    <a href="{{route('faults.show', $fault->id)}}">{{$fault->title}}</a>
                </div>
            @endforeach
        </div>
    </div>
</div>