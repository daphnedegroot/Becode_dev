@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row mt-1">
            <!-- Navbar -->
            <div class="col-sm-8">

            </div>
        </div>
        <!-- Buttons -->
        <div class="row welcome justify-content-center">
            <h1>Welcome Username !</h1>
        </div>
        <div class="row mt-5 justify-content-center">
            <a class="draw btn btn-lg" href="{{ route('game') }}">{{ __("Let's Draw") }}</a>
        </div>
        <div class="row mt-5 justify-content-center">
            <button class="btn private" type="button" data-toggle="modal" data-target="#myModal">Create Private Room</button>
        </div>
    </div>
    <!-- Modal -->
    <div class="container">
        <div class="row">
            <div class="modal fade" id="myModal" role="dialog">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <div class="modal-close">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                        </div>
                        <div class="modal-title mx-auto">
                            <h4 class="title">Create Private Room</h4>
                        </div>
                        <div class="model-input mx-auto">
                            <input class="input" type="text" placeholder="  Type in username...">
                            <button class="btn input-button" type="button">+</button>
                        </div>
                        <div class="users">
                            <p>Player 1</p>
                        </div>
                        <div class="modal-buttons d-flex justify-content-center mt-5">
                            <button type="button" class="btn m-button mr-1">Invite</button>
                            <button type="button" class="btn m-button ml-1" data-dismiss="modal">Cancel</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{--All content here!!!!!--}}

{{--<div class="container">--}}
    {{--<div class="row justify-content-center">--}}
        {{--<div class="col-md-8">--}}
            {{--<div class="card">--}}
                {{--<div class="card-header">Dashboard</div>--}}

                {{--<div class="card-body">--}}
                    {{--@if (session('status'))--}}
                        {{--<div class="alert alert-success" role="alert">--}}
                            {{--{{ session('status') }}--}}
                        {{--</div>--}}
                    {{--@endif--}}

                    {{--You are logged in!--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</div>--}}
{{--</div>--}}
@endsection
