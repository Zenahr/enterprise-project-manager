@extends('layouts.app')
@section('content')
<div class="jumbotron">
    <h1 class="display-3">{{ $company->name }}</h1>
    <p class="lead">{{ $company->description }}</p>
</div>

<div class="container">
    <h1>Projects</h1>
    <ul class="list-group list-striped">
        @foreach($company->projects as $project)
        <li class="list-group-item">
            <h4>{{ $project->name }}</h4>
        </li>
        <li class="list-group-item mb-4">
            <h6>{{ $project->description }}</h6>
        </li>
        <a name="" id="" class="btn btn-primary" href="/project/{{ $project->id }}" role="button">View Details</a>
        @endforeach
    </ul>
</div>




<div class="col-sm-3 col-md-3 col-lg-3">
        <ol class="list-unstyled">
        <h4>CRUD Actions</h4>
            <li><a href="">Edit</a></li>
            <li><a href="">Delete</a></li>
            <li><a href="">Add Member</a></li>
        </ol>
</div>

@endsection