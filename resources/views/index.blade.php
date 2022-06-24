@extends('common.master')

@section('content')
{{--    MODAL TO INTRO PEOPLE--}}

<div class="jumbotron jumbotron-fluid h-100">
    <div class="container">
        <h1 class="display-4">{{$joke}}</h1>
        <p class="lead" >Did that make you smile</p>
    </div>
    <div class="mx-auto" style="width: 200px;">
        <button onClick="window.location.reload()" class="btn btn-primary btn-lg" >New Joke</button>
    </div>
</div>
@endsection
