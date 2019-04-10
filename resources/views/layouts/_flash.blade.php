@if (session()->has('flash_notification.message'))
    <div class="card">
    	<div class="card-body">
        <div class="alert alert-{{ session()->get('flash_notification.level') }}" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                {!! session()->get('flash_notification.message') !!}
        </div>
    </div>
</div>
@endif