@extends('layouts.game')

@section('content')
<div class="container-fluid">
    <div class="row mt-3 mb-3">
        <img class="mx-auto" src="{{ asset('images/pencil64px.png') }}" alt="logo">
    </div>
    <div class="row ml-1 mr-1">
        <div class="col-lg-3 col-md-3 col-sm-3">
            <button class="btn btn-block game_button mb-3">Vote Kick</button>
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 scoreboard">
                    <div class="card mt-3">
                        <h5 class="card-header">Scoreboard</h5>
                        <div class="score card-body">
                            <ul class="chat">
                                <li class="left clearfix my-4">User 1</li>
                                <li class="left clearfix mb-4">User 2</li>
                                <li class="left clearfix mb-4">User 3</li>
                                <li class="left clearfix mb-4">User 4</li>
                                <li class="left clearfix mb-4">User 5</li>
                                <li class="left clearfix mb-4">User 6</li>
                                <li class="left clearfix mb-4">User 7</li>
                                <li class="left clearfix ">User 8</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-6 col-md-6">
            <div class="row">
                <div class="col mx-3 rounds_timer text-center" id="timer">
                    <timer :time="prettyTime">test</timer>
                </div>
                <div class="col mx-3 hidden_word text-center">
                    <span>The word</span>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 mt-3">
                    <canvas id="canvas"></canvas>
                </div>
            </div>
        </div>
        <div class="col-3">
            <button class="btn game_button btn-block mb-3">Leave Game</button>
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 chats" id="app">
                    <div class="card mt-3">
                        <h5 class="card-header">Chat Room</h5>
                        <div class="card-body" v-chat-scroll>

                            <chat-messages :messages="messages"></chat-messages>
                        </div>
                        <div class="card-footer">
                            <chat-form
                                    v-on:messagesent="addMessage"
                                    :user="{{ Auth::user() }}"
                            ></chat-form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
            {{--<li class="list-group-item active">Chat Room</li>--}}
            {{--<div class="badge badge-pill badge-primary">@{{ typing }}</div>--}}
            {{--<ul class="list-group" v-chat-scroll>--}}
                {{--<game v-for="value, index in chat.message"--}}
                {{--:key=value.index--}}
                {{--:color= chat.color[index]--}}
                {{--:user = chat.user[index]--}}
                {{--:time = chat.time[index]--}}

                {{-->--}}
                    {{--@{{ value }}--}}
                {{--</game>--}}
            {{--</ul>--}}
            {{--<input class="form-control" type="text" placeholder="type in your answer here..." v-model="message" @keyup.enter="send">--}}
    </div>
</div>
    @endsection