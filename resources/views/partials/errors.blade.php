
@if (session()->has('errors'))
    <div class="alert alert-dismissable alert-danger fade show">
        <button name="" type="button" id="" class="close" data-dismiss="alert" aria-label="Close" role="button"><span aria-hidden="true">&times;</span></button>
        <strong>
            {!! session()->get('errors') !!}
        </strong>
    </div>
@endif

