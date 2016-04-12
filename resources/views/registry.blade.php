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
    <li><a href="{{ url('/photos') }}">Photos</a></li>
    <li class="active"><a href="{{ url('/registry') }}">Registry</a></li>
    <li><a href="{{ url('/rsvp') }}">RSVP</a></li>
</ul>
@endsection
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="row">
                <div class="macys">
                    <a href="http://www.macys.com/registry/wedding/guest/?registryId=6579790"><img src="/images/macys.jpg" class="img-responsive center-block"></a>
                </div><br>
                <div class="potterybarn">
                    <a href="http://www.potterybarn.com/registry/3848307/registry-list.html"><img src="/images/pb.png" class="img-responsive center-block" style="border: 4px solid grey;"></a>
                </div><br>
                <div class="willamssonoma">
                    <a href="https://secure.williams-sonoma.com/registry/jxpnspc8jf/registry-list.html"><img src="/images/WS.jpg" class="img-responsive center-block"></a>
                </div><br>
                <div class="amazon">
                    <a href="https://www.amazon.com/wedding/registry/3C0XVJA32J2L8"><img src="/images/amazon.jpg" class="img-responsive center-block" style="border: 4px solid orange;"></a>
                </div><br>
            </div>
        </div>
    </div>
</div>
@endsection
