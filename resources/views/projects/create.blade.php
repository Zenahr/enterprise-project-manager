@extends('layouts.app')
@section('content')
<!-- Page Content -->
<div class="container">
    <div class="row">
        <!-- Post Content Column -->
        <div class="col-lg-8">
            <div class="card my-4">
                <h1 class="card-header">Create a new Project</h1>
                <div class="card-body">
                    <form method="post" action="{{ route('projects.store') }}">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <label for="project-name">Name <span class="required">*</span></label>
                            <input type="text" placeholder="name" id="project-name" required name="name"
                                spellcheck="false" class="form-control" ></input>
                        </div>

                            <input type="hidden" name="company_id" value="{{ $company_id }}"></input>
                            @if($companies != null)
                            <div class="form-group">
                                <label for="company-content">Select Company</label>
                                <select name="company_id" class="form-control" id="">

                                @foreach($companies as $company)
                                <option value="{{ $company->id }}"> {{ $company->name }}</option>
                                @endforeach
                                </select>
                            </div>
                            @endif
                        <div class="form-group">
                            <label for="project-content">Description</label>
                            <textarea type="text" placeholder="Enter description" style="resize: vertical"
                                id="project-content" name="description" rows="4" spellcheck="false"
                                class="form-control autosize-target text-left"> 
                            </textarea>
                        </div>
                        <div class="form-group">
                          <input type="submit" value="Add new project" class="btn btn-primary">
                        </div>
                   </form>
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
                        <li><a href="/projects">My Projects</a></li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <!-- /.row -->

</div>
<!-- /.container -->
@endsection