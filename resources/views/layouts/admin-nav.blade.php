<!--begin::Header secondary-->
<div class="app-header-secondary  app-header-mobile-drawer " data-kt-drawer="true"
    data-kt-drawer-name="app-header-secondary" data-kt-drawer-activate="{default: true, lg: false}"
    data-kt-drawer-overlay="true" data-kt-drawer-width="250px" data-kt-drawer-direction="start"
    data-kt-drawer-toggle="#kt_header_secondary_mobile_toggle" data-kt-swapper="true"
    data-kt-swapper-mode="{default: 'append', lg: 'append'}"
    data-kt-swapper-parent="{default: '#kt_app_body', lg: '#kt_app_header'}">

    <!--begin::Header secondary wrapper-->
    <div class="d-flex flex-column flex-grow-1 overflow-hidden">


        <div
            class="app-header-secondary-menu-main d-flex flex-grow-lg-1 align-items-end pt-3 pt-lg-2 px-3 px-lg-0 w-auto overflow-auto flex-nowrap">
            <div class="app-container  container-fluid ">
                <!--begin::Main menu-->
                <!--begin::Main menu-->
                <div class="menu menu-rounded menu-nowrap flex-shrink-0 menu-row menu-active-bg menu-title-gray-700 menu-state-gray-900 menu-icon-gray-500 menu-arrow-gray-500 menu-state-icon-primary menu-state-bullet-primary fw-semibold fs-base align-items-stretch"
                    id="#kt_app_header_secondary_menu" data-kt-menu="true">
                    <!--begin:Menu item-->
                    <div data-kt-menu-trigger="{default: 'click', lg: 'hover'}" data-kt-menu-placement="bottom-start"
                        class="menu-item">
                        <span class="menu-link">
                            <span class="menu-title"><i
                                    class="ki-outline ki-chart-simple fs- text-primary me-2"></i>Dashboard</span>
                        </span>
                    </div>
                    <!--end:Menu item-->

                    <!--begin:Menu item-->
                    <div class="menu-item">
                        <div class="menu-content">
                            <div class="menu-separator"></div>
                        </div>
                    </div>
                    <!--end:Menu item-->

                    <!--begin:Menu item-->
                    <div class="menu-item">
                        <a class="menu-link {{ Request::is('admin/clinic-management') ? 'active' : '' }}" href="{{url('admin/clinic-management')}}">
                            <span class="menu-title">Clinic Management</span>
                        </a>
                    </div>
                    <!--end:Menu item-->

                    <!--begin:Menu item-->
                    <div class="menu-item">
                        <div class="menu-content">
                            <div class="menu-separator"></div>
                        </div>
                    </div>
                    <!--end:Menu item-->


                    <!--begin:Menu item-->
                    <div class="menu-item">
                        <a class="menu-link {{ Request::is('admin/patients') ? 'active' : '' }}" href="{{ url('admin/patients') }}">
                            <span class="menu-title">Patients</span>
                        </a>
                    </div>
                    <!--end:Menu item-->

                    <div class="menu-item">
                        <div class="menu-content">
                            <div class="menu-separator"></div>
                        </div>
                    </div>
                    <!--end:Menu item-->

                    <!--begin:Menu item-->
                    <div class="menu-item">
                        <a class="menu-link {{ Request::is('admin/appointments') ? 'active' : '' }}" href="{{ url('admin/appointments') }}">
                            <span class="menu-title">Appointments</span>
                        </a>
                    </div>
                    <!--end:Menu item-->

                    <div class="menu-item">
                        <div class="menu-content">
                            <div class="menu-separator"></div>
                        </div>
                    </div>
                    <!--end:Menu item-->

                    <!--begin:Menu item-->
                    <div class="menu-item">
                        <a class="menu-link {{ Request::is('admin/medicine-management') ? 'active' : '' }}" href="{{ url('admin/medicine-management') }}">
                            <span class="menu-title">Medicine Management</span>
                        </a>
                    </div>
                    <!--end:Menu item-->

                    <div class="menu-item">
                        <div class="menu-content">
                            <div class="menu-separator"></div>
                        </div>
                    </div>
                    <!--end:Menu item-->

                    <!--begin:Menu item-->
                    <div class="menu-item">
                        <a class="menu-link {{ Request::is('admin/billing-invoices') ? 'active' : '' }}" href="{{ url('admin/billing-invoices') }}">
                            <span class="menu-title">Billing & Invoices</span>
                        </a>
                    </div>
                    <!--end:Menu item-->

                    <div class="menu-item">
                        <div class="menu-content">
                            <div class="menu-separator"></div>
                        </div>
                    </div>
                    <!--end:Menu item-->

                    <!--begin:Menu item-->
                    <div class="menu-item">
                        <a class="menu-link {{ Request::is('admin/reports') ? 'active' : '' }}" href="{{ url('admin/reports') }}">
                            <span class="menu-title">Reports</span>
                        </a>
                    </div>
                    <!--end:Menu item-->

                    <div class="menu-item">
                        <div class="menu-content">
                            <div class="menu-separator"></div>
                        </div>
                    </div>

                    <!--begin:Menu item-->
                    <div data-kt-menu-trigger="{default: 'click', lg: 'hover'}" data-kt-menu-placement="bottom-start"
                        class="menu-item">
                        <span class="menu-link">
                            <span class="menu-title">More</span>
                            <span class="menu-arrow"></span>
                        </span>
                        <div class="menu-sub menu-sub-dropdown px-lg-2 py-lg-4 w-150px w-lg-175px" style="">
                            <div class="menu-item">
                                <a class="menu-link" href="/metronic8/demo60/index.html">
                                    <span class="menu-icon"><i class="ki-outline ki-chart-simple fs-3"></i></span>
                                    <span class="menu-title">Notifications</span>
                                </a>
                            </div>
                            <div class="menu-item">
                                <a class="menu-link" href="/metronic8/demo60/account/settings.html">
                                    <span class="menu-icon"><i class="ki-outline ki-share fs-3"></i></span>
                                    <span class="menu-title">Settings</span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <!--end:Menu item-->

                    <div class="menu-item flex-grow-1"></div>
                    <!--end:Menu item-->

                    <!--begin:Menu item-->
                    <div class="menu-item">
                        <div class="menu-content">
                            <div class="menu-separator d-block d-lg-none"></div>
                        </div>
                    </div>
                    <!--end:Menu item-->

                    <!--begin:Menu item-->
                    <div class="menu-item">
                        <a class="menu-link" href="/homoeo/demo60/utilities/modals/wizards/create-app.html">
                            <span class="menu-icon"><i class="ki-outline ki-plus fs-3"></i></span>
                            <span class="menu-title">Extensions</span>
                        </a>
                    </div>
                    <!--end:Menu item-->

                    <div class="menu-item">
                        <div class="menu-content">
                            <div class="menu-separator"></div>
                        </div>
                    </div>
                    <!--end:Menu item-->

                    <!--begin:Menu item-->
                    <div data-kt-menu-trigger="{default: 'click', lg: 'hover'}" data-kt-menu-placement="bottom-end"
                        class="menu-item">
                        <span class="menu-link">
                            <span class="menu-title">Tools</span>
                            <span class="menu-arrow"></span>
                        </span>
                        <div class="menu-sub menu-sub-dropdown px-lg-2 py-lg-4 w-150px w-lg-175px">
                            <div class="menu-item">
                                <a class="menu-link" href="/homoeo/demo60/layout-builder.html">
                                    <span class="menu-icon"><i class="ki-outline ki-chart-simple fs-3"></i></span>
                                    <span class="menu-title">Layout Builder</span>
                                </a>
                            </div>
                            <div class="menu-item">
                                <a class="menu-link" href="">
                                    <span class="menu-icon"><i class="ki-outline ki-code fs-3"></i></span>
                                    <span class="menu-title">Changelog</span>
                                </a>
                            </div>
                            <div class="menu-item">
                                <a class="menu-link" href="">
                                    <span class="menu-icon"><i class="ki-outline ki-abstract-26 fs-3"></i></span>
                                    <span class="menu-title">Docs</span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <!--end:Menu item-->
                </div>
                <!--end::Menu-->

                <!--end::Menu-->
            </div>
        </div>


    </div>
    <!--end::Header secondary wrapper-->
</div>
<!--end::Header secondary-->
