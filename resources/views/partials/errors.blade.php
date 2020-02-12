
@if (isset($errors)&&count($errors) > 0)
    <div class="aler alert-dismissable alert-danger fade show">
        <button name="" type="button" id="" class="close" data-dismiss="alert" aria-label="Close" role="button"><span aria-hidden="true">&times;</span></button>
            @foreach ($errors->all() as $error)
                <li><strong>{{!! $error !!}}</strong></li>
            @endforeach
    </div>
@endif