<aside class="app-sidebar sticky" id="sidebar">
    <div class="main-sidebar-header">
        <a href="{{ route('dashboard') }}" class="header-logo">
            <img src="{{ asset('admin') }}/images/brand-logos/desktop-logo.png" alt="logo" class="desktop-logo">
            <img src="{{ asset('admin') }}/images/brand-logos/toggle-logo.png" alt="logo" class="toggle-logo">
            <img src="{{ asset('admin') }}/images/brand-logos/desktop-dark.png" alt="logo" class="desktop-dark">
            <img src="{{ asset('admin') }}/images/brand-logos/toggle-dark.png" alt="logo" class="toggle-dark">
            <img src="{{ asset('admin') }}/images/brand-logos/desktop-white.png" alt="logo" class="desktop-white">
            <img src="{{ asset('admin') }}/images/brand-logos/toggle-white.png" alt="logo" class="toggle-white">
        </a>
    </div>
    <div class="main-sidebar" id="sidebar-scroll" data-simplebar="init">
        <div class="simplebar-wrapper" style="margin: -8px 0px -80px;">
            <div class="simplebar-height-auto-observer-wrapper">
                <div class="simplebar-height-auto-observer"></div>
            </div>
            <div class="simplebar-mask">
                <div class="simplebar-offset" style="right: 0px; bottom: 0px;">
                    <div class="simplebar-content-wrapper" tabindex="0" role="region" aria-label="scrollable content"
                        style="height: 100%; overflow: hidden scroll;">
                        <div class="simplebar-content" style="padding: 8px 0px 80px;">
                            <nav class="main-menu-container nav nav-pills flex-column sub-open open active">
                                <div class="slide-left active d-none" id="slide-left">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="#7b8191" width="24" height="24"
                                        viewBox="0 0 24 24">
                                        <path d="M13.293 6.293 7.586 12l5.707 5.707 1.414-1.414L10.414 12l4.293-4.293z">
                                        </path>
                                    </svg>
                                </div>
                                <ul class="main-menu" style="display: block; margin-left: 0px; margin-right: 0px;">
                                    <li class="slide__category">
                                        <span class="category-name">Home</span>
                                    </li>
                                    <li class="slide">
                                        <a href="{{ route('dashboard') }}" class="side-menu__item">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="side-menu__icon"
                                                width="24" height="24" viewBox="0 0 24 24">
                                                <path
                                                    d="M3 13h1v7c0 1.103.897 2 2 2h12c1.103 0 2-.897 2-2v-7h1a1 1 0 0 0 .707-1.707l-9-9a.999.999 0 0 0-1.414 0l-9 9A1 1 0 0 0 3 13zm7 7v-5h4v5h-4zm2-15.586 6 6V15l.001 5H16v-5c0-1.103-.897-2-2-2h-4c-1.103 0-2 .897-2 2v5H6v-9.586l6-6z">
                                                </path>
                                            </svg>
                                            <span class="side-menu__label">Dashboard</span>
                                        </a>
                                    </li>
                                </ul>
                                <div class="slide-right d-none" id="slide-right">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="#7b8191" width="24" height="24"
                                        viewBox="0 0 24 24">
                                        <path
                                            d="M10.707 17.707 16.414 12l-5.707-5.707-1.414 1.414L13.586 12l-4.293 4.293z">
                                        </path>
                                    </svg>
                                </div>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
            <div class="simplebar-placeholder" style="width: auto; height: 956px;"></div>
        </div>
        <div class="simplebar-track simplebar-horizontal" style="visibility: hidden;">
            <div class="simplebar-scrollbar" style="width: 0px; transform: translate3d(0px, 0px, 0px); display: none;">
            </div>
        </div>
        <div class="simplebar-track simplebar-vertical" style="visibility: visible;">
            <div class="simplebar-scrollbar"
                style="height: 764px; display: block; transform: translate3d(0px, 0px, 0px);">
            </div>
        </div>
    </div>
</aside>
