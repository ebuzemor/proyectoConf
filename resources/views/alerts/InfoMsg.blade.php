@if(Session::has('message-info'))
	<div class="alert alert-info alert-dismissible" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span>
        </button>
        <strong>{{Session::get('message-info')}}</strong>
    </div>
@endif