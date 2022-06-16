<base href="/public">
@extends('layouts.base')
@section('content')
<style>
        nav svg{
            height: 20px;
        }
        nav .hidden{
            display: block !important;
        }
</style>
    <div class="container" style="padding: 30px 0;">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <div class="row">
                            <div class="col-md-6">Category</div>
                            <div class="col-md-6 "><a class="btn btn-primary pull-right" href="{{route('admin.addCategory')}}">Add Category</a></div>
                        </div>
                    </div>
                    <div class="panel-body">
                        <div class="table-responsive">
                        @php
                            use App\Models\Category;
                        @endphp
                            @if (Category::count() < 1)
                                <p class="text-danger text-center">No category found</p>
                            
                                @else
                           
                            <table class="table table-striped table-hover">
                                <thead class="text-light bg-dark">
                                    <tr class="text-center">
                                        <th>Category name</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                   
                                    @foreach ($categories as $category)
                                        
                                    <tr class="text-center">
                                        <td>{{$category->category_name}}</td>
                                        <td>
                                            <a href="{{route('admin.editCategory', $category->id)}}" class="fa fa-edit fa-2x mr-1" ></a>
                                            <a href="{{route('admin.deleteCategory', $category->id)}}" class="fa fa-trash fa-2x" onclick="return confirm('You are about to delete this category')"></a>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                    
                            @endif

                        </div>
                        {{$categories->links()}}
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection