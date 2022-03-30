@extends('layouts.my_app')

@section('my_content')
    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title">Update Category</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form method="POST" action="{{route('category.update', $category->id)}}">
            @method('PUT')
            @csrf
            <div class="card-body">
                <div class="form-group">
                    <label for="exampleInputEmail1">Category Name</label>
                    <input type="text" name="categoryName" class="form-control" placeholder="Enter Category Name" value="{{$category->name}}" required>
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Status</label>
                    <select name="status" class="form-control">
                        <option value="1" @if($category->status == 1) selected @endif>Active</option>
                        <option value="0" @if($category->status == 0) selected @endif>In Active</option>
                    </select>
                </div>
            </div>
            <!-- /.card-body -->

            <div class="card-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </form>
    </div>
@endsection