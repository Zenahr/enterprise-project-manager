@extends('layouts.app')
@section('content')
<!-- Page Content -->
<div class="container">
    <div class="row">
        <!-- Post Content Column -->
        <div class="col-lg-8">
            <div class="card my-4">
                <h1 class="card-header">Create a Company</h1>
                <div class="card-body">
                    <form method="post" action="{{ route('companies.store') }}">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <label for="company-name">Name <span class="required">*</span></label>
                            <input type="text" placeholder="name" id="company-name" required name="name"
                                spellcheck="false" class="form-control" >
                        </div>
                        <div class="form-group">
                            <label for="company-content">Description</label>
                            <textarea type="text" placeholder="Enter description" style="resize: vertical"
                                id="company-content" name="description" rows="4" spellcheck="false"
                                class="form-control autosize-target text-left"> 
                            </textarea>
                        </div>
                        <div class="form-group">
                          <input type="submit" value="Add new company" class="btn btn-primary">
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
                        <li><a href="/companies">My Companies</a></li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <!-- /.row -->

</div>
<!-- /.container -->
@endsection