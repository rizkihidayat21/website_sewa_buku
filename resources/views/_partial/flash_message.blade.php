@if (Session::has('flash_message'))
    <div class="alert alert-success {{ Session::has('penting') ? 'alert-important' : '' }}" role="alert">
        {{ Session::get('flash_message') }}
    </div>
@elseif ((Session::has('flash_message_update')))
    <div class="alert alert-primary {{ Session::has('penting') ? 'alert-important' : '' }}" role="alert">
        {{ Session::get('flash_message_update') }}
    </div>
@elseif (Session::has('flash_message_hapus'))
    <div class="alert alert-danger {{ Session::has('penting') ? 'alert-important' : '' }}" role="alert">
        {{ Session::get('flash_message_hapus') }}
    </div>
@endif