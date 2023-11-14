<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
        <img src="" alt="" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">پنل مدیریت</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar" style="direction: ltr">
        <div style="direction: rtl">
            <!-- Sidebar user panel (optional) -->
            <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                <div class="image">
                    <img src="" class="img-circle elevation-2" alt="User Image">
                </div>
                <div class="info">
                    <a href="" class="d-block">داوود خدادادی</a>
                </div>
            </div>

            <!-- Sidebar Menu -->
            <nav class="mt-2">
                <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                    data-accordion="false">
                    <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                    <li class="nav-item has-treeview {{ isActive('importexcel', 'menu-open') }}">
                        <a href="" class="nav-link {{ isActive('importexcel') }}">
                            <i class="nav-icon fa fa-dashboard"></i>
                            <p>
                                لیست اکسل
                                <i class="fa fa-angle-left right"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="{{ route('importexcel') }}" class="nav-link {{ isActive('importexcel') }}">
                                    <i class="fa fa-circle-o nav-icon"></i>
                                    <p>افزودن نیرو از اکسل</p>
                                </a>
                            </li>
                        </ul>
                    </li>

                    <li
                        class="nav-item has-treeview {{ isActive(['amaken', 'tablighat', 'basij', 'index'], 'menu-open') }}">
                        <a href="" class="nav-link {{ isActive(['amaken', 'tablighat', 'basij', 'index']) }}">
                            <i class="nav-icon fa fa-tree"></i>
                            <p>
                                لیست کلی
                                <i class="fa fa-angle-left right"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="{{ route('amaken') }}" class="nav-link {{ isActive('amaken') }}">
                                    <i class="fa fa-circle-o nav-icon"></i>
                                    <p>اماکن</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('tablighat') }}" class="nav-link {{ isActive('tablighat') }}">
                                    <i class="fa fa-circle-o nav-icon"></i>
                                    <p>تبلیغات</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('basij') }}" class="nav-link {{ isActive('basij') }}">
                                    <i class="fa fa-circle-o nav-icon"></i>
                                    <p>بسیج</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item has-treeview {{ isActive(['azmoon'], 'menu-open') }}">
                        <a href="" class="nav-link {{ isActive(['azmoon']) }}">
                            <i class="nav-icon fa fa-edit"></i>
                            <p>
                                آزمون
                                <i class="fa fa-angle-left right"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="{{ route('azmoon') }}" class="nav-link {{ isActive('azmoon') }}">
                                    <i class="fa fa-circle-o nav-icon"></i>
                                    <p>در مرحله آزمون</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item has-treeview {{ isActive(['comision'], 'menu-open') }}">
                        <a href="" class="nav-link {{ isActive(['comision']) }}">
                            <i class="nav-icon fa fa-table"></i>
                            <p>
                                کمیسیون
                                <i class="fa fa-angle-left right"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="{{ route('comision') }}" class="nav-link {{ isActive('comision') }}">
                                    <i class="fa fa-circle-o nav-icon"></i>
                                    <p>در مرحله کمیسون</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                    {{-- <li class="nav-item has-treeview menu-open">
            <a class="nav-link">
              <i class="nav-icon fa fa-table"></i>
              <p>
                بایگانی
                <i class="fa fa-angle-left right"></i>
              </p>
            </a>
          </li> --}}
                    <li class="nav-item has-treeview {{ isActive(['khorooj', 'pagestring'], 'menu-open') }}">
                        <a href="" class="nav-link {{ isActive(['khorooj', 'pagestring']) }}">
                            <i class="nav-icon fa fa-edit"></i>
                            <p>
                                نامه های معرفی
                                <i class="fa fa-angle-left right"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="{{ route('pagestring') }}" class="nav-link {{ isActive('pagestring') }}">
                                    <i class="fa fa-circle-o nav-icon"></i>
                                    <p>
                                        توضیحات
                                    </p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('khorooj') }}" class="nav-link {{ isActive('khorooj') }}">
                                    <i class="fa fa-circle-o nav-icon"></i>
                                    <p>
                                        خروجی اکسل
                                    </p>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item has-treeview {{ isActive(['informations'], 'menu-open') }}">
                        <a href="" class="nav-link {{ isActive(['informations']) }}">
                            <i class="nav-icon fa fa-table"></i>
                            <p>
                                اطلاع رسانی خدام
                                <i class="fa fa-angle-left right"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="{{ route('information') }}" class="nav-link {{ isActive('information') }}">
                                    <i class="fa fa-circle-o nav-icon"></i>
                                    <p>قوانین و مقررات</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </nav>
            <!-- /.sidebar-menu -->
        </div>
    </div>
    <!-- /.sidebar -->
</aside>
