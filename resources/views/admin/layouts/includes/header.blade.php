<header class="app-header">
    <div class="main-header-container container-fluid">
        <div class="header-content-left align-items-center">
            <div class="header-element">
                <div class="horizontal-logo"> <a href="{{ route('dashboard') }}" class="header-logo"> <img
                            src="{{ asset('admin') }}/images/brand-logos/desktop-logo.png" alt="logo"
                            class="desktop-logo"> <img src="{{ asset('admin') }}/images/brand-logos/toggle-logo.png"
                            alt="logo" class="toggle-logo"> <img
                            src="{{ asset('admin') }}/images/brand-logos/desktop-dark.png" alt="logo"
                            class="desktop-dark"> <img src="{{ asset('admin') }}/images/brand-logos/toggle-dark.png"
                            alt="logo" class="toggle-dark"> <img
                            src="{{ asset('admin') }}/images/brand-logos/desktop-white.png" alt="logo"
                            class="desktop-white"> <img src="{{ asset('admin') }}/images/brand-logos/toggle-white.png"
                            alt="logo" class="toggle-white"> </a> </div>
            </div>
            <div class="header-element"> <a aria-label="Hide Sidebar"
                    class="sidemenu-toggle header-link animated-arrow hor-toggle horizontal-navtoggle"
                    data-bs-toggle="sidebar" href="javascript:void(0);"><span></span></a> </div>
            <div class="main-header-center ms-3 d-sm-none d-md-none d-lg-block form-group"> <input class="form-control"
                    placeholder="Search..." type="search"> <button class="btn"><i
                        class="fas fa-search"></i></button> </div>
        </div>
        <div class="header-content-right">
            <div class="header-element header-search d-block d-sm-none"> <a href="javascript:void(0);"
                    class="header-link dropdown-toggle" data-bs-auto-close="outside" data-bs-toggle="dropdown"> <svg
                        xmlns="http://www.w3.org/2000/svg" class="header-link-icon" height="24px" viewBox="0 0 24 24"
                        width="24px" fill="#000000">
                        <path d="M0 0h24v24H0V0z" fill="none"></path>
                        <path
                            d="M15.5 14h-.79l-.28-.27C15.41 12.59 16 11.11 16 9.5 16 5.91 13.09 3 9.5 3S3 5.91 3 9.5 5.91 16 9.5 16c1.61 0 3.09-.59 4.23-1.57l.27.28v.79l5 4.99L20.49 19l-4.99-5zm-6 0C7.01 14 5 11.99 5 9.5S7.01 5 9.5 5 14 7.01 14 9.5 11.99 14 9.5 14z">
                        </path>
                    </svg> </a>
                <ul class="main-header-dropdown dropdown-menu dropdown-menu-end" data-popper-placement="none">
                    <li> <span class="dropdown-item d-flex align-items-center"> <span class="input-group">
                                <input type="text" class="form-control" placeholder="Search..."
                                    aria-label="Search input" aria-describedby="button-addon2"> <button
                                    class="btn btn-primary" type="button" id="button-addon2">Search</button>
                            </span> </span> </li>
                </ul>
            </div>
            <div class="header-element country-selector"> <a href="javascript:void(0);"
                    class="header-link dropdown-toggle" data-bs-auto-close="outside" data-bs-toggle="dropdown"> <img
                        src="{{ asset('admin') }}/images/flags/us_flag.jpg" alt="img" class="rounded-circle"> </a>
                <ul class="main-header-dropdown dropdown-menu dropdown-menu-end" data-popper-placement="none">
                    <li> <a class="dropdown-item d-flex align-items-center" href="javascript:void(0);"> <span
                                class="avatar avatar-xs lh-1 me-2"> <img
                                    src="{{ asset('admin') }}/images/flags/us_flag.jpg" alt="img">
                            </span>
                            English </a> </li>
                    <li> <a class="dropdown-item d-flex align-items-center" href="javascript:void(0);"> <span
                                class="avatar avatar-xs lh-1 me-2"> <img
                                    src="{{ asset('admin') }}/images/flags/spain_flag.jpg" alt="img">
                            </span>
                            Spanish </a> </li>
                    <li> <a class="dropdown-item d-flex align-items-center" href="javascript:void(0);"> <span
                                class="avatar avatar-xs lh-1 me-2"> <img
                                    src="{{ asset('admin') }}/images/flags/french_flag.jpg" alt="img">
                            </span> French </a> </li>
                    <li> <a class="dropdown-item d-flex align-items-center" href="javascript:void(0);"> <span
                                class="avatar avatar-xs lh-1 me-2"> <img
                                    src="{{ asset('admin') }}/images/flags/germany_flag.jpg" alt="img">
                            </span> German </a> </li>
                    <li> <a class="dropdown-item d-flex align-items-center" href="javascript:void(0);"> <span
                                class="avatar avatar-xs lh-1 me-2"> <img
                                    src="{{ asset('admin') }}/images/flags/italy_flag.jpg" alt="img">
                            </span>
                            Italian </a> </li>
                    <li> <a class="dropdown-item d-flex align-items-center" href="javascript:void(0);"> <span
                                class="avatar avatar-xs lh-1 me-2"> <img
                                    src="{{ asset('admin') }}/images/flags/russia_flag.jpg" alt="img">
                            </span> Russian </a> </li>
                </ul>
            </div>
            <div class="header-element header-theme-mode"> <a href="javascript:void(0);"
                    class="header-link layout-setting"> <span class="light-layout"> <svg
                            xmlns="http://www.w3.org/2000/svg" class="header-link-icon" width="24"
                            height="24" viewBox="0 0 24 24">
                            <path
                                d="M20.742 13.045a8.088 8.088 0 0 1-2.077.271c-2.135 0-4.14-.83-5.646-2.336a8.025 8.025 0 0 1-2.064-7.723A1 1 0 0 0 9.73 2.034a10.014 10.014 0 0 0-4.489 2.582c-3.898 3.898-3.898 10.243 0 14.143a9.937 9.937 0 0 0 7.072 2.93 9.93 9.93 0 0 0 7.07-2.929 10.007 10.007 0 0 0 2.583-4.491 1.001 1.001 0 0 0-1.224-1.224zm-2.772 4.301a7.947 7.947 0 0 1-5.656 2.343 7.953 7.953 0 0 1-5.658-2.344c-3.118-3.119-3.118-8.195 0-11.314a7.923 7.923 0 0 1 2.06-1.483 10.027 10.027 0 0 0 2.89 7.848 9.972 9.972 0 0 0 7.848 2.891 8.036 8.036 0 0 1-1.484 2.059z">
                            </path>
                        </svg> </span> <span class="dark-layout"> <svg xmlns="http://www.w3.org/2000/svg"
                            class="header-link-icon" width="24" height="24" viewBox="0 0 24 24">
                            <path
                                d="M6.993 12c0 2.761 2.246 5.007 5.007 5.007s5.007-2.246 5.007-5.007S14.761 6.993 12 6.993 6.993 9.239 6.993 12zM12 8.993c1.658 0 3.007 1.349 3.007 3.007S13.658 15.007 12 15.007 8.993 13.658 8.993 12 10.342 8.993 12 8.993zM10.998 19h2v3h-2zm0-17h2v3h-2zm-9 9h3v2h-3zm17 0h3v2h-3zM4.219 18.363l2.12-2.122 1.415 1.414-2.12 2.122zM16.24 6.344l2.122-2.122 1.414 1.414-2.122 2.122zM6.342 7.759 4.22 5.637l1.415-1.414 2.12 2.122zm13.434 10.605-1.414 1.414-2.122-2.122 1.414-1.414z">
                            </path>
                        </svg> </span> </a> </div>
            <div class="header-element cart-dropdown"> <a href="javascript:void(0);"
                    class="header-link dropdown-toggle" data-bs-auto-close="outside" data-bs-toggle="dropdown"> <svg
                        xmlns="http://www.w3.org/2000/svg" class="header-link-icon" width="24" height="24"
                        viewBox="0 0 24 24">
                        <path
                            d="M21.822 7.431A1 1 0 0 0 21 7H7.333L6.179 4.23A1.994 1.994 0 0 0 4.333 3H2v2h2.333l4.744 11.385A1 1 0 0 0 10 17h8c.417 0 .79-.259.937-.648l3-8a1 1 0 0 0-.115-.921zM17.307 15h-6.64l-2.5-6h11.39l-2.25 6z">
                        </path>
                        <circle cx="10.5" cy="19.5" r="1.5"></circle>
                        <circle cx="17.5" cy="19.5" r="1.5"></circle>
                    </svg> <span class="badge bg-warning rounded-pill header-icon-badge" id="cart-icon-badge">5</span>
                </a>
                <div class="main-header-dropdown dropdown-menu dropdown-menu-end" data-popper-placement="none">
                    <div class="p-3">
                        <div class="d-flex align-items-center justify-content-between">
                            <p class="mb-0 fs-15 fw-semibold">Shopping Cart</p><span class="badge bg-indigo"
                                id="cart-data">Items
                                (5)</span>
                        </div>
                    </div>
                    <div>
                        <hr class="dropdown-divider">
                    </div>
                    <ul class="list-unstyled mb-0" id="header-cart-items-scroll" data-simplebar="init">
                        <div class="simplebar-wrapper" style="margin: 0px;">
                            <div class="simplebar-height-auto-observer-wrapper">
                                <div class="simplebar-height-auto-observer"></div>
                            </div>
                            <div class="simplebar-mask">
                                <div class="simplebar-offset" style="right: 0px; bottom: 0px;">
                                    <div class="simplebar-content-wrapper" tabindex="0" role="region"
                                        aria-label="scrollable content" style="height: auto; overflow: hidden;">
                                        <div class="simplebar-content" style="padding: 0px;">
                                            <li class="dropdown-item">
                                                <div class="d-flex align-items-start cart-dropdown-item"> <img
                                                        src="{{ asset('admin') }}/images/ecommerce/19.jpg"
                                                        alt="img" class="avatar avatar-rounded br-5 me-3">
                                                    <div class="flex-grow-1">
                                                        <div
                                                            class="d-flex align-items-center justify-content-between mb-0">
                                                            <div class="mb-0"> <a class="text-muted fs-13"
                                                                    href="product-cart.html">Lence
                                                                    Camera</a>
                                                                <div class="fw-semibold text-dark fs-12">1*
                                                                    $189.00</div>
                                                            </div>
                                                            <div> <a href="javascript:void(0);"
                                                                    class="header-cart-remove float-end dropdown-item-close me-2"><i
                                                                        class="fe fe-trash-2 text-danger"></i></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="dropdown-item">
                                                <div class="d-flex align-items-start cart-dropdown-item"> <img
                                                        src="{{ asset('admin') }}/images/ecommerce/16.jpg"
                                                        alt="img" class="avatar avatar-rounded br-5 me-3">
                                                    <div class="flex-grow-1">
                                                        <div
                                                            class="d-flex align-items-center justify-content-between mb-0">
                                                            <div class="mb-0"> <a class="text-muted fs-13"
                                                                    href="product-cart.html">White
                                                                    Earbuds</a>
                                                                <div class="fw-semibold text-dark fs-12">3*
                                                                    $59.00</div>
                                                            </div>
                                                            <div> <a href="javascript:void(0);"
                                                                    class="header-cart-remove float-end dropdown-item-close me-2"><i
                                                                        class="fe fe-trash-2 text-danger"></i></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="dropdown-item">
                                                <div class="d-flex align-items-start cart-dropdown-item"> <img
                                                        src="{{ asset('admin') }}/images/ecommerce/12.jpg"
                                                        alt="img" class="avatar avatar-rounded br-5 me-3">
                                                    <div class="flex-grow-1">
                                                        <div
                                                            class="d-flex align-items-center justify-content-between mb-0">
                                                            <div class="mb-0"> <a class="text-muted fs-13"
                                                                    href="product-cart.html">Branded Black
                                                                    Headeset</a>
                                                                <div class="fw-semibold text-dark fs-12">2*
                                                                    $39.99</div>
                                                            </div>
                                                            <div> <a href="javascript:void(0);"
                                                                    class="header-cart-remove float-end dropdown-item-close me-2"><i
                                                                        class="fe fe-trash-2 text-danger"></i></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="dropdown-item">
                                                <div class="d-flex align-items-start cart-dropdown-item"> <img
                                                        src="{{ asset('admin') }}/images/ecommerce/6.jpg"
                                                        alt="img" class="avatar avatar-rounded br-5 me-3">
                                                    <div class="flex-grow-1">
                                                        <div
                                                            class="d-flex align-items-center justify-content-between mb-0">
                                                            <div class="mb-0"> <a class="text-muted fs-13"
                                                                    href="product-cart.html">Glass Decor
                                                                    Item</a>
                                                                <div class="fw-semibold text-dark fs-12">5*
                                                                    $5.99</div>
                                                            </div>
                                                            <div> <a href="javascript:void(0);"
                                                                    class="header-cart-remove float-end dropdown-item-close me-2"><i
                                                                        class="fe fe-trash-2 text-danger"></i></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="dropdown-item">
                                                <div class="d-flex align-items-start cart-dropdown-item"> <img
                                                        src="{{ asset('admin') }}/images/ecommerce/4.jpg"
                                                        alt="img" class="avatar avatar-rounded br-5 me-3">
                                                    <div class="flex-grow-1">
                                                        <div
                                                            class="d-flex align-items-center justify-content-between mb-0">
                                                            <div class="mb-0"> <a class="text-muted fs-13"
                                                                    href="product-cart.html">Pink Teddy
                                                                    Bear</a>
                                                                <div class="fw-semibold text-dark fs-12">1*
                                                                    $10.00</div>
                                                            </div>
                                                            <div> <a href="javascript:void(0);"
                                                                    class="header-cart-remove float-end dropdown-item-close me-2"><i
                                                                        class="fe fe-trash-2 text-danger"></i></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="simplebar-placeholder" style="width: 0px; height: 0px;"></div>
                        </div>
                        <div class="simplebar-track simplebar-horizontal" style="visibility: hidden;">
                            <div class="simplebar-scrollbar" style="width: 0px; display: none;"></div>
                        </div>
                        <div class="simplebar-track simplebar-vertical" style="visibility: hidden;">
                            <div class="simplebar-scrollbar" style="height: 0px; display: none;"></div>
                        </div>
                    </ul>
                    <div
                        class="p-2 bg-primary-transparent d-flex justify-content-between align-items-center empty-header-item border-top">
                        <div class=""> <a href="check-out.html"
                                class="btn btn-sm btn-primary btn-w-xs">checkout</a> </div>
                        <div> <span class="text-dark fw-semibold">Sub Total : $ 485.93</span> </div>
                    </div>
                    <div class="p-5 empty-item d-none">
                        <div class="text-center"> <span
                                class="avatar avatar-xl avatar-rounded bg-warning-transparent"> <i
                                    class="ri-shopping-cart-2-line fs-2"></i> </span>
                            <h6 class="fw-bold mb-1 mt-3">Your Cart is Empty</h6> <span
                                class="mb-3 fw-normal fs-13 d-block">Add
                                some items to make me happy :)</span> <a href="shop.html"
                                class="btn btn-primary btn-wave btn-sm m-1 waves-effect waves-light"
                                data-abc="true">continue
                                shopping <i class="bi bi-arrow-right ms-1"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="header-element notifications-dropdown"> <a href="javascript:void(0);"
                    class="header-link dropdown-toggle" data-bs-toggle="dropdown" data-bs-auto-close="outside"
                    id="messageDropdown" aria-expanded="false"> <svg xmlns="http://www.w3.org/2000/svg"
                        class="header-link-icon" width="24" height="24" viewBox="0 0 24 24">
                        <path
                            d="M19 13.586V10c0-3.217-2.185-5.927-5.145-6.742C13.562 2.52 12.846 2 12 2s-1.562.52-1.855 1.258C7.185 4.074 5 6.783 5 10v3.586l-1.707 1.707A.996.996 0 0 0 3 16v2a1 1 0 0 0 1 1h16a1 1 0 0 0 1-1v-2a.996.996 0 0 0-.293-.707L19 13.586zM19 17H5v-.586l1.707-1.707A.996.996 0 0 0 7 14v-4c0-2.757 2.243-5 5-5s5 2.243 5 5v4c0 .266.105.52.293.707L19 16.414V17zm-7 5a2.98 2.98 0 0 0 2.818-2H9.182A2.98 2.98 0 0 0 12 22z">
                        </path>
                    </svg> <span class="badge bg-secondary rounded-pill header-icon-badge pulse pulse-secondary"
                        id="notification-icon-badge">6</span> </a>
                <div class="main-header-dropdown dropdown-menu dropdown-menu-end" data-popper-placement="none">
                    <div class="p-3">
                        <div class="d-flex align-items-center justify-content-between">
                            <p class="mb-0 fs-17 fw-semibold">Notifications</p><span
                                class="badge bg-secondary-transparent" id="notifiation-data">6 Unread</span>
                        </div>
                    </div>
                    <div class="dropdown-divider"></div>
                    <ul class="list-unstyled mb-0" id="header-notification-scroll" data-simplebar="init">
                        <div class="simplebar-wrapper" style="margin: 0px;">
                            <div class="simplebar-height-auto-observer-wrapper">
                                <div class="simplebar-height-auto-observer"></div>
                            </div>
                            <div class="simplebar-mask">
                                <div class="simplebar-offset" style="right: 0px; bottom: 0px;">
                                    <div class="simplebar-content-wrapper" tabindex="0" role="region"
                                        aria-label="scrollable content" style="height: auto; overflow: hidden;">
                                        <div class="simplebar-content" style="padding: 0px;">
                                            <li class="dropdown-item p-3">
                                                <div class="d-flex align-items-start">
                                                    <div class="pe-3"> <span class="avatar bg-pink rounded-3"><i
                                                                class="far fa-folder-open text-fixed-white fs-18"></i></span>
                                                    </div>
                                                    <div
                                                        class="flex-grow-1 d-flex align-items-center justify-content-between">
                                                        <div>
                                                            <p class="mb-0 fw-semibold"><a
                                                                    href="notification.html">New Files
                                                                    available</a></p>
                                                            <span
                                                                class="text-muted fw-normal fs-12 header-notification-text">10
                                                                hours ago</span>
                                                        </div>
                                                        <div> <a href="javascript:void(0);"
                                                                class="min-w-fit-content text-muted me-1 dropdown-item-close1"><i
                                                                    class="ti ti-x fs-16"></i></a> </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="dropdown-item p-3">
                                                <div class="d-flex align-items-start">
                                                    <div class="pe-3"> <span class="avatar bg-purple rounded-3"><i
                                                                class="fab fa-delicious text-fixed-white fs-18"></i></span>
                                                    </div>
                                                    <div
                                                        class="flex-grow-1 d-flex align-items-center justify-content-between">
                                                        <div>
                                                            <p class="mb-0 fw-semibold"><a
                                                                    href="notification.html">Updates
                                                                    available</a></p><span
                                                                class="text-muted fw-normal fs-12 header-notification-text">2
                                                                days ago</span>
                                                        </div>
                                                        <div> <a href="javascript:void(0);"
                                                                class="min-w-fit-content text-muted me-1 dropdown-item-close1"><i
                                                                    class="ti ti-x fs-16"></i></a> </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="dropdown-item p-3">
                                                <div class="d-flex align-items-start">
                                                    <div class="pe-3"> <span class="avatar bg-success rounded-3"><i
                                                                class="fa fa-cart-plus text-fixed-white fs-18"></i></span>
                                                    </div>
                                                    <div
                                                        class="flex-grow-1 d-flex align-items-center justify-content-between">
                                                        <div>
                                                            <p class="mb-0 fw-semibold"><a
                                                                    href="notification.html">New order
                                                                    received</a></p>
                                                            <span
                                                                class="text-muted fw-normal fs-12 header-notification-text">1
                                                                hour ago</span>
                                                        </div>
                                                        <div> <a href="javascript:void(0);"
                                                                class="min-w-fit-content text-muted me-1 dropdown-item-close1"><i
                                                                    class="ti ti-x fs-16"></i></a> </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="dropdown-item p-3">
                                                <div class="d-flex align-items-start">
                                                    <div class="pe-3"> <span class="avatar bg-warning rounded-3"><i
                                                                class="far fa-envelope-open text-fixed-white fs-18"></i></span>
                                                    </div>
                                                    <div
                                                        class="flex-grow-1 d-flex align-items-center justify-content-between">
                                                        <div>
                                                            <p class="mb-0 fw-semibold"><a
                                                                    href="notification.html">New review
                                                                    received </a></p>
                                                            <span
                                                                class="text-muted fw-normal fs-12 header-notification-text">1
                                                                day ago</span>
                                                        </div>
                                                        <div> <a href="javascript:void(0);"
                                                                class="min-w-fit-content text-muted me-1 dropdown-item-close1"><i
                                                                    class="ti ti-x fs-16"></i></a> </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="dropdown-item p-3">
                                                <div class="d-flex align-items-start">
                                                    <div class="pe-3"> <span class="avatar bg-danger rounded-3"><i
                                                                class="fab fa-wpforms text-fixed-white fs-18"></i></span>
                                                    </div>
                                                    <div
                                                        class="flex-grow-1 d-flex align-items-center justify-content-between">
                                                        <div>
                                                            <p class="mb-0 fw-semibold"><a href="notification.html">22
                                                                    verified
                                                                    registrations </a>
                                                            </p><span
                                                                class="text-muted fw-normal fs-12 header-notification-text">2
                                                                hours
                                                                ago</span>
                                                        </div>
                                                        <div> <a href="javascript:void(0);"
                                                                class="min-w-fit-content text-muted me-1 dropdown-item-close1"><i
                                                                    class="ti ti-x fs-16"></i></a> </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="dropdown-item p-3">
                                                <div class="d-flex align-items-start">
                                                    <div class="pe-3"> <span class="avatar bg-success rounded-3"><i
                                                                class="far fa-check-square text-fixed-white fs-18"></i></span>
                                                    </div>
                                                    <div
                                                        class="flex-grow-1 d-flex align-items-center justify-content-between">
                                                        <div>
                                                            <p class="mb-0 fw-semibold"><a
                                                                    href="notification.html">Project approved
                                                                </a></p><span
                                                                class="text-muted fw-normal fs-12 header-notification-text">4
                                                                hours ago</span>
                                                        </div>
                                                        <div> <a href="javascript:void(0);"
                                                                class="min-w-fit-content text-muted me-1 dropdown-item-close1"><i
                                                                    class="ti ti-x fs-16"></i></a> </div>
                                                    </div>
                                                </div>
                                            </li>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="simplebar-placeholder" style="width: 0px; height: 0px;"></div>
                        </div>
                        <div class="simplebar-track simplebar-horizontal" style="visibility: hidden;">
                            <div class="simplebar-scrollbar" style="width: 0px; display: none;"></div>
                        </div>
                        <div class="simplebar-track simplebar-vertical" style="visibility: hidden;">
                            <div class="simplebar-scrollbar" style="height: 0px; display: none;"></div>
                        </div>
                    </ul>
                    <div class="p-2 empty-header-item1 border-top">
                        <div class="d-grid"> <a href="notification.html" class="btn btn-primary btn-sm">View
                                All</a> </div>
                    </div>
                    <div class="p-5 empty-item1 d-none">
                        <div class="text-center"> <span
                                class="avatar avatar-xl avatar-rounded bg-secondary-transparent"> <i
                                    class="ri-notification-off-line fs-2"></i> </span>
                            <h6 class="fw-semibold mt-3">No New Notifications</h6>
                        </div>
                    </div>
                </div>
            </div>
            <div class="header-element header-shortcuts-dropdown d-md-block d-none"> <a href="javascript:void(0);"
                    class="header-link dropdown-toggle" data-bs-toggle="dropdown" data-bs-auto-close="outside"
                    id="notificationDropdown" aria-expanded="false"> <svg xmlns="http://www.w3.org/2000/svg"
                        class="header-link-icon" height="24px" viewBox="0 0 24 24" width="24px" fill="#000000">
                        <path d="M0 0h24v24H0V0z" fill="none"></path>
                        <path
                            d="M4 8h4V4H4v4zm6 12h4v-4h-4v4zm-6 0h4v-4H4v4zm0-6h4v-4H4v4zm6 0h4v-4h-4v4zm6-10v4h4V4h-4zm-6 4h4V4h-4v4zm6 6h4v-4h-4v4zm0 6h4v-4h-4v4z">
                        </path>
                    </svg> </a>
                <div class="main-header-dropdown header-shortcuts-dropdown dropdown-menu pb-0 dropdown-menu-end"
                    aria-labelledby="notificationDropdown">
                    <div class="p-3">
                        <div class="d-flex align-items-center justify-content-between">
                            <p class="mb-0 fs-17 fw-semibold">Related Apps</p>
                        </div>
                    </div>
                    <div class="dropdown-divider mb-0"></div>
                    <div class="main-header-shortcuts p-2" id="header-shortcut-scroll" data-simplebar="init">
                        <div class="simplebar-wrapper" style="margin: -8px;">
                            <div class="simplebar-height-auto-observer-wrapper">
                                <div class="simplebar-height-auto-observer"></div>
                            </div>
                            <div class="simplebar-mask">
                                <div class="simplebar-offset" style="right: 0px; bottom: 0px;">
                                    <div class="simplebar-content-wrapper" tabindex="0" role="region"
                                        aria-label="scrollable content" style="height: auto; overflow: hidden;">
                                        <div class="simplebar-content" style="padding: 8px;">
                                            <div class="row g-2">
                                                <div class="col-4"> <a href="javascript:void(0);">
                                                        <div class="text-center p-3 related-app"> <span
                                                                class="avatar avatar-sm avatar-rounded">
                                                                <img src="{{ asset('admin') }}/images/apps/figma.png"
                                                                    alt=""> </span> <span
                                                                class="d-block fs-12">Figma</span> </div>
                                                    </a> </div>
                                                <div class="col-4"> <a href="javascript:void(0);">
                                                        <div class="text-center p-3 related-app"> <span
                                                                class="avatar avatar-sm avatar-rounded">
                                                                <img src="{{ asset('admin') }}/images/apps/microsoft-powerpoint.png"
                                                                    alt=""> </span> <span
                                                                class="d-block fs-12">Power Point</span> </div>
                                                    </a> </div>
                                                <div class="col-4"> <a href="javascript:void(0);">
                                                        <div class="text-center p-3 related-app"> <span
                                                                class="avatar avatar-sm avatar-rounded">
                                                                <img src="{{ asset('admin') }}/images/apps/microsoft-word.png"
                                                                    alt=""> </span> <span
                                                                class="d-block fs-12">MS Word</span> </div>
                                                    </a> </div>
                                                <div class="col-4"> <a href="javascript:void(0);">
                                                        <div class="text-center p-3 related-app"> <span
                                                                class="avatar avatar-sm avatar-rounded">
                                                                <img src="{{ asset('admin') }}/images/apps/calender.png"
                                                                    alt=""> </span> <span
                                                                class="d-block fs-12">Calendar</span> </div>
                                                    </a> </div>
                                                <div class="col-4"> <a href="javascript:void(0);">
                                                        <div class="text-center p-3 related-app"> <span
                                                                class="avatar avatar-sm avatar-rounded">
                                                                <img src="{{ asset('admin') }}/images/apps/sketch.png"
                                                                    alt=""> </span> <span
                                                                class="d-block fs-12">Sketch</span> </div>
                                                    </a> </div>
                                                <div class="col-4"> <a href="javascript:void(0);">
                                                        <div class="text-center p-3 related-app"> <span
                                                                class="avatar avatar-sm avatar-rounded">
                                                                <img src="{{ asset('admin') }}/images/apps/google-docs.png"
                                                                    alt=""> </span> <span
                                                                class="d-block fs-12">Docs</span> </div>
                                                    </a> </div>
                                                <div class="col-4"> <a href="javascript:void(0);">
                                                        <div class="text-center p-3 related-app"> <span
                                                                class="avatar avatar-sm avatar-rounded">
                                                                <img src="{{ asset('admin') }}/images/apps/google.png"
                                                                    alt=""> </span> <span
                                                                class="d-block fs-12">Google</span> </div>
                                                    </a> </div>
                                                <div class="col-4"> <a href="javascript:void(0);">
                                                        <div class="text-center p-3 related-app"> <span
                                                                class="avatar avatar-sm avatar-rounded">
                                                                <img src="{{ asset('admin') }}/images/apps/translate.png"
                                                                    alt=""> </span> <span
                                                                class="d-block fs-12">Translate</span> </div>
                                                    </a> </div>
                                                <div class="col-4"> <a href="javascript:void(0);">
                                                        <div class="text-center p-3 related-app"> <span
                                                                class="avatar avatar-sm avatar-rounded">
                                                                <img src="{{ asset('admin') }}/images/apps/google-sheets.png"
                                                                    alt=""> </span> <span
                                                                class="d-block fs-12">Sheets</span> </div>
                                                    </a> </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="simplebar-placeholder" style="width: 0px; height: 0px;"></div>
                        </div>
                        <div class="simplebar-track simplebar-horizontal" style="visibility: hidden;">
                            <div class="simplebar-scrollbar" style="width: 0px; display: none;"></div>
                        </div>
                        <div class="simplebar-track simplebar-vertical" style="visibility: hidden;">
                            <div class="simplebar-scrollbar" style="height: 0px; display: none;"></div>
                        </div>
                    </div>
                    <div class="p-3 border-top">
                        <div class="d-grid"> <a href="javascript:void(0);" class="btn btn-primary">View
                                All</a> </div>
                    </div>
                </div>
            </div>
            <div class="header-element header-fullscreen"> <a onclick="openFullscreen();" href="#"
                    class="header-link"> <i class="bx bx-fullscreen full-screen-open header-link-icon"></i>
                    <i class="bx bx-exit-fullscreen full-screen-close header-link-icon d-none"></i> </a>
            </div>
            <div class="header-element d-md-block d-none"> <a href="#" class="header-link"
                    data-bs-toggle="offcanvas" data-bs-target="#sidebar-canvas"> <svg
                        xmlns="http://www.w3.org/2000/svg" class="header-link-icon" width="24" height="24"
                        viewBox="0 0 24 24">
                        <path d="M4 6h16v2H4zm4 5h12v2H8zm5 5h7v2h-7z"></path>
                    </svg> </a> </div>
            <div class="header-element"> <a href="#" class="header-link dropdown-toggle"
                    id="mainHeaderProfile" data-bs-toggle="dropdown" data-bs-auto-close="outside"
                    aria-expanded="false">
                    <div class="d-flex align-items-center">
                        <div class="me-sm-2 me-0"> <img src="{{ asset('admin') }}/images/faces/2.jpg" alt="img"
                                width="32" height="32" class="rounded-circle">
                        </div>
                        <div class="d-xl-block d-none">
                            <p class="fw-semibold mb-0 lh-1">Ashton Cox</p><span
                                class="op-7 fw-normal d-block fs-11">Web
                                Developer</span>
                        </div>
                    </div>
                </a>
                <ul class="main-header-dropdown dropdown-menu pt-0 overflow-hidden header-profile-dropdown dropdown-menu-end"
                    aria-labelledby="mainHeaderProfile">
                    <li><a class="dropdown-item d-flex border-bottom" href="profile.html"><i
                                class="far fa-user-circle fs-16 me-2 op-7"></i>Profile</a></li>
                    <li><a class="dropdown-item d-flex border-bottom" href="chat.html"><i
                                class="far fa-smile fs-16 me-2 op-7"></i>Chat</a></li>
                    <li><a class="dropdown-item d-flex border-bottom" href="mail.html"><i
                                class="far fa-envelope  fs-16 me-2 op-7"></i>Inbox <span
                                class="badge bg-success-transparent ms-auto">25</span></a></li>
                    <li><a class="dropdown-item d-flex border-bottom border-block-end" href="chat.html"><i
                                class="far fa-comment-dots fs-16 me-2 op-7"></i>Messages</a></li>
                    <li><a class="dropdown-item d-flex border-bottom" href="mail-settings.html"><i
                                class="far fa-sun fs-16 me-2 op-7"></i>Settings</a></li>
                    <li><a class="dropdown-item d-flex" href="signin.html"><i
                                class="far fa-arrow-alt-circle-left fs-16 me-2 op-7"></i>Sign Out</a></li>
                </ul>
            </div>
            <div class="header-element"> <a href="#" class="header-link switcher-icon"
                    data-bs-toggle="offcanvas" data-bs-target="#switcher-canvas"> <svg
                        xmlns="http://www.w3.org/2000/svg" class="header-link-icon" width="24" height="24"
                        viewBox="0 0 24 24">
                        <path
                            d="M12 16c2.206 0 4-1.794 4-4s-1.794-4-4-4-4 1.794-4 4 1.794 4 4 4zm0-6c1.084 0 2 .916 2 2s-.916 2-2 2-2-.916-2-2 .916-2 2-2z">
                        </path>
                        <path
                            d="m2.845 16.136 1 1.73c.531.917 1.809 1.261 2.73.73l.529-.306A8.1 8.1 0 0 0 9 19.402V20c0 1.103.897 2 2 2h2c1.103 0 2-.897 2-2v-.598a8.132 8.132 0 0 0 1.896-1.111l.529.306c.923.53 2.198.188 2.731-.731l.999-1.729a2.001 2.001 0 0 0-.731-2.732l-.505-.292a7.718 7.718 0 0 0 0-2.224l.505-.292a2.002 2.002 0 0 0 .731-2.732l-.999-1.729c-.531-.92-1.808-1.265-2.731-.732l-.529.306A8.1 8.1 0 0 0 15 4.598V4c0-1.103-.897-2-2-2h-2c-1.103 0-2 .897-2 2v.598a8.132 8.132 0 0 0-1.896 1.111l-.529-.306c-.924-.531-2.2-.187-2.731.732l-.999 1.729a2.001 2.001 0 0 0 .731 2.732l.505.292a7.683 7.683 0 0 0 0 2.223l-.505.292a2.003 2.003 0 0 0-.731 2.733zm3.326-2.758A5.703 5.703 0 0 1 6 12c0-.462.058-.926.17-1.378a.999.999 0 0 0-.47-1.108l-1.123-.65.998-1.729 1.145.662a.997.997 0 0 0 1.188-.142 6.071 6.071 0 0 1 2.384-1.399A1 1 0 0 0 11 5.3V4h2v1.3a1 1 0 0 0 .708.956 6.083 6.083 0 0 1 2.384 1.399.999.999 0 0 0 1.188.142l1.144-.661 1 1.729-1.124.649a1 1 0 0 0-.47 1.108c.112.452.17.916.17 1.378 0 .461-.058.925-.171 1.378a1 1 0 0 0 .471 1.108l1.123.649-.998 1.729-1.145-.661a.996.996 0 0 0-1.188.142 6.071 6.071 0 0 1-2.384 1.399A1 1 0 0 0 13 18.7l.002 1.3H11v-1.3a1 1 0 0 0-.708-.956 6.083 6.083 0 0 1-2.384-1.399.992.992 0 0 0-1.188-.141l-1.144.662-1-1.729 1.124-.651a1 1 0 0 0 .471-1.108z">
                        </path>
                    </svg> </a> </div>
        </div>
    </div>
</header>
