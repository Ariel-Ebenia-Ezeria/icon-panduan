<nav class="main-navbar" style="background: linear-gradient(to right, #ffffff, #0097f5);  position: fixed; width: 100%; z-index: 1000; top: 0; left: 0; padding: 10px 0;">
    <div class="container">
        <!-- Logo Section -->
        <div class="logo" style="display: inline-block; vertical-align: middle; padding-right: 20px;">
            <a href="index.html">
                <img src="/assets/compiled/png/logo.png" style="width: 100px; height: auto;" alt="Logo">
            </a>
        </div>

        <!-- Navbar Menu Section -->
        <ul style="display: inline-block; list-style-type: none; margin: 0; padding: 0; float: right;">
            <li class="menu-item {{ request()->is('/') ? 'active' : '' }}" style="display: inline-block; margin-left: 20px;">
                <a href="{{ route('landing') }}" class="menu-link">
                    <span><i class="bi bi-house"></i> Home</span>
                </a>
            </li>
            <li class="menu-item {{ request()->is('gudang') ? 'active' : '' }}" style="display: inline-block; margin-left: 20px;">
                <a href="{{ route('gudang') }}" class="menu-link">
                    <span><i class="bi bi-box"></i> Stok Gudang</span>
                </a>
            </li>
            <li class="menu-item has-sub {{ request()->is('config*') ? 'active' : '' }}" style="display: inline-block; margin-left: 20px;">
                <a href="#" class="menu-link">
                    <span><i class="bi bi-gear"></i> Pre-Config</span>
                </a>
                <div class="submenu">
                    <div class="submenu-group-wrapper">
                        <ul class="submenu-group">
                            <li class="submenu-item">
                                <a href="{{ route('switch') }}" class="submenu-link">Switch</a>
                            </li>
                            <li class="submenu-item">
                                <a href="{{ route('router') }}" class="submenu-link">Router</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </li>
            <li class="menu-item {{ request()->is('faq') ? 'active' : '' }}" style="display: inline-block; margin-left: 20px;">
                <a href="{{ route('faq') }}" class='menu-link'>
                    <span><i class="bi bi-chat-dots"></i> FAQ</span>
                </a>
            </li>
        </ul>
    </div>
</nav>