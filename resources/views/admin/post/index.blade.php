@extends('layouts.master')

@section('title','view post')

@section('content')
<div class="container mt-3 ">
    <div class="card mt-4">
        <div class="card-header">
            <h4>view Post<a href="{{url('admin/add-post')}}" class="btn btn-primary btn-sm float-end"> Add Post</a></h4>
        </div>
        <div class="card-body">
            @if(session('message'))
            <div class="alert alert-success">{{ session('message')}}</div>
            @endif
            your content
             <div class="table-responsive">
            <table id="myDataTable" class="table table-bordered">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Category</th>
                        <th>Post Name</th>
                        <th>status</th>
                        <th>Action</th>
         

                    </tr>
                </thead>
                <tbody>
                   @foreach($posts as $item)
                   
                   <tr>
                    <td>{{$item->id}}</td>
                    <td>{{$item->category->name}}</td>
                    <td>{{$item->name}}</td>
                    <td>{{$item->status == '1' ? 'hidden':'visible'}}</td>
                     <td>
                        <a href="{{url('admin/posts/'.$item->id)}}" class="btn btn-success">Edit</a>
                        <a href="{{url('admin/delete-posts/'.$item->id)}}" class="btn btn-danger">Delete</a>
                        
                     </td>
                   </tr>
                   @endforeach
                </tbody>
                </table>
             </div>
        </div>
    </div>

</div>



@endsection