<div class="comic">
    <img src="{{$comic['thumb']}}" alt="">
    <h3> {{$comic['title']}} </h3>
</div>

<style>
    .comic{
        width: calc(100% / 6);
        display: flex;
        flex-flow: column nowrap;
        justify-content: center;
        padding: 10px;
        gap: 5px;
    }
</style>