
@if (session()->has('success'))
    <div class="alert alert-dismissable alert-success fade show">
        <button name="" type="button" id="" class="close" data-dismiss="alert" aria-label="Close" role="button"><span aria-hidden="true">&times;</span></button>
        <strong>
            {!! session()->get('success') !!}
        </strong>
    </div>
@endif