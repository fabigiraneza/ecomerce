
    <div class="overlay" onclick="toggleMobileSidebar()"></div>

    <!-- Sidebar -->
    <aside class="sidebar" id="sidebar">
        <div class="sidebar-logo">
            <div class="logo-icon">A</div>
            <span class="logo-text">Admin Panel</span>
        </div>
        <ul class="sidebar-menu">
            <li>
                <a href="#hero" class="active">
                    <i class="fa-solid fa-home"></i>
                    <span>Hero</span>
                </a>
            </li>
            <li>
                <a href="#contact">
                    <i class="fa-solid fa-envelope"></i>
                    <span>Contact Us</span>
                </a>
            </li>
            <li>
                <a href="#about">
                    <i class="fa-solid fa-info-circle"></i>
                    <span>About Us</span>
                </a>
            </li>
            <li>
                <a href="#products">
                    <i class="fa-solid fa-box"></i>
                    <span>Products</span>
                </a>
            </li>
            <li>
                <a href="#settings">
                    <i class="fa-solid fa-gear"></i>
                    <span>Settings</span>
                </a>
            </li>
        </ul>
    </aside>

    <!-- Header -->
    <header class="header" id="header">
        <div class="header-left">
            <button class="menu-toggle" onclick="toggleSidebar()">
                <i class="fa-solid fa-bars"></i>
            </button>
        </div>
        
        <div class="header-right">
            <div class="user-menu">
                <div class="user-avatar">A</div>
                <div class="dropdown">
                    <a href="#profile">
                        <i class="fa-solid fa-user"></i>
                        <span>Profile</span>
                    </a>
                    <a href="#logout">
                        <i class="fa-solid fa-right-from-bracket"></i>
                        <span>Logout</span>
                    </a>
                </div>
            </div>
        </div>
    </header>
