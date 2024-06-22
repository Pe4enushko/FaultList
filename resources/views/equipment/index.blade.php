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
<div class="m-3 p-3 container-fluid">
    <?php
        $colCount = 6;    
    ?>
    @foreach ($data as $item)
    <?php
        $colCount -= 1;
        if ($colCount == 5) 
        {
            echo '<div class="row">';
        }
    ?>
    <div class="col-2">
        @include('cards.equipment')
    </div>
    <?php
        if ($colCount <= 0) 
        {
            echo '</div>';
            $colCount = 6;
        }
    ?>
    @endforeach
</div>
@endsection
