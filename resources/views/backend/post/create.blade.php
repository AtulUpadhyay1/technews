@extends('layouts.my_app')

@section('my_content')
    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title">Add Post</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form method="post" action="{{route('posts.store')}}" enctype="multipart/form-data">
            @csrf
            <div class="card-body">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Category</label>
                            <select name="category" class="form-control">
                                <option disabled selected>Select Category</option>
                                @foreach ($category as $cat)
                                    <option value="{{$cat->id}}">{{$cat->name}}</option> 
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Post Title</label>
                            <input type="text" name="post_title" class="form-control" placeholder="Enter Category Name" required>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Short Description</label>
                            <textarea class="form-control" name="short_description" id="" cols="30" rows="10"></textarea>
                            
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Description</label>
                            <textarea class="form-control" name="description" id="" cols="30" rows="10"></textarea>
                        </div>
                    </div>
                    
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Post Image</label>
                            <input type="file" name="post_image " class="form-control" placeholder="Enter Category Name" required>
                        </div>
                    </div>

                    {{-- <div class="form-group row">
                        <label class="col-md-2 col-form-label">Photo</label>
                        <div class="col-md-10">
                            <div class="input-group" data-toggle="aizuploader" data-type="image" data-multiple="true">
                                <div class="input-group-prepend">
                                    <div class="input-group-text bg-soft-secondary font-weight-medium">Browse</div>
                                </div>
                                <div class="form-control file-amount">Choose File</div>
                                <input type="hidden" name="photo"  class="selected-files" >
                            </div>
                            <div class="file-preview box sm">
                            </div>
                        </div>
                    </div> --}}
                </div>
                
            </div>
            <!-- /.card-body -->

            <div class="card-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </form>
    </div>
@endsection