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
                <li class="sidebar_menu {{ request()->routeIs('halamaan', 'pagesComp') ? 'active' : '' }}">
                    <a href="#" class="sidebar_link">
                        <div class="link_ic">
                            <i class="fa-regular fa-file-lines"></i>
                        </div>
                        <span>Pages</span>
                    </a>

                    <ul class="sub_menu {{ request()->routeIs('halamaan', 'pagesComp') ? 'ada_sub' : '' }}">
                        <li class="sidebar_menu active">
                            <a href="{{ route('halamaan') }}"
                                class="sidebar_link {{ request()->routeIs('halamaan') ? 'active' : '' }}">
                                <div class="link_ic">
                                    <i class="fa-solid fa-caret-right"></i>
                                </div>
                                <span>Create Page</span>
                            </a>
                        </li>
                        <li class="sidebar_menu">
                            <a href="{{ route('pagesComp') }}"
                                class="sidebar_link {{ request()->routeIs('pagesComp') ? 'active' : '' }}">
                                <div class="link_ic">
                                    <i class="fa-solid fa-caret-right"></i>
                                </div>
                                <span>Page Component</span>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="sidebar_menu {{ request()->routeIs('media') ? 'active' : '' }}">
                    <a href="#" class="sidebar_link ">
                        <div class="link_ic">
                            <i class="fa-solid fa-photo-film"></i>
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
                <li class="sidebar_menu {{ request()->routeIs('userMan') ? 'active' : '' }}">
                    <a href="{{ route('userMan') }}" class="sidebar_link ">
                        <div class="link_ic">
                            <i class="fa-solid fa-gear"></i>
                        </div>
                        <span>User Manager</span>
                    </a>
                </li>
                <li class="sidebar_menu {{ request()->routeIs('setting') ? 'active' : '' }}">
                    <a href="{{ route('setting') }}" class="sidebar_link ">
                        <div class="link_ic">
                            <i class="fa-solid fa-gear"></i>
                        </div>
                        <span>Setting</span>
                    </a>
                </li>

            </ul>
        </div>
    </div>
</aside>
