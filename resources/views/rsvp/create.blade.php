   <div id="rsvp" class="cd-scrolling-bg cd-color-2">
        <div class="cd-container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2">

                        <div>
                        @include('errors')
                        {!! Form::open(['method' => 'POST', 'action'=>'RsvpController@store', 'class'=>'rsvp-form form-horizontal']) !!}
                            @include('rsvp.form')
                        {!! Form::close() !!}
                         </div>
                        <div id="countdown" class="center">
                            <p class="days">00</p>
                            <p class="timeRefDays">days until the wedding!</p>
                        </div>     

                </div>
            </div>
            <p class="top center"><a class="btn scroll" href="#december-9-2016">Back to top</a></p>
        </div> <!-- cd-container -->
    </div> <!-- cd-scrolling-bg -->