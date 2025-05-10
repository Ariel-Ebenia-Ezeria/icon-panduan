<div id="sidebar">
    <div class="sidebar-wrapper active">
        <div class="sidebar-header position-relative">
            <div class="d-flex justify-content-between align-items-center">
                <div class="logo">
                    <a href="dashboard.html"><img src="/assets/compiled/png/logo.png"
                            style="width: 250px; height: auto;" alt="Logo" srcset=""></a>
                </div>
                <div class="sidebar-toggler  x">
                    <a href="#" class="sidebar-hide d-xl-none d-block"><i class="bi bi-x bi-middle"></i></a>
                </div>
            </div>
        </div>
        <div class="sidebar-menu">
            <ul class="menu">
                <li class="sidebar-title">Menu</li>

                <li class="sidebar-item {{ request()->is('dashboard') ? 'active' : '' }} ">
                    <a href="{{ route('dashboard') }}" class='sidebar-link'>
                        <i class="bi bi-grid-fill"></i>
                        <span>Dashboard</span>
                    </a>


                </li>

                <li class="sidebar-item has-sub {{ request()->is('barang*') ? 'active' : '' }}">
                    <a href="#" class='sidebar-link'>
                        <i class="bi bi-box-fill"></i>
                        <span>Gudang</span>
                    </a>
                    <ul class="submenu ">

                        <li class="submenu-item  {{ request()->is('barang') ? 'active' : '' }}">
                            <a href="{{ route('barang.index') }}" class="submenu-link">Data Barang</a>

                        </li>

                        <li class="submenu-item  {{ request()->is('barang/keluar') ? 'active' : '' }}">
                            <a href="{{ route('barang-keluar.index') }}" class="submenu-link">Barang Keluar</a>

                        </li>
                    </ul>

                </li>

                <li class="sidebar-item has-sub {{ request()->is('switch') || request()->is('router') ? 'active' : '' }}">
                    <a href="#" class='sidebar-link'>
                        <i class="bi bi-gear-fill"></i>
                        <span>Pre-Config</span>
                    </a>

                    <ul class="submenu ">

                        <li class="submenu-item {{ request()->is('switch') ? 'active' : '' }}">
                            <a href="{{ route('switch.index') }}" class="submenu-link">Swicth</a>

                        </li>

                        <li class="submenu-item {{ request()->is('router') ? 'active' : '' }}">
                            <a href="{{ route('router.index') }}" class="submenu-link">Router</a>

                        </li>
                    </ul>
                </li>

                <li
                    class="sidebar-item  has-sub {{ request()->is('faq') || request()->is('bantuan') ? 'active' : '' }}">
                    <a href="#" class='sidebar-link'>
                        <i class="bi bi-chat-dots-fill"></i>
                        <span>Faq & Bantuan</span>
                    </a>

                    <ul class="submenu ">

                        <li class="submenu-item {{ request()->is('faq*') ? 'active' : '' }}">
                            <a href="{{ route('faq.index') }}" class="submenu-link">Faq</a>

                        </li>

                        <li class="submenu-item {{ request()->is('bantuan*') ? 'active' : '' }}">
                            <a href="{{ route('bantuan.index') }}" class="submenu-link">Bantuan</a>
                        </li>
                    </ul>
                </li>
                <li class="sidebar-item">
                    <a href="{{ route('logout') }}" onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();"
                        class="btn btn-danger rounded-pill sidebar-link" style="color: white;"><i
                            data-feather="alert-circle" style="color: white;"></i>
                        <span>Logout</span>
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                </li>

            </ul>
        </div>
    </div>
</div>