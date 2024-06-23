@extends('layouts.app')
@section('content')
    <div class="container">
        <hr>
        <h1 class="text-center">Добавление неисправности</h1>
        <hr>
        
        <form method="POST" action="{{route('faults.store')}}" enctype="multipart/form-data">
            @csrf
            <div class="form-group m-3">    
                <label class=" text-secondary" for="equipment_Id" >Код оборудования</label>
                <input class="form-control text-secondary" name="equipment_Id" readonly value="{{$equipment->id}}"> 
            </div>
            <div class="form-group m-3">
                <label disabled class="" for="title" >Название неисправности</label>
                <input type="text" class="form-control" name="title" placeholder="Название неисправности">
            </div>
            
            <div class="form-group m-3">
                <label disabled class="" for="description" >Описание неисправности</label>
                <textarea class="form-control" style="min-height: 300px" name="description" placeholder="Описание неисправности"></textarea>
            </div>

            <div id="images" class="form-group m-3">
                <label disabled class="" for="description" >Картинки</label>
                <input type="file" class="form-control" name="image1" placeholder="Описание неисправности">
                <script>
                    let i = 2
                    let images = document.getElementById('images')

                    images.addEventListener("change", (e) => {
                        let tName = e.target.name
                        let slices = tName.slice(5)
                        console.log(slices);
                        console.log(i - 1);
                        if (e.target.files[0] && slices == `${i - 1}`)  {
                            console.log("image" + i + " loaded")

                            let newInput = document.createElement('input');
                            
                            newInput.name = 'image' + i
                            newInput.type = 'file';
                            newInput.className = 'form-control'

                            images.appendChild(newInput)
                            
                            i++;
                        }
                    })
                </script>
            </div>



            <div class="form-group mt-3">
                <input class="form-control btn bg-accent" type="submit">
            </div>
        </form>
    </div>
@endsection