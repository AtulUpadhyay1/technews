@extends('layouts.my_app')

@section('my_content')
    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title">Udate Post</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form method="post" action="{{route('posts.update', $post->id)}}" enctype="multipart/form-data">
            @method('PUT')
            @csrf
            <div class="card-body">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Category</label>
                            <select name="category" class="form-control">
                                <option disabled selected>Select Category</option>
                                @foreach ($category as $cat)
                                    <option value="{{$cat->id}}" @if ($cat->id == $post->category_id) selected @endif>{{$cat->name}}</option> 
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Post Title</label>
                            <input type="text" name="post_title" class="form-control" placeholder="Enter Category Name" value="{{$post->title}}" required>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Short Description</label>
                            <textarea class="form-control" name="short_description" id="" cols="30" rows="10">{{$post->sort_description}}</textarea>
                            
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Description</label>
                            <textarea class="form-control" name="description" id="" cols="30" rows="10">{{$post->description}}</textarea>
                        </div>
                    </div>
                    
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Post Image</label>
                            <input type="file" name="post_image" class="form-control" placeholder="Enter Category Name">
                        </div>

                        <img src="{{asset('/posts_image/'.$post->images)}}">
                    </div>
                </div>
            </div>
            <!-- /.card-body -->

            <div class="card-footer">
                <button type="submit" class="btn btn-primary">Update</button>
            </div>
        </form>
    </div>
@endsection