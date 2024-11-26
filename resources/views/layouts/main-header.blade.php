  <!--begin::Header primary-->
  <div class="app-header-primary ">

      <!--begin::Header primary container-->
      <div class="app-container  container-fluid d-flex align-items-stretch justify-content-between "
          id="kt_app_header_primary_container">
          <!--begin::Header primary wrapper-->
          <div class="d-flex flex-stack flex-grow-1">
              <div class="d-flex">
                  <!--begin::Logo-->
                  <div class="app-header-logo d-flex flex-center gap-2 me-lg-5">
                      <!--begin::Sidebar toggle-->
                      <button class="btn btn-icon btn-sm btn-custom d-flex d-lg-none ms-n2"
                          id="kt_app_header_menu_toggle">
                          <i class="ki-outline ki-abstract-14 fs-2"></i> </button>
                      <!--end::Sidebar toggle-->

                      <!--begin::Logo image-->
                      <a href="/#">
                          <img alt="Logo" src="{{ url('images/demo60.svg') }}" class="mh-35px">
                      </a>
                      <!--end::Logo image-->
                  </div>
                  <!--end::Logo-->
                  <!--begin::Menu wrapper-->
                  <div class="d-flex align-items-stretch ms-3" id="kt_app_header_menu_wrapper">
                      <!--begin::Menu holder-->
                      <div class="app-header-menu app-header-mobile-drawer align-items-stretch" data-kt-drawer="true"
                          data-kt-drawer-name="app-header-menu" data-kt-drawer-activate="{default: true, lg: false}"
                          data-kt-drawer-overlay="true" data-kt-drawer-width="{default:'200px', '300px': '250px'}"
                          data-kt-drawer-direction="start" data-kt-drawer-toggle="#kt_app_header_menu_toggle"
                          data-kt-swapper="true" data-kt-swapper-mode="{default: 'append', lg: 'prepend'}"
                          data-kt-swapper-parent="{default: '#kt_app_body', lg: '#kt_app_header_menu_wrapper'}">
                          <!--begin::Menu-->
                          <div class="menu menu-rounded menu-column menu-lg-row menu-active-bg menu-title-gray-700 menu-state-gray-900 menu-icon-gray-500 menu-arrow-gray-500 menu-state-icon-primary menu-state-bullet-primary fw-semibold  fs-6 align-items-stretch my-5 my-lg-0 px-2  px-lg-0"
                              id="#kt_app_header_menu" data-kt-menu="true">
                              <!--begin:Menu item-->
                              <div data-kt-menu-trigger="{default: 'click', lg: 'hover'}"
                                  data-kt-menu-placement="bottom-start"
                                  class="menu-item here show menu-lg-down-accordion menu-sub-lg-down-indention me-0 me-lg-2"
                                  style="">
                                  <!--begin:Menu link--><span class="menu-link"><span class="menu-title"
                                          style="">Dheeshan's Homoeo Clinic</span><span
                                          class="menu-arrow d-lg-none"></span></span><!--end:Menu link-->

                              </div><!--end:Menu item--><!--begin:Menu item-->

                          </div>
                          <!--end::Menu-->
                      </div>
                      <!--end::Menu holder-->
                  </div>
                  <!--end::Menu wrapper-->
              </div>


              <!--begin::Navbar-->
              <div class="app-navbar flex-shrink-0 gap-2">
                  <!--begin::Quick links-->
                  <div class="app-navbar-item me-lg-3">
                      <a href="#" data-bs-toggle="modal" data-bs-target="#kt_modal_share_earn"
                          class="btn btn-sm btn-flex flex-center border border-300 bg-light-light btn-active-color-gray-900 px-0 px-lg-3 min-w-35px h-35px">
                          <i class="ki-outline ki-share pe-0 pe-lg-2 fs-3"></i> <span class="d-none d-lg-inline">New
                              Appointment</span>
                      </a>
                  </div>
                  <!--end::Quick links-->




                  <!--begin::User menu-->
                  <div class="app-navbar-item ms-1">
                      <!--begin::Menu wrapper-->
                      <div class="cursor-pointer symbol position-relative symbol-35px"
                          data-kt-menu-trigger="{default: 'click', lg: 'hover'}" data-kt-menu-attach="parent"
                          data-kt-menu-placement="bottom-end">
                          <img src="{{ url('images/300-2.jpg') }}" alt="user">

                          <span
                              class="bullet bullet-dot bg-success h-6px w-6px position-absolute translate-middle mb-1 bottom-0 start-100 animation-blink"></span>
                      </div>

                      <!--begin::User account menu-->
                      <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg menu-state-color fw-semibold py-4 fs-6 w-275px"
                          data-kt-menu="true">
                          <!--begin::Menu item-->
                          <div class="menu-item px-3">
                              <div class="menu-content d-flex align-items-center px-3">
                                  <!--begin::Avatar-->
                                  <div class="symbol symbol-50px me-5">
                                      <img alt="Logo" src="{{ url('images/300-2.jpg') }}">
                                  </div>
                                  <!--end::Avatar-->

                                  <!--begin::Username-->
                                  <div class="d-flex flex-column">
                                      <div class="fw-bold d-flex align-items-center fs-5">
                                          Dheeshan's Homoeo Clinic
                                      </div>

                                      <a href="#" class="fw-semibold text-muted text-hover-primary fs-7">
                                          ana@nio.com </a>
                                  </div>
                                  <!--end::Username-->
                              </div>
                          </div>
                          <!--end::Menu item-->

                          <!--begin::Menu separator-->
                          <div class="separator my-2"></div>
                          <!--end::Menu separator-->

                          <!--begin::Menu item-->
                          <div class="menu-item px-5">
                              <a href="" class="menu-link px-5">
                                  My Profile
                              </a>
                          </div>
                          <!--end::Menu item-->

                          <!--begin::Menu item-->
                          <div class="menu-item px-5">
                              <a href="" class="menu-link px-5">
                                  <span class="menu-text">My Projects</span>
                                  <span class="menu-badge">
                                      <span class="badge badge-light-danger badge-circle fw-bold fs-7">3</span>
                                  </span>
                              </a>
                          </div>
                          <!--end::Menu item-->

                          <!--begin::Menu item-->
                          <div class="menu-item px-5" data-kt-menu-trigger="{default: 'click', lg: 'hover'}"
                              data-kt-menu-placement="left-start" data-kt-menu-offset="-15px, 0">
                              <a href="#" class="menu-link px-5">
                                  <span class="menu-title">My Subscription</span>
                                  <span class="menu-arrow"></span>
                              </a>

                              <!--begin::Menu sub-->
                              <div class="menu-sub menu-sub-dropdown w-175px py-4">
                                  <!--begin::Menu item-->
                                  <div class="menu-item px-3">
                                      <a href="" class="menu-link px-5">
                                          Referrals
                                      </a>
                                  </div>
                                  <!--end::Menu item-->

                                  <!--begin::Menu item-->
                                  <div class="menu-item px-3">
                                      <a href="" class="menu-link px-5">
                                          Billing
                                      </a>
                                  </div>
                                  <!--end::Menu item-->

                                  <!--begin::Menu separator-->
                                  <div class="separator my-2"></div>
                                  <!--end::Menu separator-->

                                  <!--begin::Menu item-->
                                  <div class="menu-item px-3">
                                      <div class="menu-content px-3">
                                          <label class="form-check form-switch form-check-custom form-check-solid">
                                              <input class="form-check-input w-30px h-20px" type="checkbox"
                                                  value="1" checked="checked" name="notifications">
                                              <span class="form-check-label text-muted fs-7">
                                                  Notifications
                                              </span>
                                          </label>
                                      </div>
                                  </div>
                                  <!--end::Menu item-->
                              </div>
                              <!--end::Menu sub-->
                          </div>
                          <!--end::Menu item-->


                          <!--begin::Menu separator-->
                          <div class="separator my-2"></div>
                          <!--end::Menu separator-->

                          <!--begin::Menu item-->
                          <div class="menu-item px-5" data-kt-menu-trigger="{default: 'click', lg: 'hover'}"
                              data-kt-menu-placement="left-start" data-kt-menu-offset="-15px, 0">
                              <a href="#" class="menu-link px-5">
                                  <span class="menu-title position-relative">
                                      Mode

                                      <span class="ms-5 position-absolute translate-middle-y top-50 end-0">
                                          <i class="ki-outline ki-night-day theme-light-show fs-2"></i> <i
                                              class="ki-outline ki-moon theme-dark-show fs-2"></i> </span>
                                  </span>
                              </a>

                              <!--begin::Menu-->
                              <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-title-gray-700 menu-icon-gray-500 menu-active-bg menu-state-color fw-semibold py-4 fs-base w-150px"
                                  data-kt-menu="true" data-kt-element="theme-mode-menu">
                                  <!--begin::Menu item-->
                                  <div class="menu-item px-3 my-0">
                                      <a href="#" class="menu-link px-3 py-2" data-kt-element="mode"
                                          data-kt-value="light">
                                          <span class="menu-icon" data-kt-element="icon">
                                              <i class="ki-outline ki-night-day fs-2"></i> </span>
                                          <span class="menu-title">
                                              Light
                                          </span>
                                      </a>
                                  </div>
                                  <!--end::Menu item-->

                                  <!--begin::Menu item-->
                                  <div class="menu-item px-3 my-0">
                                      <a href="#" class="menu-link px-3 py-2" data-kt-element="mode"
                                          data-kt-value="dark">
                                          <span class="menu-icon" data-kt-element="icon">
                                              <i class="ki-outline ki-moon fs-2"></i> </span>
                                          <span class="menu-title">
                                              Dark
                                          </span>
                                      </a>
                                  </div>
                                  <!--end::Menu item-->

                                  <!--begin::Menu item-->
                                  <div class="menu-item px-3 my-0">
                                      <a href="#" class="menu-link px-3 py-2" data-kt-element="mode"
                                          data-kt-value="system">
                                          <span class="menu-icon" data-kt-element="icon">
                                              <i class="ki-outline ki-screen fs-2"></i> </span>
                                          <span class="menu-title">
                                              System
                                          </span>
                                      </a>
                                  </div>
                                  <!--end::Menu item-->
                              </div>
                              <!--end::Menu-->

                          </div>
                          <!--end::Menu item-->



                          <!--begin::Menu item-->
                          <div class="menu-item px-5 my-1">
                              <a href="" class="menu-link px-5">
                                  Account Settings
                              </a>
                          </div>
                          <!--end::Menu item-->

                          <!--begin::Menu item-->
                          <div class="menu-item px-5">
                              <a href="{{ url('login') }}" class="menu-link px-5">
                                  Sign Out
                              </a>
                          </div>
                          <!--end::Menu item-->
                      </div>
                      <!--end::User account menu-->
                      <!--end::Menu wrapper-->
                  </div>
                  <!--end::User menu-->

                  <!--begin::Header menu toggle-->
                  <div class="app-navbar-item d-lg-none" title="Show header menu">
                      <button class="btn btn-sm btn-icon btn-custom h-35px w-35px"
                          id="kt_header_secondary_mobile_toggle">
                          <i class="ki-outline ki-element-4 fs-2"></i> </button>
                  </div>
                  <!--end::Header menu toggle-->

                  <!--begin::Header menu toggle-->
                  <div class="app-navbar-item d-lg-none me-n3" title="Show header menu">
                      <button class="btn btn-sm btn-icon btn-custom h-35px w-35px" id="kt_app_sidebar_mobile_toggle">
                          <i class="ki-outline ki-setting-3 fs-2"></i> </button>
                  </div>
                  <!--end::Header menu toggle-->
              </div>
              <!--end::Navbar-->
          </div>
          <!--end::Header primary wrapper-->
      </div>
      <!--end::Header primary container-->

  </div>
  <!--end::Header primary-->
