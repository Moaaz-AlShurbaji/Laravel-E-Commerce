@extends('layouts.admin')

@section('content')
<div class="row">
    <div class="col-md-12 grid-margin">
      <div class="d-flex justify-content-between flex-wrap">
        <div class="d-flex align-items-end flex-wrap">
          <div class="me-md-3 me-xl-5">
            <h2>Add Category</h2>
          </div>
        </div>
        <div class="d-flex justify-content-between align-items-end flex-wrap">
          <a href="{{ route('category') }}" class="btn btn-success mt-2 mt-xl-0">Back</a>
        </div>
    </div>
</div>

<div class="container">
    <form method="post" action="{{ url('admin/category') }}" enctype="multipart/form-data">
        @csrf
        <div class="row">

            <div class="col-md-6 mb-3">
                <label for="category_name" class="form-label">Category Name</label>
                <input type="text" name="name" class="form-control rounded" id="category_name" aria-describedby="">
            </div>

            <div class="col-md-6 mb-3">
                <label for="slug" class="form-label">Slug</label>
                <input type="text" name="slug" class="form-control rounded" id="slug">
            </div>

            <div class="col-md-12 mb-3">
                <label for="description" class="form-label">Description</label>
                <input type="text" name="description" class="form-control rounded" id="description">
            </div>

            <div class="col-md-6 mb-3">
                <label for="image" class="form-label">Image</label>
                <input class="form-control bg-secondary" name="image" type="file" id="image">
            </div>

            <div class="col-md-6 mb-3">
                <label for="status" class="form-label">Status</label><br/>
                <input name="status" type="checkbox" id="status">
            </div>

            <div class="col-md-12 mb-3">
                <h4>SEO Tags</h4>
            </div>
            <div class="col-md-12 mb-3">
                <label for="meta_title" class="form-label">Meta Title</label>
                <input type="text" name="meta_title" class="form-control rounded" id="meta_title">
            </div>

            <div class="col-md-12 mb-3">
                <label for="meta_keyword" class="form-label">Meta Keyword</label>
                <textarea type="text" name="meta_keyword" class="form-control rounded" id="meta_keyword"></textarea>
            </div>

            <div class="col-md-12 mb-3">
                <label for="meta_description" class="form-label">Meta Description</label>
                <textarea type="text" name="meta_description" class="form-control rounded" id="meta_description"></textarea>
            </div>

            <div>
                <button type="submit" class="btn btn-primary float-end">Submit</button>
            </div>
            
        </div>
      </form>
    
</div>
@endsection