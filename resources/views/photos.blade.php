@extends('layouts.app')
@section('nav-links')
<ul class="nav navbar-nav">
    <li class="dropdown"><a href="{{ url('/') }}" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Our Wedding</a>
        <ul class="dropdown-menu">
            <a href="./#ourstory">Our Story</a>
            <a href="./#ourwedding">Our Wedding</a>
            <a href="./#weddingparty">Wedding Party</a>
        </ul>
    </li>
    <li class="dropdown"><a href="{{ url('/details') }}" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Details</a>
        <ul class="dropdown-menu">
            <a href="details#accommodations">Accommodations</a>
            <a href="details#travel">Travel</a>
            <a href="details#todo">Things To Do</a>
        </ul>
    </li>
    <li class="active"><a href="{{ url('/photos') }}">Photos</a></li>
    <li><a href="{{ url('/registry') }}">Registry</a></li>
    <li><a href="{{ url('/rsvp') }}">RSVP</a></li>
</ul>
@endsection
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="main-image">
                <img src="images/image_roll_1600x9000.jpg" class="img-responsive center-block">
            </div>
        </div>
    </div>
</div>
@endsection
