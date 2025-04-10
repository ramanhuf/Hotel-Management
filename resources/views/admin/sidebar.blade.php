<div class="col-auto col-md-3 col-xl-2 px-sm-2 px-0 bg-dark sidebar">
    <div class="d-flex flex-column align-items-center align-items-sm-start px-3 pt-2 text-white min-vh-100">
        <!-- Brand/Logo Section -->
        <a href="/" class="d-flex align-items-center pb-3 mb-md-0 me-md-auto text-white text-decoration-none border-bottom border-secondary w-100">
            <span class="fs-5 fw-bold d-none d-sm-inline">Hotel Admin</span>
        </a>
        
        <!-- User Profile Dropdown -->
        <div class="dropdown pb-4 w-100 border-bottom border-secondary">
            <a href="#" class="d-flex align-items-center text-white text-decoration-none dropdown-toggle py-2" id="dropdownUser1" data-bs-toggle="dropdown" aria-expanded="false">
                <i class="bi bi-person-circle fs-4 me-2"></i>
                <span class="d-none d-sm-inline">admin</span>
            </a>
            <ul class="dropdown-menu dropdown-menu-dark text-small shadow">
                <li>
                    <form method="post" action="{{ route('logout') }}">
                        @csrf
                        <button type="submit" class="btn btn-link dropdown-item d-flex align-items-center">
                            <i class="bi bi-box-arrow-right me-2"></i> Sign out
                        </button>
                    </form>
                </li>
            </ul>
        </div>
        
        <!-- Navigation Menu -->
        <ul class="nav nav-pills flex-column mb-sm-auto mb-0 align-items-center align-items-sm-start w-100" id="menu">
            <li class="nav-item w-100">
                <a href="{{ route('home') }}" class="nav-link align-middle px-2 py-3 d-flex align-items-center">
                    <i class="bi bi-house-door fs-5 me-3"></i>
                    <span class="ms-1 d-none d-sm-inline">Home</span>
                </a>
            </li>
            <li class="nav-item w-100">
                <a href="{{ route('admin.index') }}" class="nav-link align-middle px-2 py-3 d-flex align-items-center">
                    <i class="bi bi-speedometer2 fs-5 me-3"></i>
                    <span class="ms-1 d-none d-sm-inline">Dashboard</span>
                </a>
            </li>
            <li class="nav-item w-100">
                <a href="{{ route('admin.orders.index') }}" class="nav-link px-2 py-3 align-middle d-flex align-items-center">
                    <i class="bi bi-receipt fs-5 me-3"></i>
                    <span class="ms-1 d-none d-sm-inline">Orders</span>
                </a>
            </li>
            <li class="nav-item w-100">
                <a href="{{ route('admin.roomtypes.index') }}" class="nav-link px-2 py-3 align-middle d-flex align-items-center">
                    <i class="bi bi-building fs-5 me-3"></i>
                    <span class="ms-1 d-none d-sm-inline">Room Types</span>
                </a>
            </li>
            <li class="nav-item w-100">
                <a href="{{ route('admin.rooms.index') }}" class="nav-link px-2 py-3 align-middle d-flex align-items-center">
                    <i class="bi bi-door-closed fs-5 me-3"></i>
                    <span class="ms-1 d-none d-sm-inline">Rooms</span>
                </a>
            </li>
            <li class="nav-item w-100">
                <a href="#" class="nav-link px-2 py-3 align-middle d-flex align-items-center">
                    <i class="bi bi-people fs-5 me-3"></i>
                    <span class="ms-1 d-none d-sm-inline">Customers</span>
                </a>
            </li>
        </ul>
        
        <!-- Sidebar Footer -->
        <div class="sidebar-footer text-center w-100 pb-3 d-none d-sm-inline">
            <small class="text-muted">Hotel Admin v1.0</small>
        </div>
    </div>
</div>

<style>
    .sidebar {
        background: linear-gradient(180deg, #1a1a1a 0%, #0d0d0d 100%);
        box-shadow: 5px 0 15px rgba(0, 0, 0, 0.1);
    }
    
    .sidebar .nav-link {
        color: #adb5bd;
        border-radius: 0;
        margin-bottom: 2px;
        transition: all 0.3s;
    }
    
    .sidebar .nav-link:hover {
        color: white;
        background-color: rgba(255, 255, 255, 0.1);
    }
    
    .sidebar .nav-link.active {
        color: white;
        background-color: rgba(255, 255, 255, 0.2);
        border-left: 3px solid #0d6efd;
    }
    
    .sidebar .dropdown-toggle {
        transition: all 0.3s;
    }
    
    .sidebar .dropdown-toggle:hover {
        background-color: rgba(255, 255, 255, 0.1);
    }
</style>