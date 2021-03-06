  <!-- BEGIN SIDEBAR -->
<div class="page-sidebar-wrapper">
    <div class="page-sidebar navbar-collapse collapse">
        <ul class="page-sidebar-menu   " data-keep-expanded="false" data-auto-scroll="true" data-slide-speed="200">
            <li class="heading">
                <h3 class="uppercase"></h3>
            </li>
            <li class="nav-item  ">
                <a href="javascript:;" class="nav-link nav-toggle">
                    <i class="icon-diamond"></i>
                    <span class="title">Admin</span>
                    <span class="arrow"></span>
                </a>
                <ul class="sub-menu">
                    <li class="nav-item  ">
                        <a href="{{route('users.index')}}" class="nav-link ">
                            <span class="title">User</span>
                        </a>
                    </li>
                    <li class="nav-item  ">
                        <a href="{{route('roles.index')}}" class="nav-link ">
                            <span class="title">Roles</span>
                        </a>
                    </li>
                    <li class="nav-item  ">
                        <a href="{{route('permission.index')}}" class="nav-link ">
                            <span class="title">Permissions</span>
                        </a>
                    </li>
                </ul>
            </li>
            <li class="nav-item  ">
                <a href="javascript:;" class="nav-link nav-toggle">
                    <i class="icon-puzzle"></i>
                    <span class="title">Bệnh viện</span>
                    <span class="arrow"></span>
                </a>
                <ul class="sub-menu">
                    <li class="nav-item  ">
                        <a href="{{route('benhvien.index')}}" class="nav-link ">
                            <span class="title">Bảng bệnh viện</span>
                            <span class="badge badge-danger"></span>
                        </a>
                    </li>
                    <li class="nav-item  ">
                        <a href="{{route('benhvien.create')}}" class="nav-link ">
                            <span class="title">Thêm bệnh viện mới</span>
                        </a>
                    </li>
                </ul>
            </li>
            <li class="nav-item  ">
                <a href="javascript:;" class="nav-link nav-toggle">
                    <i class="icon-settings"></i>
                    <span class="title">Chuyên khoa</span>
                    <span class="arrow"></span>
                </a>
                <ul class="sub-menu">
                    <li class="nav-item  ">
                        <a href="{{route('chuyenkhoa.index')}}" class="nav-link ">
                            <span class="title">Bảng chuyên khoa
                            </span>
                        </a>
                    </li>
                    <li class="nav-item  ">
                        <a href="{{route('chuyenkhoa.create')}}" class="nav-link ">
                            <span class="title">Thêm chuyên khoa mới
                            </span>
                        </a>
                    </li>
                </ul>
            </li>
            <li class="nav-item  ">
                <a href="javascript:;" class="nav-link nav-toggle">
                    <i class="icon-bulb"></i>
                    <span class="title">Elements</span>
                    <span class="arrow"></span>
                </a>
                <ul class="sub-menu">
                    <li class="nav-item  ">
                        <a href="elements_steps.html" class="nav-link ">
                            <span class="title">Steps</span>
                        </a>
                    </li>
                    <li class="nav-item  ">
                        <a href="elements_lists.html" class="nav-link ">
                            <span class="title">Lists</span>
                        </a>
                    </li>
                    <li class="nav-item  ">
                        <a href="elements_ribbons.html" class="nav-link ">
                            <span class="title">Ribbons</span>
                        </a>
                    </li>
                </ul>
            </li>
            <li class="nav-item  ">
                <a href="javascript:;" class="nav-link nav-toggle">
                    <i class="icon-briefcase"></i>
                    <span class="title">Tables</span>
                    <span class="arrow"></span>
                </a>
                <ul class="sub-menu">
                    <li class="nav-item  ">
                        <a href="javascript:;" class="nav-link nav-toggle">
                            <span class="title">Static Tables</span>
                            <span class="arrow"></span>
                        </a>
                        <ul class="sub-menu">
                            <li class="nav-item ">
                                <a href="table_static_basic.html" class="nav-link "> Basic Tables </a>
                            </li>
                            <li class="nav-item ">
                                <a href="table_static_responsive.html" class="nav-link "> Responsive Tables </a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item  ">
                        <a href="javascript:;" class="nav-link nav-toggle">
                            <span class="title">Datatables</span>
                            <span class="arrow"></span>
                        </a>
                        <ul class="sub-menu">
                            <li class="nav-item ">
                                <a href="table_datatables_managed.html" class="nav-link "> Managed Datatables </a>
                            </li>
                            <li class="nav-item ">
                                <a href="table_datatables_buttons.html" class="nav-link "> Buttons Extension </a>
                            </li>
                            <li class="nav-item ">
                                <a href="table_datatables_colreorder.html" class="nav-link "> Colreorder Extension </a>
                            </li>
                            <li class="nav-item ">
                                <a href="table_datatables_rowreorder.html" class="nav-link "> Rowreorder Extension </a>
                            </li>
                            <li class="nav-item ">
                                <a href="table_datatables_scroller.html" class="nav-link "> Scroller Extension </a>
                            </li>
                            <li class="nav-item ">
                                <a href="table_datatables_fixedheader.html" class="nav-link "> FixedHeader Extension </a>
                            </li>
                            <li class="nav-item ">
                                <a href="table_datatables_responsive.html" class="nav-link "> Responsive Extension </a>
                            </li>
                            <li class="nav-item ">
                                <a href="table_datatables_editable.html" class="nav-link "> Editable Datatables </a>
                            </li>
                            <li class="nav-item ">
                                <a href="table_datatables_ajax.html" class="nav-link "> Ajax Datatables </a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </li>
            <li class="nav-item  ">
                <a href="?p=" class="nav-link nav-toggle">
                    <i class="icon-wallet"></i>
                    <span class="title">Khung giờ</span>
                    <span class="arrow"></span>
                </a>
                <ul class="sub-menu">
                    <li class="nav-item  ">
                        <a href="{{route('khunggio.index')}}" class="nav-link ">
                            <span class="title">Bảng khung giờ</span>
                        </a>
                    </li>
                    <li class="nav-item  ">
                        <a href="{{route('khunggio.create')}}" class="nav-link ">
                            <span class="title">Thêm khung giờ khám mới</span>
                        </a>
                    </li>
                </ul>
            </li>
            <li class="nav-item  ">
                <a href="javascript:;" class="nav-link nav-toggle">
                    <i class="icon-bar-chart"></i>
                    <span class="title">Bệnh nhân</span>
                    <span class="arrow"></span>
                </a>
                <ul class="sub-menu">
                    <li class="nav-item  ">
                        <a href="{{route('benhnhan.index')}}" class="nav-link ">
                            <span class="title">Bảng bệnh nhân</span>
                        </a>
                    </li>
                    <li class="nav-item  ">
                        <a href="{{route('benhnhan.create')}}" class="nav-link ">
                            <span class="title">Thêm bệnh nhân mới</span>
                        </a>
                    </li>
                </ul>
            </li>
            <li class="nav-item  ">
                <a href="javascript:;" class="nav-link nav-toggle">
                    <i class="icon-pointer"></i>
                    <span class="title">Maps</span>
                    <span class="arrow"></span>
                </a>
                <ul class="sub-menu">
                    <li class="nav-item  ">
                        <a href="maps_google.html" class="nav-link ">
                            <span class="title">Google Maps</span>
                        </a>
                    </li>
                    <li class="nav-item  ">
                        <a href="maps_vector.html" class="nav-link ">
                            <span class="title">Vector Maps</span>
                        </a>
                    </li>
                </ul>
            </li>
            <li class="heading">
                <h3 class="uppercase">Layouts</h3>
            </li>
            <li class="nav-item  ">
                <a href="javascript:;" class="nav-link nav-toggle">
                    <i class="icon-layers"></i>
                    <span class="title">Page Layouts</span>
                    <span class="arrow"></span>
                </a>
                <ul class="sub-menu">
                    <li class="nav-item  ">
                        <a href="layout_language_bar.html" class="nav-link ">
                            <span class="title">Header Language Bar</span>
                        </a>
                    </li>
                    <li class="nav-item  ">
                        <a href="layout_footer_fixed.html" class="nav-link ">
                            <span class="title">Fixed Footer</span>
                        </a>
                    </li>
                    <li class="nav-item  ">
                        <a href="layout_boxed_page.html" class="nav-link ">
                            <span class="title">Boxed Page</span>
                        </a>
                    </li>
                    <li class="nav-item  ">
                        <a href="layout_blank_page.html" class="nav-link ">
                            <span class="title">Blank Page</span>
                        </a>
                    </li>
                </ul>
            </li>
            <li class="nav-item  ">
                <a href="javascript:;" class="nav-link nav-toggle">
                    <i class="icon-feed"></i>
                    <span class="title">Sidebar Layouts</span>
                    <span class="arrow"></span>
                </a>
                <ul class="sub-menu">
                    <li class="nav-item  ">
                        <a href="layout_sidebar_menu_hover.html" class="nav-link ">
                            <span class="title">Hover Sidebar Menu</span>
                        </a>
                    </li>
                    <li class="nav-item  ">
                        <a href="layout_sidebar_reversed.html" class="nav-link ">
                            <span class="title">Reversed Sidebar Page</span>
                        </a>
                    </li>
                    <li class="nav-item  ">
                        <a href="layout_sidebar_fixed.html" class="nav-link ">
                            <span class="title">Fixed Sidebar Layout</span>
                        </a>
                    </li>
                    <li class="nav-item  ">
                        <a href="layout_sidebar_closed.html" class="nav-link ">
                            <span class="title">Closed Sidebar Layout</span>
                        </a>
                    </li>
                </ul>
            </li>
            <li class="nav-item  ">
                <a href="javascript:;" class="nav-link nav-toggle">
                    <i class=" icon-wrench"></i>
                    <span class="title">Custom Layouts</span>
                    <span class="arrow"></span>
                </a>
                <ul class="sub-menu">
                    <li class="nav-item  ">
                        <a href="layout_disabled_menu.html" class="nav-link ">
                            <span class="title">Disabled Menu Links</span>
                        </a>
                    </li>
                </ul>
            </li>
            <li class="heading">
                <h3 class="uppercase">Pages</h3>
            </li>
            <li class="nav-item  ">
                <a href="javascript:;" class="nav-link nav-toggle">
                    <i class="icon-basket"></i>
                    <span class="title">eCommerce</span>
                    <span class="arrow"></span>
                </a>
                <ul class="sub-menu">
                    <li class="nav-item  ">
                        <a href="ecommerce_index.html" class="nav-link ">
                            <i class="icon-home"></i>
                            <span class="title">Dashboard</span>
                        </a>
                    </li>
                    <li class="nav-item  ">
                        <a href="ecommerce_orders.html" class="nav-link ">
                            <i class="icon-basket"></i>
                            <span class="title">Orders</span>
                        </a>
                    </li>
                    <li class="nav-item  ">
                        <a href="ecommerce_orders_view.html" class="nav-link ">
                            <i class="icon-tag"></i>
                            <span class="title">Order View</span>
                        </a>
                    </li>
                    <li class="nav-item  ">
                        <a href="ecommerce_products.html" class="nav-link ">
                            <i class="icon-graph"></i>
                            <span class="title">Products</span>
                        </a>
                    </li>
                    <li class="nav-item  ">
                        <a href="ecommerce_products_edit.html" class="nav-link ">
                            <i class="icon-graph"></i>
                            <span class="title">Product Edit</span>
                        </a>
                    </li>
                </ul>
            </li>
            <li class="nav-item  ">
                <a href="javascript:;" class="nav-link nav-toggle">
                    <i class="icon-docs"></i>
                    <span class="title">Apps</span>
                    <span class="arrow"></span>
                </a>
                <ul class="sub-menu">
                    <li class="nav-item  ">
                        <a href="app_todo.html" class="nav-link ">
                            <i class="icon-clock"></i>
                            <span class="title">Todo 1</span>
                        </a>
                    </li>
                    <li class="nav-item  ">
                        <a href="app_todo_2.html" class="nav-link ">
                            <i class="icon-check"></i>
                            <span class="title">Todo 2</span>
                        </a>
                    </li>
                    <li class="nav-item  ">
                        <a href="app_inbox.html" class="nav-link ">
                            <i class="icon-envelope"></i>
                            <span class="title">Inbox</span>
                        </a>
                    </li>
                    <li class="nav-item  ">
                        <a href="app_calendar.html" class="nav-link ">
                            <i class="icon-calendar"></i>
                            <span class="title">Calendar</span>
                        </a>
                    </li>
                </ul>
            </li>
            <li class="nav-item  ">
                <a href="javascript:;" class="nav-link nav-toggle">
                    <i class="icon-user"></i>
                    <span class="title">User</span>
                    <span class="arrow"></span>
                </a>
                <ul class="sub-menu">
                    <li class="nav-item  ">
                        <a href="page_user_profile_1.html" class="nav-link ">
                            <i class="icon-user"></i>
                            <span class="title">Profile 1</span>
                        </a>
                    </li>
                    <li class="nav-item  ">
                        <a href="page_user_profile_1_account.html" class="nav-link ">
                            <i class="icon-user-female"></i>
                            <span class="title">Profile 1 Account</span>
                        </a>
                    </li>
                    <li class="nav-item  ">
                        <a href="page_user_profile_1_help.html" class="nav-link ">
                            <i class="icon-user-following"></i>
                            <span class="title">Profile 1 Help</span>
                        </a>
                    </li>
                    <li class="nav-item  ">
                        <a href="page_user_profile_2.html" class="nav-link ">
                            <i class="icon-users"></i>
                            <span class="title">Profile 2</span>
                        </a>
                    </li>
                    <li class="nav-item  ">
                        <a href="javascript:;" class="nav-link nav-toggle">
                            <i class="icon-notebook"></i>
                            <span class="title">Login</span>
                            <span class="arrow"></span>
                        </a>
                        <ul class="sub-menu">
                            <li class="nav-item ">
                                <a href="page_user_login_1.html" class="nav-link " target="_blank"> Login Page 1 </a>
                            </li>
                            <li class="nav-item ">
                                <a href="page_user_login_2.html" class="nav-link " target="_blank"> Login Page 2 </a>
                            </li>
                            <li class="nav-item ">
                                <a href="page_user_login_3.html" class="nav-link " target="_blank"> Login Page 3 </a>
                            </li>
                            <li class="nav-item ">
                                <a href="page_user_login_4.html" class="nav-link " target="_blank"> Login Page 4 </a>
                            </li>
                            <li class="nav-item ">
                                <a href="page_user_login_5.html" class="nav-link " target="_blank"> Login Page 5 </a>
                            </li>
                            <li class="nav-item ">
                                <a href="page_user_login_6.html" class="nav-link " target="_blank"> Login Page 6 </a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item  ">
                        <a href="page_user_lock_1.html" class="nav-link " target="_blank">
                            <i class="icon-lock"></i>
                            <span class="title">Lock Screen 1</span>
                        </a>
                    </li>
                    <li class="nav-item  ">
                        <a href="page_user_lock_2.html" class="nav-link " target="_blank">
                            <i class="icon-lock-open"></i>
                            <span class="title">Lock Screen 2</span>
                        </a>
                    </li>
                </ul>
            </li>
            <li class="nav-item  ">
                <a href="javascript:;" class="nav-link nav-toggle">
                    <i class="icon-social-dribbble"></i>
                    <span class="title">General</span>
                    <span class="arrow"></span>
                </a>
                <ul class="sub-menu">
                    <li class="nav-item  ">
                        <a href="page_general_about.html" class="nav-link ">
                            <i class="icon-info"></i>
                            <span class="title">About</span>
                        </a>
                    </li>
                    <li class="nav-item  ">
                        <a href="page_general_contact.html" class="nav-link ">
                            <i class="icon-call-end"></i>
                            <span class="title">Contact</span>
                        </a>
                    </li>
                    <li class="nav-item  ">
                        <a href="javascript:;" class="nav-link nav-toggle">
                            <i class="icon-notebook"></i>
                            <span class="title">Portfolio</span>
                            <span class="arrow"></span>
                        </a>
                        <ul class="sub-menu">
                            <li class="nav-item ">
                                <a href="page_general_portfolio_1.html" class="nav-link "> Portfolio 1 </a>
                            </li>
                            <li class="nav-item ">
                                <a href="page_general_portfolio_2.html" class="nav-link "> Portfolio 2 </a>
                            </li>
                            <li class="nav-item ">
                                <a href="page_general_portfolio_3.html" class="nav-link "> Portfolio 3 </a>
                            </li>
                            <li class="nav-item ">
                                <a href="page_general_portfolio_4.html" class="nav-link "> Portfolio 4 </a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item  ">
                        <a href="javascript:;" class="nav-link nav-toggle">
                            <i class="icon-magnifier"></i>
                            <span class="title">Search</span>
                            <span class="arrow"></span>
                        </a>
                        <ul class="sub-menu">
                            <li class="nav-item ">
                                <a href="page_general_search.html" class="nav-link "> Search 1 </a>
                            </li>
                            <li class="nav-item ">
                                <a href="page_general_search_2.html" class="nav-link "> Search 2 </a>
                            </li>
                            <li class="nav-item ">
                                <a href="page_general_search_3.html" class="nav-link "> Search 3 </a>
                            </li>
                            <li class="nav-item ">
                                <a href="page_general_search_4.html" class="nav-link "> Search 4 </a>
                            </li>
                            <li class="nav-item ">
                                <a href="page_general_search_5.html" class="nav-link "> Search 5 </a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item  ">
                        <a href="page_general_pricing.html" class="nav-link ">
                            <i class="icon-tag"></i>
                            <span class="title">Pricing</span>
                        </a>
                    </li>
                    <li class="nav-item  ">
                        <a href="page_general_faq.html" class="nav-link ">
                            <i class="icon-wrench"></i>
                            <span class="title">FAQ</span>
                        </a>
                    </li>
                    <li class="nav-item  ">
                        <a href="page_general_blog.html" class="nav-link ">
                            <i class="icon-pencil"></i>
                            <span class="title">Blog</span>
                        </a>
                    </li>
                    <li class="nav-item  ">
                        <a href="page_general_blog_post.html" class="nav-link ">
                            <i class="icon-note"></i>
                            <span class="title">Blog Post</span>
                        </a>
                    </li>
                    <li class="nav-item  ">
                        <a href="page_general_invoice.html" class="nav-link ">
                            <i class="icon-envelope"></i>
                            <span class="title">Invoice</span>
                        </a>
                    </li>
                    <li class="nav-item  ">
                        <a href="page_general_invoice_2.html" class="nav-link ">
                            <i class="icon-envelope"></i>
                            <span class="title">Invoice 2</span>
                        </a>
                    </li>
                </ul>
            </li>
            <li class="nav-item  ">
                <a href="javascript:;" class="nav-link nav-toggle">
                    <i class="icon-settings"></i>
                    <span class="title">System</span>
                    <span class="arrow"></span>
                </a>
                <ul class="sub-menu">
                    <li class="nav-item  ">
                        <a href="page_system_coming_soon.html" class="nav-link " target="_blank">
                            <span class="title">Coming Soon</span>
                        </a>
                    </li>
                    <li class="nav-item  ">
                        <a href="page_system_404_1.html" class="nav-link ">
                            <span class="title">404 Page 1</span>
                        </a>
                    </li>
                    <li class="nav-item  ">
                        <a href="page_system_404_2.html" class="nav-link " target="_blank">
                            <span class="title">404 Page 2</span>
                        </a>
                    </li>
                    <li class="nav-item  ">
                        <a href="page_system_404_3.html" class="nav-link " target="_blank">
                            <span class="title">404 Page 3</span>
                        </a>
                    </li>
                    <li class="nav-item  ">
                        <a href="page_system_500_1.html" class="nav-link ">
                            <span class="title">500 Page 1</span>
                        </a>
                    </li>
                    <li class="nav-item  ">
                        <a href="page_system_500_2.html" class="nav-link " target="_blank">
                            <span class="title">500 Page 2</span>
                        </a>
                    </li>
                </ul>
            </li>
            <li class="nav-item">
                <a href="javascript:;" class="nav-link nav-toggle">
                    <i class="icon-folder"></i>
                    <span class="title">Multi Level Menu</span>
                    <span class="arrow "></span>
                </a>
                <ul class="sub-menu">
                    <li class="nav-item">
                        <a href="javascript:;" class="nav-link nav-toggle">
                            <i class="icon-settings"></i> Item 1
                            <span class="arrow"></span>
                        </a>
                        <ul class="sub-menu">
                            <li class="nav-item">
                                <a href="?p=dashboard-2" target="_blank" class="nav-link">
                                    <i class="icon-user"></i> Arrow Toggle
                                    <span class="arrow nav-toggle"></span>
                                </a>
                                <ul class="sub-menu">
                                    <li class="nav-item">
                                        <a href="#" class="nav-link">
                                            <i class="icon-power"></i> Sample Link 1</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#" class="nav-link">
                                            <i class="icon-paper-plane"></i> Sample Link 1</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#" class="nav-link">
                                            <i class="icon-star"></i> Sample Link 1</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link">
                                    <i class="icon-camera"></i> Sample Link 1</a>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link">
                                    <i class="icon-link"></i> Sample Link 2</a>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link">
                                    <i class="icon-pointer"></i> Sample Link 3</a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a href="?p=dashboard-2" target="_blank" class="nav-link">
                            <i class="icon-globe"></i> Arrow Toggle
                            <span class="arrow nav-toggle"></span>
                        </a>
                        <ul class="sub-menu">
                            <li class="nav-item">
                                <a href="#" class="nav-link">
                                    <i class="icon-tag"></i> Sample Link 1</a>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link">
                                    <i class="icon-pencil"></i> Sample Link 1</a>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link">
                                    <i class="icon-graph"></i> Sample Link 1</a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link">
                            <i class="icon-bar-chart"></i> Item 3 </a>
                    </li>
                </ul>
            </li>
        </ul>
                <!-- END SIDEBAR MENU -->
</div>
<!-- END SIDEBAR -->
    