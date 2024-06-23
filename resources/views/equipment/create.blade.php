@extends('layouts.app')
@section('content')
    <div class="container">
        <hr>
        <h1 class="text-center">Добавление оборудования</h1>
        <hr>
        
        <form method="POST" action="{{route('equipment.store')}}" enctype="multipart/form-data">
            @csrf
            <div class="form-group m-3">
                <label disabled class="" for="title" >Название</label>
                <input type="text" class="form-control" name="title" placeholder="Название оборудования">
            </div>
            
            <div class="form-group m-3">
                <label disabled class="" for="description" >Описание</label>
                <textarea class="form-control" style="min-height: 300px" name="description" placeholder="Описание оборудования"></textarea>
            </div>

            <div class="form-group m-3">
                <label disabled class="" for="description" >Картинка</label>
                <input class="form-control"type="file" name="image"></input>
            </div>

            <div class="form-group mt-3">
                <input class="form-control btn bg-accent" type="submit">
            </div>
        </form>
    </div>
@endsection