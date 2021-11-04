@extends('layouts.app')


@section('access')

<div class="films-wrapper">
    @foreach ($films as $film)
        <div class="films-description">
            <p> {{ $film->title}} </p>
            <p> {{ $film->nationality}} </p>
            <p> {{ $film->date}} </p>
            <p> {{ $film->vote}} </p>
        </div>
    @endforeach
</div>

@endsection