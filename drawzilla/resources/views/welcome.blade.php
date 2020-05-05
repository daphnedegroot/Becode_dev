@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row mt-1">
            <button type="button" class="about btn btn-sm">?</button>
        </div>
    </div>
    <div class="container">
        <div class="row d-flex justify-content-center mt-3">
            <div class="title">
                <h1>Doodle This</h1>
            </div>
        </div>
        <div class="row d-flex justify-content-center mt-3">
            <img src="{{ asset('images/pencil256px.png')}}" alt="drawing-utencils">
        </div>
        <div class="row d-flex justify-content-center mt-4">
            <p>Test your doodling skills against your friends<br>or play with people all over the world!</p>
        </div>
        <div class="row d-flex justify-content-center mt-3">

            <a class="draw btn btn-lg" href="{{ route('login') }}">{{ __("Let's Draw") }}</a>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row d-flex align-items-end mt-4">
            {{--<div class="credit">Icons made by <a class="link-credit" href="https://www.flaticon.com/authors/photo3idea-studio" title="photo3idea_studio">photo3idea_studio</a> from <a class="link-credit" href="https://www.flaticon.com/" title="Flaticon">www.flaticon.com</a> is licensed by <a class="link-credit" href="http://creativecommons.org/licenses/by/3.0/" title="Creative Commons BY 3.0" target="_blank">CC 3.0 BY</a></div>--}}
        </div>
    </div>
@endsection