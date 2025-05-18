<!DOCTYPE html>
<html lang="en">

<head>
    <title>{{ env('APP_NAME') }} - @yield('title')</title>
    <meta name="description" content="@yield('meta_description')">
    <meta name="keywords" content="@yield('meta_keywords')">

    <style>
        .topbar {
            background-color: #1B4AED;
            color: #fff;
            font-size: 14px;
            padding: 6px 0;
            position: relative;
            z-index: 1051;
        }

        .topbar a {
            color: #fff;
            text-decoration: none;
            transition: color 0.3s ease;
            font-weight: 500;
        }

        .topbar a:hover {
            color: #cbdfff;
        }

        .topbar-link {
            margin-right: 15px;
            font-size: 14px;
        }

        .topbar-center {
            flex: 1;
            overflow: hidden;
            position: relative;
            height: 20px;
            padding-left: 10px;
        }

        .topbar-right {
            padding-left: 10px;
        }

        .ticker-wrapper {
            width: 100%;
            overflow: hidden;
            position: relative;
        }

        .ticker-content {
            display: inline-block;
            white-space: nowrap;
            animation: ticker 15s linear infinite;
        }

        .ticker-content p {
            display: inline-block;
            margin: 0 50px 0 0;
            font-size: 13px;
            font-style: italic;
            font-weight: 400;
            color: #fff;
        }

        @keyframes ticker {
            0% {
                transform: translateX(0%);
            }

            100% {
                transform: translateX(-50%);
            }
        }

        .topbar-phone {
            white-space: nowrap;
            font-size: 14px;
            font-weight: 600;
            cursor: pointer !important;
        }

        @media (max-width: 768px) {
            .topbar{
                display: none;
            }
        }


        .navmenu .dropdown ul a:hover {
            background-color: #0E3EE3;
            color: #fff !important;
        }

        .navmenu .dropdown ul a.active {
            background-color: #0E3EE3;
            color: #fff !important;
        }

        .footer-links ul li a.active {
            color: #fff !important;
        }

        /* Mobile Responsive */
        @media (max-width: 1199px) {
            .sitename {
                font-size: 20px !important;
            }
        }

        /* WhatsApp Button */
        #whatsapp-btn {
            position: fixed;
            right: 13px;
            bottom: 60px;
            width: 45px;
            height: 45px;
            background-color: #25D366;
            color: white;
            border-radius: 50%;
            font-size: 20px;
            z-index: 999;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            transition: background-color 0.3s;
        }

        #whatsapp-btn:hover {
            background-color: #1DA851;
            color: white;
        }

        /* Dropdown Container */
        .desktop-menu .dropdown {
            position: relative;
            display: inline-block;
        }

        .desktop-menu .dropdown>a {
            padding: 10px 20px;
            display: flex;
            align-items: center;
            text-decoration: none;
            /* font-weight: 600; */
            /* color: #333; */
            transition: all 0.2s ease;
        }

        .desktop-menu .dropdown:hover .dropdown-menu {
            display: flex;
        }

        /* Dropdown Menu */
        .desktop-menu .dropdown-menu {
            display: none;
            position: absolute;
            top: 100%;
            right: 0;
            background: #fff;
            padding: 24px;
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
            gap: 40px;
            z-index: 1000;
            width: auto;
            margin: 0;
            line-height: 1.4;
        }

        /* Columns */
        .desktop-menu .dropdown-column {
            flex: 1;
            min-width: 200px;
        }

        /* Headings */
        .desktop-menu .dropdown-column h4 {
            font-size: 15px;
            font-weight: 700;
            color: #7c8492;
            margin-bottom: 16px;
            letter-spacing: 0.5px;
            text-transform: uppercase;
        }

        /* Menu Items */
        .desktop-menu .menu-item {
            padding: 6px 0 !important;
        }

        /* Links */
        .desktop-menu .dropdown-column a {
            display: block;
            text-decoration: none;
            font-size: 15px;
            color: #333;
            font-weight: 500;
            transition: all 0.2s ease;
        }

        .desktop-menu .dropdown-column a small {
            display: block;
            color: #666;
            font-weight: 400;
            font-size: 13px;
            margin-top: 2px;
            line-height: 1;
        }

        /* Hover Effects */
        .desktop-menu .dropdown-column a:hover {
            color: #007bff;
            border-left: 3px solid #007bff;
            padding-left: 10px;
            background-color: #f8f9fa;
            border-radius: 4px;
        }

        .desktop-menu .menu-item:hover {
            background: #f8f9fa;
            border-radius: 4px;
        }

        /* Spacing Fixes */
        .desktop-menu .dropdown-menu,
        .desktop-menu .dropdown-column,
        .desktop-menu .menu-item {
            margin: 0;
            /* padding: 0; */
        }

        .desktop-menu .dropdown-column a {
            display: block;
            padding: 8px 12px;
            margin: -8px -12px;
        }

        .desktop-menu .dropdown-column .menu-link {
            display: flex;
            flex-direction: column;
        }

        .desktop-menu .item-name {
            font-size: 15px;
            font-weight: 500;
            color: #333;
            line-height: 1.2;
        }

        .desktop-menu .item-meta {
            font-size: 13px;
            color: #666;
            font-weight: 400;
            margin-top: 2px;
            line-height: 1.2;
        }
    </style>
    @include('frontend.layouts.meta')
    @include('frontend.layouts.css')
    @yield('css')

</head>

<body class="index-page">

    @include('frontend.layouts.header')


    <main class="main">
        @yield('page_title')
        @yield('content')
    </main>

    @include('frontend.layouts.footer')

    <!-- Scroll Top -->
    <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i
            class="fas fa-arrow-up"></i></a>
    <a href="tel:{{ \App\Helpers\Helper::getCompanyPhone() }}" target="_blank" id="whatsapp-btn"
        class="whatsapp-btn d-flex align-items-center justify-content-center">
        <i class="fab fa-whatsapp"></i>
    </a>

    <!-- Preloader -->
    <div id="preloader"></div>

    @yield('script')
    @include('frontend.layouts.script')

</body>

</html>
