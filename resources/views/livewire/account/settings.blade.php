<div>
    <div class="nk-block-head">
        <div class="nk-block-head-content">
            <div class="nk-block-head-sub"><span>Account Setting</span></div>
            <h2 class="nk-block-title fw-normal">My Profile</h2>
        </div>
    </div>
    <ul class="nk-nav nav nav-tabs">
        <li class="nav-item">
            <a class="nav-link" href="{{ route('account.settings', ['section' => 'personal']) }}">
                {{ __('Personal') }}
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ route('account.settings', ['section' => 'settings']) }}">
                {{ __('Settings') }}
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ route('account.settings', ['section' => 'notifications']) }}">
                {{ __('Notifications') }}
            </a>
        </li>
    </ul>
    @include('livewire.account.partials.settings-' . $section)
</div>
