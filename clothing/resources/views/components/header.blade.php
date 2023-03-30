    <!-- Header Section Begin -->
    <header class="header-section">
        <div class="container-fluid">
            <div class="inner-header">
                <div class="logo">
                    <a href="/"><img src="{{Storage::url('img/logo.png')}}" alt="logo"></a>
                </div>
                <div class="header-right">
                    <img src="{{Storage::url('img/icons/search.png')}}" alt="" class="search-trigger">
                    <img src="{{Storage::url('img/icons/man.png')}}" alt="">
                    <a href="#">
                        <img src="{{Storage::url('img/icons/bag.png')}}" alt="">
                        <span>2</span>
                    </a>
                </div>
                <div class="user-access">
                    @if (Route::has('login'))
                        @auth
                            <a href="{{ url('/dashboard') }}" class="in">Dashboard</a>
                            
                        @else
                            <a href="{{ route('login') }}" >Log in</a>
                        @endauth
                @endif
                    
                </div>
                <nav class="main-menu mobile-menu">
                    <ul>
                        <li><a class="active" href="/">Home</a></li>
                        <li><a href="./categories.html">Shop</a>
                            <ul class="sub-menu">
                                <li><a href="product-page.html">Product Page</a></li>
                                <li><a href="shopping-cart.html">Shopping Card</a></li>
                                <li><a href="check-out.html">Check out</a></li>
                            </ul>
                        </li>
                        <li><a href="./product-page.html">About</a></li>
                        <li><a href="./check-out.html">Blog</a></li>
                        <li><a href="/contato">Contato</a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </header>
    <!-- Header Info Begin -->
    <div class="header-info">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-4">
                    <div class="header-item">
                        <img src="{{Storage::url('img/icons/delivery.png')}}" alt="">
                        <p>Free shipping on orders over $30 in USA</p>
                    </div>
                </div>
                <div class="col-md-4 text-left text-lg-center">
                    <div class="header-item">
                        <img src="{{Storage::url('img/icons/voucher.png')}}" alt="">
                        <p>20% Student Discount</p>
                    </div>
                </div>
                <div class="col-md-4 text-left text-xl-right">
                    <div class="header-item">
                    <img src="{{Storage::url('img/icons/sales.png')}}" alt="">
                    <p>30% off on dresses. Use code: 30OFF</p>
                </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Header Info End -->
    <!-- Header End -->