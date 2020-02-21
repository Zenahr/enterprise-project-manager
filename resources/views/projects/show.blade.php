@extends('layouts.app')
@section('content')
<div class="jumbotron">
    <h1 class="display-3">{{ $project->name }}</h1>
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

            <div class="card my-4 mb-4">
                <h1 class="card-header">Join the Conversation</h1>
                <div class="card-body">
                    <form method="post" action="{{ route('comments.store') }}">
                        {{ csrf_field() }}

                        <input type="hidden" name="commentable_type" value="App\Project">
                        <input type="hidden" name="commentable_id" value="{{$project->id}}">

                        <div class="form-group">
                            <label for="comment-content">Comment</label>
                            <textarea type="text" placeholder="Enter comment" style="resize: vertical"
                                id="comment-content" name="body" rows="4" spellcheck="false"
                                class="form-control autosize-target text-left" required>
                            </textarea>
                        </div>
                        <div class="form-group">
                            <label for="comment-content">Url (proof of finished work)</label>
                            <textarea type="text" placeholder="Enter URL or screenshot" style="resize: vertical"
                                id="comment-content" name="url" rows="4" spellcheck="false"
                                class="form-control autosize-target text-left" required>
                            </textarea>
                        </div>
                        <div class="form-group">
                            <input type="submit" value="Add Comment" class="btn btn-primary">
                        </div>
                    </form>
                </div>



                <!-- Fluid width widget -->
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">
                            <span class="glyphicon glyphicon-comment"></span> 
                            Recent Comments
                        </h3>
                    </div>
                    <div class="panel-body">
                        <ul class="media-list">
                            @foreach($project->comments as $comment)
                            <li class="media">
                                <div class="media-left">
                                    <img src="http://placehold.it/60x60" class="img-circle">
                                </div>
                                <div class="media-body">
                                    <h4 class="media-heading">
                                        <a href="user/{{ $comment->user->id }}">{{ $comment->user->first_name }}
                                            {{ $comment->user->last_name }}
                                            {{ $comment->user->email }} </a>
                                        <br>
                                        <p>created at {{ $comment->created_at }}</p>
                                    </h4>
                                    <p>
                                        {{ $comment->body }}
                                    </p>
                                    Proof:
                                    <p>
                                        {{ $comment->url }}
                                    </p>
                                </div>
                            </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
                <!-- End fluid width widget -->

            </div>
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