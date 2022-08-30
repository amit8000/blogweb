@extends('layouts.master')

@section('title','category')

@section('content')
<div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
    <form action="{{url('admin/delete-category')}}" method="POST">
        @csrf

        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Delete Category with its Post</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <input type="hidden" name="category_delete_id" id="category_id">
            <h5>Are you sure you want to delete this Category with all its posts</h5>

        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary">Yes delete </button>
        </div>
    </form>
    </div>
  </div>
</div>
<div class="container mt-3 ">
    <div class="card mt-4">
        <div class="card-header">
            <h4>view Category <a href="{{url('admin/add-category')}}" class="btn btn-primary btn-sm float-end"> Add Category</a></h4>
        </div>
        <div class="card-body">
            @if(session('message'))
            <div class="alert alert-success">{{ session('message')}}</div>
            @endif

             <div class="table-responsive">
            <table id="myDataTable" class="table table-bordered">
                <thead>
                    <tr>
                    <th>ID</th>
                    <th>Category Name</th>
                    <th>Image</th>
                    <th>Status</th>
                    <th>Action</th>

                    </tr>
                </thead>
                 <tbody>
                    @foreach($category as $item)
                       
                    <tr>
                        <td>{{$item->id}}</td>
                        <td>{{$item->name}}</td>
                        <td>
                            <img src="{{asset('uploads/category/'.$item->image)}}" width="70px" height="70px" alt="">
                        </td>

                        <td>{{$item->status == '1' ? 'hidden':'shown'}}</td>
                          <td>
                          
                            <a href="{{url('admin/edit-category/'.$item->id)}}" class="btn btn-success" onclick="return confirm('Are you sure you want to update this ?');">Edit</a>
                            <!-- <a href="{{url('admin/delete-category/'.$item->id)}}" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this ?');" >Delete</a> -->
                            <button type="button" class="btn btn-danger deleteCategoryBtn " value="{{$item->id}}">Delete</button>

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
@section('scripts')
<script>
  $(document).ready(function(){
$('.deleteCategoryBtn').click(function(e){
    // $(selector).on(click,function(e){
    e.preventDefault();
    var category_id = $(this).val();
    $('#category_id').val(category_id);
    $('#deleteModal').modal('show');

});
  });
</script>

@endsection