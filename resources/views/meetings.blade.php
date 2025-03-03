@extends('layouts.navbar')

<?php use App\Http\Controllers\MeetingsController; ?>

<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        @section('title', 'Meetings')
    
        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>
        
        <!-- Styles -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <link href="{{ asset('css/master.css?v=').time() }}" rel="stylesheet">
        <link href="{{ asset('css/meetings.css') }}" rel="stylesheet"> 
    </head>

    <body>
        @section('navbar')
            @parent
        @stop

        @section('content')
            <div id="meetingsbar">
                <div class="row pt-2 pl-5 mainbar">
                    <div class="col-sm-12">
                        <h1>Meetings! - {{ $meeting_day }}</h1>
                        <div class="thin-hr mb-4"></div><br>
                        <div class="row">
                            <div class="col-sm-auto d-block">
                                <div id="btn-group-bar" class="btn-group" role="group" aria-label="Basic example">
                                    <a href="/meetings" class="btn btn-xs btn-starter pull-left">All</a><br>
                                    <a href="/meetings/filter/Monday" class="btn btn-xs btn-info pull-left">Mo</a><br>
                                    <a href="/meetings/filter/Tuesday" class="btn btn-xs btn-info pull-left">Tu</a><br>
                                    <a href="/meetings/filter/Wednesday" class="btn btn-xs btn-info pull-left">We</a><br>
                                    <a href="/meetings/filter/Thursday" class="btn btn-xs btn-info pull-left">Th</a><br>
                                    <a href="/meetings/filter/Friday" class="btn btn-xs btn-info pull-left">Fr</a><br>
                                    <a href="/meetings/filter/Saturday" class="btn btn-xs btn-info pull-left">Sa</a><br>
                                    <a href="/meetings/filter/Sunday" class="btn btn-xs btn-info pull-left">Su</a><br>
                                    <a href="/meetings/filter/zoom" class="btn btn-xs btn-info pull-left">Zoom</a><br>
                                </div>
                            </div>
                            <!--<div class="col-sm-auto d-none d-md-block">
                                <div class="btn-group" role="group" aria-label="Basic example">
                                    <a href="/meetings/filter/daily" class="btn btn-xs btn-info pull-right">In-Person</a><br>
                                    <a href="/meetings/filter/mon" class="btn btn-xs btn-info pull-left">Online</a><br>
                                </div>            
                            </div>
                            <div class="col-sm-auto d-none d-lg-none d-xl-block">
                                <div class="btn-group" role="group" aria-label="Basic example">
                                    <a href="/meetings/filter/mon" class="btn btn-xs btn-info pull-left">Beginner</a><br>
                                    <a href="/meetings/filter/daily" class="btn btn-xs btn-info pull-right">Discussion</a><br>
                                    <a href="/meetings/filter/mon" class="btn btn-xs btn-info pull-left">Ticket</a><br>
                                    <a href="/meetings/filter/daily" class="btn btn-xs btn-info pull-right">Big Book</a><br>
                                    <a href="/meetings/filter/mon" class="btn btn-xs btn-info pull-left">12 & 12</a><br>
                                    <a href="/meetings/filter/daily" class="btn btn-xs btn-info pull-right">Speaker</a><br>
                                </div>            
                            </div>-->
                        </div>
                    </div>
                </div>
            </div>

    <!-- Checkboxes
    First argument : name
    Second argument : value
    Third argument : checked or not checked this takes: true or false
    Fourth argument : additional attributes (e.g., checkbox css classe) -->

        <div class="row ml-5">
            @foreach ($meetings as $meeting)
                <div class="card opacity-85 mr-3 mb-3">
                    <!-- <img class="card-img-top" src="{{url('/images/holding-hands.jpg')}}" alt="Card image cap"> -->
                    <div class="card-body card-shadow">
                        <h5 class="card-title">{{ $meeting->name }}</h5>                        
                        <ul class="fa-ul card-text">
                            <!-- <li>{{ $meeting->type }}</li> -->
                            <li><i class="far fa-calendar-alt fa-fw" aria-hidden="true"></i>&nbsp; {{ $meeting->days }}</li>
                            <li><i class="far fa-clock fa-fw" aria-hidden="true"></i>&nbsp; {{ $meeting->time }}</li> 
                            <li><i class="fas fa-map-marker-alt fa-fw" aria-hidden="true"></i>&nbsp; {{ $meeting->address }}</li>
                            <li><i class="far fa-empty-set fa-fw" aria-hidden="true"></i>&nbsp; {{ $meeting->city }}, {{ $meeting->state }} {{ $meeting->zip }}</li>
                        </ul>
                        <a href="#" class="show-button btn btn-primary">Show up, Show out!</a>
                    </div>
                </div>
            @endforeach
        </div>
        @stop     
    </body>
</html>