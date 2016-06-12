@extends('layouts.app')
@section('nav-brand')
    <h5 class="brand"><a class="navbar-brand" href="{{ url('/#december-9-2016') }}">
        Chris &amp; Rachel
    </a></h5>           
@stop
@section('nav-links')
<ul class="nav navbar-nav navbar-right">
    <li><a href="{{ url('/#story') }}">Our Story</a></li>
    <li class="devider-ulem show_1"></li> 
    <li><a href="{{ url('/#wedding') }}">Wedding Day</a></li>
    <li class="devider-ulem show_1"></li> 
    <li><a href="{{ url('/#travel') }}">Travel</a></li>
    <li class="devider-ulem show_1"></li> 
    <li><a href="{{ url('/#events') }}">Saturday Events</a></li>
    <li class="devider-ulem show_1"></li> 
    <li><a class="active" href="{{ url('/photos') }}">Photos</a></li>
    <li class="devider-ulem show_1"></li> 
    <li><a href="{{ url('/#registry') }}">Registry</a></li>
    <li class="devider-ulem show_1"></li> 
    <li><a href="{{ url('/#rsvp') }}" data-toggle="modal" data-target="#rsvpModal">RSVP</a></li>
</ul>
@stop
@section('content')
<div class="">
    <div class="row">
        <div class="col-md-12">
            <img src="images/image_roll_1600x9000.jpg" class="img-responsive">
        </div>
    </div>
</div>
@if (!empty($success))
      {!! flash()->success('Success!', 'RSVP successfully created!'); !!}
@endif
@include('rsvp.modal')

@endsection
