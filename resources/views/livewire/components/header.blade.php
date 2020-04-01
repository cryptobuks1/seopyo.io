<div class="nk-header nk-header-fixed is-light">
    <div class="container-lg wide-xl">
        <div class="nk-header-wrap">
            <div class="nk-header-brand">
                <a href="{{ route('home') }}" class="logo-link">
                    <div class="app-logo">
                        <span class="app-logo-main">seopyo</span>
                        <span class="app-logo-ext">.io</span>
                    </div>
                </a>
            </div>
            @if(auth()->check() && auth()->user())
                @livewire('components.header-bookmarklet')
                <div class="nk-header-tools">
                    <ul class="nk-quick-nav">
                        <li class="dropdown user-dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <div class="user-toggle">
                                    <div class="user-avatar sm">
                                        <em class="icon ni ni-user-alt"></em>
                                    </div>
                                    <div class="user-name dropdown-indicator d-none d-sm-block">
                                        {{ auth()->user()->first_name }}
                                    </div>
                                </div>
                            </a>
                            <div class="dropdown-menu dropdown-menu-md dropdown-menu-right dropdown-menu-s1">
                                <div class="dropdown-inner user-card-wrap bg-lighter d-none d-md-block">
                                    <div class="user-card">
                                        <div class="user-avatar">
                                            <span>AB</span>
                                        </div>
                                        <div class="user-info">
                                            <span class="lead-text">Abu Bin Ishtiyak</span>
                                            <span class="sub-text">info@softnio.com</span>
                                        </div>
                                        <div class="user-action">
                                            <a class="btn btn-icon mr-n2" href="{{ route('account.settings') }}">
                                                <em class="icon ni ni-setting"></em>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="dropdown-inner">
                                    <ul class="link-list">
                                        <li>
                                            <a href="{{ route('profile', [auth()->user()->id]) }}">
                                                <em class="icon ni ni-user-alt"></em>
                                                <span>{{ __('View Profile') }}</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="{{ route('account.settings') }}">
                                                <em class="icon ni ni-setting-alt"></em>
                                                <span>{{ __('Account Setting') }}</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="dropdown-inner">
                                    <ul class="link-list">
                                        @livewire('auth.signout')
                                    </ul>
                                </div>
                            </div>
                        </li>
                        <li class="dropdown notification-dropdown">
                            <a href="#" class="dropdown-toggle nk-quick-nav-icon mr-lg-n1"
                               data-toggle="dropdown">
                                <div class="icon-status icon-status-info"><em class="icon ni ni-bell"></em>
                                </div>
                            </a>
                            <div class="dropdown-menu dropdown-menu-xl dropdown-menu-right dropdown-menu-s1">
                                <div class="dropdown-head">
                                    <span class="sub-title nk-dropdown-title">Notifications</span>
                                    <a href="#">Mark All as Read</a>
                                </div>
                                <div class="dropdown-body">
                                    <div class="nk-notification">
                                        <div class="nk-notification-item dropdown-inner">
                                            <div class="nk-notification-icon">
                                                <em class="icon icon-circle bg-warning-dim ni ni-curve-down-right"></em>
                                            </div>
                                            <div class="nk-notification-content">
                                                <div class="nk-notification-text">You have requested to <span>Widthdrawl</span>
                                                </div>
                                                <div class="nk-notification-time">2 hrs ago</div>
                                            </div>
                                        </div>
                                        <div class="nk-notification-item dropdown-inner">
                                            <div class="nk-notification-icon">
                                                <em class="icon icon-circle bg-success-dim ni ni-curve-down-left"></em>
                                            </div>
                                            <div class="nk-notification-content">
                                                <div class="nk-notification-text">Your
                                                    <span>Deposit Order</span> is placed
                                                </div>
                                                <div class="nk-notification-time">2 hrs ago</div>
                                            </div>
                                        </div>
                                        <div class="nk-notification-item dropdown-inner">
                                            <div class="nk-notification-icon">
                                                <em class="icon icon-circle bg-warning-dim ni ni-curve-down-right"></em>
                                            </div>
                                            <div class="nk-notification-content">
                                                <div class="nk-notification-text">You have requested to <span>Widthdrawl</span>
                                                </div>
                                                <div class="nk-notification-time">2 hrs ago</div>
                                            </div>
                                        </div>
                                        <div class="nk-notification-item dropdown-inner">
                                            <div class="nk-notification-icon">
                                                <em class="icon icon-circle bg-success-dim ni ni-curve-down-left"></em>
                                            </div>
                                            <div class="nk-notification-content">
                                                <div class="nk-notification-text">Your
                                                    <span>Deposit Order</span> is placed
                                                </div>
                                                <div class="nk-notification-time">2 hrs ago</div>
                                            </div>
                                        </div>
                                        <div class="nk-notification-item dropdown-inner">
                                            <div class="nk-notification-icon">
                                                <em class="icon icon-circle bg-warning-dim ni ni-curve-down-right"></em>
                                            </div>
                                            <div class="nk-notification-content">
                                                <div class="nk-notification-text">You have requested to <span>Widthdrawl</span>
                                                </div>
                                                <div class="nk-notification-time">2 hrs ago</div>
                                            </div>
                                        </div>
                                        <div class="nk-notification-item dropdown-inner">
                                            <div class="nk-notification-icon">
                                                <em class="icon icon-circle bg-success-dim ni ni-curve-down-left"></em>
                                            </div>
                                            <div class="nk-notification-content">
                                                <div class="nk-notification-text">Your
                                                    <span>Deposit Order</span> is placed
                                                </div>
                                                <div class="nk-notification-time">2 hrs ago</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="dropdown-foot center">
                                    <a href="#">View All</a>
                                </div>
                            </div>
                        </li>
                        <li class="d-lg-none">
                            <a href="#" class="toggle nk-quick-nav-icon mr-n1" data-target="sideNav">
                                <em class="icon ni ni-menu"></em>
                            </a>
                        </li>
                    </ul>
                </div>
            @endif
        </div>
    </div>
</div>
