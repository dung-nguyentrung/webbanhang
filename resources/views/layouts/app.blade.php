<!DOCTYPE html>
<html lang="en">
<meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->

<head>
    <meta charset="utf-8">
    <title>Cartzilla</title>
    <!-- SEO Meta Tags-->
    <meta name="description" content="Cartzilla - Bootstrap E-commerce Template">
    <meta name="keywords"
        content="bootstrap, shop, e-commerce, market, modern, responsive,  business, mobile, bootstrap, html5, css3, js, gallery, slider, touch, creative, clean">
    <meta name="author" content="Createx Studio">
    <!-- Viewport-->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Favicon and Touch Icons-->
    <link rel="apple-touch-icon" sizes="180x180" href="apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="favicon-16x16.png">
    <link rel="manifest" href="site.webmanifest">
    <link rel="mask-icon" color="#fe6a6a" href="safari-pinned-tab.svg">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="theme-color" content="#ffffff">
    <!-- Vendor Styles including: Font Icons, Plugins, etc.-->
    <link rel="stylesheet" media="screen" href="{{ asset('vendor/simplebar/dist/simplebar.min.css') }}" />
    <link rel="stylesheet" media="screen" href="{{ asset('vendor/tiny-slider/dist/tiny-slider.css') }}" />
    <link rel="stylesheet" media="screen" href="{{ asset('vendor/drift-zoom/dist/drift-basic.min.css') }}" />
    <!-- Main Theme Styles + Bootstrap-->
    <link rel="stylesheet" media="screen" href="{{ asset('css/theme.min.css') }}">
    <!-- Google Tag Manager-->
    <script>
        (function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
      new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
      j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
      '../www.googletagmanager.com/gtm5445.html?id='+i+dl;f.parentNode.insertBefore(j,f);
      })(window,document,'script','dataLayer','GTM-WKV3GT5');
    </script>
</head>
<!-- Body-->

<body class="handheld-toolbar-enabled">
    <!-- Google Tag Manager (noscript)-->
    <noscript>
        <iframe src="http://www.googletagmanager.com/ns.html?id=GTM-WKV3GT5" height="0" width="0"
            style="display: none; visibility: hidden;"></iframe>
    </noscript>

    @if (!Auth::check())
    <!-- Sign in / sign up modal-->
    <div class="modal fade" id="signin-modal" tabindex="-1" role="dialog">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header bg-secondary">
                    <ul class="nav nav-tabs card-header-tabs" role="tablist">
                        <li class="nav-item"><a class="nav-link fw-medium active" href="#signin-tab"
                                data-bs-toggle="tab" role="tab" aria-selected="true"><i
                                    class="ci-unlocked me-2 mt-n1"></i>Đăng nhập</a></li>
                        <li class="nav-item"><a class="nav-link fw-medium" href="#signup-tab" data-bs-toggle="tab"
                                role="tab" aria-selected="false"><i class="ci-user me-2 mt-n1"></i>Đăng ký</a></li>
                    </ul>
                    <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body tab-content py-4">
                    {{-- Đăng nhập --}}
                    @include('auth.login')
                    {{-- Đăng ký --}}
                    @include('auth.register')
                </div>
            </div>
        </div>
    </div>
    @endif
    <main class="page-wrapper">
        <!-- Quick View Modal-->
        <div class="modal-quick-view modal fade" id="quick-view" tabindex="-1">
            <div class="modal-dialog modal-xl">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title product-title"><a href="shop-single-v1.html" data-bs-toggle="tooltip"
                                data-bs-placement="right" title="Go to product page">Sports Hooded Sweatshirt<i
                                    class="ci-arrow-right fs-lg ms-2"></i></a></h4>
                        <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <!-- Product gallery-->
                            <div class="col-lg-7 pe-lg-0">
                                <div class="product-gallery">
                                    <div class="product-gallery-preview order-sm-2">
                                        <div class="product-gallery-preview-item active" id="first"><img
                                                class="image-zoom" src="img/shop/single/gallery/01.jpg"
                                                data-zoom="img/shop/single/gallery/01.jpg" alt="Product image">
                                            <div class="image-zoom-pane"></div>
                                        </div>
                                        <div class="product-gallery-preview-item" id="second"><img class="image-zoom"
                                                src="img/shop/single/gallery/02.jpg"
                                                data-zoom="img/shop/single/gallery/02.jpg" alt="Product image">
                                            <div class="image-zoom-pane"></div>
                                        </div>
                                        <div class="product-gallery-preview-item" id="third"><img class="image-zoom"
                                                src="img/shop/single/gallery/03.jpg"
                                                data-zoom="img/shop/single/gallery/03.jpg" alt="Product image">
                                            <div class="image-zoom-pane"></div>
                                        </div>
                                        <div class="product-gallery-preview-item" id="fourth"><img class="image-zoom"
                                                src="img/shop/single/gallery/04.jpg"
                                                data-zoom="img/shop/single/gallery/04.jpg" alt="Product image">
                                            <div class="image-zoom-pane"></div>
                                        </div>
                                    </div>
                                    <div class="product-gallery-thumblist order-sm-1"><a
                                            class="product-gallery-thumblist-item active" href="#first"><img
                                                src="img/shop/single/gallery/th01.jpg" alt="Product thumb"></a><a
                                            class="product-gallery-thumblist-item" href="#second"><img
                                                src="img/shop/single/gallery/th02.jpg" alt="Product thumb"></a><a
                                            class="product-gallery-thumblist-item" href="#third"><img
                                                src="img/shop/single/gallery/th03.jpg" alt="Product thumb"></a><a
                                            class="product-gallery-thumblist-item" href="#fourth"><img
                                                src="img/shop/single/gallery/th04.jpg" alt="Product thumb"></a></div>
                                </div>
                            </div>
                            <!-- Product details-->
                            <div class="col-lg-5 pt-4 pt-lg-0 image-zoom-pane">
                                <div class="product-details ms-auto pb-3">
                                    <div class="d-flex justify-content-between align-items-center mb-2"><a
                                            href="shop-single-v1.html#reviews">
                                            <div class="star-rating"><i
                                                    class="star-rating-icon ci-star-filled active"></i><i
                                                    class="star-rating-icon ci-star-filled active"></i><i
                                                    class="star-rating-icon ci-star-filled active"></i><i
                                                    class="star-rating-icon ci-star-filled active"></i><i
                                                    class="star-rating-icon ci-star"></i>
                                            </div><span class="d-inline-block fs-sm text-body align-middle mt-1 ms-1">74
                                                Reviews</span>
                                        </a>
                                        <button class="btn-wishlist" type="button" data-bs-toggle="tooltip"
                                            title="Add to wishlist"><i class="ci-heart"></i></button>
                                    </div>
                                    <div class="mb-3"><span
                                            class="h3 fw-normal text-accent me-1">$18.<small>99</small></span>
                                        <del class="text-muted fs-lg me-3">$25.<small>00</small></del><span
                                            class="badge bg-danger badge-shadow align-middle mt-n2">Sale</span>
                                    </div>
                                    <div class="fs-sm mb-4"><span class="text-heading fw-medium me-1">Color:</span><span
                                            class="text-muted" id="colorOptionText">Red/Dark blue/White</span></div>
                                    <div class="position-relative me-n4 mb-3">
                                        <div class="form-check form-option form-check-inline mb-2">
                                            <input class="form-check-input" type="radio" name="color" id="color1"
                                                data-bs-label="colorOptionText" value="Red/Dark blue/White" checked>
                                            <label class="form-option-label rounded-circle" for="color1"><span
                                                    class="form-option-color rounded-circle"
                                                    style="background-image: url(img/shop/single/color-opt-1.png)"></span></label>
                                        </div>
                                        <div class="form-check form-option form-check-inline mb-2">
                                            <input class="form-check-input" type="radio" name="color" id="color2"
                                                data-bs-label="colorOptionText" value="Beige/White/Black">
                                            <label class="form-option-label rounded-circle" for="color2"><span
                                                    class="form-option-color rounded-circle"
                                                    style="background-image: url(img/shop/single/color-opt-2.png)"></span></label>
                                        </div>
                                        <div class="form-check form-option form-check-inline mb-2">
                                            <input class="form-check-input" type="radio" name="color" id="color3"
                                                data-bs-label="colorOptionText" value="Dark grey/White/Mustard">
                                            <label class="form-option-label rounded-circle" for="color3"><span
                                                    class="form-option-color rounded-circle"
                                                    style="background-image: url(img/shop/single/color-opt-3.png)"></span></label>
                                        </div>
                                        <div class="product-badge product-available mt-n1"><i
                                                class="ci-security-check"></i>Product available</div>
                                    </div>
                                    <form class="mb-grid-gutter">
                                        <div class="mb-3">
                                            <label class="fw-medium pb-1" for="product-size">Size:</label>
                                            <select class="form-select" required id="product-size">
                                                <option value="">Select size</option>
                                                <option value="xs">XS</option>
                                                <option value="s">S</option>
                                                <option value="m">M</option>
                                                <option value="l">L</option>
                                                <option value="xl">XL</option>
                                            </select>
                                        </div>
                                        <div class="mb-3 d-flex align-items-center">
                                            <select class="form-select me-3" style="width: 5rem;">
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                            </select>
                                            <button class="btn btn-primary btn-shadow d-block w-100" type="submit"><i
                                                    class="ci-cart fs-lg me-2"></i>Add to Cart</button>
                                        </div>
                                    </form>
                                    <h5 class="h6 mb-3 pb-2 border-bottom"><i
                                            class="ci-announcement text-muted fs-lg align-middle mt-n1 me-2"></i>Product
                                        info</h5>
                                    <h6 class="fs-sm mb-2">Style</h6>
                                    <ul class="fs-sm ps-4">
                                        <li>Hooded top</li>
                                    </ul>
                                    <h6 class="fs-sm mb-2">Composition</h6>
                                    <ul class="fs-sm ps-4">
                                        <li>Elastic rib: Cotton 95%, Elastane 5%</li>
                                        <li>Lining: Cotton 100%</li>
                                        <li>Cotton 80%, Polyester 20%</li>
                                    </ul>
                                    <h6 class="fs-sm mb-2">Art. No.</h6>
                                    <ul class="fs-sm ps-4 mb-0">
                                        <li>183260098</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Navbar 3 Level (Light)-->
        <header class="shadow-sm">
            <!-- Topbar-->
            <div class="topbar topbar-dark bg-dark">
                <div class="container">
                    <div class="topbar-text dropdown d-md-none"><a class="topbar-link dropdown-toggle" href="#"
                            data-bs-toggle="dropdown">Useful links</a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="tel:00331697720"><i
                                        class="ci-support text-muted me-2"></i>(00) 33 169 7720</a></li>
                            <li><a class="dropdown-item" href="order-tracking.html"><i
                                        class="ci-location text-muted me-2"></i>Order tracking</a></li>
                        </ul>
                    </div>
                    <div class="topbar-text text-nowrap d-none d-md-inline-block"><i class="ci-support"></i><span
                            class="text-muted me-1">Support</span><a class="topbar-link" href="tel:00331697720">(00) 33
                            169 7720</a></div>
                    <div class="tns-carousel tns-controls-static d-none d-md-block">
                        <div class="tns-carousel-inner"
                            data-carousel-options="{&quot;mode&quot;: &quot;gallery&quot;, &quot;nav&quot;: false}">
                            <div class="topbar-text">Free shipping for order over $200</div>
                            <div class="topbar-text">We return money within 30 days</div>
                            <div class="topbar-text">Friendly 24/7 customer support</div>
                        </div>
                    </div>
                    <div class="ms-3 text-nowrap"><a class="topbar-link me-4 d-none d-md-inline-block"
                            href="order-tracking.html"><i class="ci-location"></i>Order tracking</a>
                        <div class="topbar-text dropdown disable-autohide"><a class="topbar-link dropdown-toggle"
                                href="#" data-bs-toggle="dropdown"><img class="me-2" src="img/flags/en.png" width="20"
                                    alt="English">Eng / $</a>
                            <ul class="dropdown-menu dropdown-menu-end">
                                <li class="dropdown-item">
                                    <select class="form-select form-select-sm">
                                        <option value="usd">$ USD</option>
                                        <option value="eur">€ EUR</option>
                                        <option value="ukp">£ UKP</option>
                                        <option value="jpy">¥ JPY</option>
                                    </select>
                                </li>
                                <li><a class="dropdown-item pb-1" href="#"><img class="me-2" src="img/flags/fr.png"
                                            width="20" alt="Français">Français</a></li>
                                <li><a class="dropdown-item pb-1" href="#"><img class="me-2" src="img/flags/de.png"
                                            width="20" alt="Deutsch">Deutsch</a></li>
                                <li><a class="dropdown-item" href="#"><img class="me-2" src="img/flags/it.png"
                                            width="20" alt="Italiano">Italiano</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Remove "navbar-sticky" class to make navigation bar scrollable with the page.-->
            <div class="navbar-sticky bg-light">
                <div class="navbar navbar-expand-lg navbar-light">
                    <div class="container"><a class="navbar-brand d-none d-sm-block flex-shrink-0"
                            href="index-2.html"><img src="img/logo-dark.png" width="142" alt="Cartzilla"></a><a
                            class="navbar-brand d-sm-none flex-shrink-0 me-2" href="index-2.html"><img
                                src="img/logo-icon.png" width="74" alt="Cartzilla"></a>
                        <div class="input-group d-none d-lg-flex mx-4">
                            <input class="form-control rounded-end pe-5" type="text"
                                placeholder="Search for products"><i
                                class="ci-search position-absolute top-50 end-0 translate-middle-y text-muted fs-base me-3"></i>
                        </div>
                        <div class="navbar-toolbar d-flex flex-shrink-0 align-items-center">
                            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                                data-bs-target="#navbarCollapse"><span class="navbar-toggler-icon"></span></button><a
                                class="navbar-tool navbar-stuck-toggler" href="#"><span
                                    class="navbar-tool-tooltip">Expand
                                    menu</span>
                                <div class="navbar-tool-icon-box"><i class="navbar-tool-icon ci-menu"></i></div>
                            </a><a class="navbar-tool d-none d-lg-flex" href="account-wishlist.html"><span
                                    class="navbar-tool-tooltip">Wishlist</span>
                                <div class="navbar-tool-icon-box"><i class="navbar-tool-icon ci-heart"></i></div>
                            </a>
                            @if (Auth::check())
                            <a class="navbar-tool ms-1 ms-lg-0 me-n1 me-lg-2" @can('admin_access') href="/admin" @else
                                href="/user/profile" @endcan>
                                <div class="navbar-tool-icon-box"><i class="navbar-tool-icon ci-user"></i></div>
                                <div class="navbar-tool-text ms-n3"><small>Xin chào, {{ Auth::user()->name }}</small>Tài
                                    khoản của tôi
                                </div>
                            </a>
                            @else
                            <a class="navbar-tool ms-1 ms-lg-0 me-n1 me-lg-2" href="#signin-modal"
                                data-bs-toggle="modal">
                                <div class="navbar-tool-icon-box"><i class="navbar-tool-icon ci-user"></i></div>
                                <div class="navbar-tool-text ms-n3"><small>Xin chào, Đăng nhập</small>Tài khoản của tôi
                                </div>
                            </a>
                            @endif

                            <div class="navbar-tool dropdown ms-3"><a
                                    class="navbar-tool-icon-box bg-secondary dropdown-toggle"
                                    href="shop-cart.html"><span class="navbar-tool-label">4</span><i
                                        class="navbar-tool-icon ci-cart"></i></a><a class="navbar-tool-text"
                                    href="shop-cart.html"><small>My Cart</small>$265.00</a>
                                <!-- Cart dropdown-->
                                <div class="dropdown-menu dropdown-menu-end">
                                    <div class="widget widget-cart px-3 pt-2 pb-3" style="width: 20rem;">
                                        <div style="height: 15rem;" data-simplebar data-simplebar-auto-hide="false">
                                            <div class="widget-cart-item pb-2 border-bottom">
                                                <button class="btn-close text-danger" type="button"
                                                    aria-label="Remove"><span aria-hidden="true">&times;</span></button>
                                                <div class="d-flex align-items-center"><a class="flex-shrink-0"
                                                        href="shop-single-v1.html"><img
                                                            src="img/shop/cart/widget/01.jpg" width="64"
                                                            alt="Product"></a>
                                                    <div class="ps-2">
                                                        <h6 class="widget-product-title"><a
                                                                href="shop-single-v1.html">Women
                                                                Colorblock Sneakers</a>
                                                        </h6>
                                                        <div class="widget-product-meta"><span
                                                                class="text-accent me-2">$150.<small>00</small></span><span
                                                                class="text-muted">x 1</span></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="widget-cart-item py-2 border-bottom">
                                                <button class="btn-close text-danger" type="button"
                                                    aria-label="Remove"><span aria-hidden="true">&times;</span></button>
                                                <div class="d-flex align-items-center"><a class="flex-shrink-0"
                                                        href="shop-single-v1.html"><img
                                                            src="img/shop/cart/widget/02.jpg" width="64"
                                                            alt="Product"></a>
                                                    <div class="ps-2">
                                                        <h6 class="widget-product-title"><a
                                                                href="shop-single-v1.html">TH
                                                                Jeans City Backpack</a>
                                                        </h6>
                                                        <div class="widget-product-meta"><span
                                                                class="text-accent me-2">$79.<small>50</small></span><span
                                                                class="text-muted">x 1</span></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="widget-cart-item py-2 border-bottom">
                                                <button class="btn-close text-danger" type="button"
                                                    aria-label="Remove"><span aria-hidden="true">&times;</span></button>
                                                <div class="d-flex align-items-center"><a class="flex-shrink-0"
                                                        href="shop-single-v1.html"><img
                                                            src="img/shop/cart/widget/03.jpg" width="64"
                                                            alt="Product"></a>
                                                    <div class="ps-2">
                                                        <h6 class="widget-product-title"><a
                                                                href="shop-single-v1.html">3-Color Sun Stash Hat</a>
                                                        </h6>
                                                        <div class="widget-product-meta"><span
                                                                class="text-accent me-2">$22.<small>50</small></span><span
                                                                class="text-muted">x 1</span></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="widget-cart-item py-2 border-bottom">
                                                <button class="btn-close text-danger" type="button"
                                                    aria-label="Remove"><span aria-hidden="true">&times;</span></button>
                                                <div class="d-flex align-items-center"><a class="flex-shrink-0"
                                                        href="shop-single-v1.html"><img
                                                            src="img/shop/cart/widget/04.jpg" width="64"
                                                            alt="Product"></a>
                                                    <div class="ps-2">
                                                        <h6 class="widget-product-title"><a
                                                                href="shop-single-v1.html">Cotton Polo Regular Fit</a>
                                                        </h6>
                                                        <div class="widget-product-meta"><span
                                                                class="text-accent me-2">$9.<small>00</small></span><span
                                                                class="text-muted">x 1</span></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="d-flex flex-wrap justify-content-between align-items-center py-3">
                                            <div class="fs-sm me-2 py-2"><span class="text-muted">Subtotal:</span><span
                                                    class="text-accent fs-base ms-1">$265.<small>00</small></span></div>
                                            <a class="btn btn-outline-secondary btn-sm" href="shop-cart.html">Expand
                                                cart<i class="ci-arrow-right ms-1 me-n1"></i></a>
                                        </div><a class="btn btn-primary btn-sm d-block w-100"
                                            href="checkout-details.html"><i
                                                class="ci-card me-2 fs-base align-middle"></i>Checkout</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="navbar navbar-expand-lg navbar-light navbar-stuck-menu mt-n2 pt-0 pb-2">
                    <div class="container">
                        <div class="collapse navbar-collapse" id="navbarCollapse">
                            <!-- Search-->
                            <div class="input-group d-lg-none my-3"><i
                                    class="ci-search position-absolute top-50 start-0 translate-middle-y text-muted fs-base ms-3"></i>
                                <input class="form-control rounded-start" type="text" placeholder="Search for products">
                            </div>
                            <!-- Departments menu-->
                            <ul class="navbar-nav navbar-mega-nav pe-lg-2 me-lg-2">
                                <li class="nav-item dropdown"><a class="nav-link dropdown-toggle ps-lg-0" href="#"
                                        data-bs-toggle="dropdown"><i class="ci-view-grid me-2"></i>Danh mục</a>
                                    <div class="dropdown-menu px-2 pb-4">
                                        @foreach ($categories->chunk(3) as $items)
                                        <div class="d-flex flex-wrap flex-sm-nowrap">
                                            @foreach ($items as $category)
                                            <div class="mega-dropdown-column pt-3 pt-sm-4 px-2 px-lg-3">
                                                <div class="widget widget-links"><a
                                                        class="d-block overflow-hidden rounded-3 mb-3"
                                                        href="/{{ $category->slug }}"><img
                                                            src="{{ $category->getFirstMediaUrl('categories') }}"
                                                            alt="{{ $category->name }}"></a>
                                                    <h6 class="fs-base mb-2">{{ $category->name }}</h6>
                                                    <ul class="widget-list">
                                                        @foreach ($category->subCategories as $subCategory)
                                                        <li class="widget-list-item mb-1"><a class="widget-list-link"
                                                                href="/{{ $subCategory->category->slug }}/{{ $subCategory->slug }}">
                                                                {{ $subCategory->name }}
                                                            </a></li>
                                                        @endforeach
                                                    </ul>
                                                </div>
                                            </div>
                                            @endforeach
                                        </div>
                                        @endforeach
                                    </div>
                                </li>
                            </ul>
                            <!-- Primary menu-->
                            <ul class="navbar-nav">
                                <li class="nav-item  active"><a class="nav-link" href="/">Trang chủ</a>
                                </li>
                                @foreach ($categories as $category)
                                <li class="nav-item"><a class="nav-link" href="/{{ $category->slug }}">{{
                                        $category->name
                                        }}</a>
                                </li>
                                @endforeach
                                <li class="nav-item "><a class="nav-link" href="/blog">Tin tức</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        @yield('content')
        <!-- Footer-->
        <footer class="footer bg-dark pt-5">
            <div class="container">
                <div class="row pb-2">
                    <div class="col-md-4 col-sm-6">
                        <div class="widget widget-links widget-light pb-2 mb-4">
                            <h3 class="widget-title text-light">Shop departments</h3>
                            <ul class="widget-list">
                                <li class="widget-list-item"><a class="widget-list-link" href="#">Sneakers &amp;
                                        Athletic</a></li>
                                <li class="widget-list-item"><a class="widget-list-link" href="#">Athletic Apparel</a>
                                </li>
                                <li class="widget-list-item"><a class="widget-list-link" href="#">Sandals</a></li>
                                <li class="widget-list-item"><a class="widget-list-link" href="#">Jeans</a></li>
                                <li class="widget-list-item"><a class="widget-list-link" href="#">Shirts &amp; Tops</a>
                                </li>
                                <li class="widget-list-item"><a class="widget-list-link" href="#">Shorts</a></li>
                                <li class="widget-list-item"><a class="widget-list-link" href="#">T-Shirts</a></li>
                                <li class="widget-list-item"><a class="widget-list-link" href="#">Swimwear</a></li>
                                <li class="widget-list-item"><a class="widget-list-link" href="#">Clogs &amp; Mules</a>
                                </li>
                                <li class="widget-list-item"><a class="widget-list-link" href="#">Bags &amp; Wallets</a>
                                </li>
                                <li class="widget-list-item"><a class="widget-list-link" href="#">Accessories</a></li>
                                <li class="widget-list-item"><a class="widget-list-link" href="#">Sunglasses &amp;
                                        Eyewear</a></li>
                                <li class="widget-list-item"><a class="widget-list-link" href="#">Watches</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6">
                        <div class="widget widget-links widget-light pb-2 mb-4">
                            <h3 class="widget-title text-light">Account &amp; shipping info</h3>
                            <ul class="widget-list">
                                <li class="widget-list-item"><a class="widget-list-link" href="#">Your account</a></li>
                                <li class="widget-list-item"><a class="widget-list-link" href="#">Shipping rates &amp;
                                        policies</a></li>
                                <li class="widget-list-item"><a class="widget-list-link" href="#">Refunds &amp;
                                        replacements</a></li>
                                <li class="widget-list-item"><a class="widget-list-link" href="#">Order tracking</a>
                                </li>
                                <li class="widget-list-item"><a class="widget-list-link" href="#">Delivery info</a></li>
                                <li class="widget-list-item"><a class="widget-list-link" href="#">Taxes &amp; fees</a>
                                </li>
                            </ul>
                        </div>
                        <div class="widget widget-links widget-light pb-2 mb-4">
                            <h3 class="widget-title text-light">About us</h3>
                            <ul class="widget-list">
                                <li class="widget-list-item"><a class="widget-list-link" href="#">About company</a></li>
                                <li class="widget-list-item"><a class="widget-list-link" href="#">Our team</a></li>
                                <li class="widget-list-item"><a class="widget-list-link" href="#">Careers</a></li>
                                <li class="widget-list-item"><a class="widget-list-link" href="#">News</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="widget pb-2 mb-4">
                            <h3 class="widget-title text-light pb-1">Stay informed</h3>
                            <form class="subscription-form validate"
                                action="https://studio.us12.list-manage.com/subscribe/post?u=c7103e2c981361a6639545bd5&amp;amp;id=29ca296126"
                                method="post" name="mc-embedded-subscribe-form" target="_blank" novalidate>
                                <div class="input-group flex-nowrap"><i
                                        class="ci-mail position-absolute top-50 translate-middle-y text-muted fs-base ms-3"></i>
                                    <input class="form-control rounded-start" type="email" name="EMAIL"
                                        placeholder="Your email" required>
                                    <button class="btn btn-primary" type="submit" name="subscribe">Subscribe*</button>
                                </div>
                                <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
                                <div style="position: absolute; left: -5000px;" aria-hidden="true">
                                    <input class="subscription-form-antispam" type="text"
                                        name="b_c7103e2c981361a6639545bd5_29ca296126" tabindex="-1">
                                </div>
                                <div class="form-text text-light opacity-50">*Subscribe to our newsletter to receive
                                    early
                                    discount offers, updates and new products info.</div>
                                <div class="subscription-status"></div>
                            </form>
                        </div>
                        <div class="widget pb-2 mb-4">
                            <h3 class="widget-title text-light pb-1">Download our app</h3>
                            <div class="d-flex flex-wrap">
                                <div class="me-2 mb-2"><a class="btn-market btn-apple" href="#" role="button"><span
                                            class="btn-market-subtitle">Download on the</span><span
                                            class="btn-market-title">App Store</span></a></div>
                                <div class="mb-2"><a class="btn-market btn-google" href="#" role="button"><span
                                            class="btn-market-subtitle">Download on the</span><span
                                            class="btn-market-title">Google Play</span></a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="pt-5 bg-darker">
                <div class="container">
                    <div class="row pb-3">
                        <div class="col-md-3 col-sm-6 mb-4">
                            <div class="d-flex"><i class="ci-rocket text-primary" style="font-size: 2.25rem;"></i>
                                <div class="ps-3">
                                    <h6 class="fs-base text-light mb-1">Fast and free delivery</h6>
                                    <p class="mb-0 fs-ms text-light opacity-50">Free delivery for all orders over $200
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6 mb-4">
                            <div class="d-flex"><i class="ci-currency-exchange text-primary"
                                    style="font-size: 2.25rem;"></i>
                                <div class="ps-3">
                                    <h6 class="fs-base text-light mb-1">Money back guarantee</h6>
                                    <p class="mb-0 fs-ms text-light opacity-50">We return money within 30 days</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6 mb-4">
                            <div class="d-flex"><i class="ci-support text-primary" style="font-size: 2.25rem;"></i>
                                <div class="ps-3">
                                    <h6 class="fs-base text-light mb-1">24/7 customer support</h6>
                                    <p class="mb-0 fs-ms text-light opacity-50">Friendly 24/7 customer support</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6 mb-4">
                            <div class="d-flex"><i class="ci-card text-primary" style="font-size: 2.25rem;"></i>
                                <div class="ps-3">
                                    <h6 class="fs-base text-light mb-1">Secure online payment</h6>
                                    <p class="mb-0 fs-ms text-light opacity-50">We possess SSL / Secure сertificate</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <hr class="hr-light mb-5">
                    <div class="row pb-2">
                        <div class="col-md-6 text-center text-md-start mb-4">
                            <div class="text-nowrap mb-4"><a class="d-inline-block align-middle mt-n1 me-3"
                                    href="#"><img class="d-block" src="img/footer-logo-light.png" width="117"
                                        alt="Cartzilla"></a>
                                <div class="btn-group dropdown disable-autohide">
                                    <button class="btn btn-outline-light border-light btn-sm dropdown-toggle px-2"
                                        type="button" data-bs-toggle="dropdown"><img class="me-2" src="img/flags/en.png"
                                            width="20" alt="English">Eng / $</button>
                                    <ul class="dropdown-menu my-1">
                                        <li class="dropdown-item">
                                            <select class="form-select form-select-sm">
                                                <option value="usd">$ USD</option>
                                                <option value="eur">€ EUR</option>
                                                <option value="ukp">£ UKP</option>
                                                <option value="jpy">¥ JPY</option>
                                            </select>
                                        </li>
                                        <li><a class="dropdown-item pb-1" href="#"><img class="me-2"
                                                    src="img/flags/fr.png" width="20" alt="Français">Français</a></li>
                                        <li><a class="dropdown-item pb-1" href="#"><img class="me-2"
                                                    src="img/flags/de.png" width="20" alt="Deutsch">Deutsch</a></li>
                                        <li><a class="dropdown-item" href="#"><img class="me-2" src="img/flags/it.png"
                                                    width="20" alt="Italiano">Italiano</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="widget widget-links widget-light">
                                <ul
                                    class="widget-list d-flex flex-wrap justify-content-center justify-content-md-start">
                                    <li class="widget-list-item me-4"><a class="widget-list-link" href="#">Outlets</a>
                                    </li>
                                    <li class="widget-list-item me-4"><a class="widget-list-link"
                                            href="#">Affiliates</a>
                                    </li>
                                    <li class="widget-list-item me-4"><a class="widget-list-link" href="#">Support</a>
                                    </li>
                                    <li class="widget-list-item me-4"><a class="widget-list-link" href="#">Privacy</a>
                                    </li>
                                    <li class="widget-list-item me-4"><a class="widget-list-link" href="#">Terms of
                                            use</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-6 text-center text-md-end mb-4">
                            <div class="mb-3"><a class="btn-social bs-light bs-twitter ms-2 mb-2" href="#"><i
                                        class="ci-twitter"></i></a><a class="btn-social bs-light bs-facebook ms-2 mb-2"
                                    href="#"><i class="ci-facebook"></i></a><a
                                    class="btn-social bs-light bs-instagram ms-2 mb-2" href="#"><i
                                        class="ci-instagram"></i></a><a
                                    class="btn-social bs-light bs-pinterest ms-2 mb-2" href="#"><i
                                        class="ci-pinterest"></i></a><a class="btn-social bs-light bs-youtube ms-2 mb-2"
                                    href="#"><i class="ci-youtube"></i></a>
                            </div><img class="d-inline-block" src="img/cards-alt.png" width="187" alt="Payment methods">
                        </div>
                    </div>
                    <div class="pb-4 fs-xs text-light opacity-50 text-center text-md-start">© All rights reserved. Made
                        by
                        <a class="text-light" href="https://createx.studio/" target="_blank" rel="noopener">Createx
                            Studio</a>
                    </div>
                </div>
            </div>
        </footer>
        <!-- Toolbar for handheld devices (Default)-->
        <div class="handheld-toolbar">
            <div class="d-table table-layout-fixed w-100"><a class="d-table-cell handheld-toolbar-item"
                    href="account-wishlist.html"><span class="handheld-toolbar-icon"><i
                            class="ci-heart"></i></span><span class="handheld-toolbar-label">Wishlist</span></a><a
                    class="d-table-cell handheld-toolbar-item" href="javascript:void(0)" data-bs-toggle="collapse"
                    data-bs-target="#navbarCollapse" onclick="window.scrollTo(0, 0)"><span
                        class="handheld-toolbar-icon"><i class="ci-menu"></i></span><span
                        class="handheld-toolbar-label">Menu</span></a><a class="d-table-cell handheld-toolbar-item"
                    href="shop-cart.html"><span class="handheld-toolbar-icon"><i class="ci-cart"></i><span
                            class="badge bg-primary rounded-pill ms-1">4</span></span><span
                        class="handheld-toolbar-label">$265.00</span></a></div>
        </div>
        <!-- Back To Top Button--><a class="btn-scroll-top" href="#top" data-scroll><span
                class="btn-scroll-top-tooltip text-muted fs-sm me-2">Top</span><i
                class="btn-scroll-top-icon ci-arrow-up">
            </i></a>
        <!-- Vendor scrits: js libraries and plugins-->
        <script src="{{ asset('vendor/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>
        <script src="{{ asset('vendor/simplebar/dist/simplebar.min.js') }}"></script>
        <script src="{{ asset('vendor/tiny-slider/dist/min/tiny-slider.js') }}"></script>
        <script src="{{ asset('vendor/smooth-scroll/dist/smooth-scroll.polyfills.min.js') }}"></script>
        <script src="{{ asset('vendor/drift-zoom/dist/Drift.min.js') }}"></script>
        <!-- Main theme script-->
        <script src="{{ asset('js/theme.min.js') }}"></script>
</body>

</html>