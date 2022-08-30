@extends('layouts.master')

@section('title','Add Post')

@section('content')
                    <div class="container">
                        <h1 class="mt-4">Add Posts</h1>
                    
                        <div class="row">

                        </div>
                        <div class="card">
                            <div class="card-header">
                            <h4> Add Post
                                <a href="{{url('admin/posts')}}" class="btn btn-primary float-end" >Back</a>
                            </h4>

                            </div>
                            <div class="card-body">
                                @if($errors->any())
                                <div class="alert alert-danger">

                              
                                @foreach($errors->all() as $error)
                                <div>{{$error}}</div>
                                @endforeach
                                </div>
                                @endif
                                <form action="{{url('admin/add-store')}}" method="post" enctype="multipart/form-data">
                                    @csrf
                                    <div class="mb-3">
                                        <label for="">Category</label>

                                        <select class="form-select" name="category_id" aria-label="Default select example">
                                        <option selected>Select Category</option>
                                                @foreach($category as $item)
                                        <option value="{{$item->id}}">{{$item->name}}</option>
                                                 @endforeach
                                        </select>
                                
                                    </div>
                                    <div class="mb-3">
                                        <label for="">Post Name</label>
                                        <input type="text" name="name" class="form-control" id="">
                                    </div>
                                    <div class="mb-3">
                                        <label for="">Slug</label>
                                        <input type="text" name="slug" class="form-control" id="">
                                    </div>
                                    <div class="mb-3">
                                        <label for="">Description</label>
                                   
                                        <textarea id="my_summernote" name="description" class="form-control" rows="2"></textarea>
                                    </div>
                                    <div class="mb-3">
                                        <label for="">youtube Iframe Link</label>
                                        <input type="text" name="yt_lframe" class="form-control">
                                    </div>
                                  
                                    <h6>SEO Tags</h6>
                                    <div class="mb-3">
                                        <label for="">Meta Title</label>
                                        <input type="text" name="meta_title" class="form-control" id="">
                                    </div>
                                    <div class="mb-3">
                                        <label for="">Meta_description</label>
                                        <textarea name="meta_description"  class="form-control" rows="2"></textarea>
                                    </div>
                                    <div class="mb-3">
                                        <label for="">Meta_keywords</label>
                                        <textarea name="meta_keyword" class="form-control" rows="2"></textarea>
                                    </div>
                                    <h6> Status Mode</h6>
                                    <div class="row">
                                        
                                        <div class="col-md-3 mb-3">
                                            <label for="">Status</label>
                                            <input type="checkbox" name="status" id="">
                                        </div>
                                        
                                    </div>
                                    <div class="col-md-8">
                                    <div class="col-md-6">
                                            <button type="submit" class="btn btn-primary">Save Post</button>
                                      </div>
                                    </div>
                                </form>

                            </div>
                        </div>
                    </div>



@endsection