@extends('layouts.app')
@section('content')
<div class="col-md-6 mx-auto col-lg-6">
    <div class="card ">
        <div class="card-header text-center bg-primary text-white">
            <h3>Companies</h3>
        </div>
        <div class="card-body">
            <!-- <h5 class="card-title">Special title treatment</h5> -->
            <ul class="list-group list-striped">
                @foreach($companies as $company)
                <li class="list-group-item"> <a href="/companies/{{ $company->id }}">{{ $company->name }}</a></li>
                @endforeach
            </ul>
        </div>
        <!-- <div class="card-footer text-muted">
            2 days ago
        </div> -->
    </div>
</div>
@endsection