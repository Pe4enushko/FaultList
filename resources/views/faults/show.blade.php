@extends('layouts.app')
<div>
    @section('content')
    <div class="container">
        <hr>
        <h1 class="text-center">
            {{ $fault->title }}
        </h1>
        <h2 class="text-center text-secondary">
            {{ $equipment->title }}
        </h2>
        <hr>
    </p class="text-justify">
        {{ $fault->description }}
    </p>
    </div>
    @endsection
</div>
