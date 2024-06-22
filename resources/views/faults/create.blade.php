@extends('layouts.app')
@section('content')
    <div class="container">
        <hr>
        <h1 class="text-center">Добавление неисправности</h1>
        <hr>
        
        <form method="POST" action="/faults/store">
            @csrf
            <div class="form-group m-3">    
                <label disabled class=" text-secondary" for="equipmentId" >Код оборудования</label>
                <input disabled class="form-control text-secondary" name="equipmentId" readonly value="{{$equipment->id}}"> 
            </div>
            <div class="form-group m-3">
                <label disabled class="" for="title" >Название неисправности</label>
                <input type="text" class="form-control" name="title" placeholder="Название неисправности">
            </div>
            
            <div class="form-group m-3">
                <label disabled class="" for="description" >Описание неисправности</label>
                <textarea class="form-control" style="min-height: 300px" name="description" placeholder="Описание неисправности"></textarea>
            </div>

            <div class="form-group mt-3">
                <input class="form-control btn bg-accent" type="submit">
            </div>
        </form>
    </div>
@endsection