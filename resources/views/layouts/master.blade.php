<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
     <!-- <link rel="stylesheet" href="{{asset('assets/css/bootstrap.css')}}"> -->
     <link rel="stylesheet" href="{{asset('assets/css/styles.css')}}">
     <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.20/summernote-bs4.min.css"> -->
     <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
     <link rel="stylesheet" href="//cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css">
     <link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/dataTables.bootstrap5.min.css">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title')</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    <style>
        .dataTables_wrapper .dataTables_paginate .paginate_button{
            padding: 0px !important;
            margin: 0px !important;

        }
        div.dataTables_wrapper div.dataTables_length select{
            width: 50% !important;
        }
        .post-code-bg{
            width:fit-content;
            min-width: 100%;
            background-color: #212121 !important;
            width: 100% !important;
            overflow-x: scroll !important;
            position: relative;
            padding: 1rem 1rem;
            margin-bottom: 1rem;
            border:1px solid transparent;
            border-radius: 0.25rem;

           } 
    </style>
</head>
<body>
    @include('layouts.inc.admin-navbar')
    <div id="layoutSidenav">

    @include('layouts.inc.admin-sidebar') 
    <div id="layoutSidenav_content">
        <main>
        @yield('content')
        </main>
        @include('layouts.inc.admin-footer')
      </div>
    
    </div>



<script src="{{asset('assets/js/bundle.js')}}"></script>
<script src="{{asset('assets/js/scripts.js')}}"></script>
<script src="{{asset('assets/js/jquery.js')}}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>
<script src="//cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.12.1/js/dataTables.bootstrap5.min.js"></script>

<script>
    $(document).ready( function () {
    $('#myDataTable').DataTable();
    });
   
    $(document).ready(function() {
   $('#my_summernote').summernote({height:150});
   $('.dropdown-toggle').dropdown();
   });

   
</script>

</body>
</html>
