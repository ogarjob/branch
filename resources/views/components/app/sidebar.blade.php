<!--begin::Sidebar-->
<div id="kt_app_sidebar" class="app-sidebar  flex-column "
     data-kt-drawer="true" data-kt-drawer-name="app-sidebar" data-kt-drawer-activate="{default: true, lg: false}"
     data-kt-drawer-overlay="true" data-kt-drawer-width="250px" data-kt-drawer-direction="start"
     data-kt-drawer-toggle="#kt_app_sidebar_mobile_toggle"
>
    <div class="app-sidebar-logo flex-shrink-0 d-none d-md-flex align-items-center px-8" id="kt_app_sidebar_logo">
        <a href="#">
            <span class="text-gray-700 h-30px app-sidebar-logo-default theme-light-show" style="font-size: 28px; font-family: sans-serif; font-weight: 800">
                Branch
            </span>
            <span class="text-gray-800 h-30px app-sidebar-logo-default theme-dark-show" style="font-size: 28px; font-family: sans-serif; font-weight: 800">
                Branch
            </span>
        </a>
    </div>
    <!--begin::sidebar menu-->
    <div class="app-sidebar-menu overflow-hidden flex-column-fluid">
        <!--begin::Menu wrapper-->
        <div id="kt_app_sidebar_menu_wrapper" class="app-sidebar-wrapper hover-scroll-overlay-y my-5 mx-3" data-kt-scroll="true"
             data-kt-scroll-activate="true" data-kt-scroll-height="auto" data-kt-scroll-wrappers="#kt_app_sidebar_menu"
             data-kt-scroll-dependencies="#kt_app_sidebar_logo, #kt_app_sidebar_footer" data-kt-scroll-offset="5px"
        >
            <div class="menu menu-column menu-rounded menu-sub-indention fw-semibold px-1"
                 id="#kt_app_sidebar_menu" data-kt-menu="true" data-kt-menu-expand="false"
            >
                <div class="menu-item pt-5">
                    <div class="menu-content"><span class="menu-heading fw-bold text-uppercase fs-7">Navigation</span></div>
                </div>
                <div class="menu-item">
                    <a class="menu-link" href="{{ route('dashboard') }}">
                        <span class="menu-icon"><i class="ki-outline ki-category fs-2"></i></span>
                        <span class="menu-title">Dashboard</span>
                    </a>
                </div>
                @admin()
                    <div class="menu-item">
                        <a class="menu-link" href="{{ route('wallets.index') }}">
                            <span class="menu-icon">
                                <i class="ki-outline ki-wallet fs-1"></i>
                            </span>
                            <span class="menu-title">Wallets</span>
                        </a>
                    </div>
                    <div class="menu-item pt-5">
                        <div class="menu-content"><span class="menu-heading fw-bold text-uppercase fs-7">MISC</span></div>
                    </div>
                    <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
                        <span class="menu-link">
                            <span class="menu-icon">
                                <i class="ki-outline ki-profile-user fs-2"></i>
                            </span>
                            <span class="menu-title">User Management</span>
                            <span class="menu-arrow"></span>
                        </span>
                        <div class="menu-sub menu-sub-accordion">
                            <div class="menu-item">
                                <a class="z-menu menu-link" href="{{ route('users.index', 'type=admin') }}">
                                    <span class="menu-bullet">
                                        <span class="bullet bullet-dot"></span>
                                    </span>
                                    <span class="menu-title">Administrators</span>
                                </a>
                            </div>
                        </div>
                        <div class="menu-sub menu-sub-accordion">
                                <div class="menu-item">
                                    <a class="z-menu menu-link" href="{{ route('users.index', 'type=customer') }}">
                                        <span class="menu-bullet">
                                            <span class="bullet bullet-dot"></span>
                                        </span>
                                        <span class="menu-title">Other Users</span>
                                    </a>
                                </div>
                            </div>
                    </div>
                @endadmin
                <div class="menu-item">
                    <a href="{{ route('users.show', user()) }}" class="menu-link">
                    <span class="menu-icon"><i class="ki-outline ki-address-book fs-1"></i></span>
                        <span class="menu-title">My Profile</span>
                    </a>
                </div>
            </div>
        </div>
        <!--end::Menu wrapper-->
    </div>
    <!--end::sidebar menu-->
    <div class="app-sidebar-footer d-flex align-items-center px-8 pb-10" id="kt_app_sidebar_footer">
        <!--begin::User-->
        <div>
            <div class="d-flex align-items-center" data-kt-menu-trigger="{default: 'click', lg: 'hover'}"
                data-kt-menu-overflow="true" data-kt-menu-placement="top-start"
            >
                <div class="d-flex flex-center cursor-pointer symbol symbol-45px"><img src="{{ user('photo') }}" alt=""/></div>
                <div class="mx-2">
                    <a href="#" class="app-sidebar-username text-gray-800 text-hover-primary fs-6 fw-semibold lh-0">{{ user('name') }}</a>
                    <span class="app-sidebar-deckription text-gray-400 fw-semibold d-block fs-8">{{ user('email') }}</span>
                </div>
            </div>
            <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg menu-state-color fw-semibold py-4 fs-6 w-275px" data-kt-menu="true">
                <div class="menu-item px-3">
                    <div class="menu-content d-flex align-items-center px-3">
                        <div class="symbol symbol-50px me-5">
                            <img alt="user photo" src="{{ user()->photo }}"/>
                        </div>
                        <div class="d-flex flex-column">
                            <div class="fw-bold d-flex align-items-center fs-5">
                                {{ user()->name }}
                            </div>
                            <a href="#" class="fw-semibold text-muted text-hover-primary fs-7">{{ user()->email }}</a>
                        </div>
                    </div>
                </div>
                <div class="separator my-2"></div>
                <div class="menu-item px-5">
                    <a href="{{ route('users.show', user()) }}" class="menu-link px-5">My Profile</a>
                </div>
                <div class="separator my-2"></div>
                <div class="menu-item px-5">
                    <form action="{{ route('api.logout') }}" method="POST" x-data x-submit @finish="location.reload()">
                        @method('delete')
                        <button class="menu-link btn px-5 border-0 w-100">
                            Sign Out &nbsp;<span><i class="fa fa-sign-out-alt"></i></span>
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!--end::Sidebar-->

@push('scripts')
    <script>
        $('.menu-link[href="{{ url()->full() }}"]').addClass('active').closest('.menu-accordion').addClass('here show');
    </script>
@endpush
