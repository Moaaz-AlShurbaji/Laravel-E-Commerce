<div class="row">
    @if(session('message'))
        <div class="alert alert-success" role="alert">
            {{ session('message') }}
        </div>
    @endif
    <div class="card">
        <div class="card-header">
            <h2> Categories
                <a href="{{ route('category.create') }}" class="btn btn-success mt-2 mt-xl-0 float-end">Add Category</a>
            </h2>
        </div>
        <div class="card-body">
            <table class="table table-borderd table-striped">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($categories as $category)
                    <tr>
                        <td>{{ $category->id }}</td>
                        <td>{{ $category->name }}</td>
                        <td>{{ $category->status == '1' ? 'Hidden' : 'Visible' }}</td>
                        <td>
                            <a href="" class="btn btn-outline-success">Edit</a>
                            <a href="" class="btn btn-outline-danger">Delete</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            <div class="me-auto mt-3">
                {{ $categories->links() }}
            </div>
        </div>
    </div>

    

</div>    
