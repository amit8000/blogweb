@extends('layouts.master')

@section('title','Blog Dashboard')

@section('content')

<div class="container">
                        <h1 class="mt-4">Dashboard</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">Dashboard</li>
                        </ol>
                        <div class="row mt-3">
                            <div class="col-md-12">
                              @if(session('message'))
                                <h4 class="alert alert-success">{{session('message')}}</h4>
                              @endif
                              <div class="card">
                                <div class="card-header">
                                <h4>web settings <a href="{{url('admin/settings')}}" class="btn btn-primary btn-sm float-end"> Add Setting</a></h4>
                                </div>
                                <div class="card-body">
                                  <form action="{{url('admin/settings-store')}}" method="POST" enctype="multipart/form-data">
                                    @csrf 
                                    <div class="mb-3">
                                      <label for="">Website Name</label>
                                      <input type="text" name="website_name" @if($setting) value="{{$setting->website_name}}" @endif class="form-control">
                                     </div>
                                     <div class="mb-3">
                                      <label for="">Website Logo</label>
                                      <input type="file" name="website_logo" class="form-control">
                                      @if($setting)
                                      <img src="{{asset('uploads/settings/'.$setting->logo)}}" width="70px" height="70px" alt="logo">
                                      @endif
                                     </div>
                                     <div class="mb-3">
                                      <label for="">Website favicon</label>
                                      <input type="file" name="website_favicon" class="form-control">
                                      @if($setting)
                                      <img src="{{asset('uploads/faviconimg/'.$setting->favicon)}}" width="70px" height="70px" alt="logo">
                                      @endif
                                     </div>
                                     <div class="mb-3">
                                      <label for="">Description</label>
                                      <!-- <input type="text" name="website_name" class="form-control" id=""> -->
                                      <textarea name="description" class="form-control"  rows="3">@if($setting) {{$setting->description}} @endif</textarea>
                                     </div>
                                     <h4>SEO - Meta Tags</h4>
                                     <div class="mb-3">
                                      <label for="">Meta_title</label>
                                      <input type="text" @if($setting) value="{{$setting->meta_title}}" @endif name="meta_title" class="form-control">
                                     </div>
                                     <div class="mb-3">
                                      <label for="">Meta Keyword</label>
                                      <!-- <input type="meta keyword" name="website_name" class="form-control"> -->
                                      <textarea name="meta_kyeword" class="form-control" rows="3">@if($setting) {{$setting->meta_kyeword}} @endif</textarea>

                                     </div>
                                    <div class="mb-3">
                                      <label for="">Meta Description</label>
                                      <textarea name="meta_description" class="form-control" rows="3">@if($setting) {{$setting->meta_description}} @endif</textarea>
                                     </div>
                                     <div class="mb-3">
                                      <button type="submit" class="btn btn-primary">save</button>
                                     </div>
                                  </form>
                                </div>
                              </div>  
                            </div>

                        </div>
                        </div>


@endsection;
