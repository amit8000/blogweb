@extends('layouts.app')
@section('title', "$setting->meta_title")
@section("meta_description","$setting->meta_description")
@section("meta_keyword","$setting->meta_keyword")

@section('content')

<div class="bg-danger py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
            <div class="category-carousel owl-carousel owl-theme">
                @foreach($all_category as $all_cate_item)
                         
             
                <div class="item">
                    <a href="{{url('tutorial/'.$all_cate_item->slug)}}" class="text-decoration-none">
                    <div class="card">
                        <img src="{{asset('uploads/category/'.$all_cate_item->image)}}" alt="Image" height="100px;" width="80px;" >
                        <div class="card-body text-center">

                         <h4 class="text-dark">{{$all_cate_item->name}}</h4>
                        </div>
                    </div>
                    </a>
                </div>
                @endforeach
             </div>
            </div>
        </div>
    </div>
</div>

@endsection