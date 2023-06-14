<div class="header">
    <div class="header-content">
        <nav class="navbar navbar-expand">
            <div class="collapse navbar-collapse justify-content-between">
                <div class="header-left">
                    <div class="dashboard_bar">
                        Dashboard
                    </div>
                </div>
                <ul class="navbar-nav header-right">
                    <li class="nav-item">
                        <div class="input-group search-area d-xl-inline-flex d-none">
                            <div class="input-group-append">
                                <span class="input-group-text"><a href="javascript:void(0)"><i class="flaticon-381-search-2"></i></a></span>
                            </div>
                            <input type="text" class="form-control" placeholder="Search here...">
                        </div>
                    </li>

                    <li class="nav-item dropdown header-profile">
                        <a class="nav-link" href="javascript:void(0)" role="button" data-toggle="dropdown">
                            {{-- @if (Auth::guard('admin')->user()->profile_photo == null)
                             <img width="50" src="{{ Avatar::create(Auth::guard('admin')->user()->name)->toBase64() }}"/>
                            @endif --}}
                            {{-- @if (Auth::user()->profile_photo)
                            <img src="/profile_photo/{{ Auth::user()->profile_photo }}" class="img-fluid rounded-circle" alt="">

                            @else
                                <img src="{{ asset('backend/images/default.jpeg') }}" class="img-fluid rounded-circle" alt="">

                            @endif --}}
                            <div class="header-info">
                                
                                {{-- <span class="text-black"><strong>{{ Auth::guard('admin')->user()->name }} --}}
                                </strong></span>
                                <p class="fs-12 mb-0">Super Admin</p>
                            </div>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right">
                          
                            <a href="#" class="dropdown-item ai-icon">
                                <style>
                                    svg{
                                        display: inline;
                                    }
                                </style>
                                <svg id="icon-user1" xmlns="http://www.w3.org/2000/svg" class="text-primary" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg>
                                <span class="ml-2">Profile </span>
                            </a>
{{--                             
                            <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('frm-logout').submit();"> Logout </a> 

                            <form id="frm-logout" action="{{ route('logout') }}" method="POST" style="display: none;"> {{ csrf_field() }} 
                            </form> --}}
                            
                            
                        </div>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
</div>