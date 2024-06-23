@extends('layouts.app')
<div>
    @section('content')
        @include('cards.equipmentBig');
        <div class="w-100 text-center">
            <a class="btn accent" href="{{route('equipment.delete', $item->id)}}">Удалить</a>
        </div>
    @endsection
</div>
