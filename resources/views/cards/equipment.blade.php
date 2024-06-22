<div class="w-100 card bg-light" style="width:30%">
    <div class="p-2 bg-primary">
        <img class="img-thumbnail d-inline-block float-left" style="width: 150px; height: 150px;" src="images/shenck.jpg" alt="Тут могла быть картинка с оборудованием">
        <div class="d-inline float-right"> 
            <span class="text-center text-light p-2 align-top">
                {{ $item->title }}
            </span>
        </div>
    </div>
    <a href="{{route('faults.create',$item->id)}}" class="border-accent btn bg-accent text-light mx-2 mt-2">Добавить неисправность</a>
    <div class="p-3"> 
        <hr>
        <p class="accent">Описание:</p>
        {{ $item -> description }}
    </div>
    
    <div class="mx-2 mb-3">
        <hr>
        <p class="accent">Ошибки:</p>
        @foreach($item->faults()->get() as $fault)
            <div> 
                <a href="{{route('faults.show', $fault->id)}}">{{$fault->title}}</a>
            </div>
        @endforeach
    </div>
</div>