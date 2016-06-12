{!! csrf_field() !!}
<div id="testingDiv1" class="clonedInput">
    <div class="form-group">
        <h4 id="reference" name="reference" class="heading-reference col-md-11 col-md-offset-1">Guest 1</h4><br>

        <label for="first_name" class="col-md-3 col-md-offset-1 control-label first_name_label">First Name</label>
        <div class="col-md-6 ">
            <input type="text" class="form-control first_name" name="first_name" placeholder="Chris" value="{{ old('first_name') }}"  >
        </div>
    </div>
    <div class="form-group">
        <label for="last_name" class="col-md-3 col-md-offset-1 control-label last_name_label">Last Name</label>
        <div class="col-md-6">
            <input type="text" class="form-control last_name" name="last_name" placeholder="Baucom" value="{{ old('last_name') }}"  required>
        </div>                       
    </div>
    <div class="form-group">
        <label for="email" class="col-md-3 col-md-offset-1 control-label email_label">E-Mail</label>
        <div class="col-md-6">
            <input type="email" class="form-control email" name="email" placeholder="chris@example.com" value="{{ old('email') }}" required>
        </div>
    </div>

</div><br>
<div id="add-del-buttons" class="form-group">
        <input type="button" id="btnAdd" value="[ + ] RSVP for another member of your party" class="btn btn-primary form-control"><br>
        <input type="button" id="btnDel" value="[ - ] remove the section above" class="btn btn-secondary form-control">
</div>
<!-- <div class="form-group padding-top">
    <label for="kids" class="col-md-3 col-md-offset-1 control-label">Kids?</label>
    <div class="col-md-2 col-md-offset-1">    
        <select class="form-control" name="kids" value="{{ old('kids') }}">
            <option>0</option>
            <option>1</option>
            <option>2</option>
            <option>3</option>
        </select>
    </div>
</div> -->
    <div class="form-group">
        <label for="message" class="col-md-3 col-md-offset-1 control-label message_label">Message</label>
        <div class="col-md-6">
            <textarea type="text" class="form-control message" name="message" placeholder="Can't wait!" value="{{ old('message') }}"></textarea>
        </div>
    </div>
<div class="form-group padding-top weddingButtons">
    <label for="vote" class="col-md-3 col-md-offset-1 control-label">Wedding *</label>
    <div class="col-md-4">
        <input class="weddingCheckbox form-control" name="vote" type="checkbox" value="1" checked data-off-active-cls="btn-warning" data-on-active-cls="btn-primary" data-group-cls="btn-group-justified" data-off-icon-cls="glyphicon-thumbs-down" data-on-icon-cls="glyphicon-thumbs-up">
    </div>
</div>
<br/>
<div class="form-group">
    <div class="center">
        <button type="submit" class="btn btn-primary">
            <i class="fa fa-btn fa-sign-in"></i>Send RSVP
        </button>
    </div>
</div>