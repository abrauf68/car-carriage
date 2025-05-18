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
                        @if (count(\App\Helpers\Helper::getHowItWorks()) > 0)
                            @php
                                $howItWorkChunks = \App\Helpers\Helper::getHowItWorks()->chunk(7); // Split services into groups of 7
                            @endphp
                            @foreach ($howItWorkChunks as $howItWorkchunk)
                                <div class="dropdown-column">
                                    @foreach ($howItWorkchunk as $howItWork)
                                        <div class="menu-item">
                                            <a href="{{ route('frontend.howItWorks', $howItWork->slug) }}">
                                                <div class="menu-link">
                                                    <span class="item-name">{{ $howItWork->name }}</span>
                                                    <span class="item-meta">{{ $howItWork->meta_title }}</span>
                                                </div>
                                            </a>
                                        </div>
                                    @endforeach
                                </div>
                            @endforeach
                        @endif
                    </div>
                </li>
                @if (count(\App\Helpers\Helper::getServiceCategories()) > 0)
                    @foreach (\App\Helpers\Helper::getServiceCategories() as $index => $category)
                        <li class="dropdown">
                            <a href="#">
                                <span>{{ strtoupper($category->name) }}</span> <i
                                    class="fas fa-chevron-down toggle-dropdown"></i>
                            </a>

                            <div class="dropdown-menu"
                                style="width: 730px; {{ $index == 0 ? 'left: 0 !important;' : 'right: 0 !important;' }}">
                                @if (isset($category->ServiceSubCategories) && count($category->ServiceSubCategories) > 0)
                                    @foreach ($category->ServiceSubCategories as $subcategory)
                                        @php
                                            $servicesChunks = $subcategory->companyServices->chunk(7); // Split services into groups of 7
                                        @endphp

                                        @foreach ($servicesChunks as $chunk)
                                            <div class="dropdown-column">
                                                <h4>{{ strtoupper($subcategory->name) }}</h4>

                                                @foreach ($chunk as $service)
                                                    <div class="menu-item">
                                                        <a href="{{ route('frontend.services', $service->slug) }}">
                                                            <div class="menu-link">
                                                                <span class="item-name">{{ $service->name }}</span>
                                                                <span class="item-meta">{{ $service->meta_title }}</span>
                                                            </div>
                                                        </a>
                                                    </div>
                                                @endforeach
                                            </div>
                                        @endforeach
                                    @endforeach
                                @endif
                            </div>
                        </li>
                    @endforeach
                @endif
                <li class="dropdown">
                    <a href="#">
                        <span>WHY CAR CARRIAGE</span> <i class="fas fa-chevron-down toggle-dropdown"></i>
                    </a>

                    <div class="dropdown-menu">
                        @if (count(\App\Helpers\Helper::getCompanyInfoCategories()) > 0)
                            @foreach (\App\Helpers\Helper::getCompanyInfoCategories() as $companyInfoCategory)
                                @php
                                    $companyInfoChunks = $companyInfoCategory->companyInfo->chunk(7); // Split services into groups of 7
                                @endphp

                                @foreach ($companyInfoChunks as $companyInfoChunk)
                                    <div class="dropdown-column">
                                        <h4>{{ strtoupper($companyInfoCategory->name) }}</h4>

                                        @foreach ($companyInfoChunk as $companyInfo)
                                            <div class="menu-item">
                                                <a href="{{ route('frontend.whyUs', $companyInfo->slug) }}">
                                                    <div class="menu-link">
                                                        <span class="item-name">{{ $companyInfo->name }}</span>
                                                        <span class="item-meta">{{ $companyInfo->meta_title }}</span>
                                                    </div>
                                                </a>
                                            </div>
                                        @endforeach
                                    </div>
                                @endforeach
                            @endforeach
                        @endif
                    </div>
                </li>
                {{-- <li class="dropdown">
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
                </li> --}}
            </ul>
            <i class="mobile-nav-toggle d-xl-none fas fa-bars"></i>
        </nav>

        <a class="btn-getstarted" style="font-size: 12px; white-space: nowrap;"
            href="{{ route('frontend.get-a-quote') }}">CTA, Get a Quote</a>

    </div>
</header>
