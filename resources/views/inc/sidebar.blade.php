@can('logged-in')
    <header class="header body-pd" id="header">
        <div class="header_toggle"> 
            <i class='bx bx-menu' id="header-toggle"></i> 
        </div>
        <div class="header_img"> 
            <img src="https://img.icons8.com/color/48/000000/admin-settings-male.png" alt=""> 
        </div>
    </header>
    <div class="l-navbar show" id="nav-bar">
        <nav class="nav">
            <div> 
                <a href="#" class="nav_logo"> 
                    <i class='bx bx-layer nav_logo-icon'></i> 
                    <span class="nav_logo-name">Bynet ITaaS</span> 
                </a>
                <div class="nav_list"> 
                    <a href="#" class="nav_link active"> 
                        <i class='bx bx-grid-alt nav_icon'></i> 
                        <span class="nav_name">Dashboard</span> 
                    </a> 
                    <a href="{{ url('/global') }}" class="nav_link {{ request()->is('global') ? 'active' : '' }}"> 
                        <i class='bx bx-user nav_icon'></i> 
                        <span class="nav_name">Global Settings</span> 
                    </a> 
                    <a href="{{ url('/management') }}" class="nav_link {{ request()->is('management') ? 'active' : '' }}"> 
                        <i class='bx bx-message-square-detail nav_icon'></i> 
                        <span class="nav_name">Solution Management</span> 
                    </a> 
                    <a href="#" class="nav_link"> 
                        <i class='bx bx-bookmark nav_icon'></i> 
                        <span class="nav_name">Authentication</span> 
                    </a> 
                    <a href="#" class="nav_link"> 
                        <i class='bx bx-folder nav_icon'></i> 
                        <span class="nav_name">Solution Menu</span> 
                    </a> 
                    <a href="#" class="nav_link"> 
                        <i class='bx bx-bar-chart-alt-2 nav_icon'></i> 
                        <span class="nav_name">Scheduled Tasks</span> 
                    </a> 
                </div>
            </div> 
            <a href="#" class="nav_link"> 
                <i class='bx bx-log-out nav_icon'></i> 
                <span class="nav_name">SignOut</span> 
            </a>
        </nav>
    </div>
    {{-- <div class="height-100 bg-light">
        <h4>Main Components</h4>
    </div> --}}
@endcan