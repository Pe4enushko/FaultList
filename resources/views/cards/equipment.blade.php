<div class="w-100 card equ-card bg-light">
    <div class="mx-0 d-flex p-2 bg-primary">
        <form class="card-img-form justify-content-start p-2"
         method="POST" action="{!!route('equipment.image.update', $item->id)!!}" enctype="multipart/form-data">
         @csrf

         <a href="{{route('equipment.show', $item->id)}}">
            <img    class="img-thumbnail equ-img" style="object-fit:contain;" 
            src="{{ $item->image_path }}" alt="{{ $item->title }}">
        </a>

            <input class="form-control my-1" name="image" type="file">
            <input class="form-control my-1" type="submit">
        </form>

        <a class="equ-card-title justify-content-end p-3" href="{{route('equipment.show', $item->id)}}">
            <div> 
                <span class="text-light">
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