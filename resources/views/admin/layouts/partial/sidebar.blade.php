<div class="deznav">
    <div class="deznav-scroll">
        <ul class="metismenu" id="menu">
            <li><a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
                    <i class="flaticon-381-networking"></i>
                    <span class="nav-text">Dashboard</span>
                </a>
                
            </li>
            <li><a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
                    <i class="flaticon-381-television"></i>
                    <span class="nav-text">Doctor Manage</span>
                </a>
                <ul aria-expanded="false">
                        <ul >
                            <li><a href="{{ route('all.doctor') }}">All Doctor</a></li>
                            <li><a href="{{ route('add.doctor') }}">Add Doctor</a></li>
                            
                        </ul>
                    
                </ul>
            </li>
            <li><a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
                <i class="flaticon-381-television"></i>
                <span class="nav-text">Hospital Manage</span>
            </a>
            <ul aria-expanded="false">
                    <ul >
                        <li><a href="{{ route('all.hospital') }}">Add Hospital</a></li>
                        <li><a href="{{ route('all.sub.branch') }}">Add Hospital Branch</a></li>
                    </ul>
                
            </ul>
        </li>
            <li><a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
                <i class="flaticon-381-television"></i>
                <span class="nav-text">diseases Category</span>
            </a>
            <ul aria-expanded="false">
                    <ul >
                        <li><a href="{{ route('all.diseas') }}">Add diseases</a></li>
                        
                    </ul>
            </ul>
        </li>
        <li><a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
            <i class="flaticon-381-television"></i>
            <span class="nav-text">Appointments Setting</span>
        </a>
        <ul aria-expanded="false">
                <ul >
                    <li><a href="#">All Appointment</a></li>
                    
                </ul>
        </ul>
    </li>
        <li><a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
            <i class="flaticon-381-television"></i>
            <span class="nav-text">Manage  Slider</span>
        </a>
        <ul aria-expanded="false">
                <ul >
                    <li><a href="{{ route('all.slider') }}">All Slider</a></li>
                    <li><a href="{{ route('add.slider') }}">Add New Slider</a></li>
                    
                </ul>
            
        </ul>
    </li>
    
        <div class="copyright">
            <p><strong>Gymove Fitness Admin Dashboard</strong> © 2020 All Rights Reserved</p>
            <p>Made with <span class="heart"></span> by DexignZone</p>
        </div>
    </div>
</div>