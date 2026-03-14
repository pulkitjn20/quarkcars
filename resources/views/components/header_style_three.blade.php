<header class="main-header-three">
    <nav class="main-menu main-menu-three">
        <div class="main-menu-three__wrapper">
            <div class="main-menu-three__wrapper-inner">
                <div class="main-menu-three__left">
                    <div class="main-menu-three__logo">
                        <a href="{{ route('index') }}"><img src="{{ asset('assets/images/resources/logo-1.png') }}"
                                alt=""></a>
                    </div>
                </div>
                <div class="main-menu-three__middle-box">
                    <div class="main-menu-three__main-menu-box">
                        <a href="#" class="mobile-nav__toggler"><i class="fa fa-bars"></i></a>
                        <x-menuList />
                    </div>
                    <div class="main-menu-three__search-cart-box">
                        <div class="main-menu-three__search-box">
                            <a href="#" class="main-menu-three__search search-toggler icon-search"></a>
                        </div>
                        <div class="main-menu-three__cart-box">
                            <a href="{{ route('cart') }}" class="main-menu-three__cart">
                                <span class="far fa-shopping-cart"></span>
                                <span class="main-menu-three__cart-count">02</span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="main-menu-three__right">
                    <div class="main-menu-three__call">
                        <div class="main-menu-three__call-icon">
                            <i class="icon-call-3"></i>
                        </div>
                        <div class="main-menu-three__call-content">
                            <p class="main-menu-three__call-sub-title">Call Anytime</p>
                            <h5 class="main-menu-three__call-number"><a href="tel:23645689622">+236 (456) 896
                                    22</a>
                            </h5>
                        </div>
                    </div>
                    <div class="main-menu-three__nav-sidebar-icon">
                        <a class="navSidebar-button" href="#">
                            <span class="icon-dots-menu-one"></span>
                            <span class="icon-dots-menu-two"></span>
                            <span class="icon-dots-menu-three"></span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </nav>
</header>

<div class="stricky-header stricked-menu main-menu main-menu-three">
    <div class="sticky-header__content"></div><!-- /.sticky-header__content -->
</div><!-- /.stricky-header -->
