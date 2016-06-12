<!-- Modal -->
<div class="modal fade" id="rsvpModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">RSVP</h4>
      </div>
      <div class="modal-body">
        @include('errors')
        {!! Form::open(['method' => 'POST', 'uses'=>'RsvpController@store', 'class'=>'bootstrap-modal-form rsvp-form form-horizontal']) !!}
            @include('rsvp.form')
            @include('flash')
        {!! Form::close() !!}
        </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>