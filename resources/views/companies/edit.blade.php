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
                    <form method="post" action="{{ route('companies.update', [$company->id]) }}">
                        {{ csrf_field() }}
                        <input type="hidden" name="_method" value="put">
                        <div class="form-group">
                            <label for="company-name">Name <span class="required">*</span></label>
                            <input type="text" placeholder="name" id="company-name" required name="description"
                                spellcheck="false" class="form-control" value="{{ $company->name }}">
                        </div>
                        <div class="form-group">
                            <label for="company-content">Description</label>
                            <textarea type="text" placeholder="Add a description" style="resize: vertical"
                                id="company-content" name="description" rows="4" spellcheck="false"
                                class="form-control autosize-target text-left" value="{{ $company->description }}"> 
                            </textarea>
                        </div>
                        <div class="form-group">
                          <input type="submit" value="Submit Changes" class="btn btn-primary">
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
                        <li><a href="/companies/{{ $company->id }}">View Projects</a></li>
                        <li><a href="/companies">All Companies</a></li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <!-- /.row -->

</div>
<!-- /.container -->
@endsection