<div class="topbar">
    <div class="container-xl d-flex justify-content-between align-items-center flex-wrap">
        <div class="topbar-left d-flex align-items-center gap-3">
            <a href="{{ route('frontend.about') }}" class="topbar-link">About</a>
            <a href="{{ route('frontend.contact') }}" class="topbar-link">Contact</a>
            <a href="{{ route('frontend.pricing') }}" class="topbar-link">Pricing</a>
        </div>
        <div class="topbar-center">
            <div class="ticker-wrapper">
                <div class="ticker-content">
                    <p>
                        {{ \App\Helpers\Helper::getCompanyName() }} has
                        <span style="color: #5CFFA9;">safely shipped 1,000,000+ vehicles</span>
                        to all 50 states. Read our
                        <span style="color: #6BDCFF;">100,000+ online reviews </span>
                        to hear more about our
                        <span style="color: #6BDCFF;">5-star customer service</span>.
                    </p>
                    <p>
                        {{ \App\Helpers\Helper::getCompanyName() }} has
                        <span style="color: #5CFFA9;">safely shipped 1,000,000+ vehicles</span>
                        to all 50 states. Read our
                        <span style="color: #6BDCFF;">100,000+ online reviews </span>
                        to hear more about our
                        <span style="color: #6BDCFF;">5-star customer service</span>.
                    </p>
                </div>
            </div>
        </div>

        <div class="topbar-right">
            <a href="tel:{{ \App\Helpers\Helper::getCompanyPhone() }}" class="topbar-phone">
                <i class="fas fa-phone-alt me-1"></i> {{ \App\Helpers\Helper::getCompanyPhone() }}
            </a>
        </div>
    </div>
</div>

<header id="header" class="header d-flex align-items-center fixed-top">
    <div class="container-fluid position-relative d-flex align-items-center">

        <a href="{{ route('frontend.home') }}" class="logo d-flex align-items-center me-auto">
            <!-- Uncomment the line below if you also wish to use an image logo -->
            <img style="height: 80px !important;" src="{{ asset(\App\Helpers\Helper::getLogoLight()) }}" alt="">
            <h1 class="sitename">{{ \App\Helpers\Helper::getCompanyName() }}</h1>
        </a>

        <nav id="navmenu" class="navmenu">
            <ul class="desktop-menu">
                <li class="dropdown">
                    <a href="#">
                        <span>HOW IT WORKS</span> <i class="fas fa-chevron-down toggle-dropdown"></i>
                    </a>
                    <div class="dropdown-menu">
                        <div class="dropdown-column">
                            <div class="menu-item"><a href="#">How to ship a car<small>Guide to auto transport</small></a></div>
                            <div class="menu-item"><a href="#">Car shipping costs<small>Calculate your estimate</small></a></div>
                            <div class="menu-item"><a href="#">Cross country car shipping<small>Sea to shining sea</small></a></div>
                        </div>
                    </div>
                </li>
                <li class="dropdown">
                    <a href="#">
                        <span>FOR INDIVIDUALS</span> <i class="fas fa-chevron-down toggle-dropdown"></i>
                    </a>

                    <div class="dropdown-menu" style="width: 730px; left: 0 !important;">
                        <!-- We offer -->
                        <div class="dropdown-column">
                            <h4>We offer</h4>

                            <div class="menu-item">
                                <a href="#">
                                    Door-to-door transport
                                    <small>Straight from/to your home or office</small>
                                </a>
                            </div>

                            <div class="menu-item">
                                <a href="#">
                                    Open car transport
                                    <small>Quick and affordable option</small>
                                </a>
                            </div>

                            <div class="menu-item">
                                <a href="#">
                                    Enclosed auto transport
                                    <small>Safe and clean option</small>
                                </a>
                            </div>

                            <div class="menu-item">
                                <a href="#">
                                    Expedited auto transport
                                    <small>Guaranteed pick-up date</small>
                                </a>
                            </div>

                            <div class="menu-item">
                                <a href="#">
                                    Hawaii car transport
                                    <small>Ship from/to Hawaii</small>
                                </a>
                            </div>

                            <div class="menu-item">
                                <a href="#">
                                    Puerto Rico car transport
                                    <small>Ship from/to Puerto Rico</small>
                                </a>
                            </div>

                            <div class="menu-item">
                                <a href="#">
                                    Guam car transport
                                    <small>Ship from/to Guam</small>
                                </a>
                            </div>
                        </div>

                        <div class="dropdown-column">
                            <h4>We serve</h4>

                            <div class="menu-item">
                                <a href="#">
                                    Car relocation services
                                    <small>Private or corporate moves</small>
                                </a>
                            </div>

                            <div class="menu-item">
                                <a href="#">
                                    Online car buyers
                                    <small>Bought and shipped online</small>
                                </a>
                            </div>

                            <div class="menu-item">
                                <a href="#">
                                    Motorcycle shipping
                                    <small>Scenic drives and road adventures</small>
                                </a>
                            </div>

                            <div class="menu-item">
                                <a href="#">
                                    Student car shipping
                                    <small>Move from/to the college campus</small>
                                </a>
                            </div>

                            <div class="menu-item">
                                <a href="#">
                                    Ship a car to another state
                                    <small>Ship from/to any state</small>
                                </a>
                            </div>

                            <div class="menu-item">
                                <a href="#">
                                    Snowbird car shipping
                                    <small>Move to the endless summer</small>
                                </a>
                            </div>
                        </div>

                        <div class="dropdown-column">
                            <div class="menu-item">
                                <a href="#">
                                    Luxury/exotic car shipping
                                    <small>High-end luxury vehicles</small>
                                </a>
                            </div>

                            <div class="menu-item">
                                <a href="#">
                                    Car resellers
                                    <small>Delivered to your client</small>
                                </a>
                            </div>

                            <div class="menu-item">
                                <a href="#">
                                    Military car shipping
                                    <small>The home of the brave</small>
                                </a>
                            </div>

                            <div class="menu-item">
                                <a href="#">
                                    International car shipping
                                    <small>Move overseas</small>
                                </a>
                            </div>

                            <div class="menu-item">
                                <a href="#">
                                    Truck shipping services
                                    <small>Pickups, oversized, or custom</small>
                                </a>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="dropdown">
                    <a href="#">
                        <span>FOR BUSINESSES</span> <i class="fas fa-chevron-down toggle-dropdown"></i>
                    </a>

                    <div class="dropdown-menu">
                        <div class="dropdown-column">
                            <h4>Industries we serve</h4>

                            <div class="menu-item">
                                <a href="#">
                                    Auto dealerships & groups
                                    <small>Streamlined customer service</small>
                                </a>
                            </div>

                            <div class="menu-item">
                                <a href="#">
                                    Auto auctions
                                    <small>Transport speed and efficiency</small>
                                </a>
                            </div>

                            <div class="menu-item">
                                <a href="#">
                                    Fleet management
                                    <small>Inventory rotation expertise</small>
                                </a>
                            </div>

                            <div class="menu-item">
                                <a href="#">
                                    Financial institutions
                                    <small>Credit and repossessions</small>
                                </a>
                            </div>

                            <div class="menu-item">
                                <a href="#">
                                    OEM auto transport
                                    <small>National service coverage</small>
                                </a>
                            </div>

                            <div class="menu-item">
                                <a href="#">
                                    Rental car companies
                                    <small>Scaled inventory management</small>
                                </a>
                            </div>
                        </div>

                        <div class="dropdown-column">
                            <h4>Solutions & advantages</h4>

                            <div class="menu-item">
                                <a href="#">
                                    Logistics
                                    <small>Transportation management</small>
                                </a>
                            </div>

                            <div class="menu-item">
                                <a href="#">
                                    Montway automation portal
                                    <small>Centralized operations platform</small>
                                </a>
                            </div>

                            <div class="menu-item">
                                <a href="#">
                                    Home delivery for dealerships
                                    <small>Driveaway service</small>
                                </a>
                            </div>
                        </div>

                        <div class="dropdown-column">
                            <h4>Relocation services</h4>

                            <div class="menu-item">
                                <a href="#">
                                    Corporate relocations
                                    <small>Program management</small>
                                </a>
                            </div>
                        </div>

                    </div>
                </li>
                <li class="dropdown">
                    <a href="#">
                        <span>WHY CAR CARRIAGE</span> <i class="fas fa-chevron-down toggle-dropdown"></i>
                    </a>

                    <div class="dropdown-menu">
                        <!-- Our Brand -->
                        <div class="dropdown-column">
                            <h4>Our brand</h4>
                            <div class="menu-item"><a href="#">Who we are<small>Our story and
                                        experience</small></a></div>
                            <div class="menu-item"><a href="#">Vision and mission<small>What we believe
                                        in</small></a></div>
                            <div class="menu-item"><a href="#">Our reputation<small>Industry knowledge and
                                        expertise</small></a></div>
                            <div class="menu-item"><a href="#">Reviews<small>Feedback from our clients</small></a>
                            </div>
                            <div class="menu-item"><a href="#">Press<small>See what people are saying</small></a>
                            </div>
                        </div>

                        <!-- Leadership -->
                        <div class="dropdown-column">
                            <h4>Leadership</h4>
                            <div class="menu-item"><a href="#">Executive team<small>Strategic
                                        leadership</small></a></div>
                            <div class="menu-item"><a href="#">Board of directors<small>Organizational
                                        guidance</small></a></div>
                        </div>

                        <!-- Learn more -->
                        <div class="dropdown-column">
                            <h4>Learn more</h4>
                            <div class="menu-item"><a href="#">Carrier relations<small>Join our carrier
                                        network</small></a></div>
                            <div class="menu-item"><a href="#">Contact us<small>Support and
                                        information</small></a></div>
                            <div class="menu-item"><a href="#">Resources<small>Guides and solutions</small></a>
                            </div>
                            <div class="menu-item"><a href="#">Help center<small>Questions and answers</small></a>
                            </div>
                            <div class="menu-item"><a href="#">Blog<small>Auto news and insights</small></a></div>
                        </div>
                    </div>
                </li>
            </ul>
            <i class="mobile-nav-toggle d-xl-none fas fa-bars"></i>
        </nav>

        <a class="btn-getstarted" style="font-size: 12px; white-space: nowrap;"
            href="{{ route('frontend.get-a-quote') }}">CTA, Get a Quote</a>

    </div>
</header>
