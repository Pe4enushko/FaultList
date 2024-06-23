@extends('layouts.app')
@section('content')
<style>
    img {
        width: 150px;
        object-fit: contain;
    }
    a {
        text-decoration: none;
    }
</style>
    <div class="d-flex flex-sm-wrap">
    @foreach ($data as $item)
        <div class="w-25 m-0">
            @include('cards.equipment')
        </div>
    @endforeach
    </div>
</div>
@endsection
