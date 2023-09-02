<!--begin::Header-->
<div id="kt_app_header" class="app-header">
    <!--begin::Header container-->
    <div class="app-container  container-fluid d-flex align-items-stretch flex-stack " id="kt_app_header_container">
        <!--begin::Sidebar toggle-->
        <div class="d-flex align-items-center d-block d-lg-none ms-n3" title="Show sidebar menu">
            <div class="btn btn-icon btn-active-color-primary w-35px h-35px me-2" id="kt_app_sidebar_mobile_toggle">
                <i class="ki-outline ki-abstract-14 fs-2"></i>
            </div>
            <!--begin::Logo image-->
            <a href="index.html">
                <img alt="Logo" src="assets/media/logos/demo42-small.svg" class="h-30px"/>
            </a>
            <!--end::Logo image-->
        </div>
        <!--end::Sidebar toggle-->
        <!--begin::Toolbar wrapper-->
        <div class="app-navbar flex-lg-grow-1" id="kt_app_header_navbar">
            <div class="app-navbar-item d-flex align-items-stretch flex-lg-grow-1">
                <!--begin::Search-->
                <!--begin::Menu wrapper-->
                <div class="app-header-menu app-header-mobile-drawer align-items-stretch" data-kt-drawer="true" data-kt-drawer-name="app-header-menu" data-kt-drawer-activate="{default: true, lg: false}" data-kt-drawer-overlay="true" data-kt-drawer-width="225px" data-kt-drawer-direction="end" data-kt-drawer-toggle="#kt_app_header_menu_toggle" data-kt-swapper="true" data-kt-swapper-mode="{default: 'append', lg: 'prepend'}" data-kt-swapper-parent="{default: '#kt_app_body', lg: '#kt_app_header_wrapper'}">

                    <x-app.breadcrumbs :$title :$links />

                </div>
                <!--end::Menu wrapper-->
                <!--end::Search-->
            </div>
            <!--begin::Notifications-->
            <div class="app-navbar-item ms-1 ms-md-3">
                <!--begin::Menu- wrapper-->
                <div class="btn btn-icon btn-custom btn-color-gray-600 btn-active-light btn-active-color-primary w-35px h-35px w-md-40px h-md-40px" data-kt-menu-trigger="{default: 'click', lg: 'hover'}" data-kt-menu-attach="parent" data-kt-menu-placement="bottom-end">
                    <i class="ki-outline ki-calendar fs-1"></i>
                </div>
            </div>
            <!--end::Notifications-->
            <!--begin::Quick links-->
            <div class="app-navbar-item ms-1 ms-md-3">
                <!--begin::Menu- wrapper-->
                <div class="btn btn-icon btn-custom btn-color-gray-600 btn-active-light btn-active-color-primary w-35px h-35px w-md-40px h-md-40px" data-kt-menu-trigger="{default: 'click', lg: 'hover'}" data-kt-menu-attach="parent" data-kt-menu-placement="bottom-end">
                    <i class="ki-outline ki-abstract-26 fs-1"></i>
                </div>
                <!--end::Menu wrapper-->
            </div>
            <!--end::Quick links-->
            <!--begin::Chat-->
            <div class="app-navbar-item ms-1 ms-md-3">
                <!--begin::Menu wrapper-->
                <div class="btn btn-icon btn-custom btn-color-gray-600 btn-active-light btn-active-color-primary w-35px h-35px w-md-40px h-md-40px position-relative" id="kt_drawer_chat_toggle">
                    <i class="ki-outline ki-notification-on fs-1"></i>
                    <span class="position-absolute top-0 start-100 translate-middle  badge badge-circle badge-danger w-15px h-15px ms-n4 mt-3">5</span>
                </div>
                <!--end::Menu wrapper-->
            </div>
            <!--end::Chat-->
            <!--begin::Theme mode-->
            <div class="app-navbar-item ms-1 ms-lg-3">
                <!--begin::Menu toggle-->
                <a href="#" class="btn btn-icon btn-custom btn-icon-muted btn-active-light btn-active-color-primary w-35px h-35px w-md-40px h-md-40px" data-kt-menu-trigger="{default:'click', lg: 'hover'}" data-kt-menu-attach="parent"
                   data-kt-menu-placement="bottom-end">
                    <i class="ki-outline ki-night-day theme-light-show fs-1"></i>
                    <i class="ki-outline ki-moon theme-dark-show fs-1"></i>
                </a>
                <!--begin::Menu toggle-->
                <!--begin::Menu-->
                <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-title-gray-700 menu-icon-gray-500 menu-active-bg menu-state-color fw-semibold py-4 fs-base w-150px" data-kt-menu="true" data-kt-element="theme-mode-menu">
                    <div class="menu-item px-3 my-0">
                        <a href="#" class="menu-link px-3 py-2" data-kt-element="mode" data-kt-value="light">
                            <span class="menu-icon" data-kt-element="icon"><i class="ki-outline ki-night-day fs-2"></i></span>
                            <span class="menu-title">Light</span>
                        </a>
                    </div>
                    <div class="menu-item px-3 my-0">
                        <a href="#" class="menu-link px-3 py-2" data-kt-element="mode" data-kt-value="dark">
                            <span class="menu-icon" data-kt-element="icon"><i class="ki-outline ki-moon fs-2"></i></span>
                            <span class="menu-title">Dark</span>
                        </a>
                    </div>
                    <div class="menu-item px-3 my-0">
                        <a href="#" class="menu-link px-3 py-2" data-kt-element="mode" data-kt-value="system">
                            <span class="menu-icon" data-kt-element="icon"><i class="ki-outline ki-screen fs-2"></i></span>
                            <span class="menu-title">System</span>
                        </a>
                    </div>
                </div>
                <!--end::Menu-->
            </div>
            <!--end::Theme mode-->
        </div>
        <!--end::Navbar-->
    </div>
    <!--end::Header container-->
</div>
<!--end::Header-->
