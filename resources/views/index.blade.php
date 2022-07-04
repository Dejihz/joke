@extends('common.master')

@section('content')
{{--    MODAL TO INTRO PEOPLE--}}

<div class="jumbotron jumbotron-fluid h-100">
    <div class="container">
        <h1 class="display-4">Bet I can make you laugh</h1>
    </div>
    <div class="mx-auto" style="width: 200px;" id="category">

    </div>
</div>

<div class="jumbotron jumbotron-fluid h-100">
    <div class="container">
        <h1 class="display-4" id="joke"></h1>
    </div>
    <div class="container">
        <h1 class="display-4" id="setup"></h1>
    </div>
    <div class="container">
        <h1 class="display-4" id="delivery"></h1>
        <p class="lead" >Did that make you smile?</p>
    </div>
</div>


{{--<div class="jumbotron jumbotron-fluid h-100">--}}
{{--    <div class="container">--}}
{{--        <h1 class="display-4">{{$joke}}</h1>--}}
{{--        <p class="lead" >Did that make you smile?</p>--}}
{{--    </div>--}}
{{--</div>--}}

@endsection
