<header class="main-header home-2">
    <!-- Header top Area Start  -->
    <meta name="csrf-token-header" content="{{ csrf_token() }}">
    <div class="header-top-nav">
        <div class="container-fluid">
            <div class="row">
                <!--Left Start-->
                <div class="col-lg-4 col-md-4">
                    <div class="left-text">
                        <p>Hai, Selamat datang di Cemilunch!</p>
                    </div>
                </div>
                <!--Left end-->
                <!--Right Start-->
                <div class="col-lg-8 col-md-8 text-right">
                    <div class="header-right-nav">
                        <div class="dropdown-navs">
                            <ul>
                                <!-- Settings Start  -->
                                @auth
                                    <li class="dropdown after-n">
                                        <a class="angle-icon" href="#">{{ auth()->user()->name }}</a>
                                        <ul class="dropdown-nav">
                                            <li><a href="my-account.html">My Account</a></li>
                                            <li><a href="/order-list">Transaksi</a></li>
                                            @auth
                                                <li>
                                                    <form action="/logout" method="POST">
                                                        @csrf
                                                        <button type="submit" style="border: none"
                                                            class="bg-transparent pt-2 pl-1">Logout</button>
                                                    </form>

                                                </li>
                                            @else
                                                <li><a href="/login">Login </a></li>
                                            @endauth
                                        </ul>
                                    </li>
                                @endauth

                                <!-- Settings end  -->
                            </ul>
                        </div>
                    </div>
                </div>
                <!--Right end-->
            </div>
        </div>
    </div>
    <!-- Header top Area end  -->
    <!-- Header Navigation Area Start  -->
    <div class="header-navigation sticky-nav">
        <div class="container-fluid">
            <div class="row">
                <!--  Logo Area Start-->
                <div class="col-md-2 col-sm-2">
                    <div class="logo">
                        <a href="/"><img class="w-100" src="/assets/images/logo/logo-furniture.png"
                                alt="" /></a>
                    </div>
                </div>
                <!--  Logo Area end-->
                <div class="col-md-10 col-sm-10">
                    <!--Main Navigation Start -->
                    <div class="main-navigation d-none d-lg-block">
                        <ul>
                            <li><a href="/">Home</a></li>
                            <li><a href="#">Contact Us</a></li>
                        </ul>
                    </div>
                    <!--Main Navigation End -->
                    @auth
                        <div class="header_account_area">
                            <!--Cart info Start -->
                            <div class="cart-info d-flex home-13">
                                <div class="mini-cart-warp">
                                    <p class="count-items">0</p>
                                    <a href="/cart" class="count-cart"></a>
                                </div>
                            </div>
                            <!--Cart info End -->
                        </div>
                    @endauth

                </div>
            </div>
            <!-- mobile menu -->
            <div class="mobile-menu-area">
                <div class="mobile-menu">
                    <nav id="mobile-menu-active">
                        <ul class="menu-overflow">
                            <li><a href="/">Home</a></li>
                            <li><a href="contact.html">Contact Us</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
            <!-- mobile menu end-->
        </div>
    </div>
    <!--Header Bottom Account End -->
</header>


<script src="{{ asset('/assets/js/getCartCount.js') }}"></script>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        setTimeout(() => {
            const csrfToken = document.querySelector('meta[name="csrf-token-header"]').getAttribute(
                'content');
            getCountCart(csrfToken)
        }, 500);
    });
</script>
