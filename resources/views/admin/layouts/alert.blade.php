@if(session()->has('flash_message'))
<div class="alert alert-success"> {{ session()->get('flash_message') }}</div>
@endif

@if(session()->has('error'))
<div class="alert alert-danger"> {{ session()->get('flash_message') }}</div>
@endif