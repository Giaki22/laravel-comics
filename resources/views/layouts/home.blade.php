@extends('components.base')

@section('content')
    <div class="background-library">
        <div class="content">
            <div class="library">
                @foreach ($comics as $comic)
                    <x-comic-card :comic="$comic"/>
                @endforeach
            </div>
        </div>
    </div>
@endsection

<style>
    .background-library{
        background-color: var(--secondary-color);
    }
    .library{
        display: flex;
        flex-flow: row wrap;
        width: 100%;
        color: var(--primary-text-color);
    }
</style>