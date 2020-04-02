@php
    /** @var \App\User $user */
    $user = auth()->user();
@endphp

<ul class="nk-menu">
    <li class="nk-menu-heading">
        <h6 class="overline-title">{{ __('Menu') }}</h6>
    </li>
    <li class="nk-menu-item">
        <a href="{{ route('home') }}" class="nk-menu-link">
            <span class="nk-menu-icon"><i class="icon ni ni-dashboard"></i></span>
            <span class="nk-menu-text">{{ __('Dashboard') }}</span>
        </a>
    </li>
    <li class="nk-menu-item">
        <a href="{{ route('profile', [$user->hid]) }}" class="nk-menu-link">
            <span class="nk-menu-icon"><i class="icon ni ni-user"></i></span>
            <span class="nk-menu-text">{{ __('Profile') }}</span>
        </a>
    </li>
    <li class="nk-menu-item">
        <a href="{{ route('account.settings') }}" class="nk-menu-link">
            <span class="nk-menu-icon"><i class="icon ni ni-account-setting"></i></span>
            <span class="nk-menu-text">{{ __('Settings') }}</span>
        </a>
    </li>
    <li class="nk-menu-item">
        <a href="{{ route('account.stars') }}" class="nk-menu-link">
            <span class="nk-menu-icon"><i class="icon ni ni-star"></i></span>
            <span class="nk-menu-text">{{ __('Stars') }}</span>
        </a>
    </li>
    <li class="nk-menu-item">
        <a href="{{ route('account.collections') }}" class="nk-menu-link">
            <span class="nk-menu-icon"><i class="icon ni ni-cc-new"></i></span>
            <span class="nk-menu-text">{{ __('Collections') }}</span>
        </a>
    </li>
</ul>
