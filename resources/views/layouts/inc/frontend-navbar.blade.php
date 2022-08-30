<!-- <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="#!">Settings</a></li>
                        <li><a class="dropdown-item" href="#!">Activity Log</a></li>
                        <li><hr class="dropdown-divider" /></li>
                        <li><a class="dropdown-item" href="#!">Logout</a></li>
                    </ul>
                </li>
            </ul>
        </nav> -->

<div class="global-navbar bg-white">
    <div class="container">
        <div class="row">
            <div class="col-md-3 d-none d-sm-none d-md-inline">
                @php
                 $setting =App\Models\Setting::find(1)
                @endphp
                <img src="{{asset('uploads/settings/'.$setting->logo)}}"  height="80px"; class="w-80" alt="logo" >

            </div>
            <div class="col-md-9 my-auto">
                <div class="border text-center p-2 ">
                <h5>Advertise Here</h5>
                </div>
            </div>
        </div>
    </div>

</div>
<div class="sticky-top">
    <nav class="navbar navbar-expand-lg navbar-dark bg-green">
        <div class="container">
            <a href="" class="navbar-brand d-inline d-sm-inline d-md-none00">
            <img src="{{asset('assets/images/udemyimg.png')}}" height="70px;" class="w-100" alt="logo" >
            </a>
            <button class="navbar-toggler text-end " type="button" data-bs-toggle="collapse" data-bs-target ="#navbarSupportedContent">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div collapse navbar-collapse id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" href="{{'/'}}">Home</a>
                    </li>
                    @php

                    $categories = App\Models\Category::where('navbar_status','0')->where('status','0')->get();
                
                    @endphp
                    @foreach($categories as $cateitem)
                    <li class="nav-item">
                    <a class="nav-link" href="{{url('tutorial/'.$cateitem->slug)}}">{{$cateitem->name}}</a>
                    </li>
                    @endforeach
                </ul>
            </div>
            <div class="border text-center p-2 ">
                <h5>Advertise Here</h5>
             </div>
        </div>
  
</div>
