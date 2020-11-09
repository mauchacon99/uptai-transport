<div class="main-sidebar-nav dark-navigation">
    <div class="nano">
        <div class="nano-content sidebar-nav">
            <div class="card-body border-bottom text-center nav-profile">
                <div class="notify setpos"> <span class="heartbit"></span> <span class="point"></span> </div>
                <img alt="profile" class="margin-b-10  " src="{{ asset('admin/img/avtar-2.png') }}" width="80">
                <p class="lead margin-b-0 toggle-none">
                @if( Auth::check() )
                    {{ auth()->user()->name }}
                @else
                    John Doe
                @endif
                </p>
                <p class="text-muted mv-0 toggle-none">Welcome</p>
            </div>
            <ul class="metisMenu nav flex-column" id="menu">
                <li class="nav-heading"><span>MAIN</span></li>
                <li class="nav-item"><a class="nav-link" href="/admin"><i class="fa fa-home"></i> <span class="toggle-none">Dashboard <span class="badge badge-pill badge-danger float-right mr-2">1.0</span></span></a></li>
                <li class="nav-item">
                    <a class="nav-link" href="javascript: void(0);" aria-expanded="false"><i class="fa fa-th-large"></i> <span class="toggle-none">Widgets <span class="fa arrow"></span></span></a>
                    <ul class="nav-second-level nav flex-column " aria-expanded="false">
                        <li class="nav-item"><a class="nav-link" href="/admin/widgets-apps">Widgets Apps</a></li>
                        <li class="nav-item"><a class="nav-link" href="/admin/widgets-data">Widgets Data</a></li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="javascript: void(0);" aria-expanded="false"><i class="fab fa-codepen"></i> <span class="toggle-none">Apps <span class="fa arrow"></span></span></a>
                    <ul class="nav-second-level nav flex-column sub-menu" aria-expanded="false">
                        <li class="nav-item"><a class="nav-link" href="/admin/app-calendar">Calendar</a></li>
                        <li class="nav-item"><a class="nav-link" href="/admin/app-chat">Chat App</a></li>
                        <li class="nav-item"><a class="nav-link" href="/admin/app-ticket">Support Ticket</a></li>
                        <li class="nav-item"><a class="nav-link" href="/admin/app-contact">Contact Grid</a></li>
                        <li class="nav-item"><a class="nav-link" href="/admin/app-contact-detail">Contact Detail</a></li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="javascript: void(0);" aria-expanded="false"><i class="fa fa-envelope-open"></i> <span class="toggle-none">Inbox<span class="fa arrow"></span></span></a>
                    <ul class="nav-second-level nav flex-column sub-menu" aria-expanded="false">
                        <li class="nav-item"><a class="nav-link" href="/admin/mail-index">Inbox</a></li>
                        <li class="nav-item"><a class="nav-link" href="/admin/mail-view">Inbox view</a></li>
                        <li class="nav-item"><a class="nav-link" href="/admin/mail-compose">Compose</a></li>
                    </ul>
                </li>

                <li class="nav-heading"><span>FORMS, TABLE & LAYOUTS</span></li>
                <li class="nav-item">
                    <a class="nav-link" href="javascript: void(0);" aria-expanded="false"><i class="fa fa-cogs"></i> <span class="toggle-none">UI elements <span class="fa arrow"></span></span></a>
                    <ul class="nav-second-level nav flex-column sub-menu" aria-expanded="false">
                        <li class="nav-item"><a class="nav-link" href="/admin/ui-jquery-elements">Jquery UI</a></li>
                        <li class="nav-item"><a class="nav-link" href="/admin/ui-bootstrap-elements">Bootstrap UI</a></li>
                        <li class="nav-item"><a class="nav-link" href="/admin/ui-typography">Typography</a></li>
                        <li class="nav-item"><a class="nav-link" href="/admin/ui-icons">Icons</a></li>
                        <li class="nav-item"><a class="nav-link" href="/admin/ui-buttons">Buttons</a></li>
                        <li class="nav-item"><a class="nav-link" href="/admin/ui-cards">Cards</a></li>
                        <li class="nav-item"><a class="nav-link" href="/admin/ui-tabs">Tabs</a></li>
                        <li class="nav-item"><a class="nav-link" href="/admin/ui-card-master">Card Master</a></li>
                        <li class="nav-item"><a class="nav-link" href="/admin/ui-tip-pop">Tooltip & Popovers</a></li>
                        <li class="nav-item"><a class="nav-link" href="/admin/ui-sweetalerts">Sweet Alters</a></li>
                        <li class="nav-item"><a class="nav-link" href="/admin/ui-alertify">Alertify Alters</a></li>
                        <li class="nav-item"><a class="nav-link" href="/admin/ui-modals">Modals</a></li>
                        <li class="nav-item"><a class="nav-link" href="/admin/ui-notification">Notification</a></li>
                        <li class="nav-item"><a class="nav-link" href="/admin/ui-progress">Progress</a></li>
                        <li class="nav-item"><a class="nav-link" href="/admin/ui-grid">Grid System</a></li>
                        <li class="nav-item"><a class="nav-link" href="/admin/ui-carousel">Carousel</a></li>
                        <li class="nav-item"><a class="nav-link" href="/admin/ui-range-slider">Range Slider</a></li>
                        <li class="nav-item"><a class="nav-link" href="/admin/ui-nestable">Nestable</a></li>
                        <li class="nav-item"><a class="nav-link" href="/admin/ui-treeview">Tree View</a></li>
                        <li class="nav-item"><a class="nav-link" href="/admin/ui-draggable-cards">Draggable Cards</a></li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="javascript: void(0);" aria-expanded="false"><i class="fa fa-file"></i> <span class="toggle-none">Forms <span class="fa arrow"></span></span></a>
                    <ul class="nav-second-level nav flex-column sub-menu" aria-expanded="false">
                        <li class="nav-item"><a class="nav-link" href="/admin/form-basic">Basic Elements</a></li>
                        <li class="nav-item"><a class="nav-link" href="/admin/form-validations">Form Validations</a></li>
                        <li class="nav-item"><a class="nav-link" href="/admin/form-masks">Form Masks</a></li>
                        <li class="nav-item"><a class="nav-link" href="/admin/form-picker">Form Picker</a></li>
                        <li class="nav-item"><a class="nav-link" href="/admin/form-editor">Text Editor</a></li>
                        <li class="nav-item"><a class="nav-link" href="/admin/form-file-upload">File upload</a></li>
                        <li class="nav-item"><a class="nav-link" href="/admin/form-wizard">Form Wizard</a></li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="javascript: void(0);" aria-expanded="false"><i class="fa fa-table"></i> <span class="toggle-none">Tables <span class="fa arrow"></span></span></a>
                    <ul class="nav-second-level nav flex-column sub-menu" aria-expanded="false">
                        <li class="nav-item"><a class="nav-link" href="/admin/table-basic">Basic Tables</a></li>
                        <li class="nav-item"><a class="nav-link" href="/admin/table-data">Data Tables</a></li>
                        <li class="nav-item"><a class="nav-link" href="/admin/table-js-grid">JsGrid Tables</a></li>
                        <li class="nav-item"><a class="nav-link" href="/admin/table-foo">Foo Tables</a></li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="javascript: void(0);" aria-expanded="false"><i class="fa fa-bar-chart"></i> <span class="toggle-none">Charts <span class="fa arrow"></span> <span class="badge badge-pill badge-success float-right mr-2">7</span></span></a>
                    <ul class="nav-second-level nav flex-column sub-menu" aria-expanded="false">
                        <li class="nav-item"><a class="nav-link" href="/admin/chart-flot">Flot</a></li>
                        <li class="nav-item"><a class="nav-link" href="/admin/chart-morris">Morris</a></li>
                        <li class="nav-item"><a class="nav-link" href="/admin/chart-radial">Radial</a></li>
                        <li class="nav-item"><a class="nav-link" href="/admin/chart-c3">C3</a></li>
                        <li class="nav-item"><a class="nav-link" href="/admin/chart-sparkline">Sparkline</a></li>
                        <li class="nav-item"><a class="nav-link" href="/admin/chart-rickshaw">Rickshaw</a></li>
                        <li class="nav-item"><a class="nav-link" href="/admin/chart-chartjs">ChartJs</a></li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="javascript: void(0);" aria-expanded="false"><i class="fa fa-map-marker"></i> <span class="toggle-none">Maps <span class="fa arrow"></span></span></a>
                    <ul class="nav-second-level nav flex-column sub-menu" aria-expanded="false">
                        <li class="nav-item"><a class="nav-link" href="/admin/map-vector">Vector map</a></li>
                        <li class="nav-item"><a class="nav-link" href="/admin/map-google">Google map</a></li>
                    </ul>
                </li>
                <li class="nav-heading"><span>EXAMPLES</span></li>
                <li class="nav-item">
                    <a class="nav-link" href="javascript: void(0);" aria-expanded="false"><i class="fa fa-shopping-cart"></i> <span class="toggle-none">E-Commerce <span class="fa arrow"></span></span></a>
                    <ul class="nav-second-level nav flex-column sub-menu" aria-expanded="false">
                        <li class="nav-item"><a class="nav-link" href="/admin/ecommerce-add">Add Product</a></li>
                        <li class="nav-item"><a class="nav-link" href="/admin/ecommerce-products">All Products</a></li>
                        <li class="nav-item"><a class="nav-link" href="/admin/ecommerce-orders">Orders</a></li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="javascript: void(0);" aria-expanded="false"><i class="fa fa-briefcase"></i> <span class="toggle-none">Corporate <span class="fa arrow"></span></span></a>
                    <ul class="nav-second-level nav flex-column sub-menu" aria-expanded="false">
                        <li class="nav-item"><a class="nav-link" href="/admin/corporate-add">Add Pages</a></li>
                        <li class="nav-item"><a class="nav-link" href="/admin/corporate-pages">All Pages</a></li>
                    </ul>
                </li>
                <li class="nav-heading"><span>OTHERS</span></li>
                <li class="nav-item active">
                    <a class="nav-link" href="javascript: void(0);" aria-expanded="false"><i class="fa fa-folder"></i> <span class="toggle-none">Sample Pages <span class="fa arrow"></span></span></a>
                    <ul class="nav-second-level nav flex-column sub-menu" aria-expanded="false">
                        <li class="nav-item"><a class="nav-link" href="/admin/page-blank">Blank Page</a></li>
                        <li class="nav-item"><a class="nav-link" href="/admin/page-login">Login</a></li>
                        <li class="nav-item"><a class="nav-link" href="/admin/page-register">Register</a></li>
                        <li class="nav-item"><a class="nav-link" href="/admin/page-forget-password">Forget Password</a></li>
                        <li class="nav-item"><a class="nav-link" href="/admin/page-lockscreen">Lock-screen</a></li>
                        <li class="nav-item"><a class="nav-link" href="/admin/page-404">404</a></li>
                        <li class="nav-item"><a class="nav-link" href="/admin/page-gallery">Gallery</a></li>
                        <li class="nav-item"><a class="nav-link" href="/admin/page-timeline">Timeline</a></li>
                        <li class="nav-item"><a class="nav-link" href="/admin/page-invoice">Invoice</a></li>
                        <li class="nav-item"><a class="nav-link" href="/admin/page-profile">Profile</a></li>
                        <li class="nav-item"><a class="nav-link" href="/admin/page-faqs">Faqs</a></li>
                        <li class="nav-item"><a class="nav-link" href="/admin/page-pricing">Pricing</a></li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="javascript: void(0);" aria-expanded="false"><i class="fa fa-folder-open"></i> <span class="toggle-none">Multi Level<span class="fa arrow "></span></span></a>
                    <ul class="nav-second-level nav flex-column" aria-expanded="false">
                        <li class="nav-item"><a class="nav-link" href="javascript: void(0);">Level 1</a></li>
                        <li class="nav-item"><a class="nav-link" href="javascript: void(0);" aria-expanded="false">Level 2 <span class="fa arrow"></span></a>
                            <ul class="nav-third-level nav flex-column sub-menu" aria-expanded="false">
                                <li class="nav-item"><a class="nav-link" href="javascript: void(0);">Level 2</a></li>
                                <li class="nav-item"><a class="nav-link" href="javascript: void(0);">Level 2</a></li>
                            </ul>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</div>
