<div class="vertical-menu">
    <div data-simplebar class="h-100">
        <div id="sidebar-menu">
            <ul class="metismenu list-unstyled" id="side-menu">
                <li class="menu-title" data-key="t-menu">Menu</li>

                <!-- Dashboard -->
                <li>
                    <a href="{{ route('admin.dashboard') }}" class="waves-effect">
                        <i data-feather="home"></i>
                        <span data-key="t-dashboard">Dashboard</span>
                    </a>
                </li>

                <!-- Home Section -->
                <li>
                    <a href="{{ route('category.list') }}">
                        <i data-feather="layout"></i>
                        <span data-key="t-apps">Category</span>
                    </a>
                </li>

                {{-- <li>
                    <a class="has-arrow">
                        <i data-feather="layout"></i>
                        <span data-key="t-apps">User Management</span>
                    </a>

                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="">User List</a></li>
                        <li><a href="">Roles & Permissions</a></li>
                    </ul>
                </li> --}}

                <li>
                    <a href="javascript: void(0);" class="has-arrow">
                        <i data-feather="crosshair"></i>
                        <span data-key="t-email">User Management</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="">All Services</a></li>
                        <li><a href="">Add Services</a></li>
                    </ul>
                </li>

        </div>
    </div>
</div>

<!-- Feather Icon Initialization -->
<script>
    document.addEventListener("DOMContentLoaded", function() {
        feather.replace();
    });
</script>
