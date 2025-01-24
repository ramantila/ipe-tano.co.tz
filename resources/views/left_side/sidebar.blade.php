<div class="nav-container">
    <nav id="main-menu-navigation" class="navigation-main">

        @if (Sentinel::hasAccess('user'))
            <div class="nav-item">
                <a href="{{ url('dashboard') }}">
                    <i class="ik ik-bar-chart-2"></i><span>Dashboard</span>
                </a>
            </div>
        @endif

        @if (Sentinel::hasAccess('business'))
            <div class="@if (Request::is('businesses/*')) active @endif nav-item">
                <a href="{{ url('businesses/view') }}"><i class="ik ik-dollar-sign"></i><span>Businesses</span></a>
            </div>
        @endif

        @if (Sentinel::hasAccess('business_claims'))
            <div class="@if (Request::is('businesses-claims/*')) active @endif nav-item">
                <a href="{{ url('businesses-claims/view') }}"><i class="ik ik-shopping-cart"></i><span>Businesses
                        Claims</span></a>
            </div>
        @endif


        @if (Sentinel::hasAccess('reviews'))
            <div class=" @if (Request::is('reviews/*')) active open @endif nav-item  has-sub">
                <a href="#"><i class="ik ik-clipboard"></i><span>Reviews</span> </a>
                <div class="submenu-content">
                    {{-- <a href="{{ url('reviews/view') }}" target="_blank" --}}
                    <a href="{{ url('reviews/view') }}" 
                        class="menu-item @if (Request::is('reports/today-reports*')) active @endif">Businesses Reviews</a>
                    <a href="{{ url('reviews/products/view') }}"
                        class="menu-item @if (Request::is('reports/sales*')) active @endif">Products Reviews</a>
                    <a href="{{ url('reviews/services/view') }}"
                        class="menu-item @if (Request::is('reports/debts*')) active @endif">Services Reviews</a>
                </div>
            </div>
        @endif

        @if (Sentinel::hasAccess('role'))
            {{-- @if (Sentinel::hasAccess('user')) --}}
            <div class="@if (Request::is('roles/*')) active @endif nav-item">
                <a href="{{ url('roles/view') }}"><i class="ik ik-unlock"></i><span>Roles</span></a>
            </div>
        @endif

        @if (Sentinel::hasAccess('category'))
            <div class="@if (Request::is('categories/*')) active @endif nav-item">
                <a href="{{ url('categories/view') }}"><i class="ik ik-dollar-sign"></i><span>Categories</span></a>
            </div>
        @endif

        @if (Sentinel::hasAccess('user'))
            <div class="@if (Request::is('users/*')) active @endif nav-item">
                <a href="{{ url('users/view') }}"><i class="ik ik-users"></i><span>Users</span></a>
            </div>
        @endif

        @if (Sentinel::hasAccess('manage_overview'))
            <div class="@if (Request::is('dashboard/*')) active @endif nav-item">
                <a href="{{ url('dashboard/business') }}"><i class="ik ik-users"></i><span>Overview</span></a>
            </div>
        @endif

        @if (Sentinel::hasAccess('manage_business'))
            <div class="@if (Request::is('business/*')) active @endif nav-item">
                <a href="{{ url('business/view') }}"><i class="ik ik-users"></i><span>Manage Businesses</span></a>
            </div>
        @endif

        @if (Sentinel::hasAccess('claim'))
            <div class="@if (Request::is('claims/*')) active @endif nav-item">
                <a href="{{ url('claims/view') }}"><i class="ik ik-users"></i><span>Businesses Claims</span></a>
            </div>
        @endif

        @if (Sentinel::hasAccess('manage_review'))
            <div class="@if (Request::is('reviews-business/*')) active @endif nav-item">
                <a href="{{ url('reviews-business/view') }}"><i class="ik ik-users"></i><span>Manage Reviews</span></a>
            </div>
        @endif
        

    </nav>
</div>
