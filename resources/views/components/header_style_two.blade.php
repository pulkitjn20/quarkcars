<header class="main-header-two">
    <div class="main-menu-two__top">
        <div class="main-menu-two__top-inner">
            <ul class="list-unstyled main-menu-two__contact-list">
                <li>
                    <div class="icon">
                        <i class="icon-call-2"></i>
                    </div>
                    <div class="text">
                        <p><a href="tel:9288006780">+92 ( 8800 ) - 6780</a>
                        </p>
                    </div>
                </li>
                <li>
                    <div class="icon">
                        <i class="icon-envelope-2"></i>
                    </div>
                    <div class="text">
                        <p><a href="mailto:support@gmail.com">support@gmail.com</a>
                        </p>
                    </div>
                </li>
                <li>
                    <div class="icon">
                        <i class="icon-pin-2"></i>
                    </div>
                    <div class="text">
                        <p>55 Main Street, 2nd block, Malborne ,Australia</p>
                    </div>
                </li>
            </ul>
            <div class="main-menu-two__top-right">
                <div class="main-menu-two__top-login-reg-box">
                    <a href="{{ route('login') }}">Login</a>
                    <p>or</p>
                    <a href="{{ route('sign-up') }}">Register</a>
                </div>
                <div class="main-menu-two__social">
                    <a href="#"><i class="icon-facebook"></i></a>
                    <a href="#"><i class="icon-twitter"></i></a>
                    <a href="#"><i class="icon-instagram"></i></a>
                    <a href="#"><i class="icon-youtube"></i></a>
                </div>
            </div>
        </div>
    </div>
    <nav class="main-menu main-menu-two">
        <div class="main-menu-two__wrapper">
            <div class="main-menu-two__wrapper-inner">
                <div class="main-menu-two__left">
                    <div class="main-menu-two__logo">
                        <a href="{{ route('index') }}"><img src="{{ asset('assets/images/resources/logo-2.png') }}"
                                alt=""></a>
                    </div>
                </div>
                <div class="main-menu-two__middle-box">
                    <div class="main-menu-two__main-menu-box">
                        <a href="#" class="mobile-nav__toggler"><i class="fa fa-bars"></i></a>
                        <x-menuList />
                    </div>
                    <div class="main-menu-two__search-cart-box">
                        <div class="main-menu-two__search-box">
                            <a href="#" class="main-menu-two__search search-toggler icon-search"></a>
                        </div>
                        <div class="main-menu-two__cart-box">
                            <a href="{{ route('cart') }}" class="main-menu-two__cart">
                                <span class="far fa-shopping-cart"></span>
                                <span class="main-menu-two__cart-count">02</span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="main-menu-two__right">
                    <div class="main-menu-two__call">
                        <div class="main-menu-two__call-icon">
                            <i class="icon-call-3"></i>
                        </div>
                        <div class="main-menu-two__call-content">
                            <p class="main-menu-two__call-sub-title">Call Anytime</p>
                            <h5 class="main-menu-two__call-number"><a href="tel:23645689622">+236 (456) 896
                                    22</a>
                            </h5>
                        </div>
                    </div>
                    <div class="main-menu-two__nav-sidebar-icon">
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

<div class="stricky-header stricked-menu main-menu main-menu-two">
    <div class="sticky-header__content"></div><!-- /.sticky-header__content -->
</div><!-- /.stricky-header -->
