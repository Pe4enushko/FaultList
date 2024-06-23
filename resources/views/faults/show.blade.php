@extends('layouts.app')
<div>
    @section('content')
    <div class="container">
        <hr>
        <h1 class="text-center">
            {{ $fault->title }}
        </h1>
        <h2 class="text-center text-secondary">
            <a href="{{ route('equipment.show', $equipment->id) }}">{{ $equipment->title }}</a>
        </h2>
        <hr>
    </p class="text-justify">
        {{ $fault->description }}
    </p>
    
    <div class="w-100 d-flex justify-content-end my-3">
        <a class="btn accent" href="{{route('faults.delete', $fault->id)}}">Удалить</a>
    </div>
    
    </div>
    
    @endsection
</div>
