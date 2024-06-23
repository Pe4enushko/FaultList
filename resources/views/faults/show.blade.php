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
    </div>
    <form method="GET" action="{{route('faults.delete', $fault->id)}}">
        <input type="submit" class="btn accent" value="Удалить">
    </form>
    @endsection
</div>
