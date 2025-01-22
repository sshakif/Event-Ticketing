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
                    <a href="{{ route('category.list') }}" class="has-arrow">
                        <i data-feather="layout"></i>
                        <span data-key="t-apps">Category</span>
                    </a>
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
