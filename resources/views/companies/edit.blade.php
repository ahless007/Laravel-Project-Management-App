@extends('layouts.app')

@section('content')

      <div class="col-md-9 col-lg-9">
        
        <div class="container">
            <div class="row bg-white">
                <div class="col-md-12">
                <form method="post" action="{{ route('companies.update',[$company->id])}}">
                    {{ csrf_field() }}

                    <input type="hidden" name="_method" value="put">

                    <div class="form-group">
                        <label for="company-name">Name<span class="required">*</span></label>
                        <input placeholder="Enter name" id="company-name" class="form-control" required name="name" spellcheck="false" value="{{ $company->name }}">
                    </div>
                    <div class="form-group">
                        <label for="company-description">Description<span class="required">*</span></label>
                        <textarea style="resize:vertical" id="company-description" class="form-control autosize-target text-left" required name="description" rows="5" spellcheck="false">{{ $company->description }}</textarea>
                    </div>
                    <div class="form-group">
                        <input type="Submit" class="btn btn-primary" value="Submit">
                    </div>

                </div>
            </div>
            <hr>
        </div> <!-- /container -->

    </div>

    <div class="col-md-3 col-lg-3">
        <div class="card">
            <div class="card-header text-white bg-primary">Actions</div>
            <ul class="list-group">
            <li class="list-group-item list-group-item-action"><a href="/companies/{{ $company->id }}">View companies</a></li>
            <li class="list-group-item list-group-item-action"><a href="/companies">All companies</a></li>
            </ul>
        </div>
        
        {{-- <div class="card">
            <div class="card-header text-white bg-primary">Members</div>
            <ul class="list-group">
                <li class="list-group-item list-group-item-action"><a href="#">Edit</a></li>
                <li class="list-group-item list-group-item-action"><a href="#">Delete</a></li>
                <li class="list-group-item list-group-item-action"><a href="#">Add new member</a></li>
            </ul>
        </div> --}}
    </div>

@endsection