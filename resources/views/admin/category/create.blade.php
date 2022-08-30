@extends('layouts.master')

@section('title','category')

@section('content')
                    <div class="container">
                        <h1 class="mt-4">Add Category</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">Category</li>
                        </ol>
                        <div class="row">

                        </div>
                        <div class="card">
                            <div class="card-header">
                            <h4> Add Category</h4>

                            </div>
                            <div class="card-body">
                                @if($errors->any())
                                <div class="alert alert-danger">

                              
                                @foreach($errors->all() as $error)
                                <div>{{$error}}</div>
                                @endforeach
                                </div>
                                @endif
                                <form action="{{url('admin/category-store')}}" method="post" enctype="multipart/form-data">
                                    @csrf
                                    <div class="mb-3">
                                        <label for="">Category Name</label>
                                        <input type="text" name="name" class="form-control" id="">
                                    </div>
                                    <div class="mb-3">
                                        <label for="">Slug</label>
                                        <input type="text" name="slug" class="form-control" id="">
                                    </div>
                                     <div class="mb-3">
                                        <label for="">Description</label>
                                         <textarea id="my_summernote" name="description" class="form-control" rows="2"></textarea>
                             
                                    <div class="mb-3">
                                        <label for="">image</label>
                                        <input type="file" name="image" class="form-control" id="">
                                    </div>
                                               
                                    <h6>SEO Tags</h6>
                                    <div class="mb-3">
                                        <label for="">Meta Title</label>
                                        <input type="text" name="meta_title" class="form-control" id="">
                                    </div>
                                    <div class="mb-3">
                                        <label for="">Meta_description</label>
                                        <textarea name="meta_description" class="form-control" rows="2"></textarea>
                                    </div>
                                    <div class="mb-3">
                                        <label for="">Meta_keywords</label>
                                        <textarea name="meta_keywords" class="form-control" rows="2"></textarea>
                                    </div>
                                    <h6> Status Mode</h6>
                                    <div class="row">
                                        <div class="col-md-3 mb-3">
                                            <label for="">Navbar Status</label>
                                            <input type="checkbox" name="navbar_status" id="">
                                        </div>
                                        <div class="col-md-3 mb-3">
                                            <label for="">Status</label>
                                            <input type="checkbox" name="status" id="">
                                        </div>
                                        
                                    </div>
                                    <div class="col-md-6">
                                            <button type="submit" class="btn btn-primary">Save Category</button>
                                        </div>
                                </form>

                            </div>
                        </div>
                        </div>



@endsection