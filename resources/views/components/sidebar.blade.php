<aside class="sidebar">
    <div class="relative shadow-xl sidebar_wrapper">
        <div class="app_logo">
            <img src="/asset/img/logo-leter.png" alt="">
        </div>
        <div class="shadow-md tombol_nav_sidebar jeje">
            <i class="fa-solid fa-chevron-left puter"></i>
        </div>
        <button class="md:hidden menu_slide">
            <svg width="25px" height="25px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path
                    d="M7.00012 3V21M7.00012 21L3.00012 17M7.00012 21L11.0001 17M14.0001 21H21.0001M14.0001 15H19.0001M14.0001 9H17.0001M14.0001 3H15.0001"
                    stroke="#FFFFFF" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
            </svg>
        </button>
        <div class="menu_wrapper mlebu">
            <ul>
                <li class="sidebar_menu {{ request()->routeIs('pages') ? 'active' : '' }}">
                    <a href="#" class="sidebar_link">
                        <div class="link_ic">
                            <i class="fa-regular fa-newspaper"></i>
                        </div>
                        <span>Pages</span>
                    </a>
                    <ul class="sub_menu {{ request()->routeIs('pages', 'pages.create') ? 'ada_sub' : '' }}">
                        <li class="sidebar_menu active">
                            <a href="{{ route('pages') }}"
                                class="sidebar_link {{ request()->routeIs('pages', 'pages.create') ? 'active' : '' }}">
                                <div class="link_ic">
                                    <i class="fa-solid fa-caret-right"></i>
                                </div>
                                <span>Create</span>
                            </a>
                        </li>
                        <li class="sidebar_menu">
                            <a href="#" class="sidebar_link">
                                <div class="link_ic">
                                    <i class="fa-solid fa-caret-right"></i>
                                </div>
                                <span>All Page</span>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="sidebar_menu {{ request()->routeIs('media') ? 'active' : '' }}">
                    <a href="#" class="sidebar_link ">
                        <div class="link_ic">
                            <i class="fa-regular fa-newspaper"></i>
                        </div>
                        <span>Media</span>
                    </a>
                    <ul class="sub_menu {{ request()->routeIs('media') ? 'ada_sub' : '' }}">
                        <li class="sidebar_menu">
                            <a href="/dashboard/media"
                                class="sidebar_link {{ request()->routeIs('media') ? 'active' : '' }}">
                                <div class="link_ic">
                                    <i class="fa-solid fa-caret-right"></i>
                                </div>
                                <span>Galeri</span>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="sidebar_menu {{ request()->routeIs('tampilan') ? 'active' : '' }}">
                    <a href="#" class="sidebar_link ">
                        <div class="link_ic">
                            <i class="fa-regular fa-newspaper"></i>
                        </div>
                        <span>Layout</span>
                    </a>
                    <ul class="sub_menu {{ request()->routeIs('tampilan') ? 'ada_sub' : '' }}">
                        <li class="sidebar_menu">
                            <a href="/dashboard/tampilan"
                                class="sidebar_link {{ request()->routeIs('tampilan') ? 'active' : '' }}">
                                <div class="link_ic">
                                    <i class="fa-solid fa-caret-right"></i>
                                </div>
                                <span>Halaman 4</span>
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</aside>
