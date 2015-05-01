
@if (Session::has('message'))
    <div class="alert-box">
        {{{ Session::get('message') }}}
    </div>
@endif
