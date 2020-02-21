@extends('layouts.app')
@section('content')
<div class="jumbotron">
    <h1 class="display-6">{{ $project->name }}</h1>
    <p class="lead">{{ $project->description }}</p>
</div>

<!-- Page Content -->
<div class="container">
    <div class="row">
        <!-- Post Content Column -->
        <div class="col-lg-8">
            <div class="card my-4">
                <h1 class="card-header">Projects</h1>
                <div class="card-body">
                    {{-- @foreach($project->projects as $project)
                    <li class="list-group-item">
                        <h4>{{ $project->name }}</h4>
                    </li>
                    <li class="list-group-item mb-4">
                        <h6>{{ $project->description }}</h6>
                        <a name="" id="" class="btn btn-primary" href="/project/{{ $project->id }}" role="button">View
                            Details</a>
                    </li>
                    @endforeach --}}
                </div>
            </div>
            @include('partials.comments')
        </div>

        <!-- Sidebar Widgets Column -->
        <div class="col-md-4">

            <!-- Side Widget -->
            <div class="card my-12">
                <h5 class="card-header">CRUD Actions</h5>
                <div class="card-body">
                    <ol class="list-unstyled">
                        <li><a href="/projects">All Projects</a></li>
                        <li><a href="/projects/{{ $project->id  }}/edit">Edit</a></li>
                        <li><a href="/projects">My Projects</a></li>
                        <li><a href="/projects/create">Create New Project</a></li>
                        <li><a href="/projects/create" class="btn btn-primary">Add Project</a></li>
                        <hr>
                        @if($project->user_id == Auth::user()->id)
                        <li>
                            <a href="#" onclick="
              var result = confirm('Are you sure you wish to delete this Project?');
                  if( result ){event.preventDefault(); document.getElementById('delete-form').submit();}">
                                Delete
                            </a>
                            <form id="delete-form" action="{{ route('projects.destroy',[$project->id]) }}" method="POST"
                                style="display: none;">
                                <input type="hidden" name="_method" value="delete">
                                {{ csrf_field() }}
                            </form>
                        </li>
                        @endif
                        <!-- <li><a href="">Add Member</a></li> -->
                    </ol>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection