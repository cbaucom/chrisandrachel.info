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
    <li><a href="{{ url('/registry') }}">Registry</a></li>
    <li class="active"><a href="{{ url('/rsvp') }}">RSVP</a></li>
</ul>
@endsection
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="row">
                <form method="POST" action="rsvp" class="rsvp-form form-horizontal">
                	@include('errors')

                	@include('rsvp.form')
                </form>
<!-- 			    <form id="rsvp_form" class="form-horizontal" action="rsvp.php" method="POST">
			    	<div>
			    		
			    	</div>
			      <label for="name">Name:</label>
			      <input name="name" required><br />
			 
			      <label for="email">Email:</label>
			      <input name="email" type="email" required><br />
			      <div class="recaptcha section">
				      <div class="g-recaptcha" data-sitekey="6LcGKRwTAAAAAC-UZ4x9HmMLJWaGn-J3YUC8fYp6"></div>			      
			      </div>
			      <br/>
			      <input type="submit" value="Submit" class="btn btn-info">
			    </form>  
			    <script src='https://www.google.com/recaptcha/api.js'></script>   -->       
            </div>
        </div>
    </div>
</div>
@endsection
