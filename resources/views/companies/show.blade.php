@extends('layouts.app')
@section('content')
<div class="jumbotron">
    <h1 class="display-3">{{ $company->name }}</h1>
    <p class="lead">{{ $company->description }}</p>
</div>
@endsection