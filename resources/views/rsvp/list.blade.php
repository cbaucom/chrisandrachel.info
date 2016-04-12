@extends('layouts.app')
@section('nav-links')
<ul class="nav navbar-nav">
    <li class="dropdown"><a href="{{ url('/') }}" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Our Wedding</a>
        <ul class="dropdown-menu">
            <a href="#ourstory">Our Story</a>
            <a href="#ourwedding">Our Wedding</a>
            <a href="#otherevents">Other Events</a>
            <a href="#weddingparty">Wedding Party</a>
        </ul>
    </li>
    <li><a href="{{ url('/details') }}">Details</a></li>
    <li><a href="{{ url('/photos') }}">Photos</a></li>
    <li><a href="{{ url('/registry') }}">Registry</a></li>
    <li><a href="{{ url('/rsvp') }}">RSVP</a></li>
</ul>
@endsection
@section('content')
<div class="container">
    <div class="row rsvp-list">
        <div class="col-md-10 col-md-offset-1">
                <div class="padding-top">
                    <h1>RSVP List</h1>
                    <div class="item-separator"></div>     
                        @foreach ($rsvps as $rsvp)
<!--                             <div class="row">
                              <h5 class="col-md-3">{{ $rsvp->first_name1 }}{{ $rsvp->last_name1 }}</h5>
                              <h5 class="col-md-1">{{ $rsvp->email }}</h5>
                              <p class="col-md-2">{{ $rsvp->restrictions1 }}</p>
                              <h5 class="col-md-2">{{ $rsvp->first_name2 }}{{ $rsvp->last_name2 }}</h5>
                              <p class="col-md-2">{{ $rsvp->restrictions2 }}</p>
                              <h5 class="col-md-1">{{ $rsvp->kids }}</h5>
                              <h5 class="col-md-1">{{ $rsvp->vote }}</h5>
                            </div> -->

                            <div class="table-responsive">
                              <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Guest1</th>
                                        <th>Guest2</th>
                                        <th>Email</th>
                                        <th>G1 Restrictions</th>
                                        <th>G2 Restrictions</th>
                                        <th>Kids</th>
                                        <th>Attending</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>{{ $rsvp->id }}</td>
                                        <td>{{ $rsvp->first_name1 }}{{ $rsvp->last_name1 }}</td>
                                        <td>{{ $rsvp->first_name2 }}{{ $rsvp->last_name2 }}</td>
                                        <td>{{ $rsvp->email }}</td>
                                        <td>{{ $rsvp->restrictions1 }}</td>
                                        <td>{{ $rsvp->restrictions2 }}</td>
                                        <td>{{ $rsvp->kids }}</td>
                                        <td>{{ $rsvp->vote }}</td>
                                    </tr>
                                </tbody>
                              </table>
                            </div>
                        @endforeach               
                </div>
        	</div>
        </div>
    </div>
</div>

@endsection
