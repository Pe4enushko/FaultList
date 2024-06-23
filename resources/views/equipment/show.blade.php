@extends('layouts.app')
<div>
    @section('content')
        @include('cards.equipment');
        <a data-confirm="u sure?" class="btn accent" href="{{route('equipment.delete', $item->id)}}">Удалить</a>
    @endsection
</div>
