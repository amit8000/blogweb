@extends('layouts.master')

@section('title','category')

@section('content')
                    <div class="container">
                        <h1 class="mt-4">Update Category</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">Category</li>
                        </ol>
                        <div class="row">

                        </div>
                        <div class="card">
                            <div class="card-header">
                            <h4>EDIT/UPDATE Category</h4>


                            </div>
                            <div class="card-body">
                                @if($errors->any())
                                <div class="alert alert-danger">

                              
                                @foreach($errors->all() as $error)
                                <div>{{$error}}</div>
                                @endforeach
                                </div>
                                @endif
                                <form action="{{url('admin/update-category/'.$category->id)}}" method="post" enctype="multipart/form-data">
                                    @csrf

                                    @method('PUT')
                                    <div class="mb-3">
                                        <label for="">Category Name</label>
                                        <input type="text" name="name" value="{{$category->name}}" class="form-control" id="">
                                    </div>
                                    <div class="mb-3">
                                        <label for="">Slug</label>
                                        <input type="text" name="slug" value="{{$category->slug}}" class="form-control" id="">
                                    </div>
                                    <div class="mb-3">
                                        <label for="">Description</label>
                                        <!-- <input type="text" name="description" value="{{$category->description}}" class="form-control" id=""> -->
                                        <textarea id="my_summernote" name="description" class="form-control" rows="2">{{$category->description}}</textarea>
                                    </div>
                                    <div class="mb-3">
                                    @if($category->image)
                                    <img  src="{{ url('uploads/category/'.$category->image) }}" height="70" width="70">
                                    @endif 
                                 <label for="">Image</label>
                                        <input type="file" name="image" class="form-control" id="">
                                    </div>
                                    <h6>SEO Tags</h6>
                                    <div class="mb-3">
                                        <label for="">Meta Title</label>
                                        <input type="text" value="{{$category->meta_title}}"  name="meta_title" class="form-control" id="">
                                    </div>
                                    <div class="mb-3">
                                        <label for="">Meta_description</label>
                                        <textarea name="meta_description" id="my_summernote" class="form-control" rows="2">{{$category->meta_description}}</textarea>
                                    </div>
                                    <div class="mb-3">
                                        <label for="">Meta_keywords</label>
                                        <textarea name="meta_keywords" class="form-control" rows="2">meta_keywords</textarea>
                                    </div>
                                    <h6> Status Mode</h6>
                                    <div class="row">
                                        <div class="col-md-3 mb-3">
                                            <label for="">Navbar Status</label>
                                            <input type="checkbox" name="navbar_status" {{$category->navbar_status =='1'?'checked':''}}>
                                        </div>
                                        <div class="col-md-3 mb-3">
                                            <label for="">Status</label>
                                            <input type="checkbox" name="status"{{$category->status =='1'?'checked':''}} >
                                        </div>
                                        
                                    </div>
                                    <div class="col-md-6">
                                            <button type="submit" class="btn btn-primary">Update Category</button>
                                        </div>
                                </form>

                            </div>
                        </div>
                        </div>



@endsection