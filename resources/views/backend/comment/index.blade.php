@extends('layouts.my_app')

@section('my_content')
    @if(Session::has('success'))
    <div class="alert alert-success alert-dismissible">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
        <h5><i class="icon fas fa-check"></i> Alert!</h5>
        {{Session::get('success')}}
    </div>
    @endif
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">All Comments</h3>
            {{-- <a href="{{route('category.create')}}" class="btn btn-primary" style="float:right"> Add New Category</a> --}}
        </div>
        <!-- /.card-header -->
        <div class="card-body p-0">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Posts</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @php
                        $i=1;
                    @endphp
                    @foreach ($comments as $cat)
                        <tr>
                            <td>{{$i++}}</td>
                            <td>
                                {{$cat->post_id}}
                            </td>
                            <td>{{$cat->name}}</td>
                            <td>{{$cat->email}}</td>
                            <td>
                                @if ($cat->status ==1)
                                <span class="right badge badge-success">Active</span>
                                @else
                                    <span class="right badge badge-danger">In Active</span>
                                @endif
                            </td>
                            <td>
                                <form method="POST" action="{{route('comment.destroy', $cat->id)}}">
                                    @csrf
                                    @method('Delete')

                                    <a href="{{route('comment.edit', $cat->id)}}" class="btn btn-info">Edit</a>

                                    <button type="submit" class="btn btn-danger">Delete</button>
                                    
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <!-- /.card-body -->
    </div>
@endsection
