@extends('layouts.app')
@section('content')
<div class="jumbotron">
    <h1 class="display-3">{{ $company->name }}</h1>
    <p class="lead">{{ $company->description }}</p>
</div>
<!-- Page Content -->
<div class="container">
    <div class="row">
        <!-- Post Content Column -->
        <div class="col-lg-8">
            <div class="card my-4">
                <h1 class="card-header">Projects</h1>
                <div class="card-body">
                    @foreach($company->projects as $project)
                    <li class="list-group-item">
                        <h4>{{ $project->name }}</h4>
                    </li>
                    <li class="list-group-item mb-4">
                        <h6>{{ $project->description }}</h6>
                        <a name="" id="" class="btn btn-primary" href="/project/{{ $project->id }}" role="button">View
                            Details</a>
                    </li>
                    @endforeach
                </div>
            </div>


        </div>

        <!-- Sidebar Widgets Column -->
        <div class="col-md-4">

            <!-- Side Widget -->
            <div class="card my-4">
                <h5 class="card-header">CRUD Actions</h5>
                <div class="card-body">
                    <ol class="list-unstyled">
                        <li><a href="/companies/{{ $company->id  }}/edit">Edit</a></li>
                        <li><a href="">Delete</a></li>
                        <li><a href="">Add Member</a></li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <!-- /.row -->

</div>
<!-- /.container -->
@endsection