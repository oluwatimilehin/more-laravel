@if(session()->has('flash_message'))
    <div class="Alert Alert--{{ucwords(session('flash_level'))}}">
        <h3> {{ session('flash_message') }}</h3>
    </div>
@endif