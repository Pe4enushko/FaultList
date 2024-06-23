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
    <div class="card-holder d-flex flex-wrap justify-content-evenly">
    @foreach ($data as $item)
        <div class="mx-0 my-2 py-2">
            @include('cards.equipment')
        </div>
    @endforeach
    </div>
</div>
@endsection
