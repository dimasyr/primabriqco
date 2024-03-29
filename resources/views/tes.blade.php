<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Prima Brico</title>
        <meta content="Prima Brico" name="description" />
        <meta content="Prima Brico" property="og:title" />
        <meta content="Prima Brico" property="og:description" />
        {{-- <meta content="https://assets.website-files.com/5e7ff3ec0c4ef4c974fa99e3/5e8648e562387a70db3bd718_Open%20Graph%20-%20Red%20-%20Home.jpg" property="og:image" /> --}}
        <meta content="Prima Brico" property="twitter:title" />
        <meta content="Prima Brico" property="twitter:description" />
        {{-- <meta content="https://assets.website-files.com/5e7ff3ec0c4ef4c974fa99e3/5e8648e562387a70db3bd718_Open%20Graph%20-%20Red%20-%20Home.jpg" property="twitter:image" /> --}}
        <meta property="og:type" content="website" />
        <meta content="summary_large_image" name="twitter:card" />
        <meta content="width=device-width, initial-scale=1" name="viewport" />
        <link href="{{ asset('/css/main.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('/css/image_slider.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('/css/dyr.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('/css/our_team.css') }}" rel="stylesheet" type="text/css" />
        <script src="https://ajax.googleapis.com/ajax/libs/webfont/1.6.26/webfont.js" type="text/javascript"></script>
        <script type="text/javascript">
            WebFont.load({
                google: {
                    families: ["Sen:regular,700,800"]
                }
            });
        </script>
        <!--[if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js" type="text/javascript"></script><![endif]-->
        <script type="text/javascript">
            ! function (o, c) {
                var n = c.documentElement,
                    t = " w-mod-";
                n.className += t + "js", ("ontouchstart" in o || o.DocumentTouch && c instanceof DocumentTouch) && (n
                    .className += t + "touch")
            }(window, document);
        </script>
        {{-- <link href="https://assets.website-files.com/5e7ff3ec0c4ef4c974fa99e3/5e8651e2daefb4744237fd55_Favicon%20-%20Red.png" rel="shortcut icon" type="image/x-icon" /> --}}
        {{-- <link href="https://assets.website-files.com/5e7ff3ec0c4ef4c974fa99e3/5e8651e73f7f8001990a27a4_Webclip%20-%20Red.png" rel="apple-touch-icon" /> --}}
        <style>
            .section-1 p, .section-1 h1 {
                color: #082032;
            }
        </style>
    </head>

    <body>
        <div class="menu-wrapper">
            <div data-collapse="medium" data-animation="over-right" data-duration="400" data-easing="ease" data-easing2="ease" role="banner" class="navbar w-nav">
                <div class="container">
                    <div class="nav-wrapper">
                        <a href="/" aria-current="page" class="brand w-nav-brand w--current" style="color: white;">PRIMA BRICO</a>
                        <div class="cart-nav-wrapper">
                            <nav role="navigation" class="nav-menu w-nav-menu">
                                <a href="/#" class="nav-link w-nav-link">About</a>
                                <a href="/#" class="nav-link w-nav-link">Spec & Price</a>
                                <a href="/#" class="nav-link w-nav-link">Gallery</a>
                                <a href="/#" class="nav-link w-nav-link">Contact</a>
                            </nav>
                            {{-- button hamburger untuk mobile --}}
                            <div class="nav-button w-nav-button">
                                <div class="w-icon-nav-menu"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="wf-section section-1">
            <div class="container">
                <div class="dyr-row">
                    <div class="dyr-column">
                        <div class="hero-wrapper">
                            <h1>We are
                                <br/>
                                <span style="color: #f0a500">Prima</span> Briqco Nusantara.
                            </h1>
                            <p class="hero-paragraph">We present the best coconut derivative products</p>
                            <div class="hero-button-wrapper" style="background-color: #f0a500">
                                <a href="/shop" class="btn light outline w-button">Know us more</a>
                            </div>
                        </div>
                    </div>
                    <div class="dyr-column">
                        <div class="hero-wrapper">
                            <div id="slideshow">
                                <div>
                                    <img src="{{ asset('/images/briket1.jpeg') }}" alt="">
                                </div>
                                <div>
                                    <img src="{{ asset('/images/cocofiber.png') }}" alt="">
                                </div>
                                <div>
                                    <img src="{{ asset('/images/cocopeat.png') }}" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="support-section wf-section">
            <div class="container">
                <div style="text-align: center; margin-bottom: 40px;">
                    <h2>Our Products</h2>
                </div>
                <div class="support-wrapper">
                    <div class="support-column">
                        <div class="support-square">
                            <img src="{{ asset('/images/briket1.jpeg') }}" alt="Briquette" />
                        </div>
                        <p>Our full product line is still available online here on our site! Getting outside and hiking is
                            still something you can do. Get your gear now!</p>
                    </div>
                    <div class="support-column">
                        <div class="support-square">
                            <img src="{{ asset('/images/cocofiber.png') }}" alt="Briquette" />
                        </div>
                        <p>Our full product line is still available online here on our site! Getting outside and hiking is
                            still something you can do. Get your gear now!</p>
                    </div>
                    <div class="support-column">
                        <div class="support-square">
                            <img src="{{ asset('/images/cocopeat.png') }}" alt="Briquette" />
                        </div>
                        <p>Our full product line is still available online here on our site! Getting outside and hiking is
                            still something you can do. Get your gear now!</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="support-section wf-section">
            <div class="container">
                <div style="text-align: center; margin-bottom: 40px;">
                    <h2>Coming Soon</h2>
                </div>
                <div class="support-wrapper">
                    <div class="support-column">
                        <div class="support-square">
                            <img src="{{ asset('/images/coco1.jpg') }}" alt="Briquette" />
                        </div>
                        <p>Our full product line is still available online here on our site! Getting outside and hiking is
                            still something you can do. Get your gear now!</p>
                    </div>
                    {{-- <div class="support-column">
                        <div class="support-square">
                            <img src="{{ asset('/images/cocofiber.png') }}" alt="Briquette" />
                        </div>
                        <p>Our full product line is still available online here on our site! Getting outside and hiking is
                            still something you can do. Get your gear now!</p>
                    </div>
                    <div class="support-column">
                        <div class="support-square">
                            <img src="{{ asset('/images/cocopeat.png') }}" alt="Briquette" />
                        </div>
                        <p>Our full product line is still available online here on our site! Getting outside and hiking is
                            still something you can do. Get your gear now!</p>
                    </div> --}}
                </div>
            </div>
        </div>
        
        {{-- <div class="safe-section wf-section">
            <div class="container">
                <div class="safe-wrapper">
                    <h2 class="safe-heading">How we&#x27;re keeping you safe during COVID-19</h2>
                    <p class="safe-paragraph">As an outdoor shop, we’ve taken precautionary measures to ensure the safety of
                        all our customers and team members.</p>
                    <div class="safe-button-wrapper"><a href="/alert/how-were-responding-to-covid-19"
                            class="btn light hero safe w-button">Read Our Statement</a></div>
                </div>
            </div>
        </div> --}}

        <div class="products-section wf-section">
            <div class="container">
                <div class="shop-top-wrapper">
                    <div class="support-top-left">
                        {{-- <div class="support-top-details-text">shop products</div> --}}
                        <h2 class="support-top-heading">Our Gallery</h2>
                    </div>
                    <div class="support-top-right"></div>
                </div>
                <div class="products-list-wrapper w-dyn-list">
                    <div role="list" class="products-list w-dyn-items">
                        <div role="listitem" class="w-dyn-item">
                            <div class="shop-item-wrapper"><a href="/product/white-tent"
                                    class="shop-item-link-wrapper w-inline-block">
                                    <div data-wf-sku-bindings="%5B%7B%22from%22%3A%22f_main_image_4dr.url%22%2C%22to%22%3A%22style.background-image%22%7D%5D"
                                        style="background-image:url(&quot;https://assets.website-files.com/5e853c3383474026e43f2c78/5e856e41c718420c18dd6751_patrick-hendry-eDgUyGu93Yw-unsplash.jpg&quot;)"
                                        class="shop-image tumbler-1">
                                        <div data-wf-sku-conditions="%7B%22condition%22%3A%7B%22fields%22%3A%7B%22default-sku%3Acompare-at-price%22%3A%7B%22exists%22%3A%22yes%22%2C%22type%22%3A%22CommercePrice%22%7D%7D%7D%2C%22timezone%22%3A%22America%2FChicago%22%7D"
                                            class="pill-2 badge primary sale w-condition-invisible">Sale</div>
                                    </div>
                                    <div class="shop-details-wrapper">
                                        <div class="shop-details-left">
                                            <div class="shop-item-name">White Tent</div>
                                            <div class="price-wrapper">
                                                <div data-wf-sku-bindings="%5B%7B%22from%22%3A%22f_price_%22%2C%22to%22%3A%22innerHTML%22%7D%5D"
                                                    class="shop-item-price">$ 200.00 USD</div>
                                                <div data-wf-sku-bindings="%5B%7B%22from%22%3A%22f_compare_at_price_7dr10dr%22%2C%22to%22%3A%22innerHTML%22%7D%5D"
                                                    data-wf-sku-conditions="%7B%22condition%22%3A%7B%22fields%22%3A%7B%22default-sku%3Acompare-at-price%22%3A%7B%22exists%22%3A%22yes%22%2C%22type%22%3A%22CommercePrice%22%7D%7D%7D%2C%22timezone%22%3A%22America%2FChicago%22%7D"
                                                    class="shop-item-price compare w-condition-invisible w-dyn-bind-empty">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                                <div class="shop-button-wrapper"><a href="/product/white-tent"
                                        class="btn w-button">Details</a></div>
                            </div>
                        </div>
                        <div role="listitem" class="w-dyn-item">
                            <div class="shop-item-wrapper"><a href="/product/tin-coffee-tumbler"
                                    class="shop-item-link-wrapper w-inline-block">
                                    <div data-wf-sku-bindings="%5B%7B%22from%22%3A%22f_main_image_4dr.url%22%2C%22to%22%3A%22style.background-image%22%7D%5D"
                                        style="background-image:url(&quot;https://assets.website-files.com/5e853c3383474026e43f2c78/5e8542c1248e59128e08e3e9_ryan-holloway-JyDmUaXMib4-unsplash.jpg&quot;)"
                                        class="shop-image tumbler-1">
                                        <div data-wf-sku-conditions="%7B%22condition%22%3A%7B%22fields%22%3A%7B%22default-sku%3Acompare-at-price%22%3A%7B%22exists%22%3A%22yes%22%2C%22type%22%3A%22CommercePrice%22%7D%7D%7D%2C%22timezone%22%3A%22America%2FChicago%22%7D"
                                            class="pill-2 badge primary sale w-condition-invisible">Sale</div>
                                    </div>
                                    <div class="shop-details-wrapper">
                                        <div class="shop-details-left">
                                            <div class="shop-item-name">Tin Coffee Tumbler</div>
                                            <div class="price-wrapper">
                                                <div data-wf-sku-bindings="%5B%7B%22from%22%3A%22f_price_%22%2C%22to%22%3A%22innerHTML%22%7D%5D"
                                                    class="shop-item-price">$ 35.00 USD</div>
                                                <div data-wf-sku-bindings="%5B%7B%22from%22%3A%22f_compare_at_price_7dr10dr%22%2C%22to%22%3A%22innerHTML%22%7D%5D"
                                                    data-wf-sku-conditions="%7B%22condition%22%3A%7B%22fields%22%3A%7B%22default-sku%3Acompare-at-price%22%3A%7B%22exists%22%3A%22yes%22%2C%22type%22%3A%22CommercePrice%22%7D%7D%7D%2C%22timezone%22%3A%22America%2FChicago%22%7D"
                                                    class="shop-item-price compare w-condition-invisible w-dyn-bind-empty">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                                <div class="shop-button-wrapper"><a href="/product/tin-coffee-tumbler"
                                        class="btn w-button">Details</a></div>
                            </div>
                        </div>
                        <div role="listitem" class="w-dyn-item">
                            <div class="shop-item-wrapper"><a href="/product/blue-canvas-pack"
                                    class="shop-item-link-wrapper w-inline-block">
                                    <div data-wf-sku-bindings="%5B%7B%22from%22%3A%22f_main_image_4dr.url%22%2C%22to%22%3A%22style.background-image%22%7D%5D"
                                        style="background-image:url(&quot;https://assets.website-files.com/5e853c3383474026e43f2c78/5e85425605cae11f20d46181_denisse-leon-J7CjWufjmg4-unsplash.jpg&quot;)"
                                        class="shop-image tumbler-1">
                                        <div data-wf-sku-conditions="%7B%22condition%22%3A%7B%22fields%22%3A%7B%22default-sku%3Acompare-at-price%22%3A%7B%22exists%22%3A%22yes%22%2C%22type%22%3A%22CommercePrice%22%7D%7D%7D%2C%22timezone%22%3A%22America%2FChicago%22%7D"
                                            class="pill-2 badge primary sale">Sale</div>
                                    </div>
                                    <div class="shop-details-wrapper">
                                        <div class="shop-details-left">
                                            <div class="shop-item-name">Blue Canvas Pack</div>
                                            <div class="price-wrapper">
                                                <div data-wf-sku-bindings="%5B%7B%22from%22%3A%22f_price_%22%2C%22to%22%3A%22innerHTML%22%7D%5D"
                                                    class="shop-item-price">$ 95.00 USD</div>
                                                <div data-wf-sku-bindings="%5B%7B%22from%22%3A%22f_compare_at_price_7dr10dr%22%2C%22to%22%3A%22innerHTML%22%7D%5D"
                                                    data-wf-sku-conditions="%7B%22condition%22%3A%7B%22fields%22%3A%7B%22default-sku%3Acompare-at-price%22%3A%7B%22exists%22%3A%22yes%22%2C%22type%22%3A%22CommercePrice%22%7D%7D%7D%2C%22timezone%22%3A%22America%2FChicago%22%7D"
                                                    class="shop-item-price compare">$ 145.00 USD</div>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                                <div class="shop-button-wrapper"><a href="/product/blue-canvas-pack"
                                        class="btn w-button">Details</a></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="shop-more"><a href="/shop" class="btn dark w-button">View All Products</a></div>
            </div>
        </div>

        <div class="wf-section section-1">
            <div class="container">
                <div class="wrapper_team">
                    <div class="dyr-row">
                        <div class="dyr-column-3">
                            <div class="hero-wrapper">
                                <div class="our_team">
                                    <img src="https://static.pexels.com/photos/60778/pexels-photo-60778.jpeg" alt="team name"/>
                                    <div class="pro_detail">
                                        <h3 class="pro_name">Robart Muzaddid</h3>
                                        <span class="pro_desc">founder</span>
                                        <span class="pro_contact"><i class="fa fa-phone-square"></i> +7488895623</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="dyr-column-3">
                            <div class="hero-wrapper">
                                <div class="our_team">
                                    <img src="https://static.pexels.com/photos/60778/pexels-photo-60778.jpeg" alt="team name"/>
                                    <div class="pro_detail">
                                        <h3 class="pro_name">Robart Muzaddid</h3>
                                        <span class="pro_desc">founder</span>
                                        <span class="pro_contact"><i class="fa fa-phone-square"></i> +7488895623</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="dyr-column-3">
                            <div class="hero-wrapper">
                                <div class="our_team">
                                    <img src="https://static.pexels.com/photos/60778/pexels-photo-60778.jpeg" alt="team name"/>
                                    <div class="pro_detail">
                                        <h3 class="pro_name">Robart Muzaddid</h3>
                                        <span class="pro_desc">founder</span>
                                        <span class="pro_contact"><i class="fa fa-phone-square"></i> +7488895623</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        {{-- <div class="shop-local-section wf-section"> --}}
            {{-- <div class="container shop-local-container"> --}}
                {{-- <div class="shop-local-wrapper">
                    <div class="shop-local-left"></div>
                    <div class="shop-local-right">
                        <div class="shop-local-content-wrapper">
                            <h2 class="shop-local-heading">Shop Local.</h2>
                            <p>We know that during COVID-19, a lot of folks around the city and state are feeling uneasy
                                about the future - we’re not sure what the future holds either.</p>
                            <p>That said: we know that we love making sure you have the gear you need for your adventures,
                                and we’re going to keep doing that - with our team - until the city tells us we can’t.</p>
                            <p>But as long as folks like yourself support small businesses around the city, then we’ll be
                                here — every day, making sure your orders arrive on time.</p>
                            <p>-------</p>
                            <div>Jane &amp; John Doe</div>
                            <div><strong>Acme Outdoors</strong></div>
                        </div>
                    </div>
                </div> --}}
            {{-- </div> --}}
        {{-- </div> --}}
        
        <div class="footer wf-section">
            <div class="container">
                <div class="footer-wrapper">
                    <div class="footer-logo-column"><a href="/" aria-current="page" class="w-inline-block w--current"><img
                                src="https://assets.website-files.com/5e7ff3ec0c4ef4c974fa99e3/5e7ff57adad44d1f072965b6_logo.svg"
                                alt="Acme Outdoors Logo" /></a></div>
                    <div><a href="https://twitter.com/webflow" target="_blank"
                            class="social-footer-link w-inline-block"><img
                                src="https://assets.website-files.com/5e7ff3ec0c4ef4c974fa99e3/5e8407a25b6234aeec960fb9_Twitter_Social_Icon_Rounded_Square_White.svg"
                                width="30" alt="Twitter Logo" /></a><a href="https://www.facebook.com/webflow"
                            class="social-footer-link w-inline-block"><img
                                src="https://assets.website-files.com/5e7ff3ec0c4ef4c974fa99e3/5e8407aa3fb6cf5576f1658b_Facebook%20Logo.svg"
                                width="30" alt="Facebook Logo" /></a><a href="https://www.instagram.com/webflow/"
                            target="_blank" class="social-footer-link w-inline-block"><img
                                src="https://assets.website-files.com/5e7ff3ec0c4ef4c974fa99e3/5e840774014326b74bbeeeb6_Insta.svg"
                                width="30" alt="Instagram Logo" /></a></div>
                </div>
                <div class="footer-bottom-wrapper">
                    <div class="small footer-small">Made In <a href="https://webflow.com" target="_blank">Webflow</a>. ©
                        2020.</div>
                </div>
            </div>
        </div>
        <script src="https://d3e54v103j8qbb.cloudfront.net/js/jquery-3.5.1.min.dc5e7f18c8.js?site=5e7ff3ec0c4ef4c974fa99e3"
            type="text/javascript" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous">
        </script>
        <script src="https://assets.website-files.com/5e7ff3ec0c4ef4c974fa99e3/js/webflow.56d8ed5b7.js"
            type="text/javascript"></script>
        <script>
            $("#slideshow > div:gt(0)").hide();

            // fade out current slide (first), fade in next slide and move first slide to end
            var nextSlide = function() { 
                $("#slideshow > div:first")
                .fadeOut(1000)
                .next()
                .fadeIn(1000)
                .end()
                .appendTo("#slideshow");
            }

            var nextSlideTimer = setInterval(nextSlide,  3000);

            // fade out current slide (first) and move last slide to top and fade in
            // $("#nav-left").click(function() {
            //     clearInterval(nextSlideTimer);

            //     $("#slideshow > div:first")
            //     .fadeOut(1000);
            //     $("#slideshow > div:last")
            //     .fadeIn(1000)
            //     .prependTo("#slideshow");

            //     nextSlideTimer = setInterval(nextSlide, 9000)
            //     setTimeout(nextSlideTimer, 9000)
            // });

            $("#slideshow").click(function() {
                clearInterval(nextSlideTimer);

                $("#slideshow > div:first")
                .fadeOut(1000)
                .next()
                .fadeIn(1000)
                .end()
                .appendTo("#slideshow");

                nextSlideTimer = setInterval(nextSlide, 9000)
                setTimeout(nextSlideTimer, 9000)
            });

            // $("#slideshow").hover(function() {
            //     $("#nav-left").fadeToggle("slow", "linear");
            //     $("#nav-right").fadeToggle("slow", "linear");
            // });
        </script>
        <!--[if lte IE 9]><script src="//cdnjs.cloudflare.com/ajax/libs/placeholders/3.0.2/placeholders.min.js"></script><![endif]-->
    </body>
</html>
