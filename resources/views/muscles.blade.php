@extends('layouts.head')

<?php

$title = 'Exercices';
$icons = 'comments';

?>

<span class="goBack">
        <a href="{{ URL::previous() }}"><i class="fa fa-angle-left" style="color:#7FED72;"></i></a>
    </span>

@section('content')

    <header>
        <h3>{{ $title }}</h3>
        <i class="fa fa-{{ $icons }}" aria-hidden="true"></i>
    </header>

    <ul>

    @foreach($muscles as $m)
        <li><a href="/muscles/{{$m->id}}">{{$m->nom}}</a></li><br>
    @endforeach

    </ul>

    @include('layouts.footer')

@endsection