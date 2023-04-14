@extends('layouts.admin')

@section('content')
<div class="row">
    <div class="col-md-12 grid-margin">
      <div class="d-flex justify-content-between flex-wrap">
        <div class="d-flex align-items-end flex-wrap">
          <div class="me-md-3 me-xl-5">
            <h2>Categories</h2>
          </div>
        </div>
        <div class="d-flex justify-content-between align-items-end flex-wrap">
          <a href="{{ route('category.create') }}" class="btn btn-success mt-2 mt-xl-0">Add Category</a>
        </div>
      </div>
    </div>
@endsection