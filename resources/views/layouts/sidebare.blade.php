<a href="#" class="brand-link">
    <img src="{{ asset('dist/img/avatar5.png') }}" alt="AdminLTE Logo" class="brand-image img-rounded elevation-3"
        style="opacity: 1;">
    <span class="brand-text font-weight-light text-white">پنل مدیریت</span>
</a>

<!-- Sidebar -->
<div class="sidebar" style="direction: ltr">
    <div style="direction: rtl">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 mr-2 d-flex">
            <div class="info">
                <a href="#" class="d-block text-white">قائم الهی مقدم ( مدیریت )</a>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                data-accordion="false">
                <li class="nav-item has-treeview">
                    <a href="#" class="nav-link">
                        <i class="nav-icon text-white fa fa-book"></i>
                        <p class="text-white">
                            کتاب ها
                            <i class="fa fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ Route('books.create') }}" class="nav-link">
                                <i class="fa fa-plus text-white nav-icon"></i>
                                <p class="text-white">اضافه کردن کتاب جدید</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ Route('books.index') }}" class="nav-link">
                                <i class="fa fa-list-ol text-white nav-icon"></i>
                                <p class="text-white">لیست کتاب ها</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item has-treeview">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fa fa-first-order text-white"></i>
                        <p class="text-white">
                            سفارشات
                            <i class="fa fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ Route('orders.index') }}" class="nav-link">
                                <i class="fa fa-list-ol text-white nav-icon"></i>
                                <p class="text-white">لیست سفارشات</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item has-treeview">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fa fa-money text-white"></i>
                        <p class="text-white">
                            پرداختی ها
                            <i class="fa fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ Route('payments.index') }}" class="nav-link">
                                <i class="fa fa-list-ol text-white nav-icon"></i>
                                <p class="text-white">لیست پرداختی ها</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item has-treeview">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fa fa-handshake-o text-white"></i>
                        <p class="text-white">
                            امانتی ها
                            <i class="fa fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ Route('trusts.index') }}" class="nav-link">
                                <i class="fa fa-list-ol text-white nav-icon"></i>
                                <p class="text-white"> لیست کتاب های امانتی</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item has-treeview">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fa fa-users text-white"></i>
                        <p class="text-white">
                            کاربران
                            <i class="fa fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ Route('users.index') }}" class="nav-link">
                                <i class="fa fa-list-ol nav-icon text-white"></i>
                                <p class="text-white"> لیست کاربران</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a href="https://github.com/ghaemelahi" target="_blanck" class="nav-link">
                      <i class="nav-icon fa fa-github text-white"></i>
                      <p class="text-white">
                        گیت هاب پروژه
                      </p>
                    </a>
                  </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
</div>
