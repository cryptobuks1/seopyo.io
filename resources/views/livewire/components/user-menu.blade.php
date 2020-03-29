<ul class="nk-menu">
    <li class="nk-menu-heading">
        <h6 class="overline-title">Menu</h6>
    </li>
    <li class="nk-menu-item">
        <a href="{{ route('home') }}" class="nk-menu-link">
            <span class="nk-menu-icon"><em class="icon ni ni-dashboard"></em></span>
            <span class="nk-menu-text">{{ __('Dashboard') }}</span>
        </a>
    </li>
    <li class="nk-menu-item">
        <a href="{{ route('profile', [auth()->user()->id]) }}" class="nk-menu-link">
            <span class="nk-menu-icon"><em class="icon ni ni-user"></em></span>
            <span class="nk-menu-text">{{ __('Profile') }}</span>
        </a>
    </li>
    <li class="nk-menu-item">
        <a href="{{ route('account.collections') }}" class="nk-menu-link">
            <span class="nk-menu-icon"><em class="icon ni ni-cc-new"></em></span>
            <span class="nk-menu-text">{{ __('Collections') }}</span>
        </a>
    </li>
    <li class="nk-menu-item">
        <a href="{{ route('account.stars') }}" class="nk-menu-link">
            <span class="nk-menu-icon"><em class="icon ni ni-star"></em></span>
            <span class="nk-menu-text">{{ __('Stars') }}</span>
        </a>
    </li>
    <li class="nk-menu-item">
        <a href="{{ route('account.settings') }}" class="nk-menu-link">
            <span class="nk-menu-icon"><em class="icon ni ni-setting"></em></span>
            <span class="nk-menu-text">{{ __('Settings') }}</span>
        </a>
    </li>
</ul>
