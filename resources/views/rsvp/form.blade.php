{!! csrf_field() !!}

<div class="form-group">
    <h4 class="col-md-8 col-md-offset-2">Guest 1</h4><br>
    <label for="first_name1" class="col-md-3 col-md-offset-1 control-label">First Name *</label>
    <div class="col-md-6 ">
        <input type="text" class="form-control" name="first_name1" value="{{ old('first_name1') }}" >
    </div>
</div>
<div class="form-group">
    <label for="last_name1" class="col-md-3 col-md-offset-1 control-label">Last Name *</label>
    <div class="col-md-6">
        <input type="text" class="form-control" name="last_name1" value="{{ old('last_name1') }}" >
    </div>                       
</div>
<div class="form-group">
    <label for="email" class="col-md-3 col-md-offset-1 control-label">E-Mail *</label>
    <div class="col-md-6">
        <input type="email" class="form-control" name="email" value="{{ old('email') }}">
    </div>
</div>
<div class="form-group">
    <label for="restrictions1" class="col-md-3 col-md-offset-1 control-label">Dietary Restrictions</label>
    <div class="col-md-6">
        <textarea type="text" class="form-control" name="restrictions1" value="{{ old('restrictions1') }}"></textarea>
    </div>
</div>

<div class="form-group">
    <h4 class="col-md-8 col-md-offset-2">Guest 2</h4><br>
    <label for="first_name2" class="col-md-3 col-md-offset-1 control-label">First Name</label>
    <div class="col-md-6">
        <input type="text" class="form-control" name="first_name2" value="{{ old('first_name2') }}">
    </div>
</div>
<div class="form-group">
    <label for="last_name2" class="col-md-3 col-md-offset-1 control-label">Last Name</label>
    <div class="col-md-6">
        <input type="text" class="form-control" name="last_name2" value="{{ old('last_name2') }}">
    </div>                       
</div>
<div class="form-group">
    <label for="restrictions2" class="col-md-3 col-md-offset-1 control-label">Dietary Restrictions</label>
    <div class="col-md-6">
        <textarea type="text" class="form-control" name="restrictions2" value="{{ old('restrictions2') }}"></textarea>
    </div>
</div>  

<div class="form-group padding-top">
    <label for="kids" class="col-md-3 col-md-offset-1 control-label">Kids?</label>
    <div class="col-md-2 col-md-offset-1">    
        <select class="form-control" name="kids" value="{{ old('kids') }}">
            <option>0</option>
            <option>1</option>
            <option>2</option>
            <option>3</option>
        </select>
    </div>
</div>
<div class="form-group padding-top weddingButtons">
    <label for="vote" class="col-md-3 col-md-offset-1 control-label">Wedding *</label>
    <div class="col-md-4">
        <input class="weddingCheckbox form-control" name="vote" type="checkbox" value="1" checked data-off-active-cls="btn-warning" data-on-active-cls="btn-primary" data-group-cls="btn-group-justified" data-off-icon-cls="glyphicon-thumbs-down" data-on-icon-cls="glyphicon-thumbs-up">
    </div>
</div>
<!-- <div class="form-group">
    <label class="col-md-3 col-md-offset-1 control-label">Saturday Brunch</label>
    <div class="col-md-4">
        <input class="saturdayCheckbox" type="checkbox" data-group-cls="btn-group-justified" data-off-icon-cls="glyphicon-thumbs-down" data-on-icon-cls="glyphicon-thumbs-up">
    </div>
</div> -->
<!-- 					<div class="recaptcha section">
	<div class="g-recaptcha" data-sitekey="6LcGKRwTAAAAAC-UZ4x9HmMLJWaGn-J3YUC8fYp6"></div>			      
</div> -->
<br/>
<div class="form-group">
    <div class="col-md-8 col-md-offset-2">
        <button type="submit" class="btn btn-primary">
            <i class="fa fa-btn fa-sign-in"></i>RSVP
        </button>
    </div>
</div>