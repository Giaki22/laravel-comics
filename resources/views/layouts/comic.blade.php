@extends('components.base')

@section('content')
<div class="content">
    <h1>{{$selectedComic['title']}}</h1>
    <img src="{{$selectedComic['thumb']}}" alt="">
    <p>{{$selectedComic['description']}}</p>
</div>
@endsection