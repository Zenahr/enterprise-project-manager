@extends('layouts.app')
@section('content')
<div class="col-md-6 mx-auto col-lg-6">
    <div class="card ">
        <div class="card-header text-center bg-primary text-white">
            <h3>Projects</h3> <a class="btn btn-secondary" href="/projects/create">Create New</a>
        </div>
        <div class="card-body">
            <!-- <h5 class="card-title">Special title treatment</h5> -->
            <ul class="list-group list-striped">
                @foreach($projects as $project)
                <li class="list-group-item"> <a href="/projects/{{ $project->id }}">{{ $project->name }}</a></li>
                @endforeach
            </ul>
        </div>
        <!-- <div class="card-footer text-muted">
            2 days ago
        </div> -->
    </div>
</div>
@endsection