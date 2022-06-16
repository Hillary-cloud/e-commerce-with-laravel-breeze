<base href="/public">
@extends('layouts.base')
@section('content')
    
    <div class="container" style="padding: 30px 0;">
        <div class="row">
            <div class="col-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <div class="row">
                            <div class="col-md-6"><h4><b>Add Category</b></h4></div>
                            <div class="col-md-6"><a class="pull-right" href="{{route('admin.category')}}">All Categories</a></div>
                        </div>
                    </div>
                    <div class="panel-body">
                        <form action="{{route('admin.storeCategory')}}" method="POST">
                            @csrf
                        
                            <div class="form-group">
                                <label class="" for="">Category Name</label>
                                    <input type="text" class="form-control" name="category_name" placeholder="Category Name">
                                    @error('category_name')
                                        <p class="text-danger">{{$message}}</p>
                                    @enderror
                            </div>
                            <div class="form-group">
                                <label class="" for="">Slug</label>
                                    <input type="text" class="form-control" name="slug" placeholder="Slug">
                                    @error('slug')
                                        <p class="text-danger">{{$message}}</p>
                                    @enderror
                            </div>
                            <button class="btn btn-success">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection