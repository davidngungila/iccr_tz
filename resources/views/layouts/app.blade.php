<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title', 'ICCR Tanzania - Inter-Colleges Catholic Charismatic Renewal')</title>
    <meta name="description" content="@yield('description', 'ICCR Tanzania - Uniting Catholic students in colleges and higher education institutions through the Charismatic Renewal movement.')">

    <!-- Fonts - Mazzard (Primary) with Inter as fallback -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <style>
        /* Mazzard Font Family - Using fonts from public/mazzard directory */
        @font-face {
            font-family: 'Mazzard';
            src: url('{{ asset("mazzard/MazzardH-ExtraLight.otf") }}') format('opentype');
            font-weight: 200;
            font-style: normal;
            font-display: swap;
        }
        
        @font-face {
            font-family: 'Mazzard';
            src: url('{{ asset("mazzard/MazzardH-ExtraLight.otf") }}') format('opentype');
            font-weight: 300;
            font-style: normal;
            font-display: swap;
        }
        
        @font-face {
            font-family: 'Mazzard';
            src: url('{{ asset("mazzard/MazzardH-ExtraLight.otf") }}') format('opentype');
            font-weight: 400;
            font-style: normal;
            font-display: swap;
        }
        
        @font-face {
            font-family: 'Mazzard';
            src: url('{{ asset("mazzard/MazzardH-ExtraLight.otf") }}') format('opentype');
            font-weight: 500;
            font-style: normal;
            font-display: swap;
        }
        
        @font-face {
            font-family: 'Mazzard';
            src: url('{{ asset("mazzard/MazzardH-ExtraLight.otf") }}') format('opentype');
            font-weight: 600;
            font-style: normal;
            font-display: swap;
        }
        
        @font-face {
            font-family: 'Mazzard';
            src: url('{{ asset("mazzard/MazzardH-Bold.otf") }}') format('opentype');
            font-weight: 700;
            font-style: normal;
            font-display: swap;
        }
        
        @font-face {
            font-family: 'Mazzard';
            src: url('{{ asset("mazzard/MazzardH-ExtraBold.otf") }}') format('opentype');
            font-weight: 800;
            font-style: normal;
            font-display: swap;
        }
        
        @font-face {
            font-family: 'Mazzard';
            src: url('{{ asset("mazzard/MazzardH-Black.otf") }}') format('opentype');
            font-weight: 900;
            font-style: normal;
            font-display: swap;
        }
        
        /* Italic variants */
        @font-face {
            font-family: 'Mazzard';
            src: url('{{ asset("mazzard/MazzardH-BoldItalic.otf") }}') format('opentype');
            font-weight: 700;
            font-style: italic;
            font-display: swap;
        }
        
        @font-face {
            font-family: 'Mazzard';
            src: url('{{ asset("mazzard/MazzardH-ExtraBoldItalic.otf") }}') format('opentype');
            font-weight: 800;
            font-style: italic;
            font-display: swap;
        }
        
        @font-face {
            font-family: 'Mazzard';
            src: url('{{ asset("mazzard/MazzardH-BlackItalic.otf") }}') format('opentype');
            font-weight: 900;
            font-style: italic;
            font-display: swap;
        }
        
        /* Apply Mazzard font to ALL elements - Primary font for entire website */
        *, *::before, *::after {
            font-family: 'Mazzard', 'Inter', -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, 'Helvetica Neue', Arial, sans-serif !important;
        }
        
        body, html {
            font-family: 'Mazzard', 'Inter', -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, 'Helvetica Neue', Arial, sans-serif !important;
        }
        
        h1, h2, h3, h4, h5, h6, p, span, div, a, button, input, textarea, select, label, li, td, th, strong, b, em, i, u, small, code, pre {
            font-family: 'Mazzard', 'Inter', -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, 'Helvetica Neue', Arial, sans-serif !important;
        }
        
        .font-serif, .font-sans, .font-mono {
            font-family: 'Mazzard', 'Inter', -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, 'Helvetica Neue', Arial, sans-serif !important;
        }
    </style>

    <!-- Styles -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    
    <style>
        /* Navigation Dropdown Styles */
        .nav-dropdown {
            opacity: 0;
            visibility: hidden;
            transform: scale(0.95) translateY(-10px) translateX(-50%);
            transition: all 0.3s ease-out;
            pointer-events: none;
        }
        
        .nav-dropdown-parent:hover .nav-dropdown {
            opacity: 1;
            visibility: visible;
            transform: scale(1) translateY(0) translateX(-50%);
            pointer-events: auto;
        }
        
        .nav-dropdown-parent:hover .nav-dropdown-arrow {
            transform: rotate(180deg);
        }
        
        /* Enhanced Dropdown Item Styles */
        .nav-dropdown a {
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
        }
        
        .nav-dropdown img {
            transition: transform 0.4s cubic-bezier(0.4, 0, 0.2, 1);
        }
        
        .nav-dropdown .line-clamp-2 {
            display: -webkit-box;
            -webkit-line-clamp: 2;
            -webkit-box-orient: vertical;
            overflow: hidden;
        }
        
        /* Smooth hover effects for dropdown items */
        .nav-dropdown .group:hover {
            transform: translateY(-2px);
        }
        
        /* Ensure dropdown stays visible when hovering over it */
        .nav-dropdown:hover {
            opacity: 1;
            visibility: visible;
            transform: scale(1) translateY(0) translateX(-50%);
        }
        
        /* Ensure dropdowns don't overflow screen */
        .nav-dropdown {
            max-width: calc(100vw - 2rem);
            left: 50% !important;
            right: auto !important;
        }
        
        /* Responsive dropdown positioning */
        @media (max-width: 768px) {
            .nav-dropdown {
                left: 0 !important;
                right: 0 !important;
                transform: scale(0.95) translateY(-10px) !important;
                width: 100vw !important;
                max-width: 100vw !important;
            }
            
            .nav-dropdown-parent:hover .nav-dropdown {
                transform: scale(1) translateY(0) !important;
            }
        }
    </style>
</head>
<body class="bg-gray-50 text-gray-900 antialiased">
    <!-- Top Header with Contact Info - Advanced -->
    <div id="top-header" class="bg-gradient-to-r from-green-600 via-blue-600 to-green-700 text-white py-2.5 transition-transform duration-300 ease-in-out sticky top-0 z-[60] shadow-lg">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex flex-col sm:flex-row justify-between items-center gap-2 sm:gap-4 text-sm">
                <div class="flex flex-wrap items-center justify-center sm:justify-start gap-4 sm:gap-6">
                    <a href="mailto:info@icccr.or.tz" class="flex items-center gap-2 hover:text-green-100 transition transform hover:scale-105 group">
                        <svg class="w-4 h-4 group-hover:rotate-12 transition" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                        </svg>
                        <span class="font-medium">info@icccr.or.tz</span>
                    </a>
                    <a href="tel:+255123456789" class="flex items-center gap-2 hover:text-green-100 transition transform hover:scale-105 group">
                        <svg class="w-4 h-4 group-hover:rotate-12 transition" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/>
                        </svg>
                        <span class="font-medium">+255 123 456 789</span>
                    </a>
                    <div class="flex items-center gap-2">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/>
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/>
                        </svg>
                        <span class="font-medium">Dar es Salaam, Tanzania</span>
                    </div>
                </div>
                <div class="flex items-center gap-3">
                    <a href="#" class="w-8 h-8 rounded-full bg-white/10 hover:bg-white/20 flex items-center justify-center transition transform hover:scale-110 hover:rotate-12" aria-label="Facebook">
                        <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M22 12c0-5.523-4.477-10-10-10S2 6.477 2 12c0 4.991 3.657 9.128 8.438 9.878v-6.987h-2.54V12h2.54V9.797c0-2.506 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.771-1.63 1.562V12h2.773l-.443 2.89h-2.33v6.988C18.343 21.128 22 16.991 22 12z"/>
                        </svg>
                    </a>
                    <a href="#" class="w-8 h-8 rounded-full bg-white/10 hover:bg-white/20 flex items-center justify-center transition transform hover:scale-110 hover:rotate-12" aria-label="YouTube">
                        <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M23.498 6.186a3.016 3.016 0 0 0-2.122-2.136C19.505 3.545 12 3.545 12 3.545s-7.505 0-9.377.505A3.017 3.017 0 0 0 .502 6.186C0 8.07 0 12 0 12s0 3.93.502 5.814a3.016 3.016 0 0 0 2.122 2.136c1.871.505 9.376.505 9.376.505s7.505 0 9.377-.505a3.015 3.015 0 0 0 2.122-2.136C24 15.93 24 12 24 12s0-3.93-.502-5.814zM9.545 15.568V8.432L15.818 12l-6.273 3.568z"/>
                        </svg>
                    </a>
                    <a href="#" class="w-8 h-8 rounded-full bg-white/10 hover:bg-white/20 flex items-center justify-center transition transform hover:scale-110 hover:rotate-12" aria-label="Instagram">
                        <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M12.315 2c2.43 0 2.784.013 3.808.06 1.064.049 1.791.218 2.427.465a4.902 4.902 0 011.996 1.336c.748.748 1.336 1.644 1.336 2.996 0 .854-.217 1.363-.465 2.427-.047 1.024-.06 1.379-.06 3.808 0 2.43-.013 2.784-.06 3.808-.049 1.064-.218 1.791-.465 2.427a4.902 4.902 0 01-1.336 1.996c-.748.748-1.644 1.336-2.996 1.336-.854 0-1.363-.217-2.427-.465-1.024-.047-1.379-.06-3.808-.06-2.43 0-2.784.013-3.808.06-1.064.049-1.791.218-2.427.465a4.902 4.902 0 01-1.996-1.336c-.748-.748-1.336-1.644-1.336-2.996 0-.854.217-1.363.465-2.427.047-1.024.06-1.379.06-3.808 0-2.43-.013-2.784-.06-3.808a6.919 6.919 0 00-.465-2.427 4.902 4.902 0 011.336-1.996c.748-.748 1.644-1.336 2.996-1.336.854 0 1.363.217 2.427.465 1.024.047 1.379.06 3.808.06zm0-2c-2.5 0-2.884.013-3.926.06-1.11.05-1.87.22-2.536.453a6.99 6.99 0 00-2.852 1.857A6.99 6.99 0 001.44 5.45c-.233.666-.403 1.426-.453 2.536-.047 1.042-.06 1.426-.06 3.926 0 2.5.013 2.884.06 3.926.05 1.11.22 1.87.453 2.536a6.99 6.99 0 001.857 2.852 6.99 6.99 0 002.852 1.857c.666.233 1.426.403 2.536.453 1.042.047 1.426.06 3.926.06 2.5 0 2.884-.013 3.926-.06 1.11-.05 1.87-.22 2.536-.453a6.99 6.99 0 002.852-1.857 6.99 6.99 0 001.857-2.852c.233-.666.403-1.426.453-2.536.047-1.042.06-1.426.06-3.926 0-2.5-.013-2.884-.06-3.926a6.919 6.919 0 00-.453-2.536 6.99 6.99 0 00-1.857-2.852A6.99 6.99 0 0018.777.453C18.111.22 17.351.05 16.241 0 15.199-.013 14.815 0 12.315 0zm0 5.838a6.162 6.162 0 100 12.324 6.162 6.162 0 000-12.324zM12.315 16a4 4 0 110-8 4 4 0 010 8zm6.407-10.844a1.44 1.44 0 11-2.881 0 1.44 1.44 0 012.881 0z"/>
                        </svg>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <!-- Navigation - Advanced -->
    <nav id="main-nav" class="bg-white/95 backdrop-blur-md shadow-xl sticky top-[42px] z-50 transition-all duration-300 border-b-2 border-gray-100">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center h-24">
                <div class="flex items-center">
                    <a href="{{ route('home') }}" class="flex items-center space-x-3 group">
                        <div class="flex-shrink-0">
                            <img src="{{ asset('images/logo.png') }}" alt="ICCR Tanzania Logo" class="h-16 w-auto group-hover:scale-110 transition-transform duration-300">
                        </div>
                        <div class="hidden sm:block">
                            <span class="text-2xl font-bold text-gray-900 block group-hover:text-green-600 transition">ICCR Tanzania</span>
                            <span class="text-sm text-gray-500 font-medium">Inter-Colleges CCR</span>
                        </div>
                    </a>
                </div>
                
                <!-- Desktop Navigation -->
                <div class="hidden md:flex items-center space-x-2">
                    <a href="{{ route('home') }}" class="px-5 py-3 rounded-lg text-base font-bold transition-all duration-200 {{ request()->routeIs('home') ? 'text-green-600 bg-gradient-to-r from-green-50 to-blue-50 border-2 border-green-200 shadow-md' : 'text-gray-700 hover:text-green-600 hover:bg-green-50' }}">
                        Home
                    </a>
                    
                    <!-- About Dropdown -->
                    <div class="relative nav-dropdown-parent">
                        <button type="button" class="px-5 py-3 rounded-lg text-base font-bold transition-all duration-200 {{ request()->routeIs('about') || request()->routeIs('faq') ? 'text-green-600 bg-gradient-to-r from-green-50 to-blue-50 border-2 border-green-200 shadow-md' : 'text-gray-700 hover:text-green-600 hover:bg-green-50' }} flex items-center gap-1">
                            About
                            <svg class="w-5 h-5 nav-dropdown-arrow transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                            </svg>
                        </button>
                        <div class="nav-dropdown absolute top-full left-1/2 transform -translate-x-1/2 mt-2 w-[90vw] max-w-4xl bg-white rounded-xl shadow-2xl border-2 border-gray-100 z-[100] overflow-hidden">
                            <div class="p-6">
                                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                                    <a href="{{ route('about') }}" class="group flex items-start gap-6 p-6 rounded-xl hover:bg-gradient-to-r hover:from-green-50 hover:to-blue-50 transition-all duration-300 {{ request()->routeIs('about') ? 'bg-gradient-to-r from-green-50 to-blue-50' : '' }}">
                                        <div class="flex-shrink-0 w-24 h-24 rounded-xl overflow-hidden shadow-lg group-hover:shadow-xl transition">
                                            <img src="{{ asset('images/03.jpg') }}" alt="About Us" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-300">
                                        </div>
                                        <div class="flex-1 min-w-0">
                                            <h3 class="text-xl font-bold text-gray-900 group-hover:text-green-600 transition mb-2">About Us</h3>
                                            <p class="text-base text-gray-600 leading-relaxed">Learn about our mission, vision, and the community we're building across Tanzania. Discover our history, values, and the impact we're making in Catholic student communities.</p>
                                            <div class="mt-3 flex items-center gap-2 text-green-600 opacity-0 group-hover:opacity-100 transition">
                                                <span class="text-base font-semibold">Learn more</span>
                                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                                                </svg>
                                            </div>
                                        </div>
                                    </a>
                                    <a href="{{ route('faq') }}" class="group flex items-start gap-6 p-6 rounded-xl hover:bg-gradient-to-r hover:from-green-50 hover:to-blue-50 transition-all duration-300 {{ request()->routeIs('faq') ? 'bg-gradient-to-r from-green-50 to-blue-50' : '' }}">
                                        <div class="flex-shrink-0 w-24 h-24 rounded-xl overflow-hidden shadow-lg group-hover:shadow-xl transition">
                                            <img src="{{ asset('images/04.jpg') }}" alt="FAQ" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-300">
                                        </div>
                                        <div class="flex-1 min-w-0">
                                            <h3 class="text-xl font-bold text-gray-900 group-hover:text-green-600 transition mb-2">FAQ</h3>
                                            <p class="text-base text-gray-600 leading-relaxed">Find answers to frequently asked questions about joining and participating in our community. Get information about membership, events, and how to get involved.</p>
                                            <div class="mt-3 flex items-center gap-2 text-green-600 opacity-0 group-hover:opacity-100 transition">
                                                <span class="text-base font-semibold">View FAQs</span>
                                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                                                </svg>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Programs Dropdown -->
                    <div class="relative nav-dropdown-parent">
                        <button type="button" class="px-5 py-3 rounded-lg text-base font-bold transition-all duration-200 {{ request()->routeIs('ministries') || request()->routeIs('events') || request()->routeIs('media') || request()->routeIs('resources') ? 'text-green-600 bg-gradient-to-r from-green-50 to-blue-50 border-2 border-green-200 shadow-md' : 'text-gray-700 hover:text-green-600 hover:bg-green-50' }} flex items-center gap-1">
                            Programs
                            <svg class="w-5 h-5 nav-dropdown-arrow transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                            </svg>
                        </button>
                        <div class="nav-dropdown absolute top-full left-1/2 transform -translate-x-1/2 mt-2 w-[90vw] max-w-5xl bg-white rounded-xl shadow-2xl border-2 border-gray-100 z-[100] overflow-hidden">
                            <div class="p-6">
                                <div class="grid grid-cols-2 md:grid-cols-4 gap-6">
                                    <a href="{{ route('ministries') }}" class="group flex flex-col p-5 rounded-xl hover:bg-gradient-to-br hover:from-green-50 hover:to-blue-50 transition-all duration-300 border-2 border-transparent hover:border-green-200 {{ request()->routeIs('ministries') ? 'bg-gradient-to-br from-green-50 to-blue-50 border-green-200' : '' }}">
                                        <div class="w-full h-32 rounded-xl overflow-hidden shadow-lg group-hover:shadow-xl transition mb-4">
                                            <img src="{{ asset('images/05.jpg') }}" alt="Ministries" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-300">
                                        </div>
                                        <h3 class="text-lg font-bold text-gray-900 group-hover:text-green-600 transition mb-2">Ministries</h3>
                                        <p class="text-sm text-gray-600 leading-relaxed mb-3">Explore our prayer, worship, and evangelization ministries that serve our community.</p>
                                        <div class="flex items-center gap-2 text-green-600 opacity-0 group-hover:opacity-100 transition mt-auto">
                                            <span class="text-sm font-semibold">Explore</span>
                                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                                            </svg>
                                        </div>
                                    </a>
                                    <a href="{{ route('events') }}" class="group flex flex-col p-5 rounded-xl hover:bg-gradient-to-br hover:from-green-50 hover:to-blue-50 transition-all duration-300 border-2 border-transparent hover:border-green-200 {{ request()->routeIs('events') ? 'bg-gradient-to-br from-green-50 to-blue-50 border-green-200' : '' }}">
                                        <div class="w-full h-32 rounded-xl overflow-hidden shadow-lg group-hover:shadow-xl transition mb-4">
                                            <img src="{{ asset('images/06.jpg') }}" alt="Events" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-300">
                                        </div>
                                        <h3 class="text-lg font-bold text-gray-900 group-hover:text-green-600 transition mb-2">Events</h3>
                                        <p class="text-sm text-gray-600 leading-relaxed mb-3">Join our spiritual gatherings, retreats, and conferences across Tanzania.</p>
                                        <div class="flex items-center gap-2 text-green-600 opacity-0 group-hover:opacity-100 transition mt-auto">
                                            <span class="text-sm font-semibold">View Events</span>
                                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                                            </svg>
                                        </div>
                                    </a>
                                    <a href="{{ route('media') }}" class="group flex flex-col p-5 rounded-xl hover:bg-gradient-to-br hover:from-green-50 hover:to-blue-50 transition-all duration-300 border-2 border-transparent hover:border-green-200 {{ request()->routeIs('media') ? 'bg-gradient-to-br from-green-50 to-blue-50 border-green-200' : '' }}">
                                        <div class="w-full h-32 rounded-xl overflow-hidden shadow-lg group-hover:shadow-xl transition mb-4">
                                            <img src="{{ asset('images/07.jpg') }}" alt="Media" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-300">
                                        </div>
                                        <h3 class="text-lg font-bold text-gray-900 group-hover:text-green-600 transition mb-2">Media</h3>
                                        <p class="text-sm text-gray-600 leading-relaxed mb-3">Photos, videos, and stories from our community events and activities.</p>
                                        <div class="flex items-center gap-2 text-green-600 opacity-0 group-hover:opacity-100 transition mt-auto">
                                            <span class="text-sm font-semibold">Browse</span>
                                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                                            </svg>
                                        </div>
                                    </a>
                                    <a href="{{ route('resources') }}" class="group flex flex-col p-5 rounded-xl hover:bg-gradient-to-br hover:from-green-50 hover:to-blue-50 transition-all duration-300 border-2 border-transparent hover:border-green-200 {{ request()->routeIs('resources') ? 'bg-gradient-to-br from-green-50 to-blue-50 border-green-200' : '' }}">
                                        <div class="w-full h-32 rounded-xl overflow-hidden shadow-lg group-hover:shadow-xl transition mb-4">
                                            <img src="{{ asset('images/08.jpg') }}" alt="Resources" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-300">
                                        </div>
                                        <h3 class="text-lg font-bold text-gray-900 group-hover:text-green-600 transition mb-2">Resources</h3>
                                        <p class="text-sm text-gray-600 leading-relaxed mb-3">Download guides, manuals, and spiritual materials for your journey.</p>
                                        <div class="flex items-center gap-2 text-green-600 opacity-0 group-hover:opacity-100 transition mt-auto">
                                            <span class="text-sm font-semibold">Download</span>
                                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                                            </svg>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <a href="{{ route('get-involved') }}" class="px-5 py-3 rounded-lg text-base font-bold transition-all duration-200 {{ request()->routeIs('get-involved') ? 'text-green-600 bg-gradient-to-r from-green-50 to-blue-50 border-2 border-green-200 shadow-md' : 'text-gray-700 hover:text-green-600 hover:bg-green-50' }}">
                        Get Involved
                    </a>
                    <a href="{{ route('contact') }}" class="px-5 py-3 rounded-lg text-base font-bold transition-all duration-200 {{ request()->routeIs('contact') ? 'text-green-600 bg-gradient-to-r from-green-50 to-blue-50 border-2 border-green-200 shadow-md' : 'text-gray-700 hover:text-green-600 hover:bg-green-50' }}">
                        Contact
                    </a>
                    <a href="{{ route('get-involved') }}" class="ml-2 px-6 py-3 bg-gradient-to-r from-green-600 to-blue-600 text-white rounded-lg text-base font-bold hover:from-green-700 hover:to-blue-700 transition shadow-md hover:shadow-lg transform hover:scale-105">
                        Join Us
                    </a>
                </div>

                <!-- Mobile menu button -->
                <div class="md:hidden">
                    <button type="button" id="mobile-menu-button" class="px-4 py-2 rounded-lg text-gray-700 hover:text-green-600 hover:bg-green-50 focus:outline-none focus:ring-2 focus:ring-green-500 focus:ring-offset-2 transition-all duration-200">
                        <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                        </svg>
                    </button>
                </div>
            </div>
        </div>

        <!-- Mobile Navigation - Advanced -->
        <div id="mobile-menu" class="hidden md:hidden border-t-2 border-gray-100 bg-white/95 backdrop-blur-md">
            <div class="px-2 pt-2 pb-4 space-y-1">
                <a href="{{ route('home') }}" class="block px-4 py-3 rounded-lg text-base font-bold transition-all duration-200 {{ request()->routeIs('home') ? 'text-green-600 bg-gradient-to-r from-green-50 to-blue-50 border-2 border-green-200 shadow-md' : 'text-gray-700 hover:text-green-600 hover:bg-green-50' }}">Home</a>
                
                <!-- Mobile About Dropdown -->
                <div class="mobile-dropdown">
                    <button class="mobile-dropdown-btn w-full px-4 py-3 rounded-lg text-base font-bold transition-all duration-200 {{ request()->routeIs('about') || request()->routeIs('faq') ? 'text-green-600 bg-gradient-to-r from-green-50 to-blue-50 border-2 border-green-200 shadow-md' : 'text-gray-700 hover:text-green-600 hover:bg-green-50' }} flex items-center justify-between">
                        <span>About</span>
                        <svg class="w-5 h-5 mobile-dropdown-icon transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                        </svg>
                    </button>
                    <div class="mobile-dropdown-content hidden pl-4 pt-2 space-y-1">
                        <a href="{{ route('about') }}" class="block px-4 py-2 rounded-lg text-sm font-bold text-gray-600 hover:text-green-600 hover:bg-green-50 transition {{ request()->routeIs('about') ? 'text-green-600 bg-green-50' : '' }}">About Us</a>
                        <a href="{{ route('faq') }}" class="block px-4 py-2 rounded-lg text-sm font-bold text-gray-600 hover:text-green-600 hover:bg-green-50 transition {{ request()->routeIs('faq') ? 'text-green-600 bg-green-50' : '' }}">FAQ</a>
                    </div>
                </div>
                
                <!-- Mobile Programs Dropdown -->
                <div class="mobile-dropdown">
                    <button class="mobile-dropdown-btn w-full px-4 py-3 rounded-lg text-base font-bold transition-all duration-200 {{ request()->routeIs('ministries') || request()->routeIs('events') || request()->routeIs('media') || request()->routeIs('resources') ? 'text-green-600 bg-gradient-to-r from-green-50 to-blue-50 border-2 border-green-200 shadow-md' : 'text-gray-700 hover:text-green-600 hover:bg-green-50' }} flex items-center justify-between">
                        <span>Programs</span>
                        <svg class="w-5 h-5 mobile-dropdown-icon transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                        </svg>
                    </button>
                    <div class="mobile-dropdown-content hidden pl-4 pt-2 space-y-1">
                        <a href="{{ route('ministries') }}" class="block px-4 py-2 rounded-lg text-sm font-bold text-gray-600 hover:text-green-600 hover:bg-green-50 transition {{ request()->routeIs('ministries') ? 'text-green-600 bg-green-50' : '' }}">Ministries</a>
                        <a href="{{ route('events') }}" class="block px-4 py-2 rounded-lg text-sm font-bold text-gray-600 hover:text-green-600 hover:bg-green-50 transition {{ request()->routeIs('events') ? 'text-green-600 bg-green-50' : '' }}">Events</a>
                        <a href="{{ route('media') }}" class="block px-4 py-2 rounded-lg text-sm font-bold text-gray-600 hover:text-green-600 hover:bg-green-50 transition {{ request()->routeIs('media') ? 'text-green-600 bg-green-50' : '' }}">Media</a>
                        <a href="{{ route('resources') }}" class="block px-4 py-2 rounded-lg text-sm font-bold text-gray-600 hover:text-green-600 hover:bg-green-50 transition {{ request()->routeIs('resources') ? 'text-green-600 bg-green-50' : '' }}">Resources</a>
                    </div>
                </div>
                
                <a href="{{ route('get-involved') }}" class="block px-4 py-3 rounded-lg text-base font-bold transition-all duration-200 {{ request()->routeIs('get-involved') ? 'text-green-600 bg-gradient-to-r from-green-50 to-blue-50 border-2 border-green-200 shadow-md' : 'text-gray-700 hover:text-green-600 hover:bg-green-50' }}">Get Involved</a>
                <a href="{{ route('contact') }}" class="block px-4 py-3 rounded-lg text-base font-bold transition-all duration-200 {{ request()->routeIs('contact') ? 'text-green-600 bg-gradient-to-r from-green-50 to-blue-50 border-2 border-green-200 shadow-md' : 'text-gray-700 hover:text-green-600 hover:bg-green-50' }}">Contact</a>
                <a href="{{ route('get-involved') }}" class="block px-4 py-3 mt-2 bg-gradient-to-r from-green-600 to-blue-600 text-white rounded-lg text-base font-bold text-center hover:from-green-700 hover:to-blue-700 transition shadow-md">
                    Join Us
                </a>
            </div>
        </div>
    </nav>

    <!-- Main Content -->
    <main>
        @yield('content')
    </main>

    <!-- Footer - Advanced -->
    <footer class="bg-gradient-to-br from-gray-900 via-gray-800 to-gray-900 text-gray-300 mt-20 relative overflow-hidden">
        <!-- Decorative Background Elements -->
        <div class="absolute top-0 left-0 w-96 h-96 bg-blue-600/10 rounded-full mix-blend-multiply filter blur-3xl"></div>
        <div class="absolute bottom-0 right-0 w-96 h-96 bg-purple-600/10 rounded-full mix-blend-multiply filter blur-3xl"></div>
        
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-16 relative z-10">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8 lg:gap-12 mb-12">
                <!-- About Section -->
                <div class="lg:col-span-2">
                    <div class="flex items-center space-x-3 mb-6">
                        <div class="flex-shrink-0">
                            <img src="{{ asset('images/logo.png') }}" alt="ICCR Tanzania Logo" class="h-14 w-auto">
                        </div>
                        <div>
                            <span class="text-2xl font-bold text-white block">ICCR Tanzania</span>
                            <span class="text-xs text-gray-400 font-medium">Inter-Colleges CCR</span>
                        </div>
                    </div>
                    <p class="text-gray-400 mb-6 leading-relaxed max-w-md">
                        Inter-Colleges Catholic Charismatic Renewal Tanzania. Uniting Catholic students in colleges and higher education institutions through the Holy Spirit – Unity, Love, Evangelization.
                    </p>
                    
                    <!-- Contact Info -->
                    <div class="space-y-3 mb-6">
                        <a href="mailto:info@icccr.or.tz" class="flex items-center gap-3 text-gray-400 hover:text-white transition group">
                            <div class="w-10 h-10 bg-gray-800 rounded-lg flex items-center justify-center group-hover:bg-green-600 transition">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                                </svg>
                            </div>
                            <span class="font-medium">info@icccr.or.tz</span>
                        </a>
                        <a href="tel:+255123456789" class="flex items-center gap-3 text-gray-400 hover:text-white transition group">
                            <div class="w-10 h-10 bg-gray-800 rounded-lg flex items-center justify-center group-hover:bg-blue-600 transition">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/>
                                </svg>
                            </div>
                            <span class="font-medium">+255 123 456 789</span>
                        </a>
                        <div class="flex items-center gap-3 text-gray-400">
                            <div class="w-10 h-10 bg-gray-800 rounded-lg flex items-center justify-center">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/>
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/>
                                </svg>
                            </div>
                            <span class="font-medium">Dar es Salaam, Tanzania</span>
                        </div>
                    </div>
                    
                    <!-- Social Media -->
                    <div class="flex items-center gap-3">
                        <span class="text-sm font-semibold text-gray-400 mr-2">Follow Us:</span>
                        <a href="#" class="w-10 h-10 bg-gray-800 rounded-lg flex items-center justify-center text-gray-400 hover:text-white hover:bg-blue-600 transition transform hover:scale-110 hover:rotate-12" aria-label="Facebook">
                            <svg class="h-5 w-5" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M22 12c0-5.523-4.477-10-10-10S2 6.477 2 12c0 4.991 3.657 9.128 8.438 9.878v-6.987h-2.54V12h2.54V9.797c0-2.506 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.771-1.63 1.562V12h2.773l-.443 2.89h-2.33v6.988C18.343 21.128 22 16.991 22 12z"/>
                            </svg>
                        </a>
                        <a href="#" class="w-10 h-10 bg-gray-800 rounded-lg flex items-center justify-center text-gray-400 hover:text-white hover:bg-red-600 transition transform hover:scale-110 hover:rotate-12" aria-label="YouTube">
                            <svg class="h-5 w-5" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M23.498 6.186a3.016 3.016 0 0 0-2.122-2.136C19.505 3.545 12 3.545 12 3.545s-7.505 0-9.377.505A3.017 3.017 0 0 0 .502 6.186C0 8.07 0 12 0 12s0 3.93.502 5.814a3.016 3.016 0 0 0 2.122 2.136c1.871.505 9.376.505 9.376.505s7.505 0 9.377-.505a3.015 3.015 0 0 0 2.122-2.136C24 15.93 24 12 24 12s0-3.93-.502-5.814zM9.545 15.568V8.432L15.818 12l-6.273 3.568z"/>
                            </svg>
                        </a>
                        <a href="#" class="w-10 h-10 bg-gray-800 rounded-lg flex items-center justify-center text-gray-400 hover:text-white hover:bg-gradient-to-r hover:from-purple-600 hover:to-pink-600 transition transform hover:scale-110 hover:rotate-12" aria-label="Instagram">
                            <svg class="h-5 w-5" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M12.315 2c2.43 0 2.784.013 3.808.06 1.064.049 1.791.218 2.427.465a4.902 4.902 0 011.996 1.336c.748.748 1.336 1.644 1.336 2.996 0 .854-.217 1.363-.465 2.427-.047 1.024-.06 1.379-.06 3.808 0 2.43-.013 2.784-.06 3.808-.049 1.064-.218 1.791-.465 2.427a4.902 4.902 0 01-1.336 1.996c-.748.748-1.644 1.336-2.996 1.336-.854 0-1.363-.217-2.427-.465-1.024-.047-1.379-.06-3.808-.06-2.43 0-2.784.013-3.808.06-1.064.049-1.791.218-2.427.465a4.902 4.902 0 01-1.996-1.336c-.748-.748-1.336-1.644-1.336-2.996 0-.854.217-1.363.465-2.427.047-1.024.06-1.379.06-3.808 0-2.43-.013-2.784-.06-3.808a6.919 6.919 0 00-.465-2.427 4.902 4.902 0 011.336-1.996c.748-.748 1.644-1.336 2.996-1.336.854 0 1.363.217 2.427.465 1.024.047 1.379.06 3.808.06zm0-2c-2.5 0-2.884.013-3.926.06-1.11.05-1.87.22-2.536.453a6.99 6.99 0 00-2.852 1.857A6.99 6.99 0 001.44 5.45c-.233.666-.403 1.426-.453 2.536-.047 1.042-.06 1.426-.06 3.926 0 2.5.013 2.884.06 3.926.05 1.11.22 1.87.453 2.536a6.99 6.99 0 001.857 2.852 6.99 6.99 0 002.852 1.857c.666.233 1.426.403 2.536.453 1.042.047 1.426.06 3.926.06 2.5 0 2.884-.013 3.926-.06 1.11-.05 1.87-.22 2.536-.453a6.99 6.99 0 002.852-1.857 6.99 6.99 0 001.857-2.852c.233-.666.403-1.426.453-2.536.047-1.042.06-1.426.06-3.926 0-2.5-.013-2.884-.06-3.926a6.919 6.919 0 00-.453-2.536 6.99 6.99 0 00-1.857-2.852A6.99 6.99 0 0018.777.453C18.111.22 17.351.05 16.241 0 15.199-.013 14.815 0 12.315 0zm0 5.838a6.162 6.162 0 100 12.324 6.162 6.162 0 000-12.324zM12.315 16a4 4 0 110-8 4 4 0 010 8zm6.407-10.844a1.44 1.44 0 11-2.881 0 1.44 1.44 0 012.881 0z"/>
                            </svg>
                        </a>
                    </div>
                </div>
                
                <!-- Quick Links -->
                <div>
                    <h3 class="text-white font-bold text-lg mb-6 flex items-center gap-2">
                        <svg class="w-5 h-5 text-blue-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13.828 10.172a4 4 0 00-5.656 0l-4 4a4 4 0 105.656 5.656l1.102-1.101m-.758-4.899a4 4 0 005.656 0l4-4a4 4 0 00-5.656-5.656l-1.1 1.1"/>
                        </svg>
                        Quick Links
                    </h3>
                    <ul class="space-y-3">
                        <li>
                        <a href="{{ route('home') }}" class="flex items-center gap-2 text-gray-400 hover:text-white transition group">
                            <svg class="w-4 h-4 group-hover:text-green-500 transition" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                                </svg>
                                <span>Home</span>
                            </a>
                        </li>
                        <li>
                        <a href="{{ route('about') }}" class="flex items-center gap-2 text-gray-400 hover:text-white transition group">
                            <svg class="w-4 h-4 group-hover:text-green-500 transition" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                                </svg>
                                <span>About Us</span>
                            </a>
                        </li>
                        <li>
                        <a href="{{ route('events') }}" class="flex items-center gap-2 text-gray-400 hover:text-white transition group">
                            <svg class="w-4 h-4 group-hover:text-green-500 transition" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                                </svg>
                                <span>Events</span>
                            </a>
                        </li>
                        <li>
                        <a href="{{ route('ministries') }}" class="flex items-center gap-2 text-gray-400 hover:text-white transition group">
                            <svg class="w-4 h-4 group-hover:text-green-500 transition" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                                </svg>
                                <span>Ministries</span>
                            </a>
                        </li>
                        <li>
                        <a href="{{ route('get-involved') }}" class="flex items-center gap-2 text-gray-400 hover:text-white transition group">
                            <svg class="w-4 h-4 group-hover:text-green-500 transition" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                                </svg>
                                <span>Get Involved</span>
                            </a>
                        </li>
                        <li>
                        <a href="{{ route('contact') }}" class="flex items-center gap-2 text-gray-400 hover:text-white transition group">
                            <svg class="w-4 h-4 group-hover:text-green-500 transition" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                                </svg>
                                <span>Contact</span>
                            </a>
                        </li>
                    </ul>
                </div>
                
                <!-- Resources & Legal -->
                <div>
                    <h3 class="text-white font-bold text-lg mb-6 flex items-center gap-2">
                        <svg class="w-5 h-5 text-purple-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"/>
                        </svg>
                        Resources & Legal
                    </h3>
                    <ul class="space-y-3">
                        <li>
                        <a href="{{ route('resources') }}" class="flex items-center gap-2 text-gray-400 hover:text-white transition group">
                            <svg class="w-4 h-4 group-hover:text-green-500 transition" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                                </svg>
                                <span>Resources</span>
                            </a>
                        </li>
                        <li>
                        <a href="{{ route('media') }}" class="flex items-center gap-2 text-gray-400 hover:text-white transition group">
                            <svg class="w-4 h-4 group-hover:text-green-500 transition" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                                </svg>
                                <span>Media</span>
                            </a>
                        </li>
                        <li>
                        <a href="{{ route('terms') }}" class="flex items-center gap-2 text-gray-400 hover:text-white transition group">
                            <svg class="w-4 h-4 group-hover:text-green-500 transition" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                                </svg>
                                <span>Terms of Use</span>
                            </a>
                        </li>
                        <li>
                        <a href="{{ route('privacy') }}" class="flex items-center gap-2 text-gray-400 hover:text-white transition group">
                            <svg class="w-4 h-4 group-hover:text-green-500 transition" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                                </svg>
                                <span>Privacy Policy</span>
                            </a>
                        </li>
                        <li>
                        <a href="{{ route('code-of-conduct') }}" class="flex items-center gap-2 text-gray-400 hover:text-white transition group">
                            <svg class="w-4 h-4 group-hover:text-green-500 transition" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                                </svg>
                                <span>Code of Conduct</span>
                            </a>
                        </li>
                        <li>
                        <a href="{{ route('faq') }}" class="flex items-center gap-2 text-gray-400 hover:text-white transition group">
                            <svg class="w-4 h-4 group-hover:text-green-500 transition" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                                </svg>
                                <span>FAQ</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            
            <!-- Newsletter Section -->
            <div class="border-t border-gray-800 pt-8 mb-8">
                <div class="max-w-md mx-auto text-center">
                    <h3 class="text-white font-bold text-xl mb-3">Stay Connected</h3>
                    <p class="text-gray-400 mb-4 text-sm">Subscribe to our newsletter for updates on events and activities</p>
                    <form class="flex flex-col sm:flex-row gap-3">
                        <input type="email" placeholder="Enter your email" class="flex-1 px-4 py-3 bg-gray-800 border border-gray-700 rounded-lg text-white placeholder-gray-500 focus:outline-none focus:ring-2 focus:ring-blue-600 focus:border-transparent">
                        <button type="submit" class="px-6 py-3 bg-gradient-to-r from-green-600 to-blue-600 text-white rounded-lg font-semibold hover:from-green-700 hover:to-blue-700 transition shadow-lg hover:shadow-xl transform hover:scale-105">
                            Subscribe
                        </button>
                    </form>
                </div>
            </div>
            
            <!-- Bottom Bar -->
            <div class="border-t border-gray-800 pt-8">
                <div class="flex flex-col md:flex-row justify-between items-center gap-4">
                    <p class="text-gray-400 text-sm">
                        &copy; {{ date('Y') }} <span class="text-white font-semibold">ICCR Tanzania</span>. All rights reserved.
                    </p>
                    <div class="flex items-center gap-2 text-sm text-gray-400">
                        <span>Made with</span>
                        <svg class="w-4 h-4 text-red-500 animate-pulse" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M3.172 5.172a4 4 0 015.656 0L10 6.343l1.172-1.171a4 4 0 115.656 5.656L10 17.657l-6.828-6.829a4 4 0 010-5.656z" clip-rule="evenodd"/>
                        </svg>
                        <span>for the community</span>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <script>
        // Mobile menu toggle
        document.getElementById('mobile-menu-button')?.addEventListener('click', function() {
            const menu = document.getElementById('mobile-menu');
            menu.classList.toggle('hidden');
        });

        // Mobile dropdown toggles
        document.querySelectorAll('.mobile-dropdown-btn').forEach(button => {
            button.addEventListener('click', function() {
                const dropdown = this.nextElementSibling;
                const icon = this.querySelector('.mobile-dropdown-icon');
                dropdown.classList.toggle('hidden');
                icon.classList.toggle('rotate-180');
            });
        });

        // Top header hide on scroll and navigation position
        let lastScrollTop = 0;
        const topHeader = document.getElementById('top-header');
        const mainNav = document.getElementById('main-nav');
        let isScrolling = false;

        window.addEventListener('scroll', function() {
            if (!isScrolling) {
                window.requestAnimationFrame(function() {
                    const scrollTop = window.pageYOffset || document.documentElement.scrollTop;
                    
                    if (scrollTop > lastScrollTop && scrollTop > 50) {
                        // Scrolling down - hide header and move nav to top
                        topHeader.style.transform = 'translateY(-100%)';
                        mainNav.style.top = '0';
                    } else {
                        // Scrolling up - show header and move nav below header
                        topHeader.style.transform = 'translateY(0)';
                        mainNav.style.top = '42px';
                    }
                    
                    lastScrollTop = scrollTop <= 0 ? 0 : scrollTop;
                    isScrolling = false;
                });
                isScrolling = true;
            }
        });
    </script>
    
    @stack('scripts')
</body>
</html>

