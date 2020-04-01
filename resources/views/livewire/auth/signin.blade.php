<div class="nk-block nk-block-middle nk-auth-body">
    <div class="brand-logo pb-5">
        <a href="{{ route('home') }}" class="logo-link">
            <img class="logo-light logo-img logo-img-lg" src="{{ asset('assets/images/logo.png') }}" srcset="{{ asset('assets/images/logo2x.png') }} 2x" alt="logo">
            <img class="logo-dark logo-img logo-img-lg" src="{{ asset('assets/images/logo-dark.png') }}" srcset="{{ asset('assets/images/logo-dark2x.png') }} 2x" alt="logo-dark">
        </a>
    </div>
    <div class="nk-block-head">
        <div class="nk-block-head-content">
            <h5 class="nk-block-title">{{ __('Sign-In') }}</h5>
            <div class="nk-block-des">
                <p>{{ __('Access the panel using your email and passcode.') }}</p>
            </div>
        </div>
    </div>
    <form wire:submit.prevent="signin">
        <div class="form-group">
            <div class="form-label-group">
                <label class="form-label" for="id-email">{{ __('Email Address') }}</label>
                <a class="link link-primary link-sm" href="{{ route('support') }}">{{ __('Need Help?') }}</a>
            </div>
            <input type="text" class="form-control form-control-lg" id="id-email" name="email" wire:model="email" placeholder="{{ __('Enter your email address') }}">
            @error('email') <span class="error">{{ $message }}</span> @enderror
        </div>
        <div class="form-group">
            <div class="form-label-group">
                <label class="form-label" for="password">{{ __('Password') }}</label>
                <a class="link link-primary link-sm" href="{{ route('auth.forgot-password') }}">{{ __('Forgot Password?') }}</a>
            </div>
            <div class="form-control-wrap">
                <a href="#" class="form-icon form-icon-right passcode-switch" data-target="password">
                    <em class="passcode-icon icon-show icon ni ni-eye"></em>
                    <em class="passcode-icon icon-hide icon ni ni-eye-off"></em>
                </a>
                <input type="password" class="form-control form-control-lg" id="password" name="password" wire:model="password" placeholder="{{ __('Enter your password') }}">
                @error('password') <span class="error">{{ $message }}</span> @enderror
            </div>
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-lg btn-primary btn-block">{{ __('Sign in') }}</button>
        </div>
    </form>
    <div class="form-note-s2 pt-4"> {{ __('New on our platform?') }} <a href="{{ route('auth.signup') }}">{{ __('Create an account') }}</a>
    </div>
    <div class="text-center pt-4 pb-3">
        <h6 class="overline-title overline-title-sap"><span>{{ __('OR') }}</span></h6>
    </div>
    <ul class="nav justify-center gx-4">
        <li class="nav-item"><a class="nav-link" href="#">{{ __('Facebook') }}</a></li>
        <li class="nav-item"><a class="nav-link" href="#">{{ __('Google') }}</a></li>
    </ul>
    <div class="text-center mt-5">
        <span class="fw-500">{{ __('I don\'t have an account?') }} <a href="#">{{ __('Try 15 days free') }}</a></span>
    </div>
</div>
