<div class="form-group {{ $errors->has('missing_item_id') ? 'has-error' : ''}}">
    <label for="missing_item_id" class="control-label">{{ 'Missing Item Id' }}</label>
    <input class="form-control" name="missing_item_id" type="number" id="missing_item_id" value="{{ isset($requestmissingitem->missing_item_id) ? $requestmissingitem->missing_item_id : ''}}" >
    {!! $errors->first('missing_item_id', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('user_id') ? 'has-error' : ''}}">
    <label for="user_id" class="control-label">{{ 'User Id' }}</label>
    <input class="form-control" name="user_id" type="number" id="user_id" value="{{ isset($requestmissingitem->user_id) ? $requestmissingitem->user_id : ''}}" >
    {!! $errors->first('user_id', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('missting_item_status_id') ? 'has-error' : ''}}">
    <label for="missting_item_status_id" class="control-label">{{ 'Missting Item Status Id' }}</label>
    <input class="form-control" name="missting_item_status_id" type="number" id="missting_item_status_id" value="{{ isset($requestmissingitem->missting_item_status_id) ? $requestmissingitem->missting_item_status_id : ''}}" >
    {!! $errors->first('missting_item_status_id', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('requested_at') ? 'has-error' : ''}}">
    <label for="requested_at" class="control-label">{{ 'Requested At' }}</label>
    <input class="form-control" name="requested_at" type="datetime-local" id="requested_at" value="{{ isset($requestmissingitem->requested_at) ? $requestmissingitem->requested_at : ''}}" >
    {!! $errors->first('requested_at', '<p class="help-block">:message</p>') !!}
</div>


<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Update' : 'Create' }}">
</div>
